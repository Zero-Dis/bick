<?php
namespace app\index\controller;
use think\Db;
class Search extends Base
{
    public function search()
    {
        // 搜索
        $keywords=input('keywords');
        $serRes = Db::name('article')->order('id desc')->where('title','like','%'.$keywords.'%')->whereOr('keywords','like','%'.$keywords.'%')->paginate(8,false,$config = ['query'=>array('keywords'=>$keywords)]);
        // 推荐
        $serHot = Db::name('article')->order('click desc')->field('id,thumb,title')->limit(5)->select();
        $this->assign(array(
            'serRes'=>$serRes,
            'keywords'=>$keywords,
            'serHot'=>$serHot,
            ));
        return view();
    }
}
