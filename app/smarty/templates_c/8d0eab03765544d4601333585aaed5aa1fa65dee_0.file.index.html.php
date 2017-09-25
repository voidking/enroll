<?php
/* Smarty version 3.1.31, created on 2017-09-25 14:01:02
  from "C:\laragon\www\enroll\app\smarty\templates\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c89b9e5f3d75_65163057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0eab03765544d4601333585aaed5aa1fa65dee' => 
    array (
      0 => 'C:\\laragon\\www\\enroll\\app\\smarty\\templates\\index\\index.html',
      1 => 1506319081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c89b9e5f3d75_65163057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
/lib/layer/skin/layer.css">
    <link rel="stylesheet" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/css/index.css">
    <title>2017年 "山东——名校人才直通车"</title>
</head>
<body>
    <div class="container">
        <form id="student-form" class="student-form" action="">
            <div>
                <input type="text" id="name" name="name" placeholder="姓名" required="">
            </div>
            <div>
                <select name="gender" id="gender">
                    <option value="">性别</option>
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select>
            </div>
            <div>
                <select name="grade" id="grade">
                    <option value="">年级</option>
                    <option value="大一">大一</option>
                    <option value="大二">大二</option>
                    <option value="大三">大三</option>
                    <option value="大四">大四</option>
                    <option value="研一">研一</option>
                    <option value="研二">研二</option>
                    <option value="研三">研三</option>
                    <option value="博一">博一</option>
                    <option value="博二">博二</option>
                    <option value="博三">博三</option>
                </select>
            </div>
            <div style="display: none;">
                <select name="education" id="education">
                    <option value="">学历</option>
                    <option value="大专">大专</option>
                    <option value="本科" selected="selected">本科</option>
                    <option value="硕士">硕士</option>
                    <option value="博士">博士</option>
                </select>
            </div>
            <div>
                <input type="text" name="school" placeholder="学校" required="">
            </div>
            <div>
                <input type="text" name="institute" placeholder="学院" required="">
            </div>
            <div>
                <input type="text" name="major" placeholder="专业" required="">
            </div>
            <div style="display: none;">
                <select name="bus" id="bus">
                    <option value="">是否需要乘坐本部-净月校车</option>
                    <option value="是">是</option>
                    <option value="否" selected="selected">否</option>
                </select>
            </div>
            <div>
                <button id="confirm" type="submit">提交</button>
            </div>

        </form>
    </div>
<input type="hidden" id="basepath" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['basepath']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
">
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
/lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
/lib/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
    $('#student-form').submit(function(e){
        e.preventDefault();
        var name = $('#name').val();
        var gender = $('#gender').val();
        var grade = $('#grade').val();
        var education = $('#education').val();
        var bus = $('#bus').val();

        if(gender == ''){
            layer.msg('请选择性别！');
            return;
        }

        if(grade == ''){
            layer.msg('请选择年级！');
            return;
        }else if(grade == '大一' || grade == '大二' || grade == '大三' || grade == '大四'){
            $('#education').val('本科');
        }else if(grade == '研一' || grade == '研二' || grade == '研三'){
            $('#education').val('硕士');
        }else if(grade == '博一' || grade == '博二' || grade == '博三'){
            $('#education').val('博士');
        }

        // if(education == ''){
        //     layer.msg('请选择学历！');
        //     return;
        // }
        if(bus == ''){
            layer.msg('请选择是否乘坐校车！');
        }

        var basepath = $('#basepath').val();
        var data = $(this).serialize();
        $.ajax({
            url: basepath+'/index/register',
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            dataType: 'json',
            data: data,
            success: function(data){
                console.log(data);
                if(data.code == 0){
                    layer.msg('报名成功');
                    setTimeout(function(){
                        var stu_id = data.stu_id;
                        if(stu_id >= 0 && stu_id <= 9){
                            stu_id = '000' + stu_id;
                        }else if(stu_id >= 10 && stu_id <= 99){
                            stu_id = '00' + stu_id;
                        }else if(stu_id >= 100 && stu_id <= 999){
                            stu_id = '0' + stu_id;
                        }
                        window.location.href = basepath + '/index/success?name='+name+'&stu_id='+stu_id;
                    },1000);
                }else{

                }
            },
            error: function(xhr){
                console.log(xhr);
            }
        });
    });
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
