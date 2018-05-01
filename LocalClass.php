<?php



////////this is local class extends from students ///////////
class LocalClass extends Student{
    public $EnglishProof;
    public $IDType;
    public $IDNumber;
    public $RegistrationFee;
    public $ProgramName;
    public $ProgramTuition;
    public $StartDate;
  
/////////// constructor for LocalClass///////////
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
     echo "<br />Local Student paying...<br/><br/>";
   }

}



?>

