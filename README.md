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

### EXAMPLE

若文档名为:test.md

则在titles.ini中一行

test = '文件标题'