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
    $first_name = ucfirst(strtolower($data->first_name));
    $last_name = ucfirst(strtolower($data->last_name));
    $email = strtolower($data->email);
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

function getProduct($id)
{
    global $mysqli;
    $product = (object)[];
    $res = $mysqli->query("SELECT * FROM  `products` WHERE id = $id");
    if ($res->num_rows > 0) {
        $product = $res->fetch_assoc();
    }
    $mysqli->close();
    return json_encode($product);
}

function getTotalProducts()
{
    global $mysqli;
    $res = $mysqli->query("SELECT count(id) as totalCount FROM  `products`");
    // $mysqli->close();
    $totalCount = $res->fetch_assoc()["totalCount"];
    return $totalCount;
}

function getProducts($data)
{
    global $mysqli;
    $category = $data->category;
    $page = $data->page;
    $results_per_page = 10;
    $total_products = getTotalProducts();
    $number_of_page = ceil($total_products / $results_per_page);
    $page_first_result = ($page - 1) * $results_per_page;

    $products = [];
    $query = "SELECT * FROM  `products`";
    if (isset($category)) {
        $query .= " WHERE category = '$category'";
    }
    $query .= " LIMIT $page_first_result, $results_per_page";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
    $res = ["number_of_page" => $number_of_page, "products" => $products];
    $mysqli->close();
    return json_encode($res);
}

function getUserProducts($data)
{
    global $mysqli;
    $userID = $_SESSION['userID'];
    $products = [];
    $query = "SELECT * FROM  `products` WHERE sellerID = $userID";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
    $res = ["products" => $products];
    $mysqli->close();
    return json_encode($res);
}

function createProduct($data, $file)
{
    global $mysqli;
    $target_dir = "../uploads/";
    $target_file = $target_dir . time() . preg_replace("/\s+/", "", strtolower(basename($file["image"]["name"])));
    $res = ["status" => "fail", "message" => "There was an error during Product Creation. Kindly try again..."];
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $title = $data->title;
        $desc = $data->description;
        $status = "In Stock";
        $category = $data->category;
        $price = $data->price;
        $sellerID = $_SESSION["userID"];

        $query = "INSERT INTO `products`(title_en, title_pk, description_en, description_pk, image, status, category, price, sellerID) 
                    VALUES ('$title','$title', '$desc', '$desc', '$target_file', '$status', '$category', '$price', $sellerID)";

        if ($mysqli->query($query) === TRUE) {
            $res = ["status" => "success", "message" => "Registration Successful..."];
        }
        $mysqli->close();
    }

    return json_encode($res);
}

function editProduct($data)
{
    global $mysqli;
    $query = "UPDATE `products` SET `title_en` = '$data->title', `description_en` = '$data->description', `category` = '$data->category' WHERE id = $data->id";
    $res = ["status" => "fail", "message" => "Unable to update product. Kindly try again..."];
    if ($mysqli->query($query) === TRUE) {
        $res = ["status" => "success", "message" => "Product Update Successful..."];
    }
    $mysqli->close();
    return json_encode($res);
}

function deleteProduct($id)
{
    global $mysqli;
    $query = "DELETE FROM `products` WHERE id = $id";
    $res = ["status" => "fail", "message" => "Unable to delete product. Kindly try again..."];
    if ($mysqli->query($query) === TRUE) {
        $res = ["status" => "success", "message" => "Product Deleted Successful..."];
    }
    $mysqli->close();
    return json_encode($res);
}
