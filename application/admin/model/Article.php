<?php
namespace app\admin\model;
use think\Model;
class Article extends Model{
    // 事件
    protected static function init()
    {
        // 文章编辑 事件
        Article::event('before_update',function($article){
            // before_update事件  只针对于 对外调用ArticleModel类的数据更新方法
            //$article 的自我看法：即是 当前操作的模型对象实例（一组对象形式的数组）但不包括$_FILE的值
            if(input('file.')){  // 进行图片上传操作
                //  先删除原来的图片
                $id =  $article->id;
                $src = Article::where('id',$id)->value('thumb');
                @unlink(ROOT_PATH . 'public/uploads/'.$src);
                //  上传新图片
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->rule('rand')->move(ROOT_PATH . 'public/uploads');
                if($info){  // 上传成功
                    $article['thumb'] = $info->getFilename();
                }else{  // 上传失败返回false 不会往下执行
                    return false;
                }
            }
        });
        // 文章添加 事件
        Article::event('before_insert',function($article){
            if(input('file.')){  // 进行图片上传操作
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->rule('rand')->move(ROOT_PATH . 'public/uploads');
                if($info){  // 上传成功
                    $article['thumb'] = $info->getFilename();
                }else{  // 上传失败返回false 不会往下执行
                    return false;
                }
            }
        });
        // 文章删除 事件
        Article::event('before_delete',function($article){
            // 删除缩略图
            $id = $article->id;
            $src = Article::where('id',$id)->value('thumb');
            @unlink(ROOT_PATH . 'public/uploads/'.$src);
        });
    }




}

?>