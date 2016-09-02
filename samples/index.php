<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>在线生成助学金表</title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <h1>填写下面的表单，快速生成一份标准的助学金申请单吧！</h1>
    <form role="form" method="post" action="generateDocx.php" enctype="multipart/form-data">
            <h2>基本个人信息</h2>
            <div class="form-group">
                <label for="name">姓名：</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="sex">性别</label>
                <input type="text" class="form-control" name="sex">
            </div>
            <div class="form-group">
                <label for="sex">出生年月（例：1995.02）</label>
                <input type="text" class="form-control" name="birth">
            </div>
            <div class="form-group">
                <label for="sex">民族（例：汉）</label>
                <input type="text" class="form-control" name="nation">
            </div>
            <div class="form-group">
                <label for="sex">政治面貌（例：共产党员）</label>
                <input type="text" class="form-control" name="poli">
            </div>
            <div class="form-group">
                <label for="sex">入学时间（例：2016.09）</label>
                <input type="text" class="form-control" name="entertime">
            </div>
            <div class="form-group">
                <label for="file">上传1寸照片（建议从教务系统下载）</label>
                <input type="file" name="file">
                <p class="help-block">注意：请勿上传大图.</p>
            </div>
            <div class="form-group">
                <label for="sex">身份证（18位，X大写）</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="sex">联系电话（可填手机）</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label for="sex">详细学校专业班级</label>
                <input type="text" class="form-control" name="college">
                <p class="help-block">例如：中国石油大学（华东）化学工程学院化学工程与工艺专业13-1班</p>
            </div>
            <h2>家庭经济情况</h2>
            <div class="form-group">
                <label for="sex">家庭人口总数（例：5）</label>
                <input type="text" class="form-control" name="famnum">
            </div>
            <div class="form-group">
                <label for="sex">家庭月总收入（例：4000）</label>
                <input type="text" class="form-control" name="totleinc">
            </div>
            <div class="form-group">
                <label for="sex">人均月收入（例：800）</label>
                <input type="text" class="form-control" name="avein">
            </div>
            <div class="form-group">
                <label for="sex">收入来源（例：务农）</label>
                <input type="text" class="form-control" name="incfrom">
            </div>
            <div class="form-group">
                <label for="sex">家庭住址（如实填写）</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label for="sex">学号（例：1303010101）</label>
                <input type="text" class="form-control" name="schoolid">
            </div>
            <div class="form-group">
                <label for="sex">餐卡号（例：23333）</label>
                <input type="text" class="form-control" name="cafeid">
            </div>
        <h2>下面是家庭成员信息</h2>
        <h3>没有某成员留空即可。</h3>
        <div class="form-inline">
            <label>成员1：</label>
            <div class="form-group">
                <label for="sex">姓名:</label>
                <input type="text" class="form-control" name="name1">
            </div>
            <div class="form-group">
                <label for="sex">年龄:</label>
                <input type="text" class="form-control" name="age1">
            </div>
            <div class="form-group">
                <label for="sex">与本人关系:</label>
                <input type="text" class="form-control" name="relation1">
                <p class="help-block">例如：父子、母子、兄弟、兄妹。下同</p>
            </div>
            <div class="form-group">
                <label for="sex">工作单位:</label>
                <input type="text" class="form-control" name="depart1">
            </div>
        </div>
        <div class="form-inline">
            <label>成员2：</label>
            <div class="form-group">
                <label for="sex">姓名:</label>
                <input type="text" class="form-control" name="name2">
            </div>
            <div class="form-group">
                <label for="sex">年龄:</label>
                <input type="text" class="form-control" name="age2">
            </div>
            <div class="form-group">
                <label for="sex">与本人关系:</label>
                <input type="text" class="form-control" name="relation2">
            </div>
            <div class="form-group">
                <label for="sex">工作单位:</label>
                <input type="text" class="form-control" name="depart2">
            </div>
        </div>
        <div class="form-inline">
            <label>成员3：</label>
            <div class="form-group">
                <label for="sex">姓名:</label>
                <input type="text" class="form-control" name="name3">
            </div>
            <div class="form-group">
                <label for="sex">年龄:</label>
                <input type="text" class="form-control" name="age3">
            </div>
            <div class="form-group">
                <label for="sex">与本人关系:</label>
                <input type="text" class="form-control" name="relation3">
            </div>
            <div class="form-group">
                <label for="sex">工作单位:</label>
                <input type="text" class="form-control" name="depart3">
            </div>
        </div>
        <div class="form-inline">
            <label>成员4：</label>
            <div class="form-group">
                <label for="sex">姓名:</label>
                <input type="text" class="form-control" name="name4">
            </div>
            <div class="form-group">
                <label for="sex">年龄:</label>
                <input type="text" class="form-control" name="age4">
            </div>
            <div class="form-group">
                <label for="sex">与本人关系:</label>
                <input type="text" class="form-control" name="relation4">
            </div>
            <div class="form-group">
                <label for="sex">工作单位:</label>
                <input type="text" class="form-control" name="depart4">
            </div>
        </div>
        <div class="form-inline">
            <label>成员5：</label>
            <div class="form-group">
                <label for="sex">姓名:</label>
                <input type="text" class="form-control" name="name5">
            </div>
            <div class="form-group">
                <label for="sex">年龄:</label>
                <input type="text" class="form-control" name="age5">
            </div>
            <div class="form-group">
                <label for="sex">与本人关系:</label>
                <input type="text" class="form-control" name="relation5">
            </div>
            <div class="form-group">
                <label for="sex">工作单位:</label>
                <input type="text" class="form-control" name="depart5">
            </div>
        </div>
        <h2>再填写一些申请信息</h2>
        <div class="form-group">
            <label for="sex">申请等级:</label>
            <input type="text" class="form-control" name="level">
            <p class="help-block">三选一：国家一等助学金/国家二等助学金/国家三等助学金</p>
        </div>
        <div class="form-group">
            <label for="sex">申请理由:</label>
            <textarea class="form-control" name="reason"></textarea>
            <p class="help-block">请控制在206到247字之间，不然请自行调整表格中“申请理由”的行数。</p>
        </div>
        <h2>...以及申请时间</h2>
        <div class="form-inline">
            <div class="form-group">
                <label for="sex">年:</label>
                <input type="text" class="form-control" name="yyyy">
            </div>
            <div class="form-group">
                <label for="sex">月:</label>
                <input type="text" class="form-control" name="mm">
            </div>
            <div class="form-group">
                <label for="sex">日:</label>
                <input type="text" class="form-control" name="dd">
            </div>
        </div>
        <p></p>
        <p style="color:red;">提交前请确认信息是否完整、正确！</p>
        <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>