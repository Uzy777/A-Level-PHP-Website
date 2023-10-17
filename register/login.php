<?php
// Starts the session when on the customers login page
session_start();
// Include the header for this page
include('header.php');
// Include the helper for this page
include('helper.php');
?>

<?php
// Connect to the database of the system
$user = array();
require('mysqli_connect.php');

// If the userid is set get the information from the userid for this session
if (isset($_SESSION['userID'])) {
    $user = get_user_info($con, $_SESSION['userID']);
}
// If the database server has a request then output that
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //  Will require the login process file when the login section is being required for the system
    require('login-process.php');
}



?>



<!-- Giving an id to this section of the page so it can be styled -->
<section id="login-form">
    <!-- Giving this section a formation of a row and a margin of 0 -->
    <div class="row m-0">
      <!-- Making some offsets to improve the aesthetics of the page -->
        <div class="col-lg-4 offset-lg-2">
            <!-- Using a custom font that i had originally imported and aligning this section of text -->
            <div class="font-poppins text-center pb-5">
                <!-- Giving this specific part of text a class for styling and making the text dark -->
                <h1 class="login-title text-dark">Login</h1>
                <!-- For this section of text it has padding of 1 and a margin of 0 as well as the text being 50% black -->
                <p class="p-1 m-0 text-black-50">Login and enjoy additional features</p>
                <!-- Using a custom font that i had originally imported and giving the text colour a 40% black the text is also a hyperlink to take the user to the customer register page -->
                <span class="font-poppins text-black-40">Create a new <a href="register.php">account</a></span>
            </div>
            <!-- This section of the div is used for styling and adding the custom image of a camera -->
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : '../assets/profile/profile.jpeg' ?>"
                         style="width:200px; height:200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
              <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                    <!-- The PHP tag allows for the data entered into the text box to be saved -->
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control"
                                   placeholder="Email*">
                        </div>
                    </div>

                    <!-- The PHP tag allows for the data entered into the text box to be saved -->
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control"
                                   placeholder="Password*">
                        </div>
                    </div>

                    <!-- The PHP tag allows for the data entered into the text box to be saved -->
                    <div class="submit-btn text-center my-5">
                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
                        <!-- Some styling using the classes and bootstrap with a hyperlink so the user can go back to the home page of the system -->
                        <a class="btn btn-lg btn-primary btn-block" href="../index.php">Home</a>

                </form>
            </div>

        </div>
    </div>
</section>

<?php
// Include the customer register/login footer for this page
include('footer.php');
?>
