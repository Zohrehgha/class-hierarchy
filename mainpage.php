<?php

require_once("Student.php");
require_once("LocalClass.php");
require_once("OnLoan.php");
require_once("ExtendedPaymentSelf.php");
require_once("MonthlySelf.php");
require_once("MonthlyInt.php");
require_once("ExtendedPaymentInt.php");
require_once("QuarterlyInt.php");
require_once("QuarterlySelf.php");
require_once("DateClass.php");
require_once("AddressClass.php");
require_once("PhoneClass.php");


//my first Quarter students

$quarter1 = new DateClass(3,7,2016); // Zohreh, Mert, Kohei ...
$quarter2 = new DateClass(3,10,2017);
$quarter3 = new DateClass(3,1,2018);
$quarter4 = new DateClass(3,4,2018);

$quarter4 = new DateClass(3,4,1985);


$address1 = new AddressClass('Canada', 'BC', 'Vancouver', '121', 'HOW', 155, 111);
$address2 = new AddressClass('Canada', 'BC', 'Vancouver', '56', 'Lonsdale', 108, 31);

$phone1 = new PhoneClass(1, 604, 432, 3454, E0);
$phone2 = new PhoneClass(1, 778, 923, 7866, E0);




///////////////////////////////
// create a LocalClass Object
$Student[] = $myStudent01 = new LocalClass('Zohreh','Ghahremani', 'zohreh@gmail.com', $phone2->formatPhone2(), 7782134456, $quarter4->formatMDY(), $address1->formatADD2(),'Intermediate', 'local',201752, 200, 'Web Developer', 18000, $quarter3->formatDMY());
//test the payment function
echo "<b> myStudent01  object </b> ";
$myStudent01->payment();
////////////////////////////////
/////Create Object FOR All Children and assigns them to an array elements of students///////////


//for Zohreh
$Student[] = $myStudent02 = new OnLoan('Georgia','Kalvan', 'Kalvan@gmail.com', $phone1->formatPhone1(), 7782589511, 1990, $address1->formatADD1(),'advanced', 'local',201698, 200, 'Graphic', 15000, $quarter1->formatMDY());
echo "<b> myStudent02  object </b><br> ";
$myStudent02->payment();


$Student[] = $myStudent03 = new ExtendedPaymentSelf('Lindsey','mando', 'mando@gmail.com', 6044554451, 7786548888, 1995, 'vancouver','advanced', 'local',201751, 200, 'web developer', 19000, $quarter1->formatDMY(),'local');
echo "<b> myStudent03 object </b><br> ";
$myStudent03->payment();



//print out ok
$Student[] = $myStudent04 = new MonthlySelf('Beata','Ghahremani', 'Beata@gmail.com', 6045478965, 778, 1985, 'vancouver','Intermediate', 'local',201732, 200, 'General Prigramming', 18000, $quarter1->formatMonthDY(),'International');
echo "<b> myStudent04 object </b><br> ";
$myStudent04->payment();


//print out has problems
$Student[] = $myStudent05 = new MonthlyInt('Mari','Marc', 'Marc@gmail.com', 6042586598, 778, 1992, 'vancouver','advanced', 'local',201655, 200, 'Accounting', 15000, $quarter1->year,'local');
echo "<b> myStudent05  object </b><br> ";
$myStudent05->payment();





$Student[] = $myStudent06 = new ExtendedPaymentInt('Jason','Armon', 'Jason@gmail.com', 6044238798, 778, 1990, 'vancouver','advanced', 'local',201611, 200, 'Web Developer', 20000, 2016,'International');
echo "<b> myStudent06 object </b><br> ";
$myStudent06->payment();

$Student[] = $myStudent07 = new QuarterlyInt('Michael','Aron', 'Michael@gmail.com', 6042584566, 778, 1991, 'vancouver','Intermediate', 'local',201777, 200, 'Game Prigramming', 18000, 2017,'International');
echo "<b> myStudent07 object </b><br> ";
$myStudent07->payment();

$Student[] = $myStudent08 = new QuarterlySelf('Dana','Aude', 'Dana@gmail.com', 6047774425, 778, 1996, 'vancouver','Intermediate', 'local',201799, 200, 'Web Developer', 15000, 2017,'International');
echo "<b> myStudent08 object </b><br> ";
$myStudent08->payment();

///////////prints all object out in a loop to show dynamic binding is working//////////////
foreach ($Student as $object => $student) {
        echo "<span class=text-left>Student: {$object} => </span>";
        echo "<pre class=text-left>";
        echo "<hr/>";
        echo $student->payment();
        echo "<hr/>";
        print_r($student);
        echo "</pre>";
    }


?>
 

