<?php 


$MemberName = $_POST('input_login_name','');
$password = $_POST('input_login_password','');

?>

<!DOCTYPE html>
<html>
    <HEAD>
    <title>login page</title>
    </HEAD>
    <BODY>
    <form action="login.php" method ="post" name="form_login" autocomplete="off">
    <input id="input_login_name" type="hidden" name="input_login_name" autocomplete="off" />
    <input id="input_login_password" type="hidden" name="input_login_password" autocomplete="off" />
    <table>
    <TR>
    <TD align="RIGHT"><FONT class="css_edit_label">User Login:&nbsp;&nbsp;</FONT></TD>
    <TD align="LEFT"><INPUT type="TEXT" name="show_login_name" id="show_login_name" size="50" value="<?php echo $MemberName;?>" autocomplete="off"readonly onfocus="this.removeAttribute('readonly');"></TD>
    </TR>
    <TR>
    <TD align="RIGHT"><FONT class="css_edit_label">Password:&nbsp;&nbsp;</FONT></TD>
    <TD align="LEFT"><INPUT type="PASSWORD" name="show_login_password" id="show_login_password" size="50" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"></TD>
    </TR>
    <TR>
    <TD align="RIGHT">&nbsp;&nbsp;</TD>
    <TD align="LEFT"><FONT size="2pt"><A href="forgot_password.php">I forgot my password</A></TD>
    </TR>
    <TR><TD colspan="2" align="center"><INPUT type="button" name="btn_sign_in" value="Sign In" onclick="javascript:submitformforlogin();"></TD></TR>
    <tr><td  colspan="2">
    </form>
</BODY onLoad=portalSetFocus()>

    <script>
        	function submitformforlogin(){
				//copy value from show username field to actual username field.
				document.getElementById("input_login_name").value = document.getElementById("show_login_name").value;
				//copy value from show password field to actual password field.
				document.getElementById("input_login_password").value = document.getElementById("show_login_password").value;
				//submit the form_login.
                                if(document.getElementById("show_login_password").value == '' ){
                                    //alert("Password should not be empty.")
                                    document.getElementById('errMsg').innerHTML = 'Your username or password is wrong';
                                    return false;
                                }
				document.form_login.submit();
			}
        </script>
</html>