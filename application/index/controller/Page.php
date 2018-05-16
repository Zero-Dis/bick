<?php
namespace app\index\controller;
use think\Db;
class Page extends Base{
    public function page(){
        $cateid = input('cateid'); // 栏目id
        $page_cates = Db::name('cate')->find($cateid); // 单页栏目数据
        $this->assign('page_cates',$page_cates);
        return $this->fetch();
    }
}
?>