<?php
include_once "helper.php";

$request_method = $_SERVER['REQUEST_METHOD'];
switch ($request_method) {

    case "POST":
        echo processPOST();
        break;

    case "GET":
        echo processGET();
        break;

    case "DELETE":
        echo processDELETE();
        break;

    case "PUT":
        echo processPUT();
        break;

    default:
        echo doError("Incorrect method used.");
}
//--- START ---


function doError(string $reason)
{
    return json_encode(array("status" => "fail", "message" => $reason));
}


function processPOST()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    switch ($data->reqCode) {
        case "auth":
            return authController($data);
            break;
        default:
            return doError("Request code not known.");
            break;
    }
}

function processGET()
{
    $data = (object) $_GET;

    switch ($data->reqCode) {

        default:
            return doError("Request code not known.");
            break;
    }
}

function processDELETE()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    switch ($data->reqCode) {

        default:
            return doError("Request code not known.");
            break;
    }
}

function processPUT()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    switch ($data->reqCode) {

        default:
            return doError("Request code not known.");
            break;
    }
}




function authController($data)
{
    switch ($data->reqType) {
        case "login":
            return login($data);
            break;
        case "signup":
            return signup($data);
            break;
        default:
            return doError("Request type not known.");
            break;
    }
}
