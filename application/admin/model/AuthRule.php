<?php
namespace app\admin\model;
use think\Model;
class AuthRule extends Model{
    public function AuthRule_select(){
        $data = $this->order('sort')->select();
        $sort_res = data_sort($data);
        return $sort_res;
    }

    public function AuthRule_del($id){
        $data = $this->select();
        $del_before_ids = del_before_ids($data,$id);
        return $del_before_ids;
    }
}
?>