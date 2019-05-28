<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页左侧导航</title>
    @include('layouts.layouts')

    <head></head>

<body id="bg">
<!-- 左边节点 -->
<div class="container">
    <div class="leftsidebar_box">
        <a href="http://www.admin.com/admin/main" target="main">
            <div class="line">
                <img src="{{asset('img/coin01.png')}}" />&nbsp;&nbsp;首页</div>
        </a>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                  src="{{asset('img/coin04.png')}}" /> 客户管理<img class="icon3"
                                                                                                      src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                     src="{{asset('img/coin20.png')}}" />
            </dt>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/user/index" target="main">客户列表</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/user/contacts" target="main">客户联系人</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/user/serve" target="main">服务记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>


        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin10.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin09.png')}}" /> 销售管理<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/sell/index" target="main">销售机会</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/sell/after" target="main">跟踪记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/sell/offer" target="main">产品报价</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/sell/report" target="main">项目报备</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 订单管理<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/order/index" target="main">销售订单</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/order/detail" target="main">订单明细</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>
        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin05.png')}}" /><img class="icon2"
                                                                  src="{{asset('img/coin06.png')}}" /> 库存管理<img class="icon3"
                                                                                                      src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                     src="{{asset('img/coin20.png')}}" />
            </dt>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/tory/supplier" target="main">供应商管理</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/tory/contacts" target="main">供应商联系人</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/tory/offer" target="main">供应商报价</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 采购管理<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/chase/order" target="main">采购订单</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks" href="/chase/detail" target="main">采购明细</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>
        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin07.png')}}" /><img class="icon2"
                                                                  src="{{asset('img/coin08.png')}}" /> 财务管理<img class="icon3"
                                                                                                      src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                     src="{{asset('img/coin20.png')}}" />
            </dt>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/water/index" target="main" class="cks">财务流水</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 财务类型<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/type/income" target="main" class="cks">费用收入类型</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/type/spending" target="main" class="cks">费用开支类型</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/type/bank" target="main" class="cks">银行账号管理</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 付款管理<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/payment/plan" target="main" class="cks">付款计划</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/payment/record" target="main" class="cks">付款记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/payment/srecord" target="main" class="cks">收票记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 回款管理<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/rmoney/plan" target="main" class="cks">回款计划</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/rmoney/record" target="main" class="cks">回款记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/rmoney/srecord" target="main" class="cks">开票记录</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

        <dl class="system_log">	<dt>
                <img class="icon1" src="{{asset('img/coin03.png')}}" /><img class="icon2"
                                                                            src="{{asset('img/coin04.png')}}" /> 收入开支<img class="icon3"
                                                                                                                           src="{{asset('img/coin19.png')}}" /><img class="icon4"
                                                                                                                                                                    src="{{asset('img/coin20.png')}}" />
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/income/els" target="main" class="cks">其他收入单</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a href="/income/cost" target="main" class="cks">费用支出单</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>

            <dd>
                <img class="coin11" src="{{asset('img/coin111.png')}}" />
                <img class="coin22" src="{{asset('img/coin222.png')}}" /><a class="cks">退出</a>
                <img class="icon5" src="{{asset('img/coin21.png')}}" />
            </dd>
        </dl>
    </div>
</div>
</body>

</html>