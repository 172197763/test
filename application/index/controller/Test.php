<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use \LeanCloud\Client;
use \LeanCloud\Object;
class Test extends Controller
{
    //什么cloud
    public function cloud(){
        Client::initialize("odm6RSSuCL6DJjp4es5wltKH-gzGzoHsz", "odUQ7pOOx1DM9lA4x8obk3Hp", "s5sYiyMBVYtm3Wfm5BavTJEP");
        $testObject = new Object("TestObject");
        $testObject->set("words", "Hello World!");
        try {
            $testObject->save();
            echo "Save object success!";
        } catch (Exception $ex) {
            echo "Save object fail!";
        }
    }
    //分页
    public function showPage()
    {
        $list = Db::name('user')->paginate(2);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $this->assign('__PUBLIC__', './public/');
        // 渲染模板输出
        return $this->fetch();
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        echo "<h1>i am Test controller's index function</h1>";
        $info = config();
        p($info);
        // header("HTTP/1.1 400 Not accept");
        // exit;
    }
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
