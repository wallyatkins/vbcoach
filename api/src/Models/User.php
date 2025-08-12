<?php

namespace App\Models;

class User
{
    public ?int $id;
    public string $name;
    public string $email;
    public string $role;
    public string $status;

    public function __construct(string $name, string $email, string $role, string $status = 'active', ?int $id = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->id = $id;
    }
}
