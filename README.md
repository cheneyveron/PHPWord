# 一、说明

这是一个在线生成助学金申请表的网站。打开了你就知道他怎么运作了。

但是如果你要用当前版本，请记得：

1. 无csrf防御。无xss防御。
2. 没有数据库。所有数据没有备份。
3. 为了个人信息安全考虑请生成完毕后点击删除按钮来删除文件。


# 二、如何安装

## 对于Linux系统

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


## 对于Windows系统

1. 安装git

   git是一个分布式版本控制系统，可以让代码的管理变得有序，是一个必备的工具。将来我们更新时同样要用到git。

   到

    https://github.com/git-for-windows/git/releases/download/v2.10.1.windows.1/Git-2.10.1-64-bit.exe

   安装最新版的64位Git for Windows。

2. 安装PHP

   我们的网站使用PHP编写，所以需要PHP运行环境才能跑起来。

   可以使用XAMPP、PHPStudy等工具一键安装PHP+Apache/Nginx，也可以到php官网和nginx官网手动下载安装和配置这两个软件。网上教程颇多，在此不再赘述。

   **请注意**: PHP的版本必须>=5.3.2。推荐使用最新版PHP 7

3. 拉取代码

   我们先选择一个目录放网站，如C:\wwwroot\b.com

   右击开始菜单，选择命令提示符

   输入：

    cd C:\wwwroot\b.com

    git clone https://github.com/cheneyveron/PHPWord.git

    cd PHPWord

    chmod -R 777 samples

4. 使用Composer安装依赖

   Composer是一个PHP的依赖管理软件，类似于Java的Marven/Gradle或者NodeJS的NPM。简而言之，Composer帮助PHP开发者快速使用已有的组件来加快开发速度、提高代码质量并提高整个工程的可维护性。

   到

    https://getcomposer.org/Composer-Setup.exe

   下载并安装Composer。

   安装完毕后，关闭命令提示符再打开以让环境变量生效。

   接下来执行下面的代码，先进入网站目录，然后安装依赖：

    cd C:\wwwroot\b.com

    composer install

   因为众所周知的原因，国内的服务器访问Composer较慢且不稳定。如果失败了就重试即可。

5. 使用IIS/Apache/Nginx建立虚拟主机

   这一步取决于你的服务器软件。总之不建立虚拟主机那外界是不能访问的。

   虚拟主机的网站根目录设定为PHPWord目录下的samples文件夹，例如本文中网站根目录应该为：C:\wwwroot\b.com\PHPWord\samples

# 如何更新

   当本程序更新时只需要进入/data/wwwroot/PHPWord执行
   
       git pull
       
       chmod -R 777 samples
       
   即可。
