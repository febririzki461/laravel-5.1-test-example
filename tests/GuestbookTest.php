<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GuestbookTest extends TestCase
{
    public function test_name_if_empty()
    {
        $this->visit('/')
             ->see('Guest Book')
             ->click('Guest Book')
             ->landOn('/guestbook')
             ->submitForm('Submit', [
                 'email' => 'mul14@artventure.io',
                 'message' => 'Hello World!'
             ])
             ->notSeeInDatabase('guestbooks', [
                 'email' => 'mul14@artventure.io',
                 'message' => 'Hello World!'
             ])
             ->see('Nama harus diisi');
    }

}
