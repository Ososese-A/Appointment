<?php include 'database.php'; ?>

<?php
if (isset($_SESSION['logged'])) {
    //nothing
} else {
    if($_SERVER['REQUEST_URI'] == '/frontend/views/page8.php') {
        header('Location: \..\frontend\views\page6.php');
    }
}
?>

<?php 

if (isset($_POST['cancelappt'])) {
    header('Location: \..\frontend\views\page11.php');
}

if (isset($_POST['reschappt'])) {
    header('Location: \..\frontend\views\page10.php');
}

?>

<?php include '../../backend/authentication.php'?>

<?php 



// if (isset($_POST['cancel'])) {
//     header('Location: \..\frontend\views\page10.php');
// }

if (isset($_POST['nocancel'])) {
    // header('Location: ../../backend/appt_interim.php');
    header('Location: \..\frontend\views\page9.php');
}

?>

