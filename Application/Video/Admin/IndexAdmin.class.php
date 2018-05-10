<?php
namespace Video\Admin;

use Admin\Controller\AdminController;
use lyf\Page;

/**
 * 视频信息
 * @author Yuri <zy514881101@gmail.com>
 */
class IndexAdmin extends AdminController
{
    /**
     * 默认方法
     * @author jry <598821125@qq.com>
     */
    public function index()
    {
        $object = D('Index');

        if(request()->isPost()) {
            $data = $object->create(format_data());

            if(!$data) {
                $this->error('错误！'.$object->getError());
            }

            $id = $object->save($data);

            if(!$id) {
                $this->error('错误！'.$object->getError());
            }

            $this->success('编辑成功！',U('Index/index'));
        } else {
            // 使用Builder快速建立列表页面
            $builder = new \lyf\builder\FormBuilder();
            $builder->setMetaTitle("简历") // 设置页面标题
                ->addFormItem('id','hidden','ID','ID')
                ->addFormItem('name','text','姓名','姓名')
                ->addFormItem('gender','radio','性别','性别',array('-1' => '女','1' => '男'))
                ->addFormItem('mobile','text','手机','手机')
                ->addFormItem('email','text','邮箱','邮箱')
                ->addFormItem('qq','text','QQ','QQ')
                ->addFormItem('birthday','date','出生日期','出生日期')
                ->addFormItem('work_year','text','工作年限','工作年限')
                ->addFormItem('academic','select','学历','学历',D('Index')->academic_list())
                ->addFormItem('major','text','专业','专业')
                ->addFormItem('expect_position','text','期望职位','期望职位')
                ->addFormItem('expect_salary','text','期望月薪','期望月薪')
                ->addFormItem('website','text','个人博客','个人博客')
                ->addFormItem('skill','summernote','技能','技能')
                ->addFormItem('description','summernote','自我评价','自我评价')
                ->setFormData(D('Index')->where(array('status' => 1))->find())
                ->display();
        }
    }
}
