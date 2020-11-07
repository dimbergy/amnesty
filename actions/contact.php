<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 30/8/20
 * Time: 1:34 AM
 */

include ('../classes/Database.class.php');
include ('../Models/ContactModel.class.php');
include ('../inc/home.php');


$response = [];


if (!isset($_POST['fname']) && !isset($_POST['lname']) && !isset($_POST['email']) && !isset($_POST['phone']) && !isset($_POST['country']) && !isset($_POST['message']) ) {

    $response['error'] = false;

} else {

    if (empty($_POST['fname'])) {
        $response['error']['fname'] = $page['validation']['required'];
    }

    if (empty($_POST['lname'])) {
        $response['error']['lname'] = $page['validation']['required'];
    }

    if (empty($_POST['email'])) {
        $response['error']['email'] = $page['validation']['required'];
    }

    if (empty($_POST['phone'])) {
        $response['error']['phone'] = $page['validation']['required'];
    }

    if (empty($_POST['country'])) {
        $response['error']['country'] = $page['validation']['required'];
    }

    if (empty($_POST['message'])) {
        $response['error']['message'] = $page['validation']['required'];
    }

    if (!array_key_exists('error', $response)) {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $response['error']['email'] = $page['validation']['invalid'];
        }

        if (!preg_match('/^\+?[0-9]{3}-?([0-9]{7}|[0-9]-[0-9]{2}-[0-9]{2}-[0-9]{2}|[0-9]{3}-[0-9]{2}-[0-9]-[0-9])$/', $_POST['phone'])) {
            $response['error']['phone'] = $page['validation']['invalid'];
        }
    }

    if (!array_key_exists('error', $response)) {

        $post_data = [

            'lname' => $_POST['lname'],
            'fname' => $_POST['fname'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'country' => $_POST['country'],
            'message' => $_POST['message']
        ];




//        $lname = stripslashes($_POST['lname']); // removes backslashes
//        $lname = mysqli_real_escape_string($conn,$lname); //escapes special characters in a string
//        $fname = stripslashes($_POST['fname']); // removes backslashes
//        $fname = mysqli_real_escape_string($conn,$fname); //escapes special characters in a string
//        $email = stripslashes($_POST['email']);
//        $email = mysqli_real_escape_string($conn,$email);
//        $phone = stripslashes($_POST['phone']);
//        $phone = mysqli_real_escape_string($conn,$phone);
//        $message = stripslashes($_POST['message']);
//        $message = mysqli_real_escape_string($conn,$message);
//        $country = $_POST['country'];
//
//
//        $email_check = "SELECT email FROM users WHERE email='$email'";
//        $res_emailcheck = mysqli_query($conn,$email_check);
//        if (mysqli_num_rows($res_emailcheck)>0) {
//
//            $users = $conn->query("SELECT id FROM users WHERE email='$email'");
//
//            if($users->num_rows > 0) {
//                while ($row = $users->fetch_assoc()) {
//
//
//                    $msg = "INSERT INTO messages (user_id, message, sent_at) VALUES (" . $row['id'] . ", '$message', now())";
//                    if ($conn->query($msg) === TRUE) {
//                        header("location: ../index.php?msg=" . urlencode("Your message has been recorded successfully! "));
//                    } else {
//                        header("location: ../index.php?msg=" . urlencode("Your message has not been recorded. PLease, try again. "));
//                    }
//
//                }} else { echo "0 results"; }
//
//
//        } else {
//
//
//            $ins = "INSERT INTO users (id, first_name, last_name, email, phone, country_id) VALUES (DEFAULT, '$fname', '$lname', '$email', '$phone', $country)";
//
//
//            if ($conn->query($ins) === TRUE) {
//
//
//                $users = $conn->query("SELECT id FROM users WHERE email='$email'");
//                if ($users->num_rows > 0) {
//                    while ($row = $users->fetch_assoc()) {
//
//                        $u=$row['id'];
//                        $msg = "INSERT INTO messages (user_id, message, sent_at) VALUES ($u, '$message', now())";
//
//                        if ($conn->query($msg) === TRUE) {
//                            header("location: ../index.php?msg=" . urlencode("Your message has been recorded successfully! "));
//                        } else {
//                            header("location: ../index.php?msg=" . urlencode("Your message has not been recorded. PLease, try again. "));
//                        }
//
//
//                    }
//                } else {
//                    echo "0 results";
//                }
//
//            } else {
//                header("location: ../index.php?msg=" . urlencode("Some problem occurred. PLease, try again. "));
//            }
//
//
//        }



    }


}

echo json_encode($response);
exit();