## 鸣谢
 Markdown解析器源于Parsedown:

 http://parsedown.org

## 伪静态

```
if (-d $request_filename) {
rewrite ^/(.*)$ /index.php?type=$1 last; }
```

## 使用

只需要新建md格式的Markdown文档，然后在titles.ini中填写相同文件名的标题

默认主页文件请新建index.html文件即可

请在服务器设置中将index.php文件设置为最高级默认文档

### 宝塔面板

![宝塔默认文档](https://images.gitee.com/uploads/images/2021/0516/233651_97f8f5f1_6543678.png "宝塔默认文档.png")

### EXAMPLE

若文档名为:test.md

则在titles.ini中一行

test = '文件标题'