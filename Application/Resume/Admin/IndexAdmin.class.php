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
 * 基础信息
 * @author jry <598821125@qq.com>
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
                ->addFormItem('birthday','time','出生日期','出生日期')
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
