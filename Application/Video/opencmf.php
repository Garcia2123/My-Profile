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
// 模块信息配置
return array(
    // 模块信息
    'info'       => array(
        'name'        => 'Video',
        'title'       => '视频Demo',
        'icon'        => 'fa fa-play-circle-o',
        'icon_color'  => '#F9B440',
        'description' => '视频demo模块',
        'developer'   => 'Yuri',
        'website'     => 'http://admin.yuri.cool',
        'version'     => '1.7.0',
    ),


    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1'  => array(
            'pid'   => '0',
            'title' => '视频Demo',
            'icon'  => 'fa fa-play-circle-o',
        ),
        '2'  => array(
            'pid'   => '1',
            'title' => '视频管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '频道',
            'icon'  => 'fa fa-info',
            'url'   => 'Video/Channel/index',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '视频',
            'icon'  => 'fa fa-th-list',
            'url'   => 'Video/Index/index',
        ),
    ),
);
