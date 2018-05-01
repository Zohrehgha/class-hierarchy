
<?php

require_once('International.php');


   class MonthlyInt extends International{

   	public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal){
    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $BirthDateVal,
   $PhoneNumberVal, $CellNumberVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $ProgramNameVal, $RegistrationFeeVal, $ProgramTuitionVal, $StartDateVal);

   }
   public function payment(){

		parent::payment();

		$monthlyTuition = parent::$ProgramTuitionVal/4;

		$firstPayDate = parent::$RegistrationFeeVal + $monthlyTuition;

		echo "First payment: " . $firstPayDate;
		echo " date: " . parent::$StartDateVal;

		echo "<hr/>";
		$secondPayDate = (parent::$programTuitionVal - $monthlyTuition)/7;
		echo "Second payment: " . $secondPayDate;
		echo " date: " . parent::$ThreeMonthsLater;

		echo "<hr/>";
		echo "Another payments (continued for 7 months): " . $secondPayDate;

	}

 }

   ?>