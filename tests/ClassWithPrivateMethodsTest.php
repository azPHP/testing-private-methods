<?php


use AZPHP\PrivateMethods\ClassWithPrivateMethods;
use PHPUnit\Framework\TestCase;

class ClassWithPrivateMethodsTest extends TestCase
{
    public function testViaPublicMethod()
    {
        $obj = new ClassWithPrivateMethods();

        $result = $obj->aPublicMethod();
        self::assertEquals(0, $result);
    }
}
