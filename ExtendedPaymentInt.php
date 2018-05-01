
<?php
 require_once('International.php');


   class ExtendedPaymentInt extends International{

   	public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartdateVal){
    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
   $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal);

   }
   public function Payment(){

    echo "class ExtendedPaymentInt : <br />";

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