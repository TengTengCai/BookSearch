<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
/**
 * Description of book
 *
 * @author Administrator
 */
class Book extends Controller {
    //put your code here
    function index(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = Db::name('book')->where('_id',$id)->select();
            $this->assign('url',$data[0]['url']);
            $this->assign('book_name',$data[0]['book_name']);
            $this->assign('image_url',$data[0]['image_url']);
            $this->assign('book_type',$data[0]['book_type']);
            $this->assign('introduction',$data[0]['introduction']);
            $this->assign('author',$data[0]['author']);
            $this->assign('publishing',$data[0]['publishing']);
            $this->assign('publishing_time',$data[0]['publishing_time']);
            $this->assign('price',$data[0]['price']);
            $this->assign('editors_choice',$data[0]['editors_choice']);
            $this->assign('content_validity',$data[0]['content_validity']);
            $this->assign('about_author',$data[0]['about_author']);
            $this->assign('catalog',$data[0]['catalog']);
            $this->assign('media_reviews',$data[0]['media_reviews']);
            return $this->fetch();
        } else {
            return $this->redirect('/test/public/Index/index');
        }
    }
}
