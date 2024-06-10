<!-- <?php 
if (isset($_SESSION['userid'])) {
    $apptqid = $_SESSION['userid'];
} else {
    $apptqid = '';
}
$apptquery = "SELECT * FROM patient_appt WHERE id='$apptqid'";
// $apptquery = "SELECT appt_time,appt_date,doc_id FROM patient_appt";
$apptres = mysqli_query($con_string, $apptquery);

// if ($apptres) {
//     $apptinfo = mysqli_fetch_all($apptres, MYSQLI_ASSOC);
//     // var_dump($apptinfo);
//     // //// for testing
//     // // foreach ($apptinfo as $it) {
//     // //     echo 'ID: ' . $it['id'] . ', ';
//     // //     echo 'Appointment Type: ' . $it['appt_type'] . ', ';
//     // //     echo 'Appointment Time: ' . $it['appt_time'] . "\n";
//     // // }
//     foreach ($apptinfo as $it) {
//         $docidres = $it['doc_id'];
//         $apptdocquery = "SELECT doc_name FROM patient_doctor WHERE id='$docidres'";
//         $apptdocres = mysqli_query($con_string, $apptdocquery);
//         $apptdocinfo = mysqli_fetch_array($apptdocres, MYSQLI_ASSOC);
//         $current_date  = new DateTime();
//         // $date = DateTime::createFromFormat('Y-m-d H:ia', $it['appt_date'] . ' ' . $it['appt_time']);
//         $date = DateTime::createFromFormat('Y-m-d', $it['appt_date']);
//         $time = DateTime::createFromFormat('ha', $it['appt_time']);
//         echo 'ID: ' . $it['id'] . ', ';
//         echo 'Appointment Type: ' . $it['appt_type'] . ', ';
//         // echo 'Appointment Date: ' . $date->format('l, F j, Y') . ', ';
//         echo 'Appointment Date: ' . $date->format('jS F Y') . ', ';
//         echo 'Appointment Time: ' . $time->format('g:ia') . "\n";
//         echo 'Appointment Doctor: ' . $apptdocinfo['doc_name'];
//         if ($current_date-> format('jS F Y') == $date-> format('jS F Y')) {
//             echo "They are the same date";
//             if ($current_date -> format('G') == $time -> format('G')) {
//                 echo 'The exat same hour';
//             }
//         }
//     }
    
// } else {
//     $apptErr = "You have no pending booked Appointments.";
//     echo $apptErr;
// }
?>

<!-- for a single appointment fetch -->
<!-- <?php 
$apptErr = "";
$apptqid = $_SESSION['userid'];
$apptquery = "SELECT * FROM patient_appt WHERE id='$apptqid'";
// $apptquery = "SELECT appt_time,appt_date,doc_id FROM patient_appt";
$apptres = mysqli_query($con_string, $apptquery);

if ($apptres) {
    $apptinfo = mysqli_fetch_array($apptres, MYSQLI_ASSOC);
    var_dump($apptinfo);
} else {
    $apptErr = "You have no pending booked Appointments.";
}
?> --> 