<?php
require_once '../config/db.php';
switch ($_GET['request']) {
    case 'noficationEmail':

        $response = array(
            'message'=>'Error occurred!',
            'status'=>0
        );

        $created_at = date('Y-m-d H:i:s');
if (
    empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    ) {
    $response['message']='Please enter valid email!';
} else {
    $email = filter_var(htmlentities($_POST['email']), FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
    $sql = "INSERT INTO notification_emails (email,created_at) VALUES (?,?)";
    $stmt= $conn->prepare($sql);
    $insertEmail = $stmt->execute([$email,$created_at]);
    if ($insertEmail) {
        $response['message']='Thank you for your support! We will notify you once we are live.';
        $response['status']=1;
    } else {
        $response['message']='An error occurred! Please try again.';
    }
}

echo json_encode($response);
    break;
    
    default:
        # code...
        break;
}
