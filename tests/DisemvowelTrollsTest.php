<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DisemvowelTrollsTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once './src/DisemvowelTrolls.php';
    }

    public function testThatSomethingShouldHappen() {
      $this->assertEquals("Ths wbst s fr lsrs LL!", disemvowel("This website is for losers LOL!"));
      $this->assertEquals(disemvowel("No offense but,\nYour writing is among the worst I've ever read"), "N ffns bt,\nYr wrtng s mng th wrst 'v vr rd");
    }
}