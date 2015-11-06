<?php
/**
 * Arithmeticクラスのユニットテスト
 */
require_once 'Arithmetic.php';
class TestArithmetic extends PHPUnit_Framework_TestCase
{
    /**
     * @var Arithmetic
     */
    protected $arithmetic;
    /**
     * テスト対象のオブジェクトの生成
     */
    protected function setUp() {
        // TODO Unitテスト開始時動作
        $this->arithmetic = new Arithmetic();
    }
    /**
     * 足し算の検証。10+5=15となることを確認する
     */
    public function testAddition() {
        $this->assertEquals( 15, $this->arithmetic->addition(10, 5) );
    }
    /**
     * 引き算の検証。10-5=5となることを確認する
     */
    public function testSubtraction() {
        $this->assertEquals( 5, $this->arithmetic->subtraction(10, 5) );
    }
    /**
     * 掛け算の検証。10x5=50となることを検証する
     */
    public function testMultiplication() {
        $this->assertEquals( 50, $this->arithmetic->multiplication(10, 5) );
    }
    /**
     * 割り算の検証。10/5=2となることを検証する
     */
    public function testDivision() {
        $this->assertEquals( 2, $this->arithmetic->division(10, 5) );
    }
}
