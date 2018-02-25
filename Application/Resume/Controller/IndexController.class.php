<?php
// +----------------------------------------------------------------------
// | 零云 [ 简单 高效 卓越 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lingyun.net All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com>
// +----------------------------------------------------------------------
// | 版权申明：零云不是一个自由软件，是零云官方推出的商业源码，严禁在未经许可的情况下
// | 拷贝、复制、传播、使用零云的任意代码，如有违反，请立即删除，否则您将面临承担相应
// | 法律责任的风险。如果需要取得官方授权，请联系官方http://www.lingyun.net
// +----------------------------------------------------------------------
namespace Block\Controller;

use Home\Controller\HomeController;
use lyf\Page;

/**
 * 默认控制器
 * @author jry <598821125@qq.com>
 */
class IndexController extends HomeController
{
    /**
     * 首页
     * @author jry <598821125@qq.com>
     */
    public function index()
    {
        $team_list = D('Team')->where(array('status' => 1))->limit(6)->order('id desc')->select();
        $this->assign('team_list',$team_list);
        $this->assign('meta_title', 'Home');
        $this->display();
    }

    // public function partners()
    // {
    // 	$this->assign('meta_title', 'Partners');
    //     $this->display();
    // }

    public function progress()
    {
        $this->assign('meta_title', 'Progress');
        $this->display();
    }

    public function condition()
    {
        $this->assign('meta_title', 'Condition');
        $this->display();
    }

    // public function team()
    // {
    // 	$team_list = D('Team')->where(array('status' => 1))->limit(6)->order('id desc')->select();
    //     $advisor_list = D('Advisor')->where(array('status' => 1))->limit(6)->order('id desc')->select();

    //     $this->assign('team_list',$team_list);
    //     $this->assign('advisor_list',$advisor_list);
    //     $this->assign('meta_title', 'Team');
    //     $this->display();
    // }
}
