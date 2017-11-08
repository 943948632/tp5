<?php

namespace app\index\controller;

use app\index\model\Blog as Blogs;
use think\Controller;
use think\Request;
use think\Db;
use think\controller\Rest; 
class Blog extends Rest
{
	
	
	public function rest(){  
        switch ($this->method){  
            case 'get':     //查询  
                $this->read($id);  
                break;  
            case 'post':    //新增  
                $this->add();  
                break;  
            case 'put':     //修改  
                $this->update($id);  
                break;  
            case 'delete':  //删除  
                $this->delete($id);  
                break;  
              
        }  
    }  
	
	
	
	
	
	public function read($id="1"){  
	 	$user = new Blogs;
     	$users = $user::get($id);
	    var_dump($users);
	   
		
	}
	
	
	
	 public function add(){  
        $user = new Blogs;
        $param=Request::instance()->param();//获取当前请求的所有变量（经过过滤）  
        var_dump($param);
       
	    if($user->save($param)){  
	        return json(["code"=>1]);  
	    }else{  
	        return json(["status"=>0]);  
	    }  
      
        
    }  
	
	
	
}
?>