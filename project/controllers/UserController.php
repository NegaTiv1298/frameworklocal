<?php
namespace Project\Controllers;
use \Core\Controller;

class UserController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }
    public function show($params)
    {
        //$user = ($this->users [$params['id']]);
        //echo implode(' - ', $user);

        var_dump($this->users[$params['id']]);
    }
    public function info($params)
    {
        $id = $params['id'];
        $key = $params['key'];
        $user = $this->users[$id][$key];
        //echo implode('-', $user);
        var_dump($user);

    }
    public function all()
    {
        var_dump($this->users);
    }
    public function first($params)
    {
        $user = $this->users;
        $n = $params['n'];
        for ($i = 1; $i <= $n; $i++) {
            $result = array_shift($user);
            var_dump($result);
        }

    }

}
