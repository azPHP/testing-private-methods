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
        // ?
    }
}


























// magic!
//$refl = new \ReflectionClass($this->validateDNS);
//$method = $refl->getMethod('getAndValidateCurrentRecord');
//$method->setAccessible(true);
