<?php

class Connection
{
    public function getConnection()
    {
        return new PDO("mysql:host=localhost;dbname=quizapplicationdb2","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }    
}

?>