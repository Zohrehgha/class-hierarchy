<?php
class PhoneClass{
    private $CountryCode;
    private $AreaCode;
    private $line;
    private $extension;
    private $internalExtension;
    

   
    public function __construct($CountryCodeVal, $AreaCodeVal, $lineVal, $extensionVal, $internalExtensionVal){
      $this->CountryCode = $CountryCodeVal;
      $this->AreaCode = $AreaCodeVal;
      $this->line = $lineVal;
      $this->extension = $extensionVal;
      $this->internalExtension = $internalExtensionVal;
    }


    
    ////////Phone format e.g. +1(604)555-6562 Ext 0 :////////////
    public function formatPhone1(){
        $format = '+%d(%d)%d-%d Ext0';
        return sprintf($format, $this->CountryCode, $this->AreaCode, $this->line, $this->extension, $this->internalExtension);
    }

    ///////////Phone format e.g. 1.604.555.6562E0 :////////////
    public function formatPhone2(){
        $format = '%d.%d.%d.%d E0';
        return sprintf($format, $this->CountryCode, $this->AreaCode, $this->line, $this->extension, $this->internalExtension);
    }
    
  }
  
  // $phone1 = new phone('1','604','555','6562', 'ext 0');
  //   echo $phone1->formatPhone1() . "<br />";

  //   $phone2 = new phone('1','604','555','6562', 'ext 0');
  //   echo $phone2->formatPhone2() . "<br />";
?>