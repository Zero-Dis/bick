<?php
// 应用公共文件

// 查找子集栏目 id
function ChildrenCateId($cates,$id){
    static $arr = array();
    foreach($cates as $k=>$v){
        if($v['pid'] == $id){
            $arr[] = $v['id'];
            ChildrenCateId($cates,$v['id']);
        }
    }
    return $arr;
}

// 查找父集栏目
function ParentCate($cates,$pid){
    static $arr = array();
    foreach($cates as $k=>$v){
        if($v['id'] == $pid ){
            $arr[] = $v;
            ParentCate($cates,$v['pid']);
        }
    }
    return $arr;
}

?>