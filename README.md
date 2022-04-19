# recruitment-php-code-test

## 步骤

```shell
git clone https://github.com/zitdev/recruitment-php-code-test.git
cd recruitment-php-code-test
composer install
#写一个App\Demo类的单元测试（文件名：tests/App/DemoTest.php）
#执行单元测试
./vendor/phpunit/phpunit/phpunit tests/App/DemoTest.php 
```

## 題目 4：代碼審批

```
a. geoHelperAddress()

1、出现逻辑漏洞，error不等于0时应该也要跑merchant_id流程，修改建议 封装获取第三方的接口，
如果不返回正确定位，统一获取商位置
2、可能出现代码判断异常，==0判断会把空字符进入逻辑


b. checkStatusCallback()

1、order_id建议不传，使方法更通用
2、没有做未知状态码判断，遇到未知状态码严谨php代码检查会抛异常
```
