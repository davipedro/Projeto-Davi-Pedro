<?php

class A {

    private integer $A1;
    private float $A2;

    //constructor
    public function __construct(integer $A1, float $A2) {
        $this->A1 = $A1;
        $this->A2 = $A2;
    }

    public function getA1(): integer {
        return $this->A1;
    }
    public function getA2(): float {
        return $this->A2;
    }

    public function setA1(integer $A1): void {
        $this->A1 = $A1;
    }
    public function setA2(float $A2): void {
        $this->A2 = $A2;
    }

    public function MA1() {
        echo __METHOD__ . "\n";
    }

    public function MA2() {
        echo __METHOD__ . "\n";
    }

    public function MA3() {
        echo "Alteração a classe A partir do clone";
    }
}