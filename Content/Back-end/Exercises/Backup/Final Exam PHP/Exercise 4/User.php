<?php

class User
{
    // properties
    private $nickname;
    private $email;
    private $password;
    private $admin = false;

    // constructor
    public function __construct($nickname, $email, $password)
    {
        $this->set_nickname($nickname);
        $this->set_email($email);
        $this->set_password($password);
    }

    public function set_nickname($newNickname)
    {
        if (strlen($newNickname) > 15 or strlen($newNickname) < 5) {
            $this->nickname = $newNickname;
        } else {
            echo 'Please insert a nickname between 5 and 15 characters.';
        }
    }


    // setters
    public function set_email($newEmail)
    {

        $email = filter_var($newEmail, FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo 'Please insert a valid email.';
        }
    }

    public function set_password($newPassword)
    {
        if (strlen($newPassword) > 16 or strlen($newPassword) < 8) {
            echo 'Please insert a password between 8 and 16 characters.';
        } else {
            $this->password = $newPassword;
        }
    }
    public function set_admin($status)
    {
        if ($status = true or $status = false) {
            $this->admin = $status;
        } else {
            echo 'Please insert only true or false for admin status.';
        }
    }


    //getters
    public function get_nickname()
    {
        return $this->nickname;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_admin_status()
    {
        return $this->admin;
    }

    //methods
    public function edit_password($currentPassword, $newPassword)
    {
        if ($currentPassword = $this->get_password()) {
            $this->set_password($newPassword);
        } else {
            echo 'Passwords did not match. Please try again.';
        }
    }

    public function display_user()
    {
        echo $this->get_nickname() . '<br>' . $this->get_email() . '<br>';
    }
}
