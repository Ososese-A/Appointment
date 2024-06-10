<?php
 $fname = $lname = $dob = $gender = $occ = '';
 $fnameErr = $lnameErr = $dobErr = $genderErr = $occupationErr = '';

 if(isset($_POST['submit'])) {

    if(empty($_POST['fname'])) {
        $fnameErr = 'First Name is required *';
    } else {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    //for lname validation
    if(empty($_POST['lname'])) {
        $lnameErr = 'Last Name is required *';
    } else {
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //for dob validation
    if(empty($_POST['dob'])) {
        $dobErr = 'Date of Birth is required *';
    } else {
        $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //for gender
    if(empty($_POST['gender'])) {
        $genderErr = 'Gender is required *';
    } else {
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //for occupation
    if(empty($_POST['occ'])) {
        $occupationErr = 'Occupation is required *';
    } else {
        $occ = filter_input(INPUT_POST, 'occ', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(empty($fnameErr) && empty($lnameErr) && empty($dobErr) && empty($genderErr) && empty($occupationErr)) {
        if (strtolower($occ) == 'student') {
            $sql = "INSERT INTO patient_info(fname, lname, dob, gender, occupation) VALUES ('$fname', '$lname', '$dob', '$gender', '$occ')";
            if (mysqli_query($con_string, $sql)) {
                header('Location: \..\frontend\views\page3.php');
            } else {
                echo 'Error:' . mysqli_error($con_string);
            }
        } else {
            $sql = "INSERT INTO patient_info(fname, lname, dob, gender, occupation) VALUES ('$fname', '$lname', '$dob', '$gender', '$occ')";
            if (mysqli_query($con_string, $sql)) {
                header('Location: \..\frontend\views\page4.php');
            } else {
                echo 'Error:' . mysqli_error($con_string);
            }
        }
    }
    
 }
?>

<?php
$uni = $stdno ='';
$uniErr = $stdnoErr = '';

//for uni
if (isset($_POST['sub'])) {

    if(empty($_POST['uni'])) {
        $uniErr = 'University is required *';
}   else{
    $uni = filter_input(INPUT_POST, 'uni', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

//FOR STDNO
    if (empty($_POST['stdno'])) {
        $stdnoErr = 'Student Number is required *';
}   else{
    $stdno = filter_input(INPUT_POST, 'stdno', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

if (empty($stdnoErr) && empty($uniErr)) {
    header('Location: \..\frontend\views\page4.php');
}
}
?>



<?php
$password = $hashed = $pword = $email = $phoneno = '';
$passwordErr = $pwordErr = $emailErr = $phonenoErr = '';

//for form from page4
if (isset($_POST['blop'])) {
    if (empty($_POST['email'])) {
        $emailErr = 'The email field is required *';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['phoneno'])) {
        $phonenoErr = 'The Phone number field is required *';
    } else {
        $phoneno = filter_input(INPUT_POST, 'phoneno', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['password'])) {
        $passwordErr = 'The password field is required *';
    } 

    if ( $_POST['password'] === $_POST['pword'] ) {
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // $hashed = password_hash($password, PASSWORD_BCRYPT);
    } else {
        $pwordErr = 'Your password confirmation must be the same as your password *';
    } 

    if (empty($emailErr) && empty($phonenoErr) && empty($passwordErr) && empty($pwordErr)) {
        $sql = "INSERT INTO patient_login(email, phone_no, password) VALUES ('$email', '$phoneno', '$password')";
            if (mysqli_query($con_string, $sql)) {
                header('Location: \..\frontend\views\page5.php');
            } else {
                echo 'Error:' . mysqli_error($con_string);
            }
    }
}
?>



<?php 
//for signup ending
//for the third form from page5
if (isset($_POST['fin'])) {
    header('Location: \..\frontend\views\page6.php');
}
?>




<?php 
//for the login
$passworda= $passwordahash = $emaila = '';
$passwordaErr = $emailaErr = $invalidErr = '';
$emaildb = '';
$passworddb = '';

//for the third form from page6
if (isset($_POST['mit'])) {
    if (empty($_POST['emaila'])) {
        $emailaErr = 'The email field is required *';
    } else {
        $emaila = filter_input(INPUT_POST, 'emaila', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $logsql = "SELECT * FROM patient_login WHERE email='$emaila'";
        $res = mysqli_query($con_string, $logsql);
        $dbarray =  mysqli_fetch_array($res, MYSQLI_ASSOC);
        $emaildb = $dbarray['email'];
        $userid = $dbarray['id'];
    }

    if (empty($_POST['passworda'])) {
        $passwordaErr = 'The password field is required *';
    } else {
        $passworda = filter_input(INPUT_POST, 'passworda', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $passworddb = $dbarray['password'];
    }
    // if (empty($_POST['passworda'])) {
    //     $passwordaErr = 'The password field is required *';
    // } else {
    //     $passworda = filter_input(INPUT_POST, 'passworda', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //     $passwordahash = password_hash($passworda, PASSWORD_BCRYPT);
    //     $passworddb = $emaildb['password'];
    // }

    if($emaila == $emaildb) {

        if ($passworda == $passworddb) {
            $_SESSION['userid'] = $userid;
            $_SESSION['logged'] = true;
            header('Location: \..\frontend\views\page8.php');
        } else {
            $invalidErr = 'Incorrect email or password';
        }
    }else {
        $invalidErr = 'Incorrect email or password, please try again *';
    }
    }
?>



<?php
$appttype = $apptdoc = $appttime = $apptdate = $apptreason ='';
$appttypeErr = $apptdocErr = $appttimeErr = $apptdateErr = $apptreasonErr ='';

//for the 7th form from page7
if (isset($_POST['pib'])) {
    if (empty($_POST['appttype'])) {
        $appttypeErr = 'The Appointment type is required *';
    } else {
        $appttype =  filter_input(INPUT_POST, 'appttype', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    if (empty($_POST['apptdoc'])) {
        $apptdocErr = 'The Doctor type is required *';
    } else {
        $apptdoc =  filter_input(INPUT_POST, 'apptdoc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    if (empty($_POST['appttime'])) {
        $appttimeErr = 'The Appointment time is required *';
    } else {
        $appttime =  filter_input(INPUT_POST, 'appttime', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    if (empty($_POST['apptdate'])) {
        $apptdateErr = 'The Appointment date is required *';
    } else {
        $apptdate =  filter_input(INPUT_POST, 'apptdate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['apptreason'])) {
        $apptreasonErr = 'The Appointment date is required *';
    } else {
        $apptreason =  filter_input(INPUT_POST, 'apptreason', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($appttypeErr) && empty($apptdocErr) && empty($appttimeErr) && empty($apptdateErr) && empty($apptreasonErr)) {
            $apptid = $_SESSION['userid'];
            $docid = rand(1,10);
            $apptsql = "INSERT INTO patient_appt(id,appt_type, appt_doctor, appt_time, appt_date, appt_reason,doc_id) VALUES ('$apptid', '$appttype', '$apptdoc', '$appttime', '$apptdate', '$apptreason',$docid)";
            if (mysqli_query($con_string, $apptsql)) {
                header('Location: \..\frontend\views\page8.php');
            } else {
                echo 'Error:' . mysqli_error($con_string);
            }
    }
}
?>


<?php 

if (isset($_POST['cancel'])) {
    $idliid = (int)$_SESSION['appt_cal_id'];
    //
    // $logsql = "SELECT * FROM patient_login WHERE email='$emaila'";
    $calsql = "DELETE FROM patient_appt WHERE appt_id=$idliid";
    mysqli_query($con_string, $calsql);
    header('Location: \..\frontend\views\page8.php');
}

if (isset($_POST['resch'])) {
    $reschid = (int)$_SESSION['appt_cal_id'];
    $resch_date =  $_POST['resch_date'];
    $resch_time =  $_POST['resch_time'];
    // $logsql = "SELECT * FROM patient_login WHERE email='$emaila'";
    // "UPDATE myTable SET post='New Post Content' WHERE id=3"
    $calsql = "UPDATE patient_appt SET appt_time='$resch_time', appt_date='$resch_date' where appt_id=$reschid";
    mysqli_query($con_string, $calsql);
    header('Location: \..\frontend\views\page9.php');
}

?>



<?php 
//for signup ending
//for the third form from page5
if (isset($_POST['logout'])) {
    unset($_SESSION['logged']);

    header('Location: \..\frontend\views\page6.php');
}
?>