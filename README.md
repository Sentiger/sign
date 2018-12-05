# 微服务签名算法
## package源安装
> `composer require sentiger/sign -vvv` 暂时没有发布

## 私有源安装
```javascript
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://code.lrwanche.com/shiwh/ali-dy.git"
    }
  ],
  "require": {
    "sentiger/ali-dy": "dev-master"
  }
}
```


## 配置
查看阿里大鱼文档

## 使用
```php
$config    = [
    'accessKeyId'     => 'xxxx',
    'accessKeySecret' => 'xxx',
    'signName'        => 'xxx',
    'templateCode'    => 'xxx',
];
$smsClient = new \Sentiger\AliDy\SMSDy($config);

$res = $smsClient->sendSMS('17602191131', [
    'TemplateParam' => [
        // 这个里面是短信模板中的变量，根据实际情况设置变量名称
        'code' => 'xx'
    ]
]);

print_r($res);
```
