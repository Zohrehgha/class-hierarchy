<?php
require_once('LocalClass.php');
require_once('DateClass.php');
/////////Class OnLaon inherited from Class local ////////////////
class OnLoan extends LocalClass{

/////////// constructor for OnLoan class //////////// 
    public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal){
    	
    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal
    		, $PhoneNumberVal, $CellNumberVal, $BirthDateVal,
   $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal);

	}	
  //////////Payment is calculated based on registration fee plus half of the tuition on start date and the other half six months after /////////////////

    public function payment(){
       
        echo "class OnLoan : <br />";

       $firstPayment = ($this->RegistrationFee) + ($this->ProgramTuition / 2);

     echo "The first payment: " . $firstPayment . "$ <br />";
     //$myDate = new DateClass();

     echo " date: " . $this->StartDate . "<br />";

    
    $secondPayment = $this->ProgramTuition / 2;

    echo "The second payment  : " . $secondPayment . "<br />";
    echo " date:  SixMonthsLater";
    echo "<hr/>";

		
    }
}

?>


<!-- echo "The second payment should be payed in : " . $secondPayment;
        echo " date: " . SixMonthsLater();
 -->