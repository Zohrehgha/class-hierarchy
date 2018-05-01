
<?php

require_once('Selffunded.php');
/////////////////////Class ExtendedPayment inherited from Selffunded /////////////////
class ExtendedPaymentSelf extends Selffunded{
    

    	public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal,
	 $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal){
		parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal,
   $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal);
	
   }
   ////////////Payment is calculated based on registration fee plus half of the tuition on start date and the other half six months after////////////////
       public function payment(){
       
        echo "class ExtendedPaymentSelf : <br />";

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