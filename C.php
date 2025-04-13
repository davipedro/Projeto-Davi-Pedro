<?php

class C {

    private integer $C1;
    private float $C2;

    //constructor
    public function __construct(integer $C1, float $C2) {
        $this->C1 = $C1;
        $this->C2 = $C2;
    }

    public function getC1(): integer {
        return $this->C1;
    }
    public function getC2(): float {
        return $this->C2;
    }

    public function setC1(integer $C1): void {
        $this->C1 = $C1;
    }
    public function setC2(float $C2): void {
        $this->C2 = $C2;
    }

    public function MC1() {
        echo __METHOD__ . "\n";
    }

    public function MC2() {
        echo __METHOD__ . "\n";
    }
}