<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     public function test_login_form(){

        $response = $this->get('/login');

        $response->assertStatus(200);
     }


     public function test_user_duplication(){

        $user1 = User::make([
            'name' => 'Ray',
            'email' => 'ray@gmail.com',
         
        
        ]);

        $user2 = User::make([
            'name' => 'John',
            'email' => 'john@gmail.com',
           
        
        ]);

        $this->assertTrue($user1->name != $user2->namespace);
     }

     public function test_it_stores_new_users(){

        $this->withoutMiddleware();
        $response = $this->post('/register',[
            'name' => 'Rexi',
            'email' => 'rexi@gmail.com', 
            'password' => '12345u678',
            'password_confirmation' => '12345u678'
        ]);

        
        $response->assertRedirect('/home');
     }
      
}
