<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
use App\Calendar;
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
    public function test_get_interval_between_dates(){
       
        $fromDate= '2020-01-01';
        $toDate= '2020-01-07';

        $exampleInterval= Calendar::getRangeBetweenDates($fromDate, $toDate); 

        $this->assertIsArray($exampleInterval);
        $this->assertEquals($exampleInterval[0],$fromDate);
        $this->assertCount(6, $exampleInterval);
        
    }
    
    public function test_get_from_dates(){

        $idClient= 1;

        $fromDate=Calendar::getFromDate($idClient);

        $this->assertIsString($fromDate);
        $this->assertIsNumeric($fromDate);
    
    }
    
    

}
