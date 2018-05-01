<?php
require_once('Selffunded.php');

/////////Class Monthly inherited from Selffunded////////////
class MonthlySelf extends Selffunded{


    public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
	 $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal){
		parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
   $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal);
	
   }
   //////////////////Payment is calculated based on 25% of tuition on start date, 1/7 of the remaining 75% 3 months after the start date, continued for 7 months////////////////
   public function payment(){

   	    echo "class MonthlySelf : <br />";

        $tuitionCycle = (($this->ProgramTuition / 100)*25);
		 $firstPayment = $tuitionCycle;

		echo "First payment : " . $firstPayment ."$ <br />";
		echo " date: " . $this->StartDate . "<br />";

		
		$secondPayment = $tuitionCycle/7;
		echo "Second payment: " . $secondPayment . "<br />";
		echo " date: Three Months Later <br />";

		
		echo "Another payments (continued for 7 months): " . $secondPayment;
		echo "<hr/>";

	}
}

   ?>