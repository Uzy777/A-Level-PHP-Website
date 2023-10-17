<?php
// Include the header for this page
include('header.php');
?>

<?php
// If the database server has a request then output that
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //  Will require the register process file when the login section is being required for the system
    require('register-process.php');
}
?>

<!-- Giving an id to this section of the page so it can be styled -->
<section id="register">
    <!-- Giving this section a formation of a row and a margin of 0 -->
    <div class="row m-0">
        <!-- Making some offsets to improve the aesthetics of the page -->
        <div class="col-lg-4 offset-lg-2">
            <!-- Using a custom font that i had originally imported and aligning this section of text -->
            <div class="font-poppins text-center pb-5">
                <!-- Giving this specific part of text a class for styling and making the text dark -->
                <h1 class="login-title text-dark">Register</h1>
                <!-- For this section of text it has padding of 1 and a margin of 0 as well as the text being 50% black -->
                <p class="p-1 m-0 text-black-50">Register and enjoy</p>
                <!-- Using a custom font that i had originally imported and giving the text colour a 40% black the text is also a hyperlink to take the user to the customer login page -->
                <span class="font-poppins text-black-40">I already have <a href="login.php">Login</a></span>
            </div>
            <!-- This section of the div is used for styling and adding the custom image of a camera -->
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <!-- The location for the camera image has a class for styling -->
                        <img class="camera-icon" src="../assets/camera.svg" alt="camera">
                    </div>
                    <!-- The location of the image for the default profile and styling it a bit -->
                    <img src="../assets/profile/profile.jpeg" style="width:200px; height:200px"
                         class="img rounded-circle" alt="profile">
                    <small class="form-text text-black-50">Choose Image</small>
                    <!-- Giving a name and id to this part so it can be used to send the image to the database -->
                    <input type="file" form="reg-form" class="form-control-file" name="profileUpload"
                           id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                      <!-- The PHP tag allows for the data entered into the text box to be saved -->
                        <div class="col">
                            <input type="text"
                                   value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"
                                   name="firstName" id="firstName" class="form-control" placeholder="First Name">
                        </div>

                        <!-- The PHP tag allows for the data entered into the text box to be saved -->
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>"
                                   name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <!-- The PHP tag allows for the data entered into the text box to be saved -->
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"
                                   required name="email" id="email" class="form-control" placeholder="Email*">
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
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control"
                                   placeholder="Confirm Password*">
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>

                    <!-- A validation check to ensure that the user has selected the box before continuing -->
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-poppins text-black-50">I agree <a href="#">terms,
                                conditions, and policy</a>(*)</label>
                    </div>

                    <div class="submit-btn text-center my-5">
                      <!-- This button will continue the user and if everything is ok they will be registered to the system with details going to the database -->
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Continue</button>
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
