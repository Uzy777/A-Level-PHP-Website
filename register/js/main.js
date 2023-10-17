$(document).ready(function (e){

// For the profile image of the customer register/login section allows them to upload a file of any type
  let $uploadfile = $('#register .upload-profile-image input[type="file"]');

  $uploadfile.change(function (){
    readURL(this);
  });

// Validation check that ensures that both  of the passwords match within the customer register/login section of the system
  $("#reg-form").submit(function (event){
    let $password = $("#password");
    let $confirm = $("#confirm_pwd");
    let $error = $("#confirm_error");
    if($password.val() === $confirm.val()){
      return true;
    }else{
      $error.text("Password not Match");
      event.preventDefault();
    }
  });
});


// For the profile image of the customer register/login section allows them to upload a file of any type
function readURL(input){
  if(input.files && input.files[0]){
    let reader = new FileReader();
    reader.onload = function (e){
      $("#register .upload-profile-image .img").attr('src', e.target.result);
      $("#register .upload-profile-image .camera-icon").css({display: "none"});
    }

    reader.readAsDataURL(input.files[0]);
  }
}
