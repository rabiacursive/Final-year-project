<?php
include_once "db_config.php";

function getUsers()
{
    global $mysqli;
    $users = [];
    $res = $mysqli->query("SELECT * FROM  `users`");
    if ($res->num_rows > 0) {
        $users = $res->fetch_all(MYSQLI_ASSOC);
    }
    $mysqli->close();
    return json_encode($users);
}

function getUser($id)
{
    global $mysqli;
    $user = (object)[];
    $res = $mysqli->query("SELECT * FROM  `users` WHERE id = $id");
    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
    }
    $mysqli->close();
    return json_encode($user);
}

function login($data)
{
    global $mysqli;

    $password = md5($data->password);
    $email = $data->email;

    $res = (object)["status" => "fail", "message" => "Login Failed. User not found..."];
    $result = $mysqli->query("SELECT * FROM  `users` WHERE email = '$email' AND password = '$password'");

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();
        unset($user["password"]);
        $res->status = "success";
        $res->message = "Login Successful...";
        $res->user = $user;
        $_SESSION["userID"] = $user["id"];
    }
    $mysqli->close();
    return json_encode($res);
}

function signup($data)
{
    global $mysqli;
    $first_name = $data->first_name;
    $last_name = $data->last_name;
    $email = $data->email;
    $phone = $data->phone;
    $password = md5($data->password);

    $query = "INSERT INTO `users`(first_name, last_name, email, phone, password) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password')";

    $res = ["status" => "fail", "message" => "There was an error during your registration. Kindly try again..."];
    if ($mysqli->query($query) === TRUE) {
        $res = ["status" => "success", "message" => "Registration Successful..."];
    }
    $mysqli->close();
    return json_encode($res);
}
