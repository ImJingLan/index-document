## 鸣谢
 Markdown解析器源于Parsedown:

 http://parsedown.org

## 伪静态

```
if (-d $request_filename) {
rewrite ^/(.*)$ /index.php?type=$1 last; }
```
