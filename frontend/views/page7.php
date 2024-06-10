<?php include 'nav.php'?>

<div class="central">
       <div class="pep2">
        <h1><span class="the-a">A</span>ppointment Booking</h1><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">

            <label for="appttype">Appointment Type:</label>
            <select name="appttype" id="">
                <optgroup>
                    <option value="Offline (In Person)">Offline (In-person)</option>
                    <option value="Online (Virtual)">Online (Virtual)</option>
                </optgroup>
            </select> 
            <p class="the-s"><?php echo $appttypeErr?></p>
            <br>

            <label for="apptdoc">Doctor:</label>
            <select name="apptdoc" id="">
            <optgroup>
                <option value="Cardiology">Cardiology Doctor</option>
                <option value="Dental Health">Dental Health Doctor</option>
                <option value="Dermatology">Dermatology Doctor</option>
                <option value="Emergency">Emergency Doctor</option>
                <option value="General" selected>General Doctor (Select this if you do not know which doctor to pick)
                </option>
                <option value="Gynaecology">Gynaecology Doctor</option>
                <option value="Internal Medcine">Internal Medcine Doctor</option>
                <option value="Laboratory">Laboratory Doctor</option>
                <option value="Orthopaedics">Orthopaedics Doctor</option>
                <option value="Pediatrics">Pediatrics Doctor</option>
                <option value="Surgeon">Surgeon Doctor</option>
                <option value="Urology">Urology Doctor</option>
            </optgroup>
           </select> 
           <p class="the-s"><?php echo $apptdocErr?></p>
           <br>
      
            
            <label for="appttime"> Appointment Time:</label>
            <select name="appttime" id="">
                <optgroup>
                    <option value="12am">12am</option>
                    <option value="1am">1am</option>
                    <option value="2am">2am</option>
                    <option value="3am">3am</option>
                    <option value="4am">4am</option>
                    <option value="5am">5am</option>
                    <option value="6am">6am</option>
                    <option value="7am">7am</option>
                    <option value="8am">8am</option>
                    <option value="9am">9am</option>
                    <option value="10am">10am</option>
                    <option value="11am">11am</option>
                    <option value="12pm" selected>12pm</option>
                    <option value="1pm">1pm</option>
                    <option value="2pm">2pm</option>
                    <option value="3pm">3pm</option>
                    <option value="4pm">4pm</option>
                    <option value="5pm">5pm</option>
                    <option value="6pm">6pm</option>
                    <option value="7pm">7pm</option>
                    <option value="8pm">8pm</option>
                    <option value="9pm">9pm</option>
                    <option value="10pm">10pm</option>
                    <option value="11pm">11pm</option>
                </optgroup>
             </select> 
             <p class="the-s"><?php echo $appttimeErr?></p>
             <br>

             <label for="apptdate">Appointment Date:</label>
             <input type="date" name="apptdate">
             <p class="the-s"><?php echo $apptdateErr?></p>
             <br>

             <label for="apptreason">Reason for Appointment:</label>
             <textarea class="textarea" name="apptreason" placeholder="I have a slight headache and i have been feeling really weak , not sure what is wrong with me"></textarea>
             <p class="the-s"><?php echo $apptreasonErr?></p>

             <div>
                <input type="submit" value="Submit" class="next" name="pib">
               </div>
              </form>
             
       </div>
    </div>
<?php include 'toes.php'; ?>