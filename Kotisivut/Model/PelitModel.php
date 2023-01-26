<?php

/**
 * Description of PelitModel
 *
 * @author Sami
 */
require ("Entities/PeliEntity.php");
class PelitModel 
{
    function GetPeliTyyppi()
    {
        require 'Credentials.php';
        //Yhteyden avaaminen ja databasen (pelit) valitseminen
        $con = mysqli_connect($host, $user, $passwd) or die (mysqli_error($con));
        $sql = mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT DISTINCT type FROM pelit") or die (mysqli_error($con));
        $types = array();
        //Tiedon hakeminen databasesta
        while($row = mysqli_fetch_array($result))
        {
            array_push($types,$row[0]);
        }
        
        mysqli_close($con);
        return $types;
        
    }
    
    function GetPeliByType($type)
    {
        require 'Credentials.php';
        
        //Yhteyden avaaminen ja databasen (pelit) valitseminen
        $con = mysqli_connect($host, $user, $passwd) or die (mysqli_error);
        $sql = mysqli_select_db($con,$database);
        
        $query = "SELECT * FROM pelit WHERE type LIKE '$type'";
        $result = mysqli_query($con,$query) or die (mysqli_error($con));
        $peliArray = array();
        
        while($row = mysqli_fetch_array($result))
        {
            $name = $row[1];
            $type = $row[2];
            $image = $row[3];
            $review = $row[4];
            
            $peli = new PeliEntity(-1, $name, $type, $image, $review);
            array_push($peliArray, $peli);
            
            
        }
        mysqli_close($con);
        return $peliArray;
    }
}

?>