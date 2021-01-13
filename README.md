# 说明文档

## oneindex伪静态规则设置

```nginx
if (!-f $request_filename){
set $rule_0 1$rule_0;
}
if (!-d $request_filename){
set $rule_0 2$rule_0;
}
if ($rule_0 = "21"){
rewrite ^/(.*)$ /index.php?/$1 last;
}
```

- - - - - - - - - - - - - - - - 
## 关于获取appid暂时出现问题的解决办法
### 暂时出现问题
此服务暂时出现了问题，请重试。如果仍然看到此消息，请稍后再试哦。

* ### 解决方法请移至我的博客查看：

* ### 演示云盘：

----

## 文件外传请先告知作者


### 不会用或者失效请留言
- - - - - - - - - - - - - - - - 
* ### 博客：
* ### 影视：<a href=//www.1ctv.com target="_blank">www.1ctv.com</a>
* ### git：<a href=//github.com/newcdn target="_blank">github.com/newcdn</a>
* ### 码云：<a href=//gitee.com/newcdn target="_blank">gitee.com/newcdn</a>
* ### 私人云盘：









