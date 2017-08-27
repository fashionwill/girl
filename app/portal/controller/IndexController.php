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
    	$result=Db::name('face')->select();
    	print_r($result);
       // return $this->fetch(':index');
    }
    /*ajax获取数据*/
    public function loaddata()
    {
       // 查询状态为1的用户数据 并且每页显示10条数据
    	echo $page=$this->request->param('p', 1, 'intval');
    	echo $type=$this->request->param('type', 1, 'intval');

		//$list = Db::name('face')->paginate(1,$page);
		$list=Db::table('face')->page($page,10)->select();

		// 把分页数据赋值给模板变量list
		$this->assign('list', $list);
		print_r($list);
    }

}
