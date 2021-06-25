<?php


use AZPHP\PrivateMethods\ClassWithPrivateMethods;
use PHPUnit\Framework\TestCase;

class ClassWithPrivateMethodsTest extends TestCase
{
    public function testViaPublicMethod(): void
    {
        $obj = new ClassWithPrivateMethods();

        $result = $obj->aPublicMethod();
        self::assertEquals(0, $result);
    }

    public function testTryPrivateMethod(): void
    {
        $this->expectError();
        $obj = new ClassWithPrivateMethods();
        $result = $obj->iDoSomethingComplex(true);
    }

    public function testPrivateMethod(): void
    {
        $obj = new ClassWithPrivateMethods();
        // ?
    }
}


























// magic!
//$refl = new \ReflectionClass($obj);
//$method = $refl->getMethod('iDoSomethingComplex');
//$method->setAccessible(true);
