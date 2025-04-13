<?php

class D {

    private integer $D1;
    private float $D2;

    //constructor
    public function __construct(integer $D1, float $D2) {
        $this->D1 = $D1;
        $this->D2 = $D2;
    }

    public function getD1(): integer {
        return $this->D1;
    }
    public function getD2(): float {
        return $this->D2;
    }

    public function setD1(integer $D1): void {
        $this->D1 = $D1;
    }
    public function setD2(float $D2): void {
        $this->D2 = $D2;
    }

    public function MD1() {
        echo __METHOD__ . "\n";
    }

    public function MD2() {
        echo __METHOD__ . "\n";
    }

    public function MD3() {
        echo __METHOD__ . "\n";
    }
}