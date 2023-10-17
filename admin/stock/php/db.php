<?php

// Connecting the database for the product management section of the system
function Createdb(){
    // The server name for the database
    $servername = "localhost";
    // The user name for the database
    $username = "root";
    // The password for the database left blank because there is no password set up
    $password = "";
    // The name of the database that is being connected and used for this section of the product management
    $dbname = "EpicSystems";

    // A variable to ensure that the database has connected with the other appropriate variables such as the server name, user name, password and database name
    $con = mysqli_connect($servername, $username, $password);

    // If the database does not connect correctly then output some text to tell the user that the process has failed
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // The following database below is to be created if it does not already exist
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        // A variable to ensure that the database has connected with the other appropriate variables such as the server name, user name, password and database name
        $con = mysqli_connect($servername, $username, $password, $dbname);

        // Code to be able to create the database with each of the fields
        //$sql = "
                        //CREATE TABLE IF NOT EXISTS test(
                            //id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            //test_name VARCHAR (25) NOT NULL,
                            //test_publisher VARCHAR (20),
                            //test_price FLOAT
                        //);
        //";

        // If successful then return to the connection of the database variable otherwise it will show the user that it cannot create the table
        if(mysqli_query($con, $sql)){
            return $con;
            //echo "Database Created";
        }else{
            echo "Cannot Create table...!";
        }

    // If that is also not possible then it will show an error while creating database to the user
    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}
