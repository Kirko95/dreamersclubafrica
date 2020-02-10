<?php
require_once '../config/db.php';
$response = array(
    'message' => 'Error!',
    'status' => 0
);
switch ($_GET['request']) {
    case 'quote':
        if (
            empty($_POST['email']) || !isset($_POST['email']) ||
            empty($_POST['name']) || !isset($_POST['name']) ||
            empty($_POST['kids_number']) || !isset($_POST['kids_number']) ||
            empty($_POST['phone']) || !isset($_POST['phone'])
        ) {
            $response['message'] = 'Please enter all required fields!';
        } else {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $kids_number = $_POST['kids_number'];
            $phone = $_POST['phone'];
            $created_at = date('Y-m-d H:i:s');
            $pdo->prepare("INSERT INTO quotes(`email`,`created_at`,`name`,`kids_number`,`phone`) VALUES (?,?,?,?,?)")->execute([
                $email, $created_at, $name, $kids_number, $phone
            ]);
            if ($pdo) :
                $response['message'] = 'Thanks for your interest. We will get in touch with you shortly.';
                $response['status'] = 1;
            else :
                $response['message'] = 'An error occurred' . mysqli_error($pdo);
                $response['status'] = 0;
            endif;
        }

        echo json_encode($response);
        break;

    case 'subscribe':
        if (empty($_POST['email']) || !isset($_POST['email'])) {
            $response['message'] = 'Please enter all required fields!';
        } else {
            $email = $_POST['email'];
            $created_at = date('Y-m-d H:i:s');
            $pdo->prepare("INSERT INTO subscriptions(`email`,`created_at`) VALUES (?,?)")->execute([
                $email, $created_at
            ]);
            if ($pdo) :
                $response['message'] = 'Thanks for Subscribing.';
                $response['status'] = 1;
            else :
                $response['message'] = 'An error occurred' . mysqli_error($pdo);
                $response['status'] = 0;
            endif;
        }

        echo json_encode($response);
        break;

    default:
        # code...
        break;
}
