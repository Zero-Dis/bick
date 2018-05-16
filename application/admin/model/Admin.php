<?php
namespace app\admin\model;
use think\Model;
use think\Loader;
use think\Db;  // model 有自己的 数据库操作方法
class Admin extends Model{
    //  数据添加
    public function admin_add_model($data){
        $validate = Loader::validate('Admin');  // 引入验证器
        $vad_res = $validate->scene('add')->check($data); // 验证
        if($vad_res === true){  // 验证通过
            $data1 = array();
            $data1['name'] = $data['name'];
            $data1['password'] = md5($data['password']); // 密码加密
            Db::startTrans();  // 开启数据库回滚
            try{
                $this->save($data1); // 添加管理员表
                $uid = $this->id;  // 得到添加管理员时返回的id
                Db::name('auth_group_access')->insert([
                    'group_id'=>$data['group_id'],
                    'uid'=>$uid,
                ]);
                // 提交事务
                Db::commit();
                return 1;
            }catch(\Exception $e){
                // 回滚事务
                Db::rollback();
                return 0;
            }
        }else{  // 验证不通过
            return $validate->getError();
        }
    }
    // 数据修改
    public function admin_edit_model($name){
            $data = input();
            $validate = Loader::validate('Admin');  // 验证
            if(empty($data['password'])){  // 如果没有更改密码
                $v_res = $validate->scene('edit_np')->check($data);
                $data['password'] = $name['password'];    // 如果没有更改密码  复制原密码
            }else{  // 如果有更改密码
                $v_res = $validate->scene('edit_hp')->check($data);
                $data['password'] = md5($data['password']);
            }
            if($v_res === true){  // 验证通过
                // 开启数据库回滚
                Db::startTrans();
                try{
                    $this->update([
                        'name'=>$data['name'],
                        'password'=>$data['password'],
                        'id'=>$data['id'],
                    ]);
                    Db::name('auth_group_access')->where('uid',$data['id'])->update(['group_id'=>$data['group_id']]);
                    // 提交事务
                    Db::commit();
                    return 1;
                }catch (\Exception $e){
                    // 回滚事务
                    Db::rollback();
                    return 0;
                }
            }else{
                return $validate->getError();
            }
    }
    // 数据删除
    public function admin_del_model(){
        $id = input('id');
        if($id == 1){
            return 2;
        }else{
            Db::startTrans();
            try{
                $this->where('id',$id)->delete();
                Db::name('auth_group_access')->where('uid',$id)->delete();
                Db::commit();
                return 1;
            } catch(\Exception $e){
                Db::rollback();
                return 0;
            }
        }
    }
    // 管理员登录
    public function admin_login(){
        $data = input();
        $res = $this::getByName($data['name']);
        if(empty($res)){  // 不存在此管理员
            return 0;
        }else{
            if($res['password'] == md5($data['password'])){  // 密码相等
                session('user',$res['name']); // 存入session
                session('id',$res['id']); // 存入session
                return 1;
            }else{
                return 2;
            }
        }
    }

}
?>