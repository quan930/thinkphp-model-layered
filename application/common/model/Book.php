<?php
/**
 * Created by PhpStorm.
 * User: daquan
 * Date: 2019-03-28
 * Time: 09:41
 * 数据层
 */

namespace app\common\model;


use think\Model;

class Book extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'phpbook';

    public function insertBook(\app\common\pojo\Book $book){
        $this->data([
            'id'=>$book->id,
            'name'=>$book->name,
            'price'=>$book->price
        ]);
        return $this->save();
    }
    public function deleteBook(\app\common\pojo\Book $book){
        return $this->where('id','=',$book->id)->delete();
    }
    public function updateBook(\app\common\pojo\Book $book){
        return $this->save(['name'=>$book->name,'price'=>$book->price],['id'=>$book->id]);
    }
    public function selectAllBooks(){
        $books=[];
        $list = $this->field('id,name,price')->select();
        foreach ($list as $book){
            array_push($books,new \app\common\pojo\Book($book['id'],$book['name'],$book['price']));
        }
        return $books;
    }
    public function selectBookById($id){
        $book = $this->where("id",$id)->field('id,name,price')->find();
        return $book;
    }
}