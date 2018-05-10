<?php
namespace Video\Model;

use Common\Model\Model;

/**
 * 默认
 * @author Yuri <zy514881101@gmail.com>
 */
class IndexModel extends Model
{
    /**
     * 数据库表名
     * @author Yuri <zy514881101@gmail.com>
     */
    protected $tableName = 'video_index';

    /**
     * 自动验证规则
     * @author jry <598821125@qq.com>
     */
    protected $_validate = array(
        // array('uid', 'require', '用户ID必须', self::MUST_VALIDATE, 'regex', self::MODEL_INSERT),
        // array('title', 'require', '请输入收货人姓名', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author jry <598821125@qq.com>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_BOTH, 'function'),
        array('status', 1, self::MODEL_INSERT, 'string'),
    );

    /**
     * 查找后置操作
     * @author jry <598821125@qq.com>
     */
    protected function _after_find(&$result, $options)
    {

    }

    /**
     * 查找后置操作
     * @author jry <598821125@qq.com>
     */
    protected function _after_select(&$result, $options)
    {
        foreach ($result as &$record) {
            $this->_after_find($record, $options);
        }
    }

    // 学历
    public function academic_list($id='')
    {
        $list['1'] = '初中';
        $list['2'] = '高中';
        $list['3'] = '本科';
        $list['4'] = '研究生';
        $list['5'] = '博士';

        return $id ? $list[$id] : $list;
    }

    // 获取完整信息
    public function get_full_info($id='') {
    }
}
