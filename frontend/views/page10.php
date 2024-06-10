<?php include 'nav.php'?>

<div class="central2">
        <div class="pep4">
            <h1><span class="the-a">A</span>ppointment Rescheduling</h1><br><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="$POST">
                <label for="reapptime">Appointment Time:</label>
                <select name="reapptime" id="">
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
                </select><br><br>

                <label for="reapptdate">Appointment Date:</label>
                <input type="Date" name="apdate">
                <br><br> <div>
                <input type="submit" value="Confirm" class="next" name="resch">
            </div>
            </form>
           
        </div> 
  </div>

  <?php include 'toes.php'; ?>