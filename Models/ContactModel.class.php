<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 29/8/20
 * Time: 6:15 PM
 */

class ContactModel extends Database
{
    public function getContacts()
    {

        $contacts = [];
        $conn = $this->connect();

        $stmt = $conn->prepare("SELECT * FROM countries");
//        $stmt->bind_param("i", $langID);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            while($row = $result->fetch_object()) {
                $contacts[] = $row;
            }
        }

        $stmt->close();

        return $contacts;
    }

    public function insertContacts($post_data) {

        $conn = $this->connect();

        $lname = stripslashes($post_data['lname']); // removes backslashes
        $lname = $conn->real_escape_string($lname);
        $fname = stripslashes($post_data['fname']); // removes backslashes
        $fname = $conn->real_escape_string($fname);
        $email = stripslashes($post_data['email']);
        $email = $conn->real_escape_string($email);
        $phone = stripslashes($post_data['phone']);
        $phone =$conn->real_escape_string($phone);
        $message = stripslashes($post_data['message']);
        $message = $conn->real_escape_string($message);
        $country = (int)$post_data['country'];


        $stmt = $conn->prepare("SELECT id FROM users WHERE email= ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            $row = $result->fetch_object();

            $stmt_message = $conn->prepare("INSERT INTO messages (user_id, message, sent_at) VALUES (?, ?, now())");
            $stmt_message->bind_param("is", $row->id, $message);
            $stmt_message->execute();
        } else {
            $stmt_user = $conn->prepare("INSERT INTO users (id, first_name, last_name, email, phone, country_id) VALUES (DEFAULT, ?, ?, ?, ?, ?)");
            $stmt_user->bind_param("ssssi", $fname, $lname, $email, $phone, $country);
            $stmt_user->execute();

            $user_id = $conn->insert_id;

            $stmt_message = $conn->prepare("INSERT INTO messages (user_id, message, sent_at) VALUES (?, ?, now())");
            $stmt_message->bind_param("is", $user_id, $message);
            $stmt_message->execute();

        }
    }
}