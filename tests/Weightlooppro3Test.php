<?php
/**
 * Tests for WeightLoopPro3
 */

use PHPUnit\Framework\TestCase;
use Weightlooppro3\Weightlooppro3;

class Weightlooppro3Test extends TestCase {
    private Weightlooppro3 $instance;

    protected function setUp(): void {
        $this->instance = new Weightlooppro3(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Weightlooppro3::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
