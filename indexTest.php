<?php
/*
* @author : Meraj Ahmad
* date : 12 Feb 2020
* unit test done by : PHPUnit 5.7.23
* result : it will prints all the numbers from 1 to 100. 
* However, for multiples of 3, instead of the number, print "Linio". 
* For multiples of 5 print "IT". 
* For numbers which are multiples of both 3 and 5, print "Linianos".
*/
require 'index.php';
 
class indexTests extends PHPUnit_Framework_TestCase
{
    private $printMultiples;
 
    protected function setUp()
    {
        $this->printMultiples = new printMultiples();
    }
 
    protected function tearDown()
    {
        $this->printMultiples = NULL;
    }
 
    public function testprintNumbers()
    {
        $result = $this->printMultiples->printNumbers(1);
        $this->assertEquals(1, $result);
    }
 
}
