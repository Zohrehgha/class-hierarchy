<?php
require_once('Selffunded.php');
/////////////Class Quarterly inherited from Selffunded //////////////
class QuarterlySelf extends Selffunded{


public function __construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
	 $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal){
		parent::__construct($StudentNameVal, $StudentSurnameVal, $EmailAddressVal,
   $PhoneNumberVal, $CellNumberVal, $BirthDateVal, $AddressVal, $EnglishProofVal, $IDTypeVal, $IDNumberVal, $RegistrationFeeVal, $ProgramNameVal, $ProgramTuitionVal, $StartDateVal, $PaymentOptionVal);
	
   }
////////////////Payment is calculated based on 25% of tuition on start date, 25% Three months after, 25% six months after and 25% nine months after the start date.////////////

    public function Payment(){
       
       echo "class QuarterlySelf : <br />";

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