<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"F:\www\hostpital_tp\public/../application/index\view\admin\index.html";i:1488357554;s:71:"F:\www\hostpital_tp\public/../application/index\view\common\header.html";i:1488433553;s:71:"F:\www\hostpital_tp\public/../application/index\view\common\footer.html";i:1488460877;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病房管理系统-首页</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/main.css">
    <link rel="stylesheet" href="/static/hui.css">
    <style type="text/css">
      [v-cloak]{
        display: none;
      }
    </style>
  </head>
  <body>
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 header">
          工号<?php echo \think\Session::get('Uname'); ?>，您现在的位置是：<?php echo $title; ?> <span class="pull-right hui-font-color-alizarin hui-margin-left-15" onclick="location.href='<?php echo url('admin/login_out'); ?>'" style="cursor:pointer;"> 注销登录 </span> <span class="pull-right" onclick="location.href='<?php echo url('index'); ?>'" style="cursor:pointer;"> 返回首页 </span>
        </div>
      </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">


          <button class='btn btn-block btn-success' onclick="javascript:window.location.href='<?php echo url('work'); ?>'">点击此处进入工作模块</button>
          <button class='btn btn-block btn-success' onclick="javascript:window.location.href='<?php echo url('charge_pwd'); ?>'">点击此处管理密码</button>

  </div>
<div class="col-md-4"></div>
</div>
</div>

<div style="height: 100px;"></div>
<footer style="bottom: 0;width: 100%;">
    &copy;2017 Tommy
</footer>
<script src="https://unpkg.com/vue@2.2.1/dist/vue.js"></script>
</body>
</html>

