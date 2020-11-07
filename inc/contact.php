<?php
require('db_connect.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['send'])) {


    $lname = stripslashes($_POST['lname']); // removes backslashes
    $lname = mysqli_real_escape_string($conn,$lname); //escapes special characters in a string
    $fname = stripslashes($_POST['fname']); // removes backslashes
    $fname = mysqli_real_escape_string($conn,$fname); //escapes special characters in a string
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn,$email);
    $phone = stripslashes($_POST['phone']);
    $phone = mysqli_real_escape_string($conn,$phone);
    $message = stripslashes($_POST['message']);
    $message = mysqli_real_escape_string($conn,$message);
    $country = $_POST['country'];


    $email_check = "SELECT email FROM users WHERE email='$email'";
    $res_emailcheck = mysqli_query($conn,$email_check);
    if (mysqli_num_rows($res_emailcheck)>0) {

        $users = $conn->query("SELECT id FROM users WHERE email='$email'");

        if($users->num_rows > 0) {
                while ($row = $users->fetch_assoc()) {


                    $msg = "INSERT INTO messages (user_id, message, sent_at) VALUES (" . $row['id'] . ", '$message', now())";
                    if ($conn->query($msg) === TRUE) {
                        header("location: ../index.php?msg=" . urlencode("Your message has been recorded successfully! "));
                    } else {
                        header("location: ../index.php?msg=" . urlencode("Your message has not been recorded. PLease, try again. "));
                    }

                }} else { echo "0 results"; }


    } else {


      $ins = "INSERT INTO users (id, first_name, last_name, email, phone, country_id) VALUES (DEFAULT, '$fname', '$lname', '$email', '$phone', $country)";


        if ($conn->query($ins) === TRUE) {


                    $users = $conn->query("SELECT id FROM users WHERE email='$email'");
                     if ($users->num_rows > 0) {
                         while ($row = $users->fetch_assoc()) {

                                 $u=$row['id'];
                             $msg = "INSERT INTO messages (user_id, message, sent_at) VALUES ($u, '$message', now())";

                             if ($conn->query($msg) === TRUE) {
                                 header("location: ../index.php?msg=" . urlencode("Your message has been recorded successfully! "));
                             } else {
                                 header("location: ../index.php?msg=" . urlencode("Your message has not been recorded. PLease, try again. "));
                             }


                         }
                     } else {
                         echo "0 results";
                     }

                 } else {
                     header("location: ../index.php?msg=" . urlencode("Some problem occurred. PLease, try again. "));
                 }


    }


}
?>