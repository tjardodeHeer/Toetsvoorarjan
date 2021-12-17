<?php

namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


use PHPUnit\Framework\TestCase;
use TDD\KerstBorrel;
use TDD\Receipt;

class KerstBorrelTest extends TestCase {

    public $kerstborrel;

    public function setUp()
    {
        $this->kerstborrel = new KerstBorrel;
    }

    public function tearDown(){
        unset($this->kerstborrel);
    }

    /**
     * @dataProvider provideKostenKerstpakket
     */

    public function testKostenKerstpaket($aantalPersoneelsleden, $maxBudget, $expected) {
        $output = $this->kerstborrel->kostenKerstpakket($aantalPersoneelsleden, $maxBudget);

        $this->assertEquals(
            $expected,
            $output,
            'de totaal kosten voor het kerstpakket is $expected'

        );
            
    }

    public function provideKostenKerstpakket(){
        return [
            [21, 5000, 221],
            [-3, 4000, ],
            [60, 2500, 221],
            [31, 6000, 221],
            [40, 1000, 221],
            [22, 5000, 221],
            [25, 4500, 221],

        ];

    }
}

?>