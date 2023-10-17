<?php

// These pages are required once to be able to to have a fully functioning main page for this section of the system
require_once ("../stock/php/component.php");
require_once ("../stock/php/db.php");
require_once ("../stock/php/operation.php");

// Will create the database if it does not already exist
Createdb();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- The unicode for the system -->
    <meta charset="UTF-8">
    <!-- Scaling of the content produced by the system -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The title for the system -->
    <title>###</title>

    <!-- Implementing font awesome icons for some unique icons to be used for the system -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Implementing bootstrap for the admin/staff login -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- A custom css file that is called for the system -->
    <link rel="stylesheet" href="style.css">

</head>
<body class="">

  <!-- This is the main section for the navigation menu within this page of the system -->
  <nav class="navbar navbar-expand-md navbar-dark">
  <!-- A hyperlink to take the user to the main page of the system -->
  <a class="navbar-brand" href="/Epic-Systems/Epic-Systems-PHP/index.php">HOME</a>
  <!-- This button will allow for the page to display an icon that will drop down the navigation menu for the user useful for smaller display sizes as the page is reponsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <!-- The actual icon that is used -->
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Styling some of this section to make it look nicer for the user of the system -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="w-100 navbar-nav d-flex justify-content-end">
      <li class="nav-item text-right">
        <!-- A hyperlink to take the user to the logout page that will log them out of that page and directing them back to another page this section also uses styling to make it look better -->
        <a class="nav-link btn btn-danger text-white" href="../logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>

<main>
    <!-- This section is for the contents of the table within the system and its page -->
    <div class="container text-center">
        <!-- The name of the page is made large for the user to see it with a distict icon used next to the text -->
        <h1 class="py-4 text-light rounded"><i class="fas fa-desktop"></i> Epic Systems - Stock Management</h1>

        <!-- This section places the content within the page into the centre with the class that is used -->
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php
                    // Creates a text box for the user to input data into the section called ID however it has setID which is a variable that automatically adjusts it with the database and the user has only read rights over this box
                    inputElement("<i class='fas fa-portrait'></i>","ID", "item_id", setID()); ?>
                </div>
                <div class="pt-2">
                    <?php
                    // Creates a text box for the user to input data into the section of the page called Item Name
                    inputElement("<i class='fas fa-file-signature'></i>","Item Name", "item_name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php
                        // Creates a text box for the user to input data into the section of the page called Item Section
                        inputElement("<i class='fas fa-folder'></i>","Item Section", "item_section",""); ?>
                    </div>
                    <div class="col">
                        <?php
                        // Creates a text box for the user to input data into the section of the page called Price
                        inputElement("<i class='fas fa-pound-sign'></i>","Price", "item_price",""); ?>
                    </div>
                </div>
                <div class="pt-2">
                    <?php
                    // Creates a text box for the user to input data into the section of the page called Description
                    inputElement("<i class='fas fa-book'></i>","Description", "item_desc",""); ?>
                </div>
                <!--
                <div class="pt-2">
                    <?php //inputElement("<i class='fas fa-book'></i>","IMAGE", "item_image",""); ?>
                </div>
              -->

                <!-- This section is used for the actual buttons and giving them a role for what to perform within the page and the system using PHP -->
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php //deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- This section is specifically for the bootstrap table within the system and this page  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <!-- These are the table names for the contents of the database to be displayed within when being fetched for the database of the system -->
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Item Section</th>
                        <th>Item Price</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php

                   // This is implementation to only allow the user to read a section of the data and not edit it
                   if(isset($_POST['read'])){

                       // This variable will get the data from the database
                       $result = getData();

                       // If the process is successful then it will display the contents
                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <!-- This section is configured to placed data from the database in the correct formatation and format within this page and the system -->
                               <tr>
                                   <!-- From the individual unique item id it will display the item id of the product gathered from the database of the system -->
                                   <td data-id="<?php echo $row['item_id']; ?>"><?php echo $row['item_id']; ?></td>
                                   <!-- From the individual unique item id it will display the item name of the product gathered from the database of the system -->
                                   <td data-id="<?php echo $row['item_id']; ?>"><?php echo $row['item_name']; ?></td>
                                   <!-- From the individual unique item id it will display the item section of the product gathered from the database of the system -->
                                   <td data-id="<?php echo $row['item_id']; ?>"><?php echo $row['item_section']; ?></td>
                                   <!-- From the individual unique item id it will display the item price of the product gathered from the database of the system -->
                                   <td data-id="<?php echo $row['item_id']; ?>"><?php echo '£' . $row['item_price']; ?></td>
                                   <!-- From the individual unique item id it will display the item description of the product gathered from the database of the system -->
                                   <td data-id="<?php echo $row['item_id']; ?>"><?php echo $row['item_desc']; ?></td>
                                   <!-- This part is to only allow for the user to read and not view the contents of this text box within the page -->
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['item_id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>


    </div>
</main>

<!-- Scripts being called for the implementation of ajax and other sources to allow for the table and the construction of the page -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- A location to some custom javascript for some implementations for the system -->
<script src="./php/main.js"></script>
</body>
</html>
