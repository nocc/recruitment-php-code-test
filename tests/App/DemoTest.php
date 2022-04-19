<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  :
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use PHPUnit\Framework\TestCase;


class DemoTest extends TestCase
{

    public function test_foo()
    {

    }

    public function test_get_user_info()
    {
        $str = '{"error":0,"data":{"id":1,"username":"hello world"}}';
        $arr = json_decode($str, true);
        $this->assertEquals(true, isset($arr["error"]) && $arr['error'] == "0");
        $this->assertEquals(true, !empty($arr["data"]) && !empty($arr["data"]["id"]));
//        $this->assertEquals(143, $totalPrice);
    }
}
