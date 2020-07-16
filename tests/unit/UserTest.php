<?php
namespace tests\unit;

use app\models\User;

/* class UserTest extends TestCase
{
    public function testValidateEmptyValues()
    {
        $user = new User();

        $this->assertFalse($user->validate(), 'model is not valid ');
        $this->assertArrayHasKey('username', $user->getErrors(), 'check username error ');
        $this->assertArrayHasKey('email', $user->getErrors(), 'check email error ');
    }

    public function testWrongValues()
    {
        $user = new User([
            'username' => 'Wrong % Username',
            'email' => 'wrong_email',
        ]);

        $this->assertFalse($user->validate(), 'validate inccorect username and email ');
        $this->assertArrayHasKey('username', $user->getErrors(), 'check inccorect username error ');
        $this->assertArrayHasKey('email', $user->getErrors(), 'check inccorect email error ');
    }

    public function testValidateCorrectValues()
    {
        $user = new User([
            'username' => 'CorrectUsername',
            'email' => 'correct@email.ru',
        ]);

        $this->assertTrue($user->validate(), 'correct model is valid ');
    }
} */


/* class UserTest extends TestCase
{
    public function testSaveIntoDatabase()
    {
        $user = new User([
          'username' => 'TestUserName',
          'email' => 'test@mail.ru'
        ]);

        
        $this->assertTrue($user->save(), 'model is saved ');
    }    
} */



// Очистка базы перед сохранением для тестов повторных 0:51

use tests\TestCase;

class UserTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        User::deleteAll([
            'username' => 'TestUserName',
            'email' => 'test@mail.ru'
          ]);
    }

    public function testSaveIntoDatabase()
    {
        $user = new User([
          'username' => 'TestUserName',
          'email' => 'test@mail.ru'
        ]);

        
        $this->assertTrue($user->save(), 'model is saved ');
    }    
}