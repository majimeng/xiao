<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>心愿管理-有点</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    @include('layouts.layouts')
</head>

<body>
    <div id="pageAll">
     @include('layouts.pageTop')
        <div class="page">
            <!-- wish页面样式 -->
            <div class="wish">
                <div class="conform">
                    <form>
                        <div class="cfD">时间：
                            <input class="vinput" type="text" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
                            <input class="vinput" type="text" />
                            <input class="addUser" type="text" placeholder="请输入您的心愿" />
                            <button class="button">搜索</button>
                        </div>
                    </form>
                </div>
                <!-- wish 表格 显示 -->
                <div class="wishShow">
                    <table border="1" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="66px" class="tdColor tdC">商品序号</td>
                            <td width="200px" class="tdColor">商品名称</td>
                            <td width="175px" class="tdColor">cate_id</td>
                            <td width="185px" class="tdColor">商品品牌</td>
                            <td width="180px" class="tdColor">商品编号</td>
                            <td width="175px" class="tdColor">商品价格</td>
                            <td width="155px" class="tdColor">商品图片</td>
                            <td width="175px" class="tdColor">库存</td>
                            <td width="230px" class="tdColor">是否新品/是否热卖/是否上架</td>
                            <td width="130px" class="tdColor">操作</td>
                        </tr>
                        @foreach($goods as $v)
                        <tr>
                            <td>{{$v->goods_id}}</td>
                            <td>
                            {{$v->goods_name}}
                                <div class="onsImg wishImgv">
                                    <img src="http://www.adminimg.com/userPICS.png">
                                </div>
                            </td>
                            <td>{{$v->cate_id}}</td>
                            <td>{{$v->brand_name}}</td>
                            <td>{{$v->goods_sn}}</td>
                            <td>
                            {{$v->shop_price}}

                            </td>
                            <td>
                                <div class="onsImg">
                                    <img src="http://www.adminimg.com/userPICS.png">
                                </div>
                            </td>
                            <td>{{$v->goods_number}}</td>
                            <td>{{$v->is_new}} /{{$v->is_best}}/{{$v->is_on_sale}}</td>
                            <td>
                                <img class="operation delban" src="http://www.adminimg.com/delete.png">
                            </td>
                        </tr>
                        @endforeach
                        <tr><td colspan="10" rowspan="" headers="">{{ $goods->links() }}</td></tr>

                    </table>
                    <div class="paging"></div>
                </div>
                <!-- wish 表格 显示 end-->
            </div>
            <!-- wish页面样式end -->
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
            <p class="delP2">   <a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
            </p>
        </div>
    </div>
    <!-- 删除弹出框  end-->
</body>
<script type="text/javascript">
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
</script>

</html>