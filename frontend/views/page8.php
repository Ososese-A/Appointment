<?php include 'nav.php'?>

<div class="conton">
  <div class="central3">
    <div>
      <h1 class="dings">
        <span class="the-a">C</span>urrent Appointments
      </h1>
        <div class="scroller">
        <div class="pip0">
          <?php 
          if (isset($_SESSION['userid'])) {
                $apptqid = $_SESSION['userid'];
                $apptquery = "SELECT * FROM patient_appt WHERE id='$apptqid'";
                $apptres = mysqli_query($con_string, $apptquery);
          }
                if ($apptres) {
                    $apptinfo = array_reverse(mysqli_fetch_all($apptres, MYSQLI_ASSOC));
                      foreach ($apptinfo as $it) {
                        $docidres = $it['doc_id'];
                        $_SESSION['appt_cal_id'] = $it['appt_id'];
                        $_SESSION['takenid'] = $docidres;
                        $reasonpass = $it['appt_reason'];
                        $_SESSION['takenreason'] = $reasonpass;
                        $typepass = $it['appt_type'];
                        $_SESSION['takentype'] = $typepass;
                        $apptdocquery = "SELECT doc_name FROM patient_doctor WHERE id='$docidres'";
                        $apptdocres = mysqli_query($con_string, $apptdocquery);
                        $apptdocinfo = mysqli_fetch_array($apptdocres, MYSQLI_ASSOC);
                        $_SESSION['takendoc'] = $apptdocinfo['doc_name'];
                        $current_date  = new DateTime();
                        $date = DateTime::createFromFormat('Y-m-d', $it['appt_date']);
                        $time = DateTime::createFromFormat('ha', $it['appt_time']);
                        $now = '';
                        $apptidpasser = $it['appt_id'];
                        if ($date -> format('Y-m-d') >= $current_date -> format('Y-m-d')) {
                              // if ($time->getTimestamp() >= $current_date->getTimestamp() - (3600)) {
                              echo '<div class="pip1">';
                            // }
                            // else {
                            //   echo '<div class="none">';
                            // }
                        } 
                        else {
                          echo '<div class="none">';
                        }
                        echo '<h2>' . 'Dr  ' . $apptdocinfo['doc_name'] . '</h2>';

                          echo '<div class="sider">';
                          if ($current_date-> format('jS F Y') == $date-> format('jS F Y')) {
                            echo "<p> Today </p>";
                            if ($current_date -> format('G') == $time -> format('G')) {
                              $now = 'now';
                              echo '<p class="the-a"> Now </p>';
                            } else {
                              $timepass = $time->format('g:ia');
                              echo '<p>' . $timepass . '</p>';
                            }
                          } else {
                                $timepass = $time->format('g:ia');
                                $_SESSION['takentime'] = $timepass;
                                $datepass = $date->format('jS F Y');
                                $_SESSION['takendate'] = $datepass;
                                echo '<p>' . $datepass . '</p>';
                                echo '<p>' . $timepass . '</p>';
                          }
                          echo '</div>';
                              
                          if ($now) {
                            echo '<form action="" method="POST"> 
                            <input class="attend" type="submit" value="Attend" name="attend" /> 
                            </form>';
                          } else {
                            echo '<form action="page9.php" method="POST"> 
                            <input class="view1" type="submit" value="View"/> 
                            </form>';
                            // echo '<form action="page9.php" method="POST"> 
                            // <input type="hidden" name="appt_id_pass" value="' . $apptidpasser . '">
                            // <input type="hidden" name="appt_doc_pass" value="' . $apptdocinfo['doc_name'] . '">
                            // <input type="hidden" name="appt_date_pass" value="' . $datepass . '">
                            // <input type="hidden" name="appt_time_pass" value="' . $timepass . '">
                            // <input type="hidden" name="appt_reason_pass" value="' . $reasonpass . '">
                            // <input type="hidden" name="appt_type_pass" value="' . $typepass . '">
                            // <input class="view1" type="submit" value="View"/> 
                            // </form>';
                          }

                      echo '</div>';
                      }
                          
                } else {
                    $apptNull = "You have no pending booked Appointments.";
                    echo '<p>' . $apptNull . '</p>';
                }
          ?>
          <!-- <form action="../../backend/appt_interim.php" method="POST"> -->
        </div>
        </div>
    </div>
  </div>
     
  <div class="book">
      <a href="page7.php"><img src="../images/Frame365.png" alt=""></a>
  </div>

  <div class="logout">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
    <input type="submit" value="Logout" class="btn-two" name="logout">
    </form>
  </div>
</div>
<?php include 'toes.php'; ?>