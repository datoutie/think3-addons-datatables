<?php
namespace Addons\Datatables;
class DatatablesAddon extends \Think\Addons
{
    public $info = [
        'name' => '表格插件',
        'title' => '',
        'description' => '',
        'status' => 0,
        'author' => '',
        'version' => '0.1'
    ];

    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }

    /**
     * 实现的testHook钩子方法
     * @return mixed
     */
    public function temphook($param)
    {
        $this->assign($param);
        //$this->assign('addons_config', $this->getConfig());
		$this->display(T('Addons://Datatables@Index/Index'));
    }
}