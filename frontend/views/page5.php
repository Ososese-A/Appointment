<?php include 'nav.php'?>

<div class="central1">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
       <div class="pep3">
        <h1><span class="the-a">S</span>ign Up</h1><br><br>
       <br> <p>A sign up confirmation message was sent to the email address you set. <br> Please confirm the message to complete your sign up process.</p>
       <input type="submit" value="OK" class="next" name="fin">
       </div>
    </div>
       </form>
<?php include 'toes.php'; ?>