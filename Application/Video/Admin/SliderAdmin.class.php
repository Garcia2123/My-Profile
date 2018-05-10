<?php
namespace Video\Admin;

use Admin\Controller\AdminController;
use lyf\Page;

/**
 * 幻灯片信息
 * @author Yuri <zy514881101@gmail.com>
 */
class SliderAdmin extends AdminController
{
    // 公司项目列表
    public function index($company_id='')
    {
        $data_list = D('Exproject')
            ->where(array('company_id' => $company_id))
            ->select();

        $builder = new \lyf\builder\ListBuilder();
        $builder->setMetaTitle("列表") // 设置页面标题
            ->addTopButton("addnew",array('href' => U('add', array('company_id' => $company_id)))) // 添加新增按钮
            ->addTopButton("resume") // 添加启用按钮
            ->addTopButton("forbid") // 添加禁用按钮
            ->addTableColumn("id", "ID")
            ->addTableColumn('title','项目')
            ->addTableColumn("create_time", "创建时间", "time")
            ->addTableColumn("status", "状态", "status")
            ->addTableColumn("right_button", "操作", "btn")
            ->setTableDataList($data_list) // 数据列表
            ->addRightButton("edit")
            ->addRightButton("forbid")
            ->addRightButton("delete")
            ->display();
    }

    // 新增项目
    public function add($company_id='')
    {
        if(!$company_id) {
            $this->error('缺少公司ID');
        }
        if(request()->isPost()) {
            $object = D('Exproject');
            $data   = $object->create(format_data());
            if ($data) {
                $id = $object->add();
                if ($id) {
                    $this->success('新增成功', U('index',array('company_id' => $company_id)));
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
                ->addFormItem('company_id','hidden','公司ID','公司ID')
                ->addFormItem('title', 'text', '项目名称', '项目名称')
                ->addFormItem("content", "textarea", "项目内容", "项目内容")
                ->setFormData(array('company_id' => $company_id))
                ->display();
        }
    }

    // 编辑项目
    public function edit($d='')
    {
        if(request()->isPost()) {
            $object = D('Exproject');
            $data   = $object->create(format_data());
            if ($data) {
                $id = $object->save();
                if ($id) {
                    $this->success('编辑成功', U('index',array('company_id' => $data['company_id'])));
                } else {
                    $this->error('编辑失败,'.$object->getError());
                }
            } else {
                $this->error('编辑失败,'.$object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \lyf\builder\FormBuilder();
            $builder->setMetaTitle('编辑') //设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id','hidden','ID','ID')
                ->addFormItem('company_id','hidden','公司ID','公司ID')
                ->addFormItem('title', 'text', '项目名称', '项目名称')
                ->addFormItem("content", "textarea", "项目内容", "项目内容")
                ->setFormData(D('Exproject')->find($id))
                ->display();
        }
    }
}
