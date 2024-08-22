<!DOCTYPE html>
<html>
    <head> <h1>Login</h1></head>
    <body>
<form action="" id="loginForm">
 
  <input type="text" id="username" class="form-control" placeholder="Enter your Username...">
  <input type="password" id="password" class="form-control" placeholder="Enter your Password...">
   <input type="submit" value ="submit">
 
</form>
<script>
let loginForm = document.getElementById("loginForm");
alert(loginForm);

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let username = document.getElementById("username");
  let password = document.getElementById("password");

  if (username.value == "" || password.value == "") {
    alert("Ensure you input a value in both fields!");
  } else {
    // perform operation with form input
    alert("This form has been successfully submitted!");
    console.log(
      "This form has a username of ${username.value} and password of ${password.value}"
    );

    username.value = "";
    password.value = "";
  }
});
</script>
</body>
</html>