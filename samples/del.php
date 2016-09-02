<?php
/**
 * Created by PhpStorm.
 * User: lvyedehai
 * Date: 2016/9/2
 * Time: 21:33
 */
error_reporting(0);
function delete($info){
    if(is_file($info)) {
        if (unlink($info)) {
            echo "<p>文件{$info}删除完毕...!</p>";
        } else {
            echo "<p>文件{$info}mb.php100.com删除失败...!尝试修改文件权限删除...</p>";
            if (chmod($info, 0777)) {
                unlink($info);
                echo "<p>文件{$info}权限修改后删除完毕...</p>";
            } else {
                echo "<p>文件{$info}无法通过web方式删除，可能是ftp权限对此文件有所设置...</p>";
            }
        }
    }else{
        echo "<p>文件{$info}不存在</p>";
    }
}
delete("./head.jpg");
delete("./results/generated.docx");
echo "<a href='/'>返回首页</a>";
die();