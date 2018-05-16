<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
class Article extends Base{
    public function article_list(){
        $res = Db::name('article')->alias('a')->join('cate b','a.cateid = b.id')->field('a.*,b.catename')->order('id desc')->paginate(8);
        $this->assign('arts',$res);
        return view();
    }

    public function article_add(){
        if(request()->isPost()){
            $data = input();
            $data['time'] = time();
            $article_model = new ArticleModel();
            $res = $article_model -> save($data);
            if($res){
                $this->success('文章添加成功','article_list');
            }else{
                $this->error('文章添加失败');
            }
            return;
        }
        $cate_model = new CateModel();  // 分配栏目数据
        $res = $cate_model->cate_list_model();
        $this->assign('cateres',$res);
        return view();
    }

    public function article_edit(){
        if(request()->isPost()){
            $data = input();
            $article_model = new ArticleModel();
            $res = $article_model -> update($data);
            if($res !== false){
                $this->success('文章编辑成功','article_list');
            }else{
                $this->error('文章编辑失败');
            }
            return;
        }
        $id = input('id');
        $arts = Db::name('article')->find($id);// 分配文章的数据
        $cate_model = new CateModel();  // 分配栏目的数据
        $res = $cate_model->cate_list_model();
        $this->assign([
            'cateres' => $res,
            'arts' => $arts,
        ]);
        return view();
    }

    public function article_del(){
        $id = input('id');
        if(ArticleModel::destroy($id)){  // 删除文章并删除图片 图片删除在model类中
            $this->success('文章删除成功','article_list');
        }else{
            $this->error('文章删除失败');
        }
    }

}
?>