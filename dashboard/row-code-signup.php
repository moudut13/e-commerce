<?php
    include_once "autoload.php";

if (isset($_POST['singup'])) {
    if (isset($_POST['check'])) {
        $check = $_POST['check'];
    }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $cell = $_POST['cell'];
    $gender = $_POST['gender'];
    $photo = $_FILES['photo'];
    print_r($_POST['singup']);


    /*
      * Call to function Start
      */
    $password = encrypted($pass);
    $photo_name = uniqneName($photo);
    $mail = emailCheck('users_info', $email);
    $user = userNameCheck('users_info', $username);
    $cellcheck =cellCheck('users_info',$cell);

    /*
      * Call to function End
      */

    /*
     * From Validation
     */
    if (empty($name) || empty($username) || empty($email) || empty($cell) || empty($gender) || empty($photo_name)) {
        $msg = validation("All Fields are Required");
    } /*
     * Email Validation
     */
    elseif (FILTER_VAR($email, FILTER_VALIDATE_EMAIL) == false) {
        $msg = validation("Invalid Your Email");
    } /*
     * User Name Check
     */
    elseif ($user > 0) {
        $msg = validation("User Name Already Exists");
    } /*
     * Email Check
     */
    elseif ($mail > 0) {
        $msg = validation("Email Already Exists");
    }/*
     * cell Check
     */
    elseif ($cellcheck > 0) {
        $msg = validation("Number Already Exists");
    }
    else {
        if (empty($check)) {
            $msg = validation("Agree the terms and policy");
        } else {
            if (strlen($pass) > 5) {
                $sql = "INSERT INTO users_info (name,username,email,phone,password,gender,image) VALUES ('$name','$username','$email','$cell','$password','$gender','$photo_name')";
                insertData($sql);
                $msg = validation("Data Stable", "success");
            } else {
                $msg = validation("Password must be at least 6 characters long");
            }
        }
    }
}
