<?php
class DateClass{
    
    public $day;
    public $month;
    public $year;

   
    public function __construct($dayVal, $monthVal, $yearVal){


//////////////////////CHECK THE MONTH WITH DAY 31 /////////////////////////////
        $this -> day = $dayVal;
        if ($monthVal == 1 || 
            $monthVal == 3 || 
            $monthVal == 5 || 
            $monthVal == 7 || 
            $monthVal == 8 || 
            $monthVal == 10 || 
            $monthVal == 12)
        {
               if ($dayVal > 0 && $dayVal <= 31 ){
        // echo 'day:   ' .$dayVar .'<br/>';
        }
        else {
            echo 'day is not valid Error: 24 <br/>';
            $this -> day = " NOT VALID";
        }
    }
///////////////////////////////////////////////////////////////////////////////////


//////////////////////CHECK THE MONTH WITH DAY 30 /////////////////////////////
        if ($monthVal == 4 || $monthVal == 6 || $monthVal == 9 || $monthVal == 11)
        {
            if ($dayVal > 0 && $dayVal <= 30 ){
                // echo 'day:   ' .$dayVar .'<br/>';
            }
            
        else {
            echo 'day is not valid <br/>';
            $this -> day = " NOT VALID";
              }
        }
///////////////////////////////////////////////////////////////////////////////////


//////////////////////CHECK THE MONTH FEBRUARY /////////////////////////////

        if ( ($monthVal == 2) && (( (($yearVal%4==0) && ($yearVal%100!=0)) || $yearVal%400==0) == true)){
                if ($dayVal <= 29) {
                // true
                }
                else
                {
                echo   'day is not valid <br/>';
                $this -> day = " NOT VALID";
                }
            }
        if ( ($monthVal == 2) && (( (($yearVal%4==0) && ($yearVal%100!=0)) || $yearVal%400==0) == false))
        {
            if ($dayVal >= 29 ){
                echo   'day is not valid <br/>';
                 $this -> day = " NOT VALID";
             }
          }
///////////////////////////////////////////////////////////////////////////////////
      


//////////////////////CHECK THE MONTH VALID OR NOT /////////////////////////////
        $this -> month = $monthVal;
        if ($monthVal > 0 && $monthVal <= 12){
        // echo 'month:   ' .$monthVar .'<br/>';
        }

        else {
            echo 'month is not valid <br/>';
            $this -> month = " NOT VALID";
        }
///////////////////////////////////////////////////////////////////////////////////

//////////////////////LIMIT THE YEAR VALID OR NOT /////////////////////////////
        $this -> year = $yearVal;
            
        if ($yearVal < 1900 || $yearVal > 2100)
        {
            echo 'year is not valid <br/>';
            $this -> year = " NOT VALID";
        }
///////////////////////////////////////////////////////////////////////////////////

    } 
    //formats MDY:
    public function formatMDY(){
        $format = '%d/%d/%d';
        return sprintf($format, $this->month, $this->day, $this->year);
    }

    //formats DMY:
    public function formatDMY(){
        $format = '%d/%d/%d';
        return sprintf($format, $this->day, $this->month, $this->year);
    }

    public function formatMonthDY(){
        $format = '%s %d, %d';
        return sprintf($format, $this->month, $this->day, $this->year);
    }

    public function SixMonthsLater(){
        $date = new DateTime($this->year."/".$this->month."/".$this->dayMonth);
        $date->add(new DateInterval('P6M'));
        return $date->format('d/m/Y');  
    }

    public function ThreeMonthsLater(){
        $date = new DateTime($this->year."/".$this->month."/".$this->dayMonth);
        $date->add(new DateInterval('P3M'));
        return $date->format('d/m/Y');  
    }

    public function NineMonthsLater(){
        $date = new DateTime($this->year."/".$this->month."/".$this->dayMonth);
        $date->add(new DateInterval('P9M'));
        return $date->format('d/m/Y');  
    }                   
    
  }
  

  ?>