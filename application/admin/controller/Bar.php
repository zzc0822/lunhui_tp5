<?php
namespace app\admin\controller;
use app\admin\model\BarModel;
use think\db;

Class Bar extends Base{
	/***
	* 显示广告条的列表
	* 
	***/
	public function index(){

		$key = input('key');
        $map = [];
        if($key&&$key!==""){
            $map['title'] = ['like',"%" . $key . "%"];          
        } 
        $Nowpage = input('get.page') ? input('get.page'):1;
        $limits = config('list_rows');// 获取总条数
        $count = Db::name('bar')->where($map)->count();//计算总页面
        $allpage = intval(ceil($count / $limits));
        $bar = new BarModel();
        $lists = $bar->getBarByWhere($map, $Nowpage, $limits);
        $this->assign('Nowpage', $Nowpage); //当前页
        $this->assign('allpage', $allpage); //总页数
        $this->assign('count', $count); 
        $this->assign('val', $key);
        if(input('get.page')){
            return json($lists);
        }
        //print_r(json($lists));
		return $this->fetch();
	}

	//增加广告条
	
	public function add_bar(){
		if(request()->isAjax()){
            $param = input('post.');
            $bar = new BarModel();
            $flag = $bar->insertBar($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
            //return ['code' => 1, 'data' => '', 'msg' => '幻灯片添加成功'];
        }
        return $this->fetch();
	}

	/**
     * [edit_bar 编辑bar]
     * @return [type] [description]
     * @author [田建龙] [864491238@qq.com]
     */
    public function edit_bar()
    {
        $bar = new BarModel();     
        if(request()->isAjax()){

            $param = input('post.');         
            $flag = $bar->updateBar($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

        $id = input('param.id');
        $this->assign('bar',$bar->getOneBar($id));
        return $this->fetch();
    }



    /**
     * [del_article 删除文章]
     * @return [type] [description]
     * @author [田建龙] [864491238@qq.com]
     */
    public function del_bar()
    {
        $id = input('param.id');
        $bar = new BarModel();
        $flag = $bar->delBar($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
    }

	/**
     * [bar_state bar状态]
     * @return [type] [description]
     * @author 
     */
    public function bar_state()
    {
        $id=input('param.id');
        $status = Db::name('bar')->where(array('id'=>$id))->value('status');//判断当前状态情况
        if($status==1)
        {
            $flag = Db::name('bar')->where(array('id'=>$id))->setField(['status'=>0]);
            return json(['code' => 1, 'data' => $flag['data'], 'msg' => '已禁止']);
        }
        else
        {
            $flag = Db::name('bar')->where(array('id'=>$id))->setField(['status'=>1]);
            return json(['code' => 0, 'data' => $flag['data'], 'msg' => '已开启']);
        }
    
    }
}
?>