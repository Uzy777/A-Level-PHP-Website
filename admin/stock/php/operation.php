<?php

// These pages are required once to be able to to have a fully functioning main page for this section of the system
require_once ("db.php");
require_once ("component.php");

// A variable to create the database if it does not already exist
$con = Createdb();

// Used to be able to have the purpose of creating when the button is click from the page the variable is called on
if(isset($_POST['create'])){
    createData();
}

// Used to be able to have the purpose of updating when the button is click from the page the variable is called on
if(isset($_POST['update'])){
    UpdateData();
}

// Used to be able to have the purpose of deleting when the button is click from the page the variable is called on
if(isset($_POST['delete'])){
    deleteRecord();
}

//if(isset($_POST['deleteall'])){
    //deleteAll();

//}

function createData(){
    // Variables for each of the section within the database so they can easily be called when working on the page
    $itemname = textboxValue("item_name");
    $itemsection = textboxValue("item_section");
    $itemprice = textboxValue("item_price");
    $itemdescription = textboxValue("item_desc");

    if($itemname && $itemsection && $itemprice && $itemdescription){

      // An SQL command to perform the action of inerting into the product table within the database the item name, item section, item price and the item desc with the values of the variables
        $sql = "INSERT INTO product (item_name, item_section, item_price, item_desc)
                        VALUES ('$itemname','$itemsection','$itemprice','$itemdescription')";

        // If it is successfully then it will connect and give an output to tell the user that the record was successfully inserted into the database
        if(mysqli_query($GLOBALS['con'], $sql)){
          TextNode("success", "Record Successfully Inserted...!");

            //echo "Record Successfully Inserted...!";
        // Otherwise it will display an error message for the user if it was not completed correctly
        }else{
            echo "Error";
        }

    // Otherwise it will display an error message that you need to provide data into the text box to tell the user that there is nothing inputed for the database to work with
    }else{
        TextNode("error", "Provide data in the textbox");
            //echo "Provide Data in the Textbox";
    }
}

// This has the function of adding the values into the database when the user adjusts and add data from the frontend of the page of the system
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

// This is the function and variable to adjust how the page will display the contents of the messages when the user works on the page
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// Will gather all of the data from the product table within the database
function getData(){
    $sql = "SELECT * FROM product";

    // If it was ok then it will connect and display the contents for the user and the database
    $result = mysqli_query($GLOBALS['con'], $sql);

    // The number of rows that should be used with the process
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// This section is used to be able to update the data from what the user has entrered on the page and sync it with the database
function UpdateData(){
    $itemid = textboxValue("item_id");
    $itemname = textboxValue("item_name");
    $itemsection = textboxValue("item_section");
    $itemprice = textboxValue("item_price");
    $itemdescription = textboxValue("item_desc");

    // If the contents exist then change it based on the position it is allocated on the edit and within the database of the system
    if($itemname && $itemsection && $itemprice && $itemdescription){
        $sql = "
                    UPDATE product SET item_name= '$itemname', item_section = '$itemsection', item_price = '$itemprice', item_desc = '$itemdescription' WHERE item_id='$itemid';
        ";

        // Will connect to the database
        if(mysqli_query($GLOBALS['con'], $sql)){
            // If successful then it will display a message that it was a success to the user of the page
            TextNode("success", "Data Successfully Updated");
        // Else it will display a error message that it was a error
        }else{
          TextNode("error", mysqli_error($GLOBALS['con']));
        }

    // Else it will display a error message that it was a error and the user will need to select data using the edit icon within the page of the system
    }else{
        TextNode("error", "Select Data Using Edit Icon");
   }



}


// This section is used to be able to delete a record from the database and its system
function deleteRecord(){
    $itemid = (int)textboxValue("item_id");

    // This SQL command will delete from the product table within the database where the item id is equal to the item id variable which is the contents of the data
    $sql = "DELETE FROM product WHERE item_id=$itemid";

    // If it connects to the database
    if(mysqli_query($GLOBALS['con'], $sql)){
        // Will display a success message to the user telling them that the record was deleted successfully
        TextNode("success","Record Deleted Successfully...!");
    // Else it will display an error message telling the user that it was unable to delete the record form the database of the system
    }else{
        TextNode("error","Unable to Delete Record...!");
    }

}

// Set id to the textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['item_id'];
        }
    }
    return ($id + 1);
}
