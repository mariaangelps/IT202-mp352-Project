<?php 
    include('header.php');
    // Check if the login message is set, otherwise set a default value 
    if (!isset($login_error)) {
        $login_error = "You must login to view this page";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In credentials</title>
    </head>
    <body>
        <h4> Este mensaje debe aparecer para la pagina de shipping, create and delete</h4>
        <main>
            <h3>Log in</h3>
            <!-- Form to submit login credentials -->
            <form action="authenticate.php" method="post">
                <label>Email</label>
                <input type="text" name="emailAddress" value="">
                <br>
                <label>Password</label>
                <input type="password" name="password" value="">
                <br>
                <label> First Name </label>
                <input type="text" name="firstName" value="">
                <br>
                <label> Last Name </label>
                <input type="text" name="lastName" value="">
                <br>
                <label> 
                <input type="submit" value="Login" />
            </form>

        
            <p><?php echo $login_error;?></p>
        </main>
    </body>
</html>
