<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Imglist extends Base{
    public function imglist(){
        $cateid = input('cateid');
        $cates = Db::name('cate')->field('id,pid')->select();
        $cateids = ChildrenCateId($cates,$cateid);
        $cateids[] = (int)$cateid;
        $arts = Db::name('article')->where('cateid','in',$cateids)->field('id,thumb,time,title')->order('id desc')->paginate(12);
//        dump($arts);
        $this->assign('arts',$arts);
        return $this->fetch();
    }
}
?>