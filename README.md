# enroll
基于vkphp的招聘会现场签到   

# 系统安装
1、`git clone https://github.com/voidking/enroll.git`

2、利用navicat等工具连接到本地mysql数据库，创建数据库enroll，字符集选择`utf8 -- UTF-8 Unicode`，排序规则选择`utf8_general_ci`。

3、导入enroll项目中的enroll.sql文件。

4、更改app/smarty/templates_c文件夹权限。
```
cd app/smarty/
chmod -R 777 templates_c
```

# 清空表命令
```
truncate en_student;
```

# 效果图
![](http://7oxjrx.com1.z0.glb.clouddn.com//imgs/enroll/01.jpg?imageView2/0/w/500)  

![](http://7oxjrx.com1.z0.glb.clouddn.com//imgs/enroll/02.jpg?imageView2/0/w/500)  

![](http://7oxjrx.com1.z0.glb.clouddn.com//imgs/enroll/03.jpg?imageView2/0/w/500)
