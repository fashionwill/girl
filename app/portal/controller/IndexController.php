<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use think\Db;

class IndexController extends HomeBaseController
{
    public function index()
    {
    	/*获取数据库数据*/
    	// $result=Db::name('face')->select();
    	// print_r($result);
        return $this->fetch(':index');
    }
    /*ajax获取数据*/
    public function loaddata()
    {
       // 查询状态为1的用户数据 并且每页显示10条数据
        $page=$this->request->param('p', 1, 'intval');
        $type=$this->request->param('type', 1, 'intval');	
		$data=Db::name('face')->page($page,10)->select()->toArray();
		//var_dump(count($data));
		if(count($data))
		{
          return json(['data'=>$data,'code'=>'success','message'=>'success']);
		}
		else
		{
		  return json(['data'=>$data,'code'=>'error','message'=>'no data']);
		}
		
    }

}
