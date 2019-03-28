<?php
/**
 * Created by PhpStorm.
 * User: daquan
 * Date: 2019-03-28
 * Time: 09:43
 * 逻辑层
 */

namespace app\common\logic;

use think\Model;

class Book extends Model
{
    public function addBook(\app\common\pojo\Book $book){
        return model('Book','model')->insertBook($book);
    }
    public function findAllBooks(){
         return model('Book','model')->selectAllBooks();
    }
    public function findBooksById($id){
        return model('Book','model')->selectBookById($id);
    }
    public function updateBook(\app\common\pojo\Book $book){
        return model('Book','model')->updateBook($book);
    }
    public function deleteBook(\app\common\pojo\Book $book){
        return model('Book','model')->deleteBook($book);
    }
}