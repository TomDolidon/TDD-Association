<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{

    public function testUserCanBeCreatedWithValidArgument():void
    {
        $this->assertInstanceOf(
            User::class,
            User::createUser('Sajide', 'Adil', '10/11/1995')
            );
    }

    public function testIdIsConcatenated():void
    {

        $user = User::createUser('sajide', 'adil', '10/11/1995');
        $this->assertEquals('sajideadil', $user->getId());

    }

    public function testIdHasNoUpperCase():void
    {

        $user = User::createUser('SAJIDE', 'ADIL', '10/11/1995');
        $this->assertEquals('sajideadil', $user->getId());

    }

    public function testIdHasNoAccent():void
    {

        $user = User::createUser('sajidé', 'adil', '10/11/1995');
        $this->assertEquals('sajideadil', $user->getId());

    }




}

