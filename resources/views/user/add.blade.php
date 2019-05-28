<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加用户-有点</title>
    @include('layouts.layouts')

</head>


<body>
<div id="pageAll">
    @include('layouts.pageTop')
    <div class="page ">
        <!-- 会员注册页面样式 -->
        <div class="banneradd bor">
            <div class="baTopNo">	<span>会员注册</span>
            </div>
            <div class="baBody">
                <div class="bbD">&nbsp;&nbsp;&nbsp;用户名：
                    <input type="text" class="input3" id="user_name"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="span_name"></span>
                </div>
                <div class="bbD">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：
                    <input type="password" class="input3" id="user_pwd"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="span_pwd"></span>
                </div>
                <div class="bbD">
                    <p class="bbDP">
                        <button class="btn_ok btn_yes" id="submit">提交</button>	<a class="btn_ok btn_no" href="#">取消</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- 会员注册页面样式end -->
    </div>
</div>
</body>

</html>
<script>
    $(function(){
//
        layui.use('layer', function(){
            var layer = layui.layer;
//            layer.alert('酷毙了', {icon: 1});

            $('#submit').click(function() {
                var data = {};
                data.user_name = $("#user_name").val();
                data.user_pwd = $("#user_pwd").val();

//            验证用户名
                var reg = /^[\w\u4E00-\u9FA5-]{2,20}$/;
                if (data.user_name == '') {
                    $('#span_name').html("<font color='red'>用户名必填</font>");
                    return false;
                }else if(!reg.test(data.user_name)){
                    $('#span_name').html("<font color='red'>请输入2-20位的数字、字母、下划线或中文！</font>");
                    return false;
                }else{
                    $('#span_name').html("<font color='green'>√</font>");
                }

//            验证密码
                var reg = /^[a-z0-9_-]{6,18}$/;
                if(data.user_pwd == ''){
                    $('#span_pwd').html("<font color='red'>密码不能为空</font>");
                    return false;
                }else if(!reg.test(data.user_pwd)) {
                    $('#span_pwd').html("<font color='red'>密码由6到18位字母数字下划线组成</font>");
                    return false;
                }else{
                    $('#span_pwd').html("<font color='green'>√</font>");
                }

////            验证用户等级
//            if(data.user_leave == ''){
//                $('#span_leave').html("<font color='red'>用户等级不能为空</font>");
//                return false;
//            }else{
//                $('#span_leave').html("<font color='green'>√</font>");
//            }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
//            ajax添加
                $.ajax({
                    type: "POST",
                    url: "/User/addDo",
                    data: data,
                    dataType:'json',
                    success: function(msg){
                        layer.alert(msg.font, {icon: msg.code});
                        if(msg.code == 1){
                            window.location.href='/User/add';
                        }
                    }
                });
            })

            $('#user_name').blur(function(){
                var data = {};
                data.user_name = $("#user_name").val();
                data.user_pwd = $("#user_pwd").val();
                data.user_leave = $("#user_leave").val();
                var reg = /^[\w\u4E00-\u9FA5-]{2,20}$/;
                if (data.user_name == '') {
                    $('#span_name').html("<font color='red'>用户名必填</font>");
                    return false;
                }else if(!reg.test(data.user_name)){
                    $('#span_name').html("<font color='red'>请输入2-20位的数字、字母、下划线或中文！</font>");
                    return false;
                }else{
                    $('#span_name').html("<font color='green'>√</font>");
                }
            })
            $('#user_pwd').blur(function(){
                var data = {};
                data.user_name = $("#user_name").val();
                data.user_pwd = $("#user_pwd").val();
                data.user_leave = $("#user_leave").val();
                //            验证密码
                var reg = /^[a-z0-9_-]{6,18}$/;
                if(data.user_pwd == ''){
                    $('#span_pwd').html("<font color='red'>密码不能为空</font>");
                    return false;
                }else if(!reg.test(data.user_pwd)) {
                    $('#span_pwd').html("<font color='red'>密码由6到18位字母数字下划线组成</font>");
                    return false;
                }else{
                    $('#span_pwd').html("<font color='green'>√</font>");
                }
            })
//        $('#user_leave').blur(function(){
//            var data = {};
//            data.user_name = $("#user_name").val();
//            data.user_pwd = $("#user_pwd").val();
//            data.user_leave = $("#user_leave").val();
//            //            验证用户等级
//            if(data.user_leave == ''){
//                $('#span_leave').html("<font color='red'>用户等级不能为空</font>");
//                return false;
//            }else{
//                $('#span_leave').html("<font color='green'>√</font>");
//            }
//        })
            })
    })

</script>