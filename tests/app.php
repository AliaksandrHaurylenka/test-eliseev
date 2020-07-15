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
class UserTest
{
    protected function assert($condition, $message = '')
    {
        echo $message;
        if($condition){
            echo "OK" . PHP_EOL;
        } 
        else  {
            echo 'Fail' . PHP_EOL;
            exit();
        }
    }


    public function testValidateEmptyValues()
    {
        $user = new User();

        $this->assert($user->validate() == false, 'model is not valid ');
        $this->assert(array_key_exists('username', $user->getErrors()), 'check username error ');
        $this->assert(array_key_exists('email', $user->getErrors()), 'check email error ');
    }
}

$test = new UserTest();
$test->testValidateEmptyValues();