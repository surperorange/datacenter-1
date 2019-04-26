<?php
namespace yunyinqing\datacenter;

class Object {

    public function __construct()
    {

    }

    public static function getObjectCate($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Object/getObjectCateList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getObjectList($cateid = 0)
    {
        $param['id'] = $cateid;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Object/getObjectList',$param);
        return $result ? json_decode($result) : false;
    }
    public static function getObject($id = 0)
    {
        $param['id'] = $id;
        $param['appid'] = Config::APPID;
        $result = (new Request)->request_post(Config::ServerUrl.'/client/Object/getObject',$param);
        return $result ? json_decode($result) : false;
    }
}

?>