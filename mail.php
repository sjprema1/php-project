<?php 
if (isset($_POST['submit']))
{
    $to = "xxxxxxxx@gmail.com"; // Your email address
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Contact Form Submission";
    $headers = "From:" . $from;
    $result = mail($to, $subject, $message, $headers);

    if ($result)
    {
        echo '<script type="text/javascript">alert("Your message was sent!");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<style>
	body {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		line-height: 1.5;
	}
	.container {
		max-width:600px;
		width:100%;
		margin:0 auto;
	}
	form{
		width: 100%;
	}
	label{
		font-weight: bold;
		margin-bottom: 15px;
	}
	input, textarea {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		width:100%;
		border:2px solid #c1cdcd;
		background:#FFF;
		margin:0 0 5px;
		padding:10px;
	}
	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
	}
	button{
		cursor: pointer;
		width: 100%;
		border:none;
		background:rgb(3, 52, 212);
		color:#FFF;
		margin:0 0 5px;
		padding:10px;
		font-size:15px;
	}
</style>
</head>
<body>
<div class ="container">
    <h1> Contact </h1>
    <form>
        <fieldset>
        <label>Name</label>
        <input type ="text" id="name" name ="name" placeholder="enter name">
        </fieldset>
        <fieldset>
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email">
        </fieldset>
        <fieldset>
        <label>Message</label>
        <textarea name="message" placeholder="Enter your Message..."></textarea>
        </fieldset>
        <fieldset>
        <button type="submit" name="submit">Submit</button>
        </fieldset>
        </form>

    </form>
</div>

</body>
</html>