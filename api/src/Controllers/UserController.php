<?php

namespace App\Controllers;

use App\Config\Database;
use PDO;
use App\Config\UserRole;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class UserController
{
    private function isCoach(Request $request): bool
    {
        // Placeholder for authorization - this should be replaced with real auth
        // For now, we'll simulate getting the role from a request attribute.
        $userRole = $request->getAttribute('user_role');
        return $userRole === UserRole::COACH->value;
    }

    public function createUser(Request $request, Response $response, array $args): Response
    {
        if (!$this->isCoach($request)) {
            $response->getBody()->write(json_encode(['error' => 'Unauthorized']));
            return $response->withStatus(403)->withHeader('Content-Type', 'application/json');
        }

        $data = $request->getParsedBody();
        $name = $data['name'] ?? null;
        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;
        $role = $data['role'] ?? null;

        if (empty($name) || empty($email) || empty($password) || empty($role)) {
            $response->getBody()->write(json_encode(['error' => 'Missing required fields']));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)";

        try {
            $db = Database::getInstance();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':role', $role);
            $stmt->execute();

            $response->getBody()->write(json_encode(['message' => 'User created successfully', 'userId' => $db->lastInsertId()]));
            return $response->withStatus(201)->withHeader('Content-Type', 'application/json');
        } catch (\PDOException $e) {
            // Check for unique constraint violation
            if ($e->getCode() == 23000 || str_contains($e->getMessage(), 'UNIQUE constraint failed')) {
                $response->getBody()->write(json_encode(['error' => 'Email already exists']));
                return $response->withStatus(409)->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }

    public function getUser(Request $request, Response $response, array $args): Response
    {
        $id = $args['id'];
        $sql = "SELECT id, name, email, role, status FROM users WHERE id = :id";

        try {
            $db = Database::getInstance();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $response->getBody()->write(json_encode($user));
                return $response->withHeader('Content-Type', 'application/json');
            } else {
                $response->getBody()->write(json_encode(['error' => 'User not found']));
                return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
            }
        } catch (\PDOException $e) {
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }

    public function updateUser(Request $request, Response $response, array $args): Response
    {
        if (!$this->isCoach($request)) {
            $response->getBody()->write(json_encode(['error' => 'Unauthorized']));
            return $response->withStatus(403)->withHeader('Content-Type', 'application/json');
        }

        $id = $args['id'];
        $data = $request->getParsedBody();
        
        $fields = [];
        if (isset($data['name'])) {
            $fields['name'] = $data['name'];
        }
        if (isset($data['email'])) {
            $fields['email'] = $data['email'];
        }

        if (empty($fields)) {
            $response->getBody()->write(json_encode(['error' => 'No fields to update']));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $setClauses = [];
        foreach ($fields as $key => $value) {
            $setClauses[] = "$key = :$key";
        }
        $sql = "UPDATE users SET " . implode(', ', $setClauses) . " WHERE id = :id";

        try {
            $db = Database::getInstance();
            $stmt = $db->prepare($sql);
            
            foreach ($fields as $key => &$value) {
                $stmt->bindParam(":$key", $value);
            }
            $stmt->bindParam(':id', $id);
            
            $stmt->execute();

            $response->getBody()->write(json_encode(['message' => 'User updated successfully']));
            return $response->withHeader('Content-Type', 'application/json');
        } catch (\PDOException $e) {
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }

    public function toggleUserStatus(Request $request, Response $response, array $args): Response
    {
        if (!$this->isCoach($request)) {
            $response->getBody()->write(json_encode(['error' => 'Unauthorized']));
            return $response->withStatus(403)->withHeader('Content-Type', 'application/json');
        }

        $id = $args['id'];
        $data = $request->getParsedBody();
        $status = $data['status'] ?? null;

        if (!in_array($status, ['active', 'disabled'])) {
            $response->getBody()->write(json_encode(['error' => 'Invalid status']));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $sql = "UPDATE users SET status = :status WHERE id = :id";

        try {
            $db = Database::getInstance();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $response->getBody()->write(json_encode(['message' => "User status set to $status"]));
            return $response->withHeader('Content-Type', 'application/json');
        } catch (\PDOException $e) {
            $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }
}