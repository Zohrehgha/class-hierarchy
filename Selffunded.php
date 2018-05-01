<?php
require_once('LocalClass.php');
//////////	Class Selffunded inherited from class Local and has	String Payment option   ///////////
class Selffunded  extends LocalClass{
    private $PaymentOption; 

    public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOption){
    	$this->PaymentOption = $PaymentOptionVal;

    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal,
   $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal);
    }
    
   }
   
   ?>