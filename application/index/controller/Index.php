<?php
namespace app\index\controller;
use think\Db;
use EasyWeChat\Factory;
class Index
{
    public function index()
    {
    	header('Content-type:text/html;charset=utf-8');
        //file_put_contents('a.txt', 'xxx');
        $options = [
            'app_id'    => 'wx8b6ef35602769ee2',
            'secret'    => 'd4624c36b6795d1d99dcf0547af5443d',
            'token'     => 'nTV1NeZRS2e20mh0YpH2qyHy8RURRwZW',
            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            'verify'=>false
            ],
        ];

       // $url='http://www.tuling123.com/openapi/api';

        $app = Factory::officialAccount($options);
        $server = $app->server;
        $user = $app->user;
        $server->push(function($message) use ($user){
            $fromUser = $user->get($message['FromUserName']);
             switch ($message['MsgType']) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
					$url='http://www.tuling123.com/openapi/api?key=b68abb5ac366485a9b608218fce86f94&info'.$message['Content'].$fromUser['openid'];
					$ch = curl_init();
				    curl_setopt($ch, CURLOPT_URL, $url); 
				    curl_setopt($ch,CURLOPT_HEADER,0);
				    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:12.0) Gecko/20120101 Firefox/17.0');
				    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
				    $data = curl_exec($ch);
				    curl_close($ch);
					$result = json_decode($data,true);
					if($result){
					    if($result['code']=='10001'){
					        $res = '错误';
					    }else{
					        $res = $result['code'].$result['text'];
					    }
					}else{
					    $res = '无法识别';
					}
                    return $res;
                    break;
                case 'image':
                    //$res = Db::table('user')->select();
                    //file_put_contents('a.txt', 'json_encode($res)');
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
        });
        return $server->serve();
    }

    /**
     * 模拟post进行url请求
     * @param string $url
     * @param string $param
     */
    function request_post($url = '', $param = '') {
        if (empty($url) || empty($param)) {
            return false;
        }
        
        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        
        return $data;
    }
}
