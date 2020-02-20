<?php

require ("Objects/CarObject.php");

class CarModel {
    
    //Get all car types from the database and return them in an array.
    function GetCarTypes() {
        require 'Credentials.php';

        //Open connection and Select database.   
        $con=mysqli_connect($host,$user,$passwd,$database) or die(mysqli_error($con));
        
        $result = mysqli_query($con,"SELECT DISTINCT tip FROM cars") or die(mysqli_error($con));
        $tip = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($tip, $row[0]);
        }

        //Close connection and return result.
        mysqli_close($con);
        return $tip;
    }

    //Get car objects from the database and return them in an array.
    function GetCarsByType($tip) {
        require 'Credentials.php';   
        $con=mysqli_connect($host,$user,$passwd,$database) or die(mysqli_error($con));
        $query = "SELECT * FROM cars WHERE tip LIKE '$tip'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $carArray = array();
        while ($row = mysqli_fetch_array($result)) {
            $tip = $row[1];
            $producator = $row[2];
            $anulfabricatiei = $row[3];
            $kilometraj = $row[4];
            $pret = $row[5];
            $combustibil = $row[6];
            $capacitatemotor = $row[7];
            $taraorigine = $row[8];
            $localitate = $row[9];
            $usern = $row[10];
            $imagine = $row[11];
            $review = $row[12];

            //Create car objects and store them in an array.
            $cars = new CarObject(-1, $tip, $producator, $anulfabricatiei, $kilometraj, $pret, $combustibil, $capacitatemotor, $taraorigine, $localitate, $usern, $imagine, $review);
            array_push($carArray, $cars);
        }
        mysqli_close($con);
        return $carArray;
    }

}
