<?php


namespace Crawly\CeiLaravel\Tests;

use Crawly\CeiLaravel\CeiValidatorProvider;
use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;

class ValidatorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->register(CeiValidatorProvider::class);
    }


    public function testInvalid1()
    {
        $cei = Validator::make(
            ['16550941286'],
            ['cei']
        );

        $this->assertTrue($cei->fails());
    }

    public function testInvalid2()
    {
        $cei = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['cei']
        );

        $this->assertTrue($cei->fails());
    }

    public function testValid0()
    {
        $cei = Validator::make(
            ['23.295.75181/86'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }
    public function testValid1()
    {
        $cei = Validator::make(
            ['23.295.75181/86'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }
    public function testValid2()
    {
        $cei = Validator::make(
            ['281574436487'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }

    public function testValid3()
    {
        $cei = Validator::make(
            ['205469930885'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }

    public function testValid4()
    {
        $cei = Validator::make(
            ['291976139282'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }


    public function testValid5()
    {
        $cei = Validator::make(
            ['223505674783'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }

    public function testValid6()
    {
        $cei = Validator::make(
            ['20.388.98675/82'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
    }
}
