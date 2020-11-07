<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 29/8/20
 * Time: 6:23 PM
 */

class ContactController
{

    public static function Connection() {

        $conn = new BaseModel();

        return $conn->getConnection();
    }

    public static function Contacts()
    {

        $contacts = new ContactModel();

        return $contacts->getContacts();
    }

}