<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 30/8/20
 * Time: 8:36 AM
 */

class BaseModel extends Database
{
    public function getConnection()
    {
        $conn = $this->connect();

        return $conn;
    }
}