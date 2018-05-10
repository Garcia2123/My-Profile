<?php
namespace Video\Controller;

use Home\Controller\HomeController;

/**
 * 默认控制器
 * @author Yuri <zy514881101@gmail.com>
 */
class IndexController extends HomeController
{
    /**
     * 前端获取视频信息的接口
     * @author Yuri <zy5148811015@gmail.com>
     */
    public function index($cid)
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Credentials:true');
        $list = D('Index')
            ->where(array('status' => 1,'cid' => $cid))
            ->field('id, title, subtitle, cover')
            ->select();
        // dump($info);
        if($list) {
            $info['status'] = true;
            $info['data'] = $list;
        } else {
            $info['status'] = false;
        }
        $this->ajaxReturn($info);
    }

    public function detail($id)
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Credentials:true');
        $info = D('Index')->find($id);
        if($info) {
            $res['status'] = true;
            $res['data'] = $info;
        } else {
            $res['status'] = false;
        }
        // dump($info);
        $this->ajaxReturn($res);

    }
}
