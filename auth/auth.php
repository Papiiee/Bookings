<?php

require_once 'connect/database.php';

class Authentications
{

    private $conn;
    private $email_err;
    private $password_err;

    public function __construct()
    {
        $database = new Database();
        $database->connection();
        $this->conn = null;
        $this->email_err = $this->password_err = '';
    }

    public function runQuery($sql)
    {
        $statement = mysqli_prepare($this->conn, $sql);
        return $statement;
    }


    //function for the sign up of the users
    public function signup($fullname, $email, $password, $confirm, $role)
    {
        try {
            $statement = $this->runQuery("INSERT INTO users(full_name, email, password, confirm_password,roles_id)
                  VALUES('$fullname','$email','$password','$confirm','$role')");
            if (mysqli_stmt_execute($statement)) {
                return true;
            } else {
                return false;
            }
        } catch (mysqli_sql_exception $exception) {
            echo $exception->getMessage();
        }
    }

    //function for user sign in
    public function signin ($email, $password)
    {
        try {
            $statement = $this->runQuery("SELECT id, email, password, role_id FROM users WHERE email = '$email' AND deleted_at IS NULL OR deleted_at = ''");
            if (mysqli_stmt_execute($statement)) {
                mysqli_stmt_store_result($statement);
                if (mysqli_stmt_num_rows($statement) == 1) {
                    mysqli_stmt_bind_result($statement, $id, $email, $hashed_password, $role);
                    if (mysqli_stmt_fetch($statement)) {
                        // Password is correct, so start a new session
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                        // Store data in session variables
                            $_SESSION["signedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["roles_id"] = $role;
                            return true;
                        }

else {
    $this->password_err = "The password you entered was not valid.";
    return false;
}
}
} else {
    $this->email_err = "No account found with that email address.";
    return false;
}
}
} catch
(mysqli_sql_exception $exception) {
    echo $exception->getMessage();
}
    }

public function is_signed_in()
{
    if (isset($_SESSION["signedin"]) && $_SESSION["signedin"] === true) {
        return true;
    } else {
        return false;
    }
}
    public function redirect($path)
{
    header("Location: $path");
}
    public function signout()
{
    session_destroy();
    $_SESSION['signedin'] = false;
}



}


