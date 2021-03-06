<!DOCTYPE html>
<html>
<head>
<title>Now you can Login </title>
<link rel = "stylesheet" type ="text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/
bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"

 crossorigin="anonymous">
<link rel ="stylesheet" type = "text/css" href="css/styles.css">
</head>
<body> 
<div class ="container h-100">
<div class ="d-flex justify-content-center h-100">
<div class= "user_card">
<div class ="d-flex justify-content-center"> 
<div class = "brand_logo_container">
<img src = "img/logo1.png" class = "brand_logo" alt="cotocus logo">
</div>
</div>
<div class = "d-flex justify-content-center form_container">
<form>
<div class = "input-group mb-3">
<div class= "input-group-append">
<span class= "input-group-text"> <i class= "fas fa-user"></i></span>
</div>
<input type="text" name="username" id="username" class ="form-control input_user" required>
</div>
<div class = "input-group mb-2">
<div class="input-group-append">
<span class="input-group-text"> <i class= "fas fa-key"></i></span>
</div>
<input type="password" name="password" id="password" class ="form-control input_pass" required>
</div>
<div class = "form-group ">
<div class="custom-control custom-checkbox">
<input type = "checkbox" name ="rememberme" class ="custom-control-input" id="customControlInline">
<label class= "custom-control-label" for = "customControlInline">Remember me</label>
</div>
</div>
</form>
</div>
<div class ="d-flex justify-content-center mt-3 login-container">
<button type ="button" name ="button" id="login" class= "btn login_btn">Login</button>
</div>
<div class ="mt-4">
<div class ="d-flex justify-content-center links">
Don't have an account?<a href="registration.php" class = "ml-2">Sign Up</a>
</div>
<div class="d-flex justify-content-center" >
<a href ="#"> Forget Your Password?</a>
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
        crossorigin="anonymous">
</script>
  <script type = "text/javascript" src=  "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
  </script>
</body>
</html>