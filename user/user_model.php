<?php

require_once("../dbconnection/dbconnection.php");

class User {
    
public function add_user()
{
    $user["pin"] = $_POST["pin"];        
    $user["password"] = $_POST["password"];        
    $user["full_name"] = $_POST["full_name"];        
    $user["email"] = $_POST["email"];        
    $user["role"] = "user";        

    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $insertQuery = "INSERT INTO `users` ";
        $insertQuery .= "(`pin`,`password`,`full_name`,`email`,`role`) ";
        $insertQuery .= " VALUES ";
        $insertQuery .= "(:pin,:password,:full_name,:email,:role);";
        
        $preparedQuery = $dbconn->prepare($insertQuery);
        $result = $preparedQuery->execute($user);
        
        if ($result == 1)
        {
            echo "<script>alert('User has been added successfully.');</script>";
        }
        
        $dbconn = NULL;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
public function update_user()
{
    $mcq["password"] = $_POST["password"];        
    $mcq["full_name"] = $_POST["full_name"];        
    $mcq["email"] = $_POST["email"];        
    $mcq["role"] = $_POST["role"];        
    $mcq["pin"] = $_POST["pin"];
    

    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $updateQuery = "UPDATE `users` SET ";
        $updateQuery .= " `password` = :password , `full_name`= :full_name,`email` = :email, `role` = :role ";
        $updateQuery .= " WHERE `pin` = :pin ; ";
        
        $preparedQuery = $dbconn->prepare($updateQuery);
        $result = $preparedQuery->execute($mcq);
        
        if ($result == 1)
        {
            header("location: view_users.php");
            exit;
        }
        
        $dbconn = NULL;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
public function get_users()
{
    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT * FROM `users`;";
        
        $users = NULL;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $user)
        {
            $users[] = $user;
        }
        return $users;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
public function get_user($pin)
{
    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT * FROM `users` WHERE `pin`= '{$pin}' LIMIT 1;";
        
        $user = NULL;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $userr)
        {
            $user = $userr;
        }
        return $user;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
public function delete_user()
{
    $user["pin"] = $_GET["pin"];
    
    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $deleteQuery = "DELETE FROM `users` WHERE `pin` = :pin ; ";
        
        $preparedQuery = $dbconn->prepare($deleteQuery);
        $result = $preparedQuery->execute($user);
        
        if ($result == 1)
        {
            echo "<script>alert('User has been deleted successfully.');</script>";
        }
        
        $dbconn = NULL;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
    
} //end User class

?>