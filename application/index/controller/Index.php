<?php
namespace app\index\controller;
use think\Controller;
use think\Db;


class Index extends Controller{
    public function index(){
        return $this->fetch();
    }
    public function search(){
        if (isset($_GET['name'])){
            /* @var $_GET type */
            $name = $_GET['name'];
            $data = Db::name('book')->field(['_id','image_url','book_name','introduction','url','author'])->where('book_name','like',$name)->select();
            return json($data);
        } else {
            return json($data);
        }
    }
}
