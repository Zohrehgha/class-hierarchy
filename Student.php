<?php
///////Create Abstract Class/////////
  abstract class Student{

    public  $StudentName;
    public  $StudentSurname;
    public  $EmailAddress;
    public  $PhoneNumber;
    public  $CellNumber;
    public  $BirthDate;
    public  $Address;

////////abstract function shouldn't have any body/////////
   abstract public function payment();
    
 }
 
 
  ?>