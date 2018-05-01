<?php
 require_once('International.php');
//////////////Class Quarterly inherited from International  //////////
   class QuarterlyInt extends International{


   	public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal){
    	parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal, $PhoneNumberVal, $CellNumberVal, $BirthDateVal,
   $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal);

   }
  /////////////Payment is calculated based on registration fee plus half of the tuition on start date and the other half six months after/////////////////
    public function Payment(){
       
       echo "class QuarterlyInt : <br />";

        $tuitionCycle = (($this->ProgramTuition / 100)*25);
		$firstPayment =  $tuitionCycle; 
        
		echo "First payment : " . $tuitionCycle ."$ <br />";
		echo " date: " . $this->StartDate . "<br /><br />";
    	
		
		$secondPayment =  $tuitionCycle;

		echo "Second payment : " . $tuitionCycle ."$ <br />";
		echo " date: Three Months Later $ <br /><br />";
	

		$thirdPayDate = $tuitionCycle; 

		echo "Third payment : " . $tuitionCycle ."$ <br />";
		echo " date: six Months Later $ <br /><br />";


		$forthPayDate = $tuitionCycle;

		echo "Forth payment : " . $tuitionCycle ."$ <br />";
		echo " date: nine Months Later ";

			echo "<hr/>";
    }

   }
?>