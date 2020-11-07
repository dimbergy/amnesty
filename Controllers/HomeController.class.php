<?php
/**
 * Created by PhpStorm.
 * User: dimitriosvergados
 * Date: 29/8/20
 * Time: 6:32 PM
 */

class HomeController
{
    public static function Countries()
    {
        $countries = new CountriesModel();

        return $countries->getCountries();
    }

}