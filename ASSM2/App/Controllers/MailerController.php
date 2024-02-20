<?php

namespace App\Controllers;

use App\Helpers\Mail\Mailer;
use App\Core\Validation;
use App\Core\Sessions;
use App\Models\UserModel;
use App\Controllers\LoginController;
use App\Core\RenderBase;

class MailerController extends BaseController
{


    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }


    public function forgotPass()
    {
        if (isset($_POST['forgot'])) {
            $email_forgot = $_POST['email_forgot'];

            // Validation
            if (Validation::required($email_forgot)) {
                Sessions::addSession("email_forgot", "Vui lòng nhập email để thực hiện chức năng quên mật khẩu");
                return $this->redirect("/?url=LoginController/loadViewLogin");
            }
            $user = new UserModel();
            $result = $user->checkUserExist($email_forgot);
            if (!$result) {
                echo '<script>alert("Người dùng không tồn tại")</script>';
                header("Location: " . ROOT_URL . "/?url=LoginController/loadViewLogin");
            } else {
                $code = substr(rand(0, 999999), 0, 6);
                $title = "Quên mật khẩu";
                $content = "Mã xác nhận của bạn là: <span style='color: green'>" . $code . "</span>";

                $mail = new Mailer;
                $mail->sendMail($title, $content, $email_forgot);

                $_SESSION['mail'] = $email_forgot;
                $_SESSION['code'] = $code;
                header("Location: " . ROOT_URL . "/?url=LoginController/loadForgot");
            }

        }
    }

    public function confirmVerification(){

        if(isset($_POST['confirm'])){
            if($_POST['text'] != $_SESSION['code']){
                Sessions::addSession("text", "Mã xác nhận không hợp lệ !");
                return $this->redirect("/?url=LoginController/loadForgot");
            }else{
                header("Location: " . ROOT_URL . "/?url=LoginController/loadChangePass");
            }
        }

    }

    public function changePass(){
        if(isset($_POST['submit'])){
            if($_POST['repass'] != $_POST['newpass']){
                Sessions::addSession("fail", "Nhập lại mật khẩu không khớp !");
                return $this->redirect("/?url=LoginController/loadChangePass");
            }else{
                $newpass = $_POST['newpass'];
                $user = new UserModel;
                $hash_password = password_hash($newpass, PASSWORD_DEFAULT);
                $result = $user -> changePass(['password' => $hash_password], $_SESSION['mail']);
                if($result){
                    echo '<script>alert("Đổi mật khẩu thành công")</script>';
                    return $this->redirect("/?url=LoginController/loadViewLogin");
                }else{
                    echo 'Lỗi';
                }
            }
        }
    }
}