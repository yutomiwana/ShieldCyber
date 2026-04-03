<?php
/**
 * Tests for ShieldCyberLab
 */

use PHPUnit\Framework\TestCase;
use Shieldcyberlab\Shieldcyberlab;

class ShieldcyberlabTest extends TestCase {
    private Shieldcyberlab $instance;

    protected function setUp(): void {
        $this->instance = new Shieldcyberlab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shieldcyberlab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
