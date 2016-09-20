<?php
namespace app\index\controller;   //命名空间，也说明了文件所在的位置
use Think\Db;              		  //引用数据库操作类
  
class Index
{
    public function index()
    {	
    	var_dump(Db::name('teacher')->find());
    }
}