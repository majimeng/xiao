<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>头部-有点</title>
    @include('layouts.layouts')
</head>

<body>
<div id="pageAll">
    @include('layouts.pageTop')
    <div class="page ">
        <!-- 上传广告页面样式 -->
        <div class="banneradd bor">
            <div class="baTop">	<span>品牌管理</span>
            </div>
            <form  id="form1" action="javascript:"  enctype="multipart/form-data" >
            <div class="baBody">
                <div class="bbD">品牌名称：
                        <input type="text" id="brand_name" name="brand_name" class="input1"  placeholder="请输入品牌名称" />
                </div>
                <div class="bbD">品牌网址：
                    <input type="text" id="brand_url"  name="brand_url" class="input1"  placeholder="http://www.baidu.com"  />
                </div>
                <div class="bbD">品牌logo：
                    <div class="bbDd">
                        <div class="bbDImg">+</div>
                        <input type="file" class="file" name="brand_img" id="brand_img"/> <a class="bbDDel" href="#">删除</a>
                    </div>
                </div>
                <div class="bbD">是否显示：
                    <label>
                        <input type="radio" class="radio"  value="1" name="is_show"  checked="checked" />是</label>
                    <label>
                        <input type="radio" class="radio"   value="0" name="is_show"  />否</label>
                </div>

                <div class="bbD" >品牌描述：
                    <textarea  placeholder="请输入描述内容" name="brand_desc" id="brand_desc" ></textarea>
                </div>
                <div class="bbD">
                    <p class="bbDP">
                        <button class="btn_ok btn_yes" id="submit" >提交</button>	<a class="btn_ok btn_no" href="#">取消</a>
                    </p>
                </div>
            </div>
            </form>
        </div>
        <!-- 上传广告页面样式end -->
    </div>
</div>
</body>
<script>
    $(function(){
        layui.use('layer', function(){
            var layer = layui.layer;
//                layer.alert('酷毙了', {icon: 1});
            $('#submit').click(function(){
//                var date = {};
//                date.brand_name = $("#brand_name").val();
//                date.brand_url = $("#brand_url").val();
//                date.brand_img = $("#brand_img").val();
//                date.brand_desc = $("#brand_desc").val();
//                date.is_show = $(".radio:checked").val();
//                alert(1);
                var fd = new FormData($('#form1')[0]);
//                fd.append('sex','男');
//                console.log(fd);
//                return;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/Brands/addDo",
                    data: fd,
                    processData : false,
                    contentType : false,
                    dataType:'json',
                    success: function(msg){
                        layer.alert(msg.font, {icon: msg.code});
                        if (msg.code == 1) {
                            window.location.href='/Brands/index';
                        };
                    }
                });
            })
        })
    })
</script>

</html>