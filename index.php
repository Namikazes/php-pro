<?php

require_once __DIR__ . '/vendor/autoload.php';

class thereIsNoMethod extends Exception{}
class User
{
    private string $name;
    private int $age;
    private string $email;

    public function __call(string $name, array $arguments)
    {
        if(method_exists($this, $name)) {
            $this->$name($arguments[0]);
        } else {
            throw new thereIsNoMethod("There is no such method", 422);
        }
    }

    private function setName($name)
    {
        $this->name = $name;
    }
    private function setAge($age)
    {
        $this->age = $age;
    }
    private function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAll()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
        ];
    }
}

$user = new User();

try{
    $user->setName('Egor');
    $user->setAge(19);
    $user->setEmail('egorsitenko35@gmail.com');
    $user->setFullName('Egor Shytenko');
} catch (thereIsNoMethod $exception) {
    d("Error" . $exception);
}

try{
    $user->setFullName('Egor Shytenko');
} catch (thereIsNoMethod $exception) {
    d("Error" . $exception);
}

try{
    $getUser = $user->getAll();
    d($getUser);
} catch (thereIsNoMethod $exception) {
    d("Error" . $exception);
}
