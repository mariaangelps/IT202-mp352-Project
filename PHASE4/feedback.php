<?php
/*Maria Angel Palacios
    03/21/2024
    IT202-006 -> Phase 3 Project 
    mp352@njit.edu 
*/

if (!isset($improvements)) {
    $improvements = '';
}
?>

<html>
<head>
    <title> Thank you for your feedback </title>
    <?php include('menu.php');?>
</head>
    
<body>
    <div class="container">
        <form>
            <label>What do you want us to improve?</label>
            <input type="text" name="improvements" class="input-field" value="<?php echo htmlspecialchars($improvements); ?>">
            <br>
            <label> How satisfied are you with us: </label>   
            <select id="satisfaction" name="rating">
                <option value= "N/A" >Select One</option>
                <option value="1" > Very Satisfied</option>
                <option value="2">Satisfied</option>
                <option value="3"> Barely Satisfied</option>
                <option value="4">Not satisfied</option>
                <option value="5">Did not like</option>
            </select>
            <input type="submit" value="Send" >
        </form>
    </div>
    <h5>Thank you!</h5>
</body>

<style>
    body {
        background-image: url('imagesPh1/chat-bubbles-speech-bubble-icon-website-ui-pink-background-3d-rendering-illustration.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100vh;
        margin: 0;
        display: flex;
   
        align-items: center;
        flex-direction: column; 
    }
    
    .container {
        background-color: rgba(255, 255, 255, 0.8); 
        padding: 40px;
        border-radius: 10px; 
    }

   

    h5 {
        margin-top: 20px; 
        text-align: center; 
    }
</style>

<?php include('footer.php');?>
</html>
