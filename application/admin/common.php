<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// 递归 制作栏目数据层级关系
function data_sort($data,$pid=0,$level=0){
    static $arr = array();  // 静态数组
    foreach($data as $k=>$v){
        if($v['pid'] == $pid){
            $v['dataid'] = parent_ids($data,$v['id'],false);  // 查找父级id  形成 id-id-id 字符串
            $v['level'] = $level;  // 用于前台制作缩进
            $arr[] = $v;
            data_sort($data,$v['id'],$level+1);
        }
    }
    return $arr;
}

// 递归 查找 待删除栏目 子集栏目id
function del_before_ids($cates,$cateid){  // $cateid 待删除栏目id
    static $arr = array();
    foreach($cates as $k=>$v){
        if($v['pid'] == $cateid){  // 某个数据pid == 当前栏目的id 即为其 子集
            $arr[] = $v['id'];
            del_before_ids($cates,$v['id']);
        }
    }
    return $arr;  // 返回待删除栏目的 子集栏目id集
}

// 递归 查找 父集栏目id
function parent_ids($datas,$cateid,$change=false){
    static $arr = array();
    if(!$change){  // 动态数组  -- 首次进来清空数组
        $arr = array();
    }
    foreach($datas as $k1=>$v1){
        if($v1['id'] == $cateid){  // 本id
            $arr[] = $cateid;
            parent_ids($datas,$v1['pid'],true);
        }
    }
    asort($arr);  // 数组正向排序
    $arr_res = implode('-',$arr);  // 将数组拼接成字符串
    return $arr_res;
}