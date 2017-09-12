<?php
declare(strict_types=1);

namespace In2it\HelloWorld\Test;

use In2it\HelloWorld\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testMethodSayHelloReturnsHelloWorldString()
    {
        $expectedResult = 'Hello World!';
        $helloWorld = new HelloWorld();
        $actualResult = $helloWorld->sayHello();
        $this->assertSame($expectedResult, $actualResult, 
            sprintf('Actual result "%s" does not match our expected result "%s"!', $actualResult, $expectedResult)
        );
    }
}
