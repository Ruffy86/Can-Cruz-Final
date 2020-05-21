<?php

namespace App;
use DatePeriod;
use DateInterval;
use DateTime;
use App\Client;
use App\Room;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //static $calendar=[];
    public $id;
    public $calendar;

    static $messageNoDisponible="Las fechas seleccionadas no estan disponibles";
    static $messageDisponible="Las fechas seleccionadas estan disponibles";

    public function __construct(integer $id=null ,array $calendar=array()){

        $this->id = $id;
        $this->calendar = $calendar;

      }


    public function storeReservationToCalendar($fromDate, $toDate){
        
        $range = $this->getRangeBetweenDates($fromDate, $toDate);
        if ($this->checkIfDateRangeIsTaken($range)){
            echo $messageNoDisponible;
            return $messageNoDisponible;
        }
        $updatedCalendar=$this->storeReservationDates($range);
        echo $messageDisponible;
        return $updatedCalendar;
    }

    
    private static function getRangeBetweenDates(string $fromDate, string $toDate){
        
        $listOfDays = [];

        $begin = new DateTime($fromDate);
        $end = new DateTime($toDate);

        $interval = new DateInterval('P1D');
        $dateRange = new DatePeriod($begin, $interval ,$end);

        foreach($dateRange as $date){
            
            $date= $date->format("Y-m-d");
            array_push($listOfDays, $date);

        }
        return $listOfDays;

    }
    
    private function storeReservationDates($DateList){

        

        array_push($this->calendar, $DateList);

       // var_dump($this->calendar);

        return $this->calendar;
    }

    private function checkIfDateIsTaken($dateToCheck){

        foreach ($this->calendar as $reservation){
            foreach ($reservation as $date) {
                if($date == $dateToCheck){
                    return true;
                }
                return false;
            }
        }
    }

    private function checkIfDateRangeIsTaken($dateRange){

        foreach ($dateRange as $date){
            if($this->checkIfDateIsTaken($date)){
                return True;
            }
            return False;
        }
    }
    /*
    public static function getFromDate($id_client){
   
        $fromDate = DB::table('client_room')->select('From')->where('client_id', '=', $id_client)->first();
                
        return $fromDate;
                
    }

    public static function getToDate($id_client){
   
        $toDate = DB::table('client_room')->select('To')->where('client_id', '=', $id_client)->first();
                
        return $toDate;
                
    }
    */

       

}


