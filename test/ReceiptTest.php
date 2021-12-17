<?php 

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase {

    public $receipt;

    public function setUp(){
        $this->receipt = new Receipt;
    }

    public function tearDown(){
        unset($this->receipt);
    }
   // $receipt = new Receipt;

    /**
     * @dataprovider provideTotal
     */
    public function test_add_array($input,$expected){
        $output = $this->receipt->add_array($input);
        $this->assertEquals(
            $output,
            $expected,
            "ik verwacht 591 als uitkomst als de waarde van het array worden ogpeteld"

        );
    }

    public function test_tax(){
        $this->assertEquals(
            124.11,
            $this->receipt->tax(array(591)),
            "ik verwacht dat de uitkomst 124.11 is als de belasting goed word uitgerekened"
        );
    }


    public function provideTotal(){
        return [
            [[122,23,89,345,12], 591],
            [[20,30],50],
            [[-200,300],100]
        ];
    }
}







?>