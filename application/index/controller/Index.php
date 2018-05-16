<?php
namespace app\index\controller;
use think\Db;
class Index extends  Base
{
    public function index()
    {
        // 最新文章
        $index_arts = Db::name('article')->alias('a')->join('cate c','a.cateid=c.id')->field('a.*,c.catename')->order('id desc')->limit(10)->select();
        // 热点文章
        $hot_arts = Db::name('article')->order('click desc')->field('id,thumb,title')->limit(5)->select();
        // 合作机构
        $links = Db::name('link')->order('sort')->select();
        // 轮播 -- 推荐 文章
        $rec_arts = Db::name('article')->where('rec',1)->order('id desc')->limit(4)->field('id,title,thumb')->select();
        // 推荐栏目
        $res_index_cates = Db::name('cate')->where('rec_index',1)->order('id')->field('id,type,catename')->select();

        $this->assign([
            'index_arts'=>$index_arts,
            'hot_arts'=>$hot_arts,
            'links'=>$links,
            'rec_arts'=>$rec_arts,
            'res_index_cates'=>$res_index_cates,
        ]);
        return $this->fetch();
    }

}
