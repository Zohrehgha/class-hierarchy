<?php

   class AddressClass{
    private $Country;
    private $Province;
    private $City;
    private $StreetNumber;
    private $StreetName;    
    private $ApartmentNumber;
    private $UnitNumber;
    

    public function __construct($CountryVal, $ProvinceVal, $CityVal, $StreetNumberVal, $StreetNameVal, $ApartmentNumberVal,  $UnitNumberVal) 
    {
        $this->Country = $CountryVal;
        $this->Province = $ProvinceVal;
        $this->City = $CityVal;
        $this->StreetNumber = $StreetNumberVal;
        $this->StreetName = $StreetNameVal;     
        $this->ApartmentNumber = $ApartmentNumberVal;
        $this->UnitNumber = $UnitNumberVal;          
    }
 
    //////////formats starting from country://////////////////
    public function formatADD1(){
        $format = '%s, %s, %s, %s, %s, %s, %s';
        return sprintf($format, $this->Country, $this->Province, $this->City, $this->StreetNumber, $this->StreetName, $this->ApartmentNumber, $this->UnitNumber);
    }

    ////////////////formats starting from Apartment no:////////////////////
    public function formatADD2(){
        $format = '%s, %s, %s, %s, %s, %s, %s';
        return sprintf($format, $this->UnitNumber, $this->ApartmentNumber, $this->StreetNumber, $this->StreetName, $this->City, $this->Province, $this->Country);
    }
    
  }


    // $adress1 = new Address('Canada','BC','West Vancouver','1222', 'Marin Drive', '321', '300');
    // echo $adress1->formatADD1() . "<br />";

    // $adress2 = new Address('Canada', 'BC', 'West Vancouver', '1222', 'Marin Drive', '321', '300');
    // echo $adress2->formatADD2() . "<br />";



?>