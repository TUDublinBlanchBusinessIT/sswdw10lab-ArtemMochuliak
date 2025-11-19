<?php
include("finalStepHeader.html");

//translate the comments below into PHP code underneath each comment

//start a session
session_start();


//echo the passenger's firstname from the appropriate session variable
echo "Firstname: " . $_SESSION['passengerFN'];


echo "<BR>";

//echo the passenger's surname from the appropriate session variable
echo "Surname: " . $_SESSION['passengerSN'];


echo "<BR>";

// if the luggage session variable is on
if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {

  


  //echo the amount of bags under ten kilos the passenger is bringing
  echo "Bags under 10KG: " . $_SESSION['subTenKG'];
  echo "<BR>";
    
  //echo the amount of bags over ten kilos the passenger is bringing
  echo "Bags over 10KG: " . $_SESSION['overTenKG'];
  echo "<BR>";
    
//end if block
}

?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
