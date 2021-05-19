<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{
    public function show1()
    {
        echo '1';
    }
    public function show2()
    {
        echo '2';
    }
    public function act()
    {
        return $this->render('page/act', [
            'header' => 'список юзеров',
            'users'  => ['user1', 'user2', 'user3'],
        ]);
    }
    public function test() {
        $page = new Page; // создаем объект модели

        $data = $page->getById(1); // получим запись с id=3
        var_dump($data);

        $data = $page->getById(2); // получим запись с id=5
        var_dump($data);

        $data = $page->getAll();
        var_dump($data);
    }
}
