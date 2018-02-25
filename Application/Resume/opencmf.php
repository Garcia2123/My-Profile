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
        'name'        => 'Resume',
        'title'       => '个人简历',
        'icon'        => 'fa fa-users',
        'icon_color'  => '#F9B440',
        'description' => '个人简历模块',
        'developer'   => 'Yuri',
        'website'     => 'http://resume.yuri.cool',
        'version'     => '1.7.0',
        // 'dependences' => array(
        //     'Admin' => '1.6.2',
        // ),
    ),


    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1'  => array(
            'pid'   => '0',
            'title' => '个人简历',
            'icon'  => 'fa fa-user',
        ),
        '2'  => array(
            'pid'   => '1',
            'title' => '个人简历',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '基本信息',
            'icon'  => 'fa fa-info',
            'url'   => 'Resume/Index/index',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '工作经历',
            'icon'  => 'fa fa-building',
            'url'   => 'Resume/Experience/index',
        ),
        '5' => array(
            'pid'   => '2',
            'title' => '个人项目',
            'icon'  => 'fa fa-list',
            'url'   => 'Resume/Project/index',
        ),
        // '5'  => array(
        //     'pid'   => '2',
        //     'title' => '技能清单',
        //     'icon'  => 'fa fa-skill',
        //     'url'   => 'Resume/Information/index',
        // ),
    ),
);
