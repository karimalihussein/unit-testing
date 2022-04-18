<?php
use App\Models\User;
class UserTest extends \PHPUnit\Framework\TestCase
{
    private $first_name = 'karim';
    private $last_name = 'ali';
    private $email = 'karim@gmail.com';
    private $full_name = 'karim ali';
    public function testThatCanGetFirstName()
    {
        $user = new User;
        $user->setFirstName($this->first_name);
        $this->assertEquals($this->first_name, $user->getFirstName());
    }

    public function testThatCanGetLastName()
    {
        $user = new User;
        $user->setLastName($this->last_name);
        $this->assertEquals($this->last_name, $user->getLastName());
    }

    public function testFullNameisReturned(){
        $user = new User;
        $user->setFirstName($this->first_name);
        $user->setLastName($this->last_name);
        $this->assertEquals($this->full_name, $user->getFullName());
    }

    public function testFirstAndLastNameAreTrimmed(){
        $user = new User;
        $user->setFirstName(" $this->first_name ");
        $user->setLastName(" $this->last_name ");
        $this->assertEquals($this->first_name, $user->getFirstName());
        $this->assertEquals($this->last_name, $user->getLastName());
    }

    public function testEmailAddressCanBeSet(){
        $user = new User;
        $user->setEmail($this->email);
        $this->assertEquals($this->email, $user->getEmail());
    }

    public function testEmailVariablesContainsCorrectValues(){
        $user = new User;
        $user->setFirstName('karim');
        $user->setLastName('ali');
        $user->setEmail('karim@gmail.com');

        $emailVariables = $user->getEmailVariables();

        
        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($this->full_name, $emailVariables['full_name']);
        $this->assertEquals($this->email, $emailVariables['email']);

        
    }

}