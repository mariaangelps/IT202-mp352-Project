
<?php
include ('header.php');
//TOTAL VALUE, LESS  OR EQUAL THAN 1000
$cotton_shoes = 127.99;
$rojos = 378.99;
$carnival= 150.99;
$retro = 289.99;
$todo_terreno=1000.00;
//TOTAL VALUE, GREATER THAN 1000
$runlovers = 1009.39;


?>


<html>
    <head>
        <title> Its our season! </title>
        <link rel="stylesheet" href="women.css"/>
        <h1> Please select one </h1>
    </head>
    <body>

        <main>
            <!--Figure 1-->
            <figure>
                <img src="images/2151005680.jpg" alt="Cotton Shoes"  >
                <figcaption><br>Cotton Shoes  </figcaption>
                <figcaption> <p>Value: <?php echo "$" . $cotton_shoes;?></p> </figcaption>
            </figure>


            
             <!--Figure 2-->
             <figure>
                <img src = "images/2151005684.jpg" alt = "Risky Flame">
                <figcaption> <br> Risky Flame  </figcaption>
                <figcaption><p> Value: <?php echo "$" . $rojos;?></p></figcaption>
            </figure>

            
            
             <!--Figure 3-->
            <figure>
                <img src = "images/2151005655.jpeg" alt = "Run Lovers">
                <figcaption> <br>Run Lovers  </figcaption>
                <figcaption><p> Value: <?php echo "$" . $runlovers;?></p></figcaption>
            </figure>
           


             <!--Figure 4-->
             <figure>
                <br>
                <img src = "images/Pasted Graphic.jpg.png" alt = "Todo Terreno">
                <figcaption> <br> Todo Terreno Collection </figcaption>
                <figcaption><p> Value: <?php echo "$" . $todo_terreno;?></p></figcaption>
            </figure>

            <!--Figure 5-->
            <figure>
                <br>
                <img src = "images/19600.jpg" alt = "Its Carnival">
                <figcaption> <br> Carnival Collection </figcaption>
                <figcaption><p> Value: <?php echo "$" . $carnival;?></p></figcaption>
            </figure>

            <!--Figure 6-->
            <figure>
                <br>
                <img src = "images/2151005728.jpg" alt = "Retro">
                <figcaption> <br> Run in retro </figcaption>
                <figcaption><p> Value: <?php echo "$" . $retro;?></p></figcaption>
            </figure>

            <!--Figure 7-->


            <!--Figure 8-->





        </main>
        <!--form 1-->
        <form action="shipping_form.php"<?php echo $cotton_shoes; ?> method="post" class="form1">
            <input type="hidden" name="total_value" value="<?php echo htmlspecialchars($cotton_shoes); ?>" >
            <input type="submit" value="Proceed to the shipping form">
        </form>

        <form action="shipping_form.php"<?php echo $rojos; ?> method="post" class="form2">
            <input type = "hidden" name="total_value" value = "<?php echo htmlspecialchars($rojos);?>" >
            <input type="submit" value="Proceed to the shipping form  ">
        </form>

        <form action="shipping_form.php"<?php echo $runlovers; ?> method="post" class="form3">
            <input type="hidden" name="total_value" value="<?php echo htmlspecialchars($runlovers); ?>" >
            <input type="submit" value="Proceed to the shipping form">
        </form>

        <form action="shipping_form.php"<?php echo $todo_terreno; ?> method="post" class="form4">
            <input type="hidden" name="total_value" value="<?php echo htmlspecialchars($todo_terreno); ?>" >
            <input type="submit" value="Proceed to the shipping form">
        </form>

        <form action="shipping_form.php"<?php echo $carnival; ?> method="post" class="form5">
            <input type="hidden" name="total_value" value="<?php echo htmlspecialchars($carnival); ?>" >
            <input type="submit" value= "Proceed to the shipping form "> 
        </form>

        <form action="shipping_form.php"<?php echo $carnival; ?> method="post" class="form5">
            <input type="hidden" name="total_value" value="<?php echo htmlspecialchars($retro); ?>" >
        
            <input type="submit" value= "Proceed to the shipping form "> 
        </form>


    </body>
<?php include ('footer.php');?>
</html>





    


