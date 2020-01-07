<?php
//单例模式
class Man
{
    private static $_instance;

    private function __construct()
    {
        echo '我被实例化了！';
    }

    //单例方法
    public static function get_instance()
    {
        var_dump(isset(self::$_instance));

        if(!isset(self::$_instance))
        {
            self::$_instance=new self();
        }
        return self::$_instance;
    }

    //阻止用户复制对象实例
    private function __clone()
    {
        trigger_error('Clone is not allow' ,E_USER_ERROR);
    }

    function test()
    {
        echo("test111");

    }
}
//$test = new man;

$test = man::get_instance();
$test = man::get_instance();

$test->test();

//$test_clone = clone $test;
?>
