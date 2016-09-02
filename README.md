# 一、说明

这是一个在线生成助学金申请表的网站。打开了你就知道他怎么运作了。

但是如果你要用当前版本，请记得：

1. 无csrf防御。无xss防御。
2. 没有数据库。所有数据没有备份。
3. 所有人都能下载到最新生成的那一份文件。所以为了个人信息安全考虑请生成完毕后点击删除按钮来删除文件。

# 二、如何安装

1. 选择一个路径放网站，如/data/wwwroot
    
       mkdir /data && cd /data
       mkdir wwwroot && cd wwwroot 
    
2. 进入/data/wwwroot，克隆本工程并设置权限

       cd /data/wwwroot
       git clone https://github.com/cheneyveron/PHPWord.git
       cd PHPWord
       chmod -R 777 samples

3. 本程序使用Composer管理依赖，所以接下来我们安装相关依赖。

    请先确保你已经安装好了php并设置好了环境变量，然后执行

       cd /data/wwwroot/PHPWord
       chmod +x composer
       php composer
       php composer.phar install

    因为众所周知的原因，国内的服务器访问Composer较慢且不稳定。如果失败了就重试即可。

4. 在Apache/Nginx中添加虚拟主机。网站根目录为Git仓库目录下的samples文件夹

       /data/wwwroot/PHPWord/samples

5. All Done, Enjoy!

6. 如何更新

   当本程序更新时只需要进入/data/wwwroot/PHPWord执行
   
       git pull -u origin master
       chmod -R 777 samples
       
   即可。