<?php
/*
* @author : Meraj Ahmad
* date : 12 Feb 2020
* result : it will prints all the numbers from 1 to 100. 
* However, for multiples of 3, instead of the number, print "Linio". 
* For multiples of 5 print "IT". 
* For numbers which are multiples of both 3 and 5, print "Linianos".
*/
class  printMultiples
{
    public $multipleOfThree = 3;
    public $multipleOfFive = 5;

    public function printNumbers($number)
    {
        for($i=1; $i<=$number; $i++)
        {
            if(($i % $this->multipleOfThree==0 and $i % $this->multipleOfFive==0 and $print="Linianos") or
				($i % $this->multipleOfThree==0 and $print="Linio") or
				($i % $this->multipleOfFive==0 and $print="IT") or
				($print=$i))
            {
                echo $print;		//Comment when perform unit test.
				//return $print;	//Uncomment when perform unit test.
            }
			 echo  "<br>";
        }
    }

}
$findMultiples = new printMultiples();
$findMultiples->printNumbers(100);

