<?php
require_once('International.php');

///////////////Class Monthly inherited from International////////////////
   class MonthlyInt extends International{

   	public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal){
    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
   $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal);

   }
   ////////////////////Payment is calculated based on 25% of tuition on start date, 1/7 of the remaining 75% 3 months after the start date, continued for 7 months////////////////
   public function payment(){

   	     echo "class MonthlyInt : <br />";

		 $tuitionCycle = (($this->ProgramTuition / 100)*25);
		 $firstPayment = $tuitionCycle;
		

		echo "First payment : " . $firstPayment ."$ <br />";
		echo " date: " . $this->StartDate . "<br />";

		
		$secondPayment = $tuitionCycle/7;
		echo "Second payment: " . $secondPayment . "$" . "<br />";
		echo " date: Three Months Later";

		
		echo "Another payments (continued for 7 months): " . $secondPayment . "$";

		echo "<hr/>";
	}

 }

   ?>