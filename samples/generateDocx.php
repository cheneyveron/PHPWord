<?php

$uploaddir = './';
$uploadfile = '';
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/pjpeg"))
    && ($_FILES["file"]["size"] < 200000))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "上传失败: " . $_FILES["file"]["error"] . "<br />";
        die();
    }
    else
    {

        $uploadfile = $uploaddir . 'head.jpg';

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        } else {
            echo "文件有误。\n";
            die();
        }
    }
}
else
{
    echo "文件有误。";
    die();
}



include_once 'Sample_Header.php';

// Template processor instance creation
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('resources/template.docx');

// Simple table
$templateProcessor->setImageValue('image1.jpeg', $uploadfile);
$templateProcessor->setValue('name', $_POST["name"]);
$templateProcessor->setValue('sex', $_POST["sex"]);
$templateProcessor->setValue('birth', $_POST["birth"]);
$templateProcessor->setValue('nation', $_POST["nation"]);
$templateProcessor->setValue('poli', $_POST["poli"]);
$templateProcessor->setValue('entertime', $_POST["entertime"]);
$templateProcessor->setValue('id', $_POST["id"]);
$templateProcessor->setValue('phone', $_POST["phone"]);
$templateProcessor->setValue('college', $_POST["college"]);
$templateProcessor->setValue('famnum', $_POST["famnum"]);
$templateProcessor->setValue('totleinc', $_POST["totleinc"]);
$templateProcessor->setValue('avein', $_POST["avein"]);
$templateProcessor->setValue('incfrom', $_POST["incfrom"]);
$templateProcessor->setValue('address', $_POST["address"]);
$templateProcessor->setValue('schoolid', $_POST["schoolid"]);
$templateProcessor->setValue('cafeid', $_POST["cafeid"]);
$templateProcessor->setValue('name1', $_POST["name1"]);
$templateProcessor->setValue('age1', $_POST["age1"]);
$templateProcessor->setValue('relation1', $_POST["relation1"]);
$templateProcessor->setValue('depart1', $_POST["depart1"]);
$templateProcessor->setValue('name2', $_POST["name2"]);
$templateProcessor->setValue('age2', $_POST["age2"]);
$templateProcessor->setValue('relation2', $_POST["relation2"]);
$templateProcessor->setValue('depart2', $_POST["depart2"]);
$templateProcessor->setValue('name3', $_POST["name3"]);
$templateProcessor->setValue('age3', $_POST["age3"]);
$templateProcessor->setValue('relation3', $_POST["relation3"]);
$templateProcessor->setValue('depart3', $_POST["depart3"]);
$templateProcessor->setValue('name4', $_POST["name4"]);
$templateProcessor->setValue('age4', $_POST["age4"]);
$templateProcessor->setValue('relation4', $_POST["relation4"]);
$templateProcessor->setValue('depart4', $_POST["depart4"]);
$templateProcessor->setValue('name5', $_POST["name5"]);
$templateProcessor->setValue('age5', $_POST["age5"]);
$templateProcessor->setValue('relation5', $_POST["relation5"]);
$templateProcessor->setValue('depart5', $_POST["depart5"]);
$templateProcessor->setValue('level', $_POST["level"]);
$templateProcessor->setValue('reason', $_POST["reason"]);
$templateProcessor->setValue('yyyy', $_POST["yyyy"]);
$templateProcessor->setValue('mm', $_POST["mm"]);
$templateProcessor->setValue('dd', $_POST["dd"]);

echo date('H:i:s'), ' 开始生成……', EOL;
$templateProcessor->saveAs('results/generated.docx');


echo getEndingNotes(array('Word2007' => 'docx'));

echo "<p><a href='./results/generated.docx'>点击此处下载</a></p>";

echo "<p>下载完毕后<a href='del.php'>点击此处</a>删除文档和头像</p>";

if (!CLI) {
    include_once 'Sample_Footer.php';
}
