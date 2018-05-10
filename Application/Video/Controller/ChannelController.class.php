<?php
namespace Video\Controller;

use Home\Controller\HomeController;

/**
 * 默认控制器
 * @author Yuri <zy514881101@gmail.com>
 */
class ChannelController extends HomeController
{
    /**
     * 前端获取频道信息
     * @author Yuri <zy5148811015@gmail.com>
     */
    public function index()
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Credentials:true');
        $list = D('Channel')
            ->where(array('status' => 1))
            ->order('sort, id')
            ->select();
        if($list) {
            $info['status'] = true;
            $info['data'] = $list;
        } else {
            $info['status'] = false;
        }
        // dump($info);
        $this->ajaxReturn($info);

    }
}
