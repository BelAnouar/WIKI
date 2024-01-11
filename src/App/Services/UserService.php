<?php

declare(strict_types=1);

namespace App\Services;

session_start();

use Framework\Database;

use Framework\Exceptions\validatorExceptions;

class UserService
{
    public function __construct(private Database $db)
    {
    }

    // public function isEmailTaken(string $email)
    // {
    //     $emailCount = $this->db->query(
    //         "SELECT COUNT(*) FROM user WHERE email = :email",
    //         [
    //             'email' => $email
    //         ]
    //     )->count();

    //     if ($emailCount > 0) {
    //         throw new validatorExceptions(['email' => ['Email taken']]);
    //     }
    // }

    public function create(array $formData)
    {
        $password = password_hash($formData['pass'], PASSWORD_BCRYPT, ['cost' => 12]);


        $this->db->query(
            "INSERT INTO user(username, email, password)
        VALUES(:username, :email, :password)",
            [
                'email' => $formData['email'],
                'password' => $password,
                'username' => $formData['userName'],

            ]
        );
    }

    public function AuthUser(array $formData)
    {
        $email = $formData["email"];
        $password = $formData["pass"];
        $query = "SELECT * FROM user WHERE email = :email";

        $user = $this->db->query($query, [
            'email' => $email
        ])->find();

        if (!$user || !password_verify($password, $user['password'] ?? '')) {
            throw new \Exception("Invalid email or password");
        }

        session_regenerate_id();
        $_SESSION['user'] = $user["userId"];

        return $user["role"];
    }
}
