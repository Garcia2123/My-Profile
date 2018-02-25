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

namespace Resume\Admin;

use Admin\Controller\AdminController;
use lyf\Page;

/**
 * 技能清单
 * @author jry <598821125@qq.com>
 */
class SkillAdmin extends AdminController
{
    /**
     * 默认方法
     * @author jry <598821125@qq.com>
     */
    public function index()
    {
        $keyword        = I('keyword', '', 'string');
        $condition      = array('like', '%' . $keyword . '%');
        $map            = array();
        $map['id|name'] = $condition;
        $map["status"]  = array("egt", "0"); // 禁用和正常状态
        $p              = I('p') ?: 1;
        $object         = D('Team');

        $data_list = $object
            ->page($p, C("ADMIN_PAGE_ROWS"))
            ->where($map)
            ->order("id desc")
            ->select();
        $page = new Page(
            $object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );

        // 使用Builder快速建立列表页面
        $builder = new \lyf\builder\ListBuilder();
        $builder->setMetaTitle("列表") // 设置页面标题
            ->addTopButton("addnew") // 添加新增按钮
            ->addTopButton("resume") // 添加启用按钮
            ->addTopButton("forbid") // 添加禁用按钮
            ->setSearch("请输入ID/Name", U("index"))
            ->addTableColumn("id", "ID")
            ->addTableColumn("name", "Name")
            ->addTableColumn("cover", "Avatar", 'picture')
            ->addTableColumn("position", "Position")
            ->addTableColumn("create_time", "创建时间", "time")
            ->addTableColumn("status", "状态", "status")
            ->addTableColumn("right_button", "操作", "btn")
            ->setTableDataList($data_list) // 数据列表
            ->setTableDataPage($page->show()) // 数据列表分页
            ->addRightButton("edit")
            ->addRightButton("forbid")
            ->addRightButton("delete")
            ->display();
    }
}
