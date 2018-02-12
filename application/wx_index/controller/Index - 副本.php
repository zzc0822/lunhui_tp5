<?php
namespace app\wx_index\controller;
use think\Controller;
use think\Config;
use think\Loader;
use think\Db;
use Gaoming13\WechatPhpSdk\Wechat;

class Index extends Controller
{
	public function index(){
		$wechat = new Wechat(array(
			'appId' 		=>	Config('appid'),
			'token' 		=> 	Config('token'),
			'encodingAESKey' =>	Config('crypt')));
		// 获取消息
		$msg = $wechat->serve();
		// 处理消息
		//$this->demo($msg);
		//回复消息
		if ($msg['MsgType'] == 'text' && $msg->Content == '你好') {
			$wechat->reply("niha0");
		} else {
			$wechat->reply("听不懂！");
		}
	}

	/**
     * DEMO
     * @param  Object $wechat Wechat对象
     * @param  array  $data   接受到微信推送的消息
     */
    private function demo($data){
        $this->wechat = new Wechat(C('token'),C('appid'),C('crypt'));
        switch ($data['MsgType']) {
            case Wechat::MSG_TYPE_EVENT:
                switch ($data['Event']) {
                    case Wechat::MSG_EVENT_SUBSCRIBE:
                        $this->getSubscribe($data['FromUserName']);
                        //$this->wechat->replyText($data['FromUserName']);
                        break;
                    case Wechat::MSG_EVENT_UNSUBSCRIBE:
                        //取消关注，记录日志
                        $this->getUnSubscribe($data['FromUserName']);
                        break;

                    case Wechat::MSG_EVENT_LOCATION:
                        //位置信息
                        $this->addUserLoc($data['FromUserName'],$data['Latitude'],$data['Longitude']);
                        //$this->wechat->replyText("位置信息:".$data['Latitude'].";经度 ".$data['Longitude']);
                        break;

                    default:
                        $re="欢迎关注广东工商职业学院学生处微信公众号。为了让您能方便快捷的使用学生信息系统，请先绑定后就可以正常使用系统功能";
                        $re.='<a href="'.U('Wx/Index/oauth@www.gdgsxy.net',array('openid'=>$data['FromUserName'])).'">点击立即进行绑定</a>';
                        $this->wechat->replyText($re);
                        break;
                }
                break;

            case Wechat::MSG_TYPE_TEXT:
                switch ($data['Content']) {
                    case '解除绑定':
                        $rs = $this->getUnOauth($data['FromUserName']);
                        //$this->test($rs);
                        $this->wechat->replyText($rs);
                        break;

                    // case '图片':
                    //     //$media_id = $this->upload('image');
                    //     $media_id = '1J03FqvqN_jWX6xe8F-VJr7QHVTQsJBS6x4uwKuzyLE';
                    //     $this->wechat->replyImage($media_id);
                    //     break;

                    // case '语音':
                    //     //$media_id = $this->upload('voice');
                    //     $media_id = '1J03FqvqN_jWX6xe8F-VJgisW3vE28MpNljNnUeD3Pc';
                    //     $this->wechat->replyVoice($media_id);
                    //     break;

                    // case '视频':
                    //     //$media_id = $this->upload('video');
                    //     $media_id = '1J03FqvqN_jWX6xe8F-VJn9Qv0O96rcQgITYPxEIXiQ';
                    //     $this->wechat->replyVideo($media_id, '视频标题', '视频描述信息。。。');
                    //     break;

                    // case '音乐':
                    //     //$thumb_media_id = $this->upload('thumb');
                    //     $thumb_media_id = '1J03FqvqN_jWX6xe8F-VJrjYzcBAhhglm48EhwNoBLA';
                    //     $this->wechat->replyMusic(
                    //         'Wakawaka!', 
                    //         'Shakira - Waka Waka, MaxRNB - Your first R/Hiphop source', 
                    //         'http://wechat.zjzit.cn/Public/music.mp3', 
                    //         'http://wechat.zjzit.cn/Public/music.mp3', 
                    //         $thumb_media_id
                    //     ); //回复音乐消息
                    //     break;

                    // case '图文':
                    //     $this->wechat->replyNewsOnce(
                    //         "全民创业蒙的就是你，来一盆冷水吧！",
                    //         "全民创业已经如火如荼，然而创业是一个非常自我的过程，它是一种生活方式的选择。从外部的推动有助于提高创业的存活率，但是未必能够提高创新的成功率。第一次创业的人，至少90%以上都会以失败而告终。创业成功者大部分年龄在30岁到38岁之间，而且创业成功最高的概率是第三次创业。", 
                    //         "http://www.topthink.com/topic/11991.html",
                    //         "http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg"
                    //     ); //回复单条图文消息
                    //     break;

                    // case '多图文':
                    //     $news = array(
                    //         "全民创业蒙的就是你，来一盆冷水吧！",
                    //         "全民创业已经如火如荼，然而创业是一个非常自我的过程，它是一种生活方式的选择。从外部的推动有助于提高创业的存活率，但是未必能够提高创新的成功率。第一次创业的人，至少90%以上都会以失败而告终。创业成功者大部分年龄在30岁到38岁之间，而且创业成功最高的概率是第三次创业。", 
                    //         "http://www.topthink.com/topic/11991.html",
                    //         "http://yun.topthink.com/Uploads/Editor/2015-07-30/55b991cad4c48.jpg"
                    //     ); //回复单条图文消息

                    //     $this->wechat->replyNews($news, $news, $news, $news, $news);
                    //     break;
                    
                    default:
                        $this->wechat->replyText("欢迎访问xueshengchu 公众平台！您输入的内容是：{$data['Content']}");
                        break;
                }
                break;
            
            default:
                # code...
                break;
        }
    }

	//验证绑定微信公众号
	public function bindWx(){
		if(isset($_GET['echostr'])){
			$this->valid();
		}
	}
	//valid()
	public function valid(){
		$echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            header('content-type:text');
            echo $echoStr;
            exit;
        }
	}
	//checkSignature()检测签名
	public function checkSignature(){
		$signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = "eFVJTVFVt7Yqf7FFD0UFJfVuVVtdAvgG";
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
	}
}

?>