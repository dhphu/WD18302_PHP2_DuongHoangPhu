<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Core\Sessions;
use App\Models\UserModel;
use App\Core\UserService;
use App\Core\Validation;


class LoginController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }


    public function loadViewLogin()
    {

        if (!empty($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }

        $this->load->render('layouts/clients/accounts/login');
    }


    public function handleLogin()
    {
        if (isset($_POST['submit'])) {

            $email = $_POST["email"];
            $password = $_POST['password'];

            // Validation
            if (Validation::required($email)) {
                Sessions::addSession("email", "Vui lòng nhập email");
                return $this->redirect("/?url=LoginController/loadViewLogin");
            }

            // Sử dụng hàm kiểm tra email
            if (!Validation::email($email)) {
                Sessions::addSession("email", "Email không đúng định dạng");
                return $this->redirect("/?url=LoginController/loadViewLogin");
            }

            if (Validation::required($password)) {
                Sessions::addSession("password", "Mật khẩu không được bỏ trống");
                return $this->redirect('/?url=LoginController/loadViewLogin');
            }
            

            $usermodel = new UserModel;
            $user = $usermodel->checkUserExist($email);

            if (!$user) {
                echo '<script>alert("Người dùng không tồn tại")</script>';
                $this->loadViewLogin();
            } else {
                // $password_hash = password_hash($user['password'], PASSWORD_DEFAULT);
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user'] = $user;
                    echo '<script>alert("Đăng nhập thành công")</script>';
                    header("Location: " . ROOT_URL . "/?url=AdminController/homePageAdmin");
                    exit();
                } else {
                    // Hiển thị form đăng nhập với thông báo lỗi
                    echo '<script>alert("Đăng nhập không thành công")</script>';
                    $this->loadViewLogin();
                }
            }

        }
    }



    public function logout()
    {
        unset($_SESSION['user']);
        header("Location: " . ROOT_URL . "/?url=LoginController/loadViewLogin");
    }


}