<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 29/8/20
 * Time: 6:34 PM
 */

class CountriesModel extends Database
{
    public function getCountries()
    {

        $countries = [];
        $conn = $this->connect();

        $stmt = $conn->prepare("SELECT * FROM countries");
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0) {
            while($row = $result->fetch_object()) {
                $countries[] = $row;
            }
        }

        $stmt->close();

        return $countries;

    }
}