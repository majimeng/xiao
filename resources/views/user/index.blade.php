<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <title>管理员管理-有点</title>
    @include('layouts.layouts')
</head>

<body>
<div id="pageAll">
    @include('layouts.pageTop')
    <div class="page">
        <!-- user页面样式 -->
        <div class="connoisseur">
            <div class="conform">
                <form>
                    <div class="cfD">
                        <input class="userinput" id="user_name" type="text" placeholder="输入用户名" />
                        <span id="span_name"></span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
                        <input class="userinput vpr"  id="user_pwd" type="text" placeholder="输入用户密码" />
                        <span id="span_pwd"></span>
                        <button class="userbtn"  id="submit">添加</button>
                    </div>
                </form>
            </div>
            <!-- user 表格 显示 -->
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="435px" class="tdColor">用户名</td>
                        <td width="400px" class="tdColor">添加时间</td>
                        <td width="630px" class="tdColor">操作时间</td>
                        <td width="130px" class="tdColor">操作</td>
                    </tr>
                    @foreach ($arr as $users)
                        <tr height="40px" class="tr">
                            <td>{{ $users->user_id }}</td>
                            <td>{{ $users->user_name }}</td>
                            <td>{{ $users->created_at }}</td>
                            <td>{{$users->updated_at}}</td>
                            <td>
                                <a href="connoisseuradd.html">
                                    <img class="operation" src="http://www.adminimg.com/update.png">
                                </a>
                                <img class="operation delban" src="http://www.adminimg.com/delete.png">
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div class="paging">此处是分页</div>
            </div>
            <!-- user 表格 显示 end-->
        </div>
        <!-- user页面样式end -->
    </div>
</div>
<!-- 删除弹出框 -->
<div class="banDel">
    <div class="delete">
        <div class="close">
            <a>
                <img src="http://www.adminimg.com/shanchu.png" />
            </a>
        </div>
        <p class="delP1">你确定要删除此条记录吗？</p>
        <p class="delP2">	<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
        </p>
    </div>
</div>
<!-- 删除弹出框  end-->
</body>
<script type="text/javascript">
    $(function(){
        layui.use('layer', function(){
                var layer = layui.layer;
            // 广告弹出框
            $(".delban").click(function() {
                $(".banDel").show();
            });
            $(".close").click(function() {
                $(".banDel").hide();
            });
            $(".no").click(function() {
                $(".banDel").hide();
            });
            // 广告弹出框 end

            // 添加用户
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
                            window.location.href='/User/index';
                        }
                    }
                });
            })
            // 添加用户 end
        })

    })
</script>

</html>