<?php
require_once('Student.php');
require_once ('AddressClass.php');
require_once ('DateClass.php');
require_once ('PhoneClass.php');
/////////////Class International inherited from student /////////////
class International extends Student{
  
    protected $EnglishProof;
    protected $IDType;
    protected $IDNumber;
    protected $RegistrationFee;
    protected $ProgramName ;
    protected $ProgramTuition;
    protected $StartDate;
  

  public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal){
    
    $this->StudentName = $StudentNameVal;
    $this->StudentSurname = $StudentSurnameVal;
    $this->EmailAddress = $EmailAddressVal;
    $this->PhoneNumber = $PhoneNumberVal;
    $this->CellNumber = $CellNumberVal;
    $this->BirthDate = $BirthDateVal;
    $this->Address = $AddressVal;
    $this->EnglishProof = $EnglishProofVal;
    $this->IDType = $IDTypeVal;
    $this->IDNumber = $IDNumberVal;
    $this->RegistrationFee = $RegistrationFeeVal;
    $this->ProgramName = $ProgramNameVal;
    $this->ProgramTuition = $ProgramTuitionVal;
    $this->StartDate = $StartDateVal;

  }

  public function payment(){
    echo "<br />International Student paying...<br/>";
  }

   }
   ?>