<?php

   require_once("Student.php");
   require_once("LocalClass.php");
   require_once("AddressClass.php");
   require_once("DateClass.php");
   require_once("PhoneClass.php");
   require_once("Selffunded.php");
   require_once("QuarterlySelf.php");
   require_once("ExtendedPaymentSelf.php");
   require_once("MontlySelf.php");
   require_once("International.php");
   require_once("ExtendedPaymentInt.php");
   require_once("QuarterlyInt.php");
   require_once("MontlyInt.php");
   require_once("OnLoan.php");

   try{
    $Student[] = new OnLoan('Anne', 'Thompson', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12',
        '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St', 'IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500);
    $Student[] = new ExtendedPaymentSelf('Marta', 'Doe', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500, "e-Transfer");
    $Student[] = new QuarterlySelf('Gabriel', 'Smith', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500, "cash");
    $Student[] = new MonthlySelf('John', 'Lucca', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500, "cash");
    $Student[] = new ExtendedPaymentInt('Julia', 'Morgan', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500);
    $Student[] = new QuarterlyInt('Amanda', 'Bishop', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 4500);
    $Student[] = new MonthlyInt('Jess', 'Bishop', 'annt@gmail.com', '14/07/1991', '1 657 7894559 12', '1 704 7894559', 'Canada, BC, Vancouver, 1236, 7895, Howe St','IELTS', 'Local', 111, 'Web Development','21/01/2017', 1000, 9500);

//For each object in the array $Student, grab the student data, store it the var $student, and print it with the payment option and all the object members.
    foreach ($Student as $object => $student) {
        echo "<span class=text-left>Student: {$object} => </span>";
        echo "<pre class=text-left>";
        echo "<hr/>";
        echo $student->payment();
        echo "<hr/>";
        print_r($student);
        echo "</pre>";
    }
}
catch (Exception $exception){
    echo "<br/>";
    echo '<span style="color:red;">Caught exception: ',  $exception->getMessage(), '</span>';
}
?>