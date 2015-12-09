<?php
$page_title = 'sign_in';


if (isset($errors) && !empty($errors)){
    echo'<h1>Error!</h1>
    <p class="error">The following error(s) occurred:<br>';
    foreach ($errors as $msg) {
        echo " - $msg<br>\n";
    }
    echo '</p><p>Please try again.</p>';
}
//display the form
?>
<div class="wrap">
    <div class="content">	 	 
	<div class="mid-grid">
            <h1>Login</h1>
            <form action="sign_in.php" method="post">
                <p>Email Address: <input type="text" name="email" size="20" maxlength="60" /></p>
                <p>Password: <input type="password" name="User_Password" size="20" maxlentgh="20" /></p>
                <p><input class="button" type="submit" name="submit" value="login" /></p>
            </form>
        </div>
    </div>
</div>


