<?php
namespace app\index\controller;
use think\Db;
class Artlist extends Base{
    // 列表
    public function artlist(){
        $pid = input('cateid');
        $cates = Db::name('cate')->field('id,pid')->select();
        // 子集栏目 id
        $res = ChildrenCateId($cates,$pid);
        $res[] = (int)$pid;
        // 文章列表
        $arts = Db::name('article')->where('cateid','in',$res)->order('id desc')->paginate(8);
        // 热点文章
        $hotArts =  Db::name('article')->where('cateid','in',$res)->order('click desc')->limit(5)->select();
        $this->assign([
            'arts'=>$arts,
            'hotArts'=>$hotArts,
        ]);
        return $this->fetch();
    }

}
?>