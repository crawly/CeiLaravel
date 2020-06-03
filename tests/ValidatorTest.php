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

    public function testValid()
    {
        $cei = Validator::make(
            ['23.141.26813/85'],
            ['cei']
        );

        $this->assertTrue($cei->passes());
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
}