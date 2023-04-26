<?php

use PHPUnit\Framework\TestCase;

class User2Test extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User2('penis@pump.it.up');

        $mailer = $this->createMock(Mailer::class);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Boobs'));
    }
}