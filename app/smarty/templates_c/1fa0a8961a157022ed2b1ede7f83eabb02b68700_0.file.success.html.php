<?php
/* Smarty version 3.1.31, created on 2017-09-25 14:13:58
  from "C:\laragon\www\enroll\app\smarty\templates\index\success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c89ea66d57f5_89331352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa0a8961a157022ed2b1ede7f83eabb02b68700' => 
    array (
      0 => 'C:\\laragon\\www\\enroll\\app\\smarty\\templates\\index\\success.html',
      1 => 1506320018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c89ea66d57f5_89331352 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/success.css">
    <title>报名成功</title>
</head>
<body>
    <div class="container">
        <div class="ticket">
            <p>电子门票号：<?php ob_start();
echo $_smarty_tpl->tpl_vars['stu_id']->value;
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
</p><br/>
            <p>截图保留，凭票入场</p>
        </div>
        <div class="name">
            <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
&nbsp;同学：</p>
        </div>
        <div class="info">
            <p>
                您已经成功报名东北师范大学
            </p>
            <p>
                2017年 "山东——名校人才直通车"
            </p>
            <p class="time">时间：2017年9月28日14:00—17:00</p>
            <p class="location">地点：东北师范大学自由校区</p>
            <p class="location2">就业中心一楼多功能厅</p>
        </div>
        <div class="app">
            <p>请同学们关注</p>
            <p>东北高师联盟网APP</p>
        </div>
    </div>
    <div class="qr-code">
        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
/img/android.jpg" alt="">
        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
/img/ios.jpg" alt="">
        <!-- <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['assets']->value;
$_prefixVariable7=ob_get_clean();
echo $_prefixVariable7;?>
/img/qr-code.jpg" alt=""> -->
    </div>
</body>
</html><?php }
}
