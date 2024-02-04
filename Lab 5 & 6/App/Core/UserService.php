<?php

namespace App\Core;

use App\Models\UserModel;

class UserService
{

    public function Login($email, $password)
    {
        $usermodel = new UserModel;
        $user = $usermodel->checkUserExist($email);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if (!$user || !password_verify($password, $hashed_password)) {
            return [
                'success' => false,
                'message' => 'Email hoặc mật khẩu không đúng'
            ];
        }

        if (strlen($password) < 8) {
            return [
                "success" => false,
                "message" => "Mật khẩu phải chứa ít nhất 8 ký tự"
            ];
        }

        $_SESSION['user'] = $user;

        return ['success' => true];
    }
}