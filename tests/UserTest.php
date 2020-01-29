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

}

