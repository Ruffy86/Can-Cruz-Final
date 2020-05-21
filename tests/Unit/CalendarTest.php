<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
use App\Calendar;
use App\Http\Controllers;
use App\ClientController;

use App\Client;
use DateTime;

class CalendarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /*
    
    public function test_get_interval_between_dates(){
       
        $fromDate= '2020-01-01';
        $toDate= '2020-01-07';

        $calendar1= new Calendar();
        //dd($calendar1);
        $exampleInterval= $calendar1->getRangeBetweenDates($fromDate, $toDate); 

        //$exampleInterval= Calendar::getRangeBetweenDates($fromDate, $toDate); 

        $this->assertIsArray($exampleInterval);
        $this->assertEquals($exampleInterval[0],$fromDate);
        $this->assertCount(6, $exampleInterval);
        
    }
    /*
    public function test_get_from_dates(){

        $idClient=1;

        $fromDate=Calendar::getFromDate($idClient);

        $this->assertIsString($fromDate);
        $this->assertIsNumeric($fromDate);
    
    }
    /*
    

    public function test_store_reservation_dates(){

        $DateList=["2020-01-01","2020-01-02","2020-01-03","2020-01-04"];

        $calendar1= new Calendar();

        $updatedCalendar= $calendar1->storeReservationDates($DateList);

        //dd($calendar1->calendar);
    
        $this->assertContains($DateList, $updatedCalendar);
        $this->assertEquals( $calendar1->calendar, $updatedCalendar);

    }


    public function test_check_if_date_is_taken(){

        $date = "2020-01-01";
        $dateList=["2021-01-01", "2020-01-02","2020-01-03"];

        $calendar1= new Calendar();

        $calendar1->storeReservationDates($dateList);


        $isTakenFalse = $calendar1->checkIfDateIsTaken($date);
        $isTakenTrue = $calendar1->checkIfDateIsTaken($dateList[0]);

        $this->assertFalse($isTakenFalse);
        $this->assertTrue($isTakenTrue);
    }
       
    public function test_check_if_date_range_is_taken(){

        $dateRange = ['2021-02-01', '2021-02-02', '2021-02-03', '2021-02-04', '2021-02-05'];

        $calendar1= new Calendar();

        $isRangeTaken = $calendar1->checkIfDateRangeIsTaken($dateRange);

        $this->assertFalse($isRangeTaken);
    }
    */

    public function teststoreReservationToCalendar(){

        $fromDate = '2023-01-01';
        $toDate = '2023-01-03';

        $calendar1= new Calendar();

        $updatedCalendar= $calendar1->storeReservationToCalendar($fromDate,$toDate);

        $this->assertEquals( $calendar1->calendar, $updatedCalendar);

    }




       
    
    
    

}
