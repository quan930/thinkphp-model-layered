<?php
namespace app\index\controller;


use app\common\pojo\Book;
use think\Config;

class Index
{
    public function index()
    {
        Config::set("default_return_type","json");
        $books = model("Book","logic")->findAllBooks();
        return $books;
    }
    public function insert(){
        Config::set("default_return_type","json");
        return json(model("Book","logic")->addBook(new Book('20','万历十五年','12.11')));
    }
    public function update(){
        Config::set("default_return_type","json");
        return json(model("Book","logic")->updateBook(new Book('20','万历十五年','1001')));
    }
    public function delete(){
        Config::set("default_return_type","json");
        return json(model("Book","logic")->deleteBook(new Book('20',null,null)));
    }
}