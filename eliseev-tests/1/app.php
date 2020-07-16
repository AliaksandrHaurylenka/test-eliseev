<?php

use app\models\User;

require(__DIR__ . '/_bootstrap.php');


// 1 test 0:26
// $user = new User();

// $user->username = "Alex";
// $user->email = 'goric0312@mail.ru';

// print_r($user->getAttributes());


// 2 test 0:28

// class UserTest
// {
//     public function testValidateEmptyValues() {
//         $user = new User();

//         echo 'validate empty username and email ';
//         if ($user->validate() == false) {
//             echo "OK" . PHP_EOL;
//         } 
//         else  {
//             echo 'Fail' . PHP_EOL;
//             exit();
//         }

//         echo 'check empty username error ';
//         if(array_key_exists('username', $user->getErrors())){
//             echo "OK" . PHP_EOL;
//         } 
//         else  {
//             echo 'Fail' . PHP_EOL;
//             exit();
//         }

//         echo 'check empty email error ';
//         if(array_key_exists('email', $user->getErrors())){
//             echo "OK" . PHP_EOL;
//         } 
//         else  {
//             echo 'Fail' . PHP_EOL;
//             exit();
//         }
//     }
    
// }

// $test = new UserTest();
// $test->testValidateEmptyValues();


// 3 test 0:37
// class UserTest
// {
//     protected function assert($condition, $message = '')
//     {
//         echo $message;
//         if($condition){
//             echo "OK" . PHP_EOL;
//         } 
//         else  {
//             echo 'Fail' . PHP_EOL;
//             exit();
//         }
//     }


//     public function testValidateEmptyValues()
//     {
//         $user = new User();

//         $this->assert($user->validate() == false, 'model is not valid ');
//         $this->assert(array_key_exists('username', $user->getErrors()), 'check username error ');
//         $this->assert(array_key_exists('email', $user->getErrors()), 'check email error ');
//     }
// }

// $test = new UserTest();
// $test->testValidateEmptyValues();


// 4 test 0:38
// class UserTest
// {
//     protected function assert($condition, $message = '')
//     {
//         echo $message;
//         if($condition){
//             echo "OK" . PHP_EOL;
//         } 
//         else  {
//             echo 'Fail' . PHP_EOL;
//             exit();
//         }
//     }

//     protected function assertTrue($condition, $message = '')
//     {
//         $this->assert($condition === true, $message);
//     }
//     protected function assertFalse($condition, $message = '')
//     {
//         $this->assert($condition === false, $message);
//     }
//     protected function assertArrayHasKey($key, $array, $message = '')
//     {
//         $this->assert(array_key_exists($key, $array), $message);
//     }


//     public function testValidateEmptyValues()
//     {
//         $user = new User();

//         $this->assertFalse($user->validate(), 'model is not valid ');
//         $this->assertArrayHasKey('username', $user->getErrors(), 'check username error ');
//         $this->assertArrayHasKey('email', $user->getErrors(), 'check email error ');
//     }
// }

// $test = new UserTest();
// $test->testValidateEmptyValues();


// 5 test 0:40
/* use tests\TestCase;

class UserTest extends TestCase
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
}

$test = new UserTest();
$test->testValidateEmptyValues();

$test = new UserTest();
echo($test->testWrongValues());

$test = new UserTest();
$test->testValidateCorrectValues(); */


// Автоматизация тестирования 0:42

/* $class = new \ReflectionClass('\tests\UserTest');
foreach($class->getMethods() as $method) {
    if(substr($method->name, 0, 4) == 'test') {
        echo 'Test' . $method->class . '::' . $method->name . PHP_EOL . PHP_EOL;
        $test = new $method->class;
        $test->{$method->name}();
        echo PHP_EOL;
    }
} */


// Очистка базы перед сохранением для тестов повторных 0:51

$class = new \ReflectionClass('\tests\unit\UserTest');
foreach($class->getMethods() as $method) {
    if(substr($method->name, 0, 4) == 'test') {
        echo 'Test' . $method->class . '::' . $method->name . PHP_EOL . PHP_EOL;
        $test = new $method->class;
        $test->setUp();
        $test->{$method->name}();
        $test->tearDown();
        echo PHP_EOL;
    }
}