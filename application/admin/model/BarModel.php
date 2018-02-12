<?php

namespace app\admin\model;
use think\model;
use think\Db;

Class BarModel extends Model{
	protected $name = 'bar';

	// 开启自动写入时间戳字段
	protected $autoWriteTimestamp = true;
	//根据搜索条件读取bar列表
	public function getBarByWhere($map,$Nowpage,$limits){
		return $this->where($map)->page($Nowpage, $limits)->order('id desc')->select();
	}

	/**
     * [insertBar 添加幻灯片]
     * @author [田建龙] [864491238@qq.com]
     */
    public function insertBar($param)
    {
        try{
        	//$result = true;
            $result = $this->allowField(true)->save($param);
            if(false === $result){             
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => '幻灯片添加成功'];
            }
        }catch( PDOException $e){
            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

    /**
     * [updateBar 编辑bar]
     * @author 
     */
    public function updateBar($param)
    {
        try{
            $result = $this->allowField(true)->save($param, ['id' => $param['id']]);
            if(false === $result){          
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{
                return ['code' => 1, 'data' => '', 'msg' => 'Bar编辑成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

    /**
     * [getOneBar 根据bar id获取一条信息]
     * @author [田建龙] [864491238@qq.com]
     */
    public function getOneBar($id)
    {
        return $this->where('id', $id)->find();
    }

    /**
     * [delBar 删除bar]
     * @author 
     */
    public function delBar($id)
    {
        try{
            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => 'Bar删除成功'];
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
}
?>