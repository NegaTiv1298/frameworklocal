<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller
{
    private $pages;
    public function __construct()
    {
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }
    public function show($param)
    {
        $id = $this->pages[$param['id']];
        $pageTitle = $id['title'];
        $text = $id['text'];
        $this->title = $pageTitle;
        return $this->render('page/show', [
            'text' => $text
        ]);

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
