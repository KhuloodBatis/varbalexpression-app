<?php

namespace Tests\Unit;

use App\Models\Expression;
use PHPUnit\Framework\TestCase;

class ExpressionTest extends TestCase
{
    // /**
    //  * A basic unit test example.
    //  *
    //  * @return void
    //  */
    // public function test_example()
    // {
    //     $this->assertTrue(true);
    // }


    function test_it_finds_a_string()
    {
      $regex = Expression::make()->find('www');
    //   $this->assertRegExp($regex,'www');
      $this-> assertMatchesRegularExpression($regex,'www');

      $regex = Expression::make()->then('www');
        $this-> assertMatchesRegularExpression($regex,'www');
    }

    function test_it_checks_for_anything()
    {

      $regex = Expression::make()->anything();
      $this-> assertMatchesRegularExpression( $regex,'foo');



    }

    function test_it_maybe_has_a_value()
    {
        $regex = Expression::make()->maybe('http');
        $this-> assertMatchesRegularExpression($regex,'http');
        $this-> assertMatchesRegularExpression($regex,'');
    }

    function test_it_can_chain_method_calls(){

        $regex = Expression::make()->find('foo')->maybe('bar')->then('biz');
        $this->assertMatchesRegularExpression($regex,'foobarbiz');
    }

}
