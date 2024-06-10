<?php include 'nav.php'?>

<div class="central2">
    <div class="pep6">
            <h2><span class="the-a">A</span>re you sure you want to cancel your Appointment?</h2>
        <br>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <input  type="submit" value="Yes" class="yes" name="cancel">
        <input  type="submit" value="No" class="no" name="nocancel">
        </form>
    </div>
    </div>

<?php include 'toes.php'; ?>