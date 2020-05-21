<?php

namespace App;
use DatePeriod;
use DateInterval;
use DateTime;
use App\Client;
use App\Room;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    


    public static function getRangeBetweenDates(string $fromDate, string $toDate){
        
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
    
    public static function getFromDate($id_client){

        $client= Client::find($id_client);
        

        $fromDate = $client->name;

        //$fromDate = $fromDate->format("Y-m-d");

        return $fromDate;
    }
    

    
    
    

}


