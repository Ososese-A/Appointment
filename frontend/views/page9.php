<?php include 'nav.php'?>  
<?php 
    // $_SESSION['takenid'] = $_GET['appt_id_pass']; 
    // $_SESSION['takendoc'] = $_GET['appt_doc_pass'];
    // $_SESSION['takendate'] = $_GET['appt_date_pass'];
    // $_SESSION['takentime'] = $_GET['appt_time_pass'];
    // $_SESSION['takenreason'] = $_GET['appt_reason_pass'];
    // $_SESSION['takentype'] = $_GET['appt_type_pass'];

    // $takenid = $_GET['appt_id_pass']; 
    // $takendoc = $_GET['appt_doc_pass'];
    // $takendate = $_GET['appt_date_pass'];
    // $takentime = $_GET['appt_time_pass'];
    // $takenreason = $_GET['appt_reason_pass'];
    // $takentype = $_GET['appt_type_pass'];

    // $takenid = $_POST['appt_id_pass']; 
    // $takendoc = $_POST['appt_doc_pass'];
    // $takendate = $_POST['appt_date_pass'];
    // $takentime = $_POST['appt_time_pass'];
    // $takenreason = $_POST['appt_reason_pass'];
    // $takentype = $_POST['appt_type_pass'];

    // $_SESSION['takenid'] = $takenid;
    // $_SESSION['takendoc'] = $takendoc;
    // $_SESSION['takendate'] = $takendate;
    // $_SESSION['takentime'] = $takentime;
    // $_SESSION['takenreason'] = $takenreason;
    // $_SESSION['takentype'] = $takentype;

    // echo $_SESSION['takenid'];
    // echo $_SESSION['takendoc'];
    // echo $_SESSION['takendate'];
    // echo $_SESSION['takentime'];
    // echo $_SESSION['takenreason'];
    // echo $_SESSION['takentype'];
?>


    <div class="centrall">
        <div class="pepp">
            <h1><span class="the-a">A</span>ppointment Information</h1> <br><br>
            <div class="appoint">
                <h2>Appointment Type:</h2><br>
                <p> <?php echo  $_SESSION['takentype'] ?></p>
                <!-- <p> <?php echo  $takentype ?></p> -->
                <!-- <p> <?php echo  $_SESSION[$_GET['appt_type_pass']]; ?></p> -->
            </div> <br><br>
            <div class="all">
                <div class="doctor">
                    <h2>Doctor:</h2>
                    <p><?php echo $_SESSION['takendoc']; ?></p>
                    <!-- <p><?php echo $takendoc; ?></p> -->
                    <!-- <p><?php echo $_SESSION[$_GET['appt_doc_pass']]; ?></p> -->
                </div>

                <div class="time">
                    <h2>Time:</h2>
                    <p><?php echo  $_SESSION['takentime']; ?></p>
                    <!-- <p><?php echo  $takentime; ?></p> -->
                    <!-- <p><?php echo  $_SESSION[$_GET['appt_time_pass']]; ?></p> -->
                </div>

                <div class="date">
                    <h2>Date:</h2>
                    <p><?php echo  $_SESSION['takendate']; ?></p>
                    <!-- <p><?php echo  $takendate; ?></p> -->
                    <!-- <p><?php echo  $_SESSION[$_GET['appt_date_pass']]; ?></p> -->
                </div>

            </div><br><br>

            <div class="reason">
                <h2>Reason for Appointment:</h2>
                <p><?php echo  $_SESSION['takenreason']; ?></p>
                <!-- <p><?php echo  $takenreason; ?></p> -->
                <!-- <p><?php echo  $_SESSION[$_GET['appt_reason_pass']]; ?></p> -->
            </div><br><br>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
            <input  type="submit" value="Cancel Appointment" class="cancel" name="cancelappt">
            <input  type="submit" value="Reschedule Appointment" class="reschedule" name="reschappt">
            </form>
            
        </div>

    </div>
<?php include 'toes.php'; ?>