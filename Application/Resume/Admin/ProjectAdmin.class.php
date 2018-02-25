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
 * 个人项目
 * @author jry <598821125@qq.com>
 */
class ProjectAdmin extends AdminController
{
    /**
     * 默认方法
     * @author jry <598821125@qq.com>
     */
    public function index()
    {
        $data_list = D('Project')
            ->where(array('status' => array('gt',-1)))
            // ->order("id desc")
            ->select();

        // 使用Builder快速建立列表页面
        $builder = new \lyf\builder\ListBuilder();
        $builder->setMetaTitle("列表") // 设置页面标题
            ->addTopButton("addnew") // 添加新增按钮
            ->addTopButton("resume") // 添加启用按钮
            ->addTopButton("forbid") // 添加禁用按钮
            ->addTableColumn("id", "ID")
            ->addTableColumn("title", "项目名称")
            ->addTableColumn("create_time", "创建时间", "time")
            ->addTableColumn("status", "状态", "status")
            ->addTableColumn("right_button", "操作", "btn")
            ->setTableDataList($data_list) // 数据列表
            // ->setTableDataPage($page->show()) // 数据列表分页
            ->addRightButton("edit")
            ->addRightButton("forbid")
            ->addRightButton("delete")
            ->display();
    }

    /**
     * 新增
     * @author jry <598821125@qq.com>
     */
    public function add()
    {
        if (request()->isPost()) {
            $object = D('Project');
            $data   = $object->create(format_data());
            if ($data) {
                $id = $object->add();
                if ($id) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \lyf\builder\FormBuilder();
            $builder->setMetaTitle('新增') //设置页面标题
                ->setPostUrl(U('add')) // 设置表单提交地址
                ->addFormItem('title', 'text', '项目名称', '项目名称')
                ->addFormItem("content", "textarea", "项目内容", "项目内容")
                ->display();
        }
    }

    /**
     * 编辑
     * @author jry <598821125@qq.com>
     */
    public function edit($id)
    {
        if (request()->isPost()) {
            // 提交数据
            $object = D('Project');
            $data   = $object->create(format_data());
            if ($data) {
                $result = $object->save($data);
                if ($result) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败', $object->getError());
                }
            } else {
                $this->error($object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \lyf\builder\FormBuilder();
            $builder->setMetaTitle('编辑') //设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->addFormItem('title', 'text', '项目名称', '项目名称')
                ->addFormItem("content", "textarea", "项目内容", "项目内容")
                ->setFormData(D('Project')->find($id))
                ->display();
        }
    }
}
