<?php

use LDAP\Result;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInt()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getID());
    }

    public function testTokenisAString()
    {
        $item = new Item();

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }
}
