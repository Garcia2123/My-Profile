<?php
namespace Video\Admin;

use Admin\Controller\AdminController;
use lyf\Page;

/**
 * 频道
 * @author Yuri <zy514881101@gmail.com>
 */
class ChannelAdmin extends AdminController
{
    // 列表
    public function index()
    {
        $data_list = D('Experience')
            ->where($map)
            // ->order("id desc")
            ->select();

        $attr['name'] = 'project';
        $attr['title'] = '项目经历';
        $attr['class'] = 'label label-success-outline label-pill';
        $attr['href'] = U('Exproject/index',array('company_id' => __data_id__));

        // 使用Builder快速建立列表页面
        $builder = new \lyf\builder\ListBuilder();
        $builder->setMetaTitle("列表") // 设置页面标题
            ->addTopButton("addnew") // 添加新增按钮
            ->addTopButton("resume") // 添加启用按钮
            ->addTopButton("forbid") // 添加禁用按钮
            ->addTableColumn("id", "ID")
            ->addTableColumn("company", "公司")
            ->addTableColumn('position','职位')
            ->addTableColumn("create_time", "创建时间", "time")
            ->addTableColumn("status", "状态", "status")
            ->addTableColumn("right_button", "操作", "btn")
            ->setTableDataList($data_list) // 数据列表
            // ->setTableDataPage($page->show()) // 数据列表分页
            ->addRightButton("edit")
            ->addRightButton("forbid")
            ->addRightButton("delete")
            ->addRightButton('self', $attr)
            ->display();
    }

    // 新增
    public function add()
    {
        if (request()->isPost()) {
            $object = D('Experience');
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
                ->addFormItem('company', 'text', '公司名称', '公司名称')
                ->addFormItem('position', 'text', '职位', '职位')
                ->addFormItem('time_range', 'text', '时间', '时间')
                ->display();
        }
    }

    //  编辑
    public function edit($id)
    {
        if (request()->isPost()) {
            // 提交数据
            $object = D('Experience');
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
                ->addFormItem('company', 'text', '公司名称', '公司名称')
                ->addFormItem('position', 'text', '职位', '职位')
                ->addFormItem('time_range', 'text', '时间', '时间')
                ->setFormData(D('Experience')->find($id))
                ->display();
        }
    }
}
