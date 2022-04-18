<?php
use App\Models\User;
class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    /** @test */
    public function that_we_can_get_first_name()
    {
       
        $this->user->setFirstName('karim');
        $this->assertEquals($this->user->getFirstName(), 'karim');
    }
    /** @test */
    public function that_can_get_last_name()
    {
        $this->user->setLastName('ali');
        $this->assertEquals($this->user->getLastName(), 'ali');
    }
    /** @test */
    public function full_name_is_returned(){
    
        $this->user->setFirstName('karim');
        $this->user->setLastName('ali');
        $this->assertEquals($this->user->getFullName(), 'karim ali');
    }
    /** @test */
    public function first_and_last_name_are_trimmed(){
        $this->user->setFirstName(" karim ");
        $this->user->setLastName(" ali ");
        $this->assertEquals($this->user->getFirstName(), 'karim');
        $this->assertEquals($this->user->getLastName(), 'ali');

    }
    /** @test */
    public function email_address_can_be_set(){
        $this->user->setEmail('karim@gmail.com');
        $this->assertEquals($this->user->getEmail(), 'karim@gmail.com');
    }
    /** @test */
    public function email_variables_contains_correct_values(){

        $this->user->setFirstName('karim');
        $this->user->setLastName('ali');
        $this->user->setEmail('karim@gmail.com');

        $emailVariables = $this->user->getEmailVariables();


        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals('karim ali', $emailVariables['full_name']);
        $this->assertEquals('karim@gmail.com', $emailVariables['email']);

        
    }

}