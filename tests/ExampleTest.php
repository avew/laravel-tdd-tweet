<?php

use App\Tweet;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testViewAnotherUserTweets()
    {
        $user = factory(User::class)->create([
            'username' => 'johndoe'
        ]);

        $tweet = factory(Tweet::class)->make([
            'body' => 'my first tweets'
        ]);

        $user->tweets()->save($tweet);

        $this->visit('/johndoe')
            ->see('my first tweets');


    }
}
