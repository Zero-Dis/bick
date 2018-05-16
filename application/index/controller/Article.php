<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Article extends Base{
    public function article(){
        $artid = input('artid');
        // 增加点击量
        Db::name('article')->where('id',$artid)->setInc('click');
        // 文章信息
        $arts = Db::name('article')->find($artid);
        // 子栏目id
        $cates = Db::name('cate')->select();
        $cateids = ChildrenCateId($cates,$arts['cateid']);
        $cateids[] = $arts['cateid'];
        // 热点文章
        $hotArts = Db::name('article')->where('cateid','in',$cateids)->order('click desc')->limit(5)->field('id,thumb,title')->select();
        $this->assign([
            'arts'=>$arts,
            'hotArts'=>$hotArts,
        ]);
        return $this->fetch();
    }

}
?>