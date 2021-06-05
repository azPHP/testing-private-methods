<?php

namespace AZPHP\PrivateMethods;

class ClassWithPrivateMethods
{
    public function aPublicMethod(): int
    {
        return $this->iDoSomethingComplex();
    }

    private function iDoSomethingComplex(bool $bowlingForBools = false): int
    {
        $x = 0;
        if ($bowlingForBools) {
            $x = 42;
        }
        return $x;
    }
}