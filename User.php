<?php
include_once("config.php");
include_once('mysqlclass.php');

class User {
    public function signup($email,$fname,$lname,$phone,$password)
    {
        try{
            $mysql = new MySql();
            $import = "SELECT * FROM `user_details` WHERE `email` = '$email'";
            $response = $mysql->executeQuery($import);

            $rows = mysqli_num_rows($response);
            if ($rows == 1){
                return false;
                 }
            else{
                $import = "INSERT INTO `user_details`(`email`, `first_name`, `last_name`, `phone`) VALUE  ('$email', '$fname','$lname','$phone')";
                $response = $mysql->executeQuery($import);
                $import = "INSERT INTO `login_validations`(`email`,`type`,`validation_data`) VALUE ('$email', '1','$password') ";
                $response = $mysql->executeQuery($import);
                return true;
                }
        }catch(Exception $error){

            $mysql=new MySql();
            $mysql->write_Exception($error);
            return false;
        }
    }
    public function  login($email, $pass)
    {
        try{
            $mysql = new Mysql();
            $import = "SELECT `email` FROM `login_validations` WHERE `email`= '$email' AND `validation_data` = '$pass' AND `type`='1'" ;
            $response = $mysql->executeQuery($import);
            if($response)
                $rows = mysqli_num_rows($response);
            else
                return false;
            if ($rows == 1)
            {
                $import = "SELECT `first_name` FROM `user_details` WHERE `email` = '$email'";
                $response = $mysql->executeQuery($import);
                $row=mysqli_fetch_row($response);
                return $row[0];
            }
            else{
                return false;
            }

      }catch(Exception $error){

            $mysql=new MySql();
            $mysql->write_Exception($error);
            return false;
        }
    }
} 