<?php

require "Datebase.php";

class User extends Datebase{
    public function createUser($first_name, $last_name, $username, $password){
        $sql = "INSERT INTO users(first_name, last_name, username, password) VALUES('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            // go to login page
            header("location: ../views");
            exit;
        }else{
            die("Error creating user:".$this->conn->error);
        }

    }
    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
            $user_date = $result->fetch_assoc();
            //check password
            if(password_verify($password, $user_date['password'])){
                // login
                session_start();
                $_SESSION['user_id'] = $user_date['id'];
                $_SESSION['username'] = $user_date['username'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Incorrect password");
            }
        }else{
            die("User not found.");
        }
    }
    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving users".$this->conn->error);
        }
    }

    // get date of user
    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id=$id";

        if($result = $this->conn->query($sql)){
        return $result->fetch_assoc();
        }else{
            die("Error retrieving user:".$this->conn->error);
        }
    }
    // update user
    public function updateUser($id, $first_name, $last_name, $username){
        $sql = "UPDATE users SET first_name='$first_name',last_name='$last_name',username='$username' WHERE id=$id";
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error updating user:".$this->conn->error);
        }
    }
    
    public function uploadPhoto($file_name, $tmp_name){
        session_start();

        $sql = "UPDATE users SET photo='$file_name' WHERE id=".$_SESSION['user_id'];

        if($this->conn->query($sql)){
            $destination = "../images/$file_name";
            if(move_uploaded_file($tmp_name, $destination)){
                header("location: ../views/profile.php");
                exit;
            }else{
                die("Error moving file");
            }
        }else{
            die("Error updating photo:".$this->conn->error);
        }

    }

    // delete user
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id=$id";
        
        if($this->conn->query($sql)){
             header("location: ../views/dashboard.php");
             exit;
        }else{
            die("Error deleting user:".$this->conn->error);
        }
    }

    }


?>