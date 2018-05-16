<?php
namespace app\admin\model;
use think\Model;
use app\admin\model\Article;
class Cate extends Model{
    public function cate_add_model($data){
        $res = $this->save($data);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }

    public function cate_list_model(){
        $cate = $this->order('sort')->select();
        $sort = data_sort($cate);  // 调用公共函数
        return $sort;
    }

    public function cate_del_model($cateid){
        $cates = $this->select();  // 查询 栏目数组
        $res = del_before_ids($cates,$cateid);  // $res 就是 子集栏目id集
        // 删除所有待删除栏目下面的文章及缩略图
        $all_cateid = $res;
        $all_cateid[]= (int)$cateid;   // 获得所有待删除的栏目id
        foreach($all_cateid as $k=>$v){  // $v  栏目id
            $arts[] = Article::where('cateid',$v)->column('id');
        }
        $arts = array_filter($arts);  // 数组滤空
        foreach($arts as $k=>$v){
            foreach($v as $k1=>$v1){  // $v1 文章id
                Article::destroy($v1);  // 调用Article  model类的删除方法，调用before_delete事件
            }
        }
        // 删除带删除栏目的所有子栏目
        if(!empty($res)){  // 如果存在子集id
            $this::destroy($res);
        }
    }

}
?>