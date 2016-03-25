<?php
namespace Home\Controller;

use Think\Controller;
class IndexController extends Controller
{


	/**
	 * 构造函数
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * 默认首页
     */
	public function index()
	{
		//二维不起作用   可能是thinkPHP版本问题  不测试了
//		session('name','2222');
//		session('q.e','2222');
		session('name',null);//删除
//		$q = session();//所有
		$q = session('?q');//单个
		var_dump($q);
    }
}