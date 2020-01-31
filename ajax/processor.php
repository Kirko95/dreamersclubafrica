<?php
require_once '../config/db.php';
$response = array(
    'message' => 'Error!',
    'status' => 0
);
switch ($_GET['request']) {
    case 'quote':

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
            $response['message'] = 'Thank for Subscribing!';
            $response['status'] = 1;
        }

        echo json_encode($response);
        break;

    default:
        # code...
        break;
}
