# Backend Developer Standards

This document outlines the key coding standards and best practices to be followed for all backend development in the `api/` directory.

## 1. Avoid Hardcoded String Literals for Core Business Logic

To ensure maintainability, prevent typos, and maintain a single source of truth, developers and AI agents MUST avoid using hardcoded string literals for values that represent core business concepts, such as user roles or statuses.

### User Roles

**Rule**: All user roles MUST be defined as string-backed Enum cases in `api/src/Config/UserRole.php`.

**Example:**
```php
// api/src/Config/UserRole.php
namespace App\Config;

enum UserRole: string
{
    case COACH = 'Coach';
    case ASSISTANT_COACH = 'Assistant Coach';
    case PLAYER = 'Player';
    case PARENT = 'Parent';
}
```

**Correct Usage (in a controller or service):**
```php
use App\Config\UserRole;

// ...
if ($user->getRole() !== UserRole::COACH->value) {
  // Handle unauthorized access
}
```

**Incorrect Usage:**
```php
// DO NOT DO THIS
if ($user->getRole() !== 'Coach') {
  // ...
}
```
