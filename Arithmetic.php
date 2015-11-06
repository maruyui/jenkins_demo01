<?php
/**
 * 四則演算を行うクラス
 */
class Arithmetic
{
    /**
     * 引数x,yの足し算を行う
     */
    public function addition($x, $y) {
        $ret = $x + $y;
        return($ret);
    }
    /**
     * 引数x,yの引き算を行う
     */
    public function subtraction($x, $y) {
        $ret = $x - $y;
        return($ret);
    }
    /**
     * 引数x,yの掛け算を行う
     */
    public function multiplication($x, $y) {
        $ret = $x * $y;
        return($ret);
    }
    /**
     * 引数x,yの割り算を行う
     */
    public function division($x, $y) {
        $ret = $x / $y;
        return($ret);
    }
}
