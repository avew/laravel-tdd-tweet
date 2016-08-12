<?php

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFoundUserByUsername()
    {
        $createdUser= factory(User::class)->create([
            'username' => 'janedoe'
        ]);

        $foundUser = User::findByUsername('janedoe');

        $this->assertEquals($createdUser->username, $foundUser->username);

        

       

    }
}
