<?php
declare (strict_types = 1);

namespace app\common\model;
use think\facade\Request;
use think\Model;
use app\admin\model\Plate;

/**
 * @mixin think\Model
 */
class Menu extends Model
{
    public function getUrlAttr($url,$data)
    {
        if ($url != "") {
            return $url;
        }else{
            $domain = Request::instance()->domain();
            $type = Plate::find($data["pid"])["type"];
            if ($type == 1) {
                return $domain . url("index/index/modlist",["id" => $data['pid']]);
            }else{
                return $domain . url("index/index/artlist",["id" => $data["pid"]]);
            }
        }
    }
}
