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

* ### 解决方法请移至我的博客查看：<a href=//www.youqv.com/azure target="_blank">www.youqv.com/azure</a>

* ### 演示云盘：<a href=//pan.youqv.com target="_blank">pan.youqv.com</a>

----

## 文件外传请先告知作者


### 不会用或者失效请联系QQ80181599<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=80181599&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:80181599:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>或加群179800981<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=51603ad39bf5189e1016a8a01fb65673b576bbaad237e72ea9a0ffc42b806d28"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="搬运工" title="搬运工"></a>
- - - - - - - - - - - - - - - - 
* ### 博客：<a href=//www.youqv.com target="_blank">www.youqv.com</a>
* ### 影视：<a href=//www.1ctv.com target="_blank">www.1ctv.com</a>
* ### git：<a href=//github.com/newcdn target="_blank">github.com/newcdn</a>
* ### 码云：<a href=//gitee.com/newcdn target="_blank">gitee.com/newcdn</a>
* ### 私人云盘：<a href=//pan.youqv.com/ target="_blank">pan.youqv.com</a>









