<?php

class B {

    private integer $B1;
    private float $B2;

    //constructor
    public function __construct(integer $B1, float $B2) {
        $this->B1 = $B1;
        $this->B2 = $B2;
    }

    public function getB1(): integer {
        return $this->B1;
    }
    public function getB2(): float {
        return $this->B2;
    }

    public function setB1(integer $B1): void {
        $this->B1 = $B1;
    }
    public function setB2(float $B2): void {
        $this->B2 = $B2;
    }

    public function MB1() {
        echo __METHOD__ . "\n";
    }

    public function MB2() {
        echo __METHOD__ . "\n";
    }

    public function MB3() {
        echo __METHOD__ . "\n";
    }
}