<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/www/wwwroot/maig/public/../application/index/view/statistics/profit.html";i:1567525110;s:52:"/www/wwwroot/maig/application/index/view/layout.html";i:1568365065;}*/ ?>
<!DOCTYPE html>
<html lang="en" style="height:100%">
<head>

    <meta charset="utf-8">
    <title>库存管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://fonts.googleapis.com/css?family=Oxygen|Marck+Script" rel="stylesheet" type="text/css">
    <link href="/static/css/bootstrap.css" rel="stylesheet">
    <link href="/static/css/font-awesome.css" rel="stylesheet">
    <link href="/static/css/admin.css" rel="stylesheet">
    <link href="/static/css/jquery-192custom.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body style="height:100%">

<div class="container-fluid " style="padding: 0px;height:100%">
    <div class="row" style="height:100%">
        <div class="span2" style="width: 9.3%;background: #484646;height:100%">
            <div class="main-left-col" style="border-right: 0px solid #F1F1F1; ">
                <h1><i class="icon-large"></i> <img src="/bg.png"></h1>
                <ul class="side-nav">
                    <li class="active">
                        <a href="index.html"><i class="icon-home"></i> Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#item-dropdown" href="#"><i class="icon-th"></i> 库存查询 <b class="caret"></b></a>
                        <ul id="item-dropdown" class="collapse">
                            <li><a href="<?php echo url('item/inventory'); ?>">在库查询</a></li>
                           
                            <li><a href="<?php echo url('item/search'); ?>">综合查询</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#item-income-dropdown" href="#"><i class="icon-share-alt"></i> 产品入库 <b class="caret"></b></a>
                        <ul id="item-income-dropdown" class="collapse">
                            <li><a href="<?php echo url('item/addIncome'); ?>">进货入库</a></li>
                           <li><a href="<?php echo url('item/income'); ?>">入库待核</a></li>
                            <li><a href="<?php echo url('item/returnIncome'); ?>">退货入库</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#item-outgo-dropdown" href="#"><i class="icon-arrow-left"></i> 产品出库 <b class="caret"></b></a>
                        <ul id="item-outgo-dropdown" class="collapse">
                            <li><a href="<?php echo url('item/outgo'); ?>">销售出库</a></li>
                            <li><a href="<?php echo url('item/specialOutgo'); ?>">特殊出库</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#examine-dropdown" href="#"><i class="icon-check"></i> 操作审核 <b class="caret"></b></a>
                        <ul id="examine-dropdown" class="collapse">
                            <li><a href="<?php echo url('item/incomeAgree'); ?>">入库审核</a></li>
                            <li><a href="<?php echo url('item/outgoAgree'); ?>">出库审核</a></li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#statistics-dropdown" href="#"><i class="icon-bar-chart"></i> 统计功能 <b class="caret"></b></a>
                        <ul id="statistics-dropdown" class="collapse">
                            <li><a href="<?php echo url('/index/statistics/income'); ?>">进货统计</a></li>
                            <li><a href="<?php echo url('/index/statistics/profit'); ?>">利润统计</a></li>
                        </ul>
                    </li> -->
                    <li><a href="<?php echo url('/index/statistics/profit'); ?>"><i class="icon-bar-chart"></i>数据统计</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#settings-dropdown" href="#"><i class="icon-cogs"></i> 基础设置 <b class="caret"></b></a>
                        <ul id="settings-dropdown" class="collapse">
                            <li><a href="<?php echo url('setting/category'); ?>">产品类别</a></li>
                            <li><a href="<?php echo url('setting/name'); ?>">产品名称</a></li>
                           <li><a href="<?php echo url('setting/type'); ?>">网络型号</a></li>
                            <li><a href="<?php echo url('setting/feature'); ?>">产品配置</a></li>
                            <li><a href="<?php echo url('setting/appearance'); ?>">产品外观</a></li>
                            <li><a href="<?php echo url('setting/edition'); ?>">产品版本</a></li>
                            <li><a href="<?php echo url('setting/incomeChannel'); ?>">进货渠道</a></li>
                            <li><a href="<?php echo url('setting/outgoChannel'); ?>">出货途径</a></li>
                            <!-- <li><a href="<?php echo url('setting/network'); ?>">网络模式录入</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="collapse" data-target="#members-dropdown" href="#"><i class="icon-group"></i> 角色管理 <b class="caret"></b></a>
                        <ul id="members-dropdown" class="collapse">
                            <li><a href="<?php echo url('members/add'); ?>">添加账号</a></li>
                            <li><a href="<?php echo url('members/updatePwd'); ?>">密码修改</a></li>
                            <li><a href="<?php echo url('members/updateAccess'); ?>">权限修改</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('/index/log/index'); ?>"><i class="icon-book"></i> 系统日志 </a></li>
                </ul>

            </div> <!-- end main-left-col -->

        </div> <!-- end span2 -->

        <div class="span10" style="width: 82%;    margin-left: 2%;height:100%">

            <div class="secondary-masthead span12">

                <ul class="nav nav-pills pull-right">
                    <li>
                        <a href="<?php echo url('index/index/index'); ?>"><i class="icon-globe"></i> 首页</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i> <?php echo think\Session::get('user_name');?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('logout'); ?>">登出</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="breadcrumb">
                    <a href="<?php echo url('index/index/index'); ?>">库存系统</a>
                    <?php echo isset($breadcrumb) && !empty($breadcrumb) ? '/ <a href="#">'.$breadcrumb.'</a>' : '';?>
                </ul>

            </div>


            <div class="main-area dashboard">
                
<div class="row">

    <div class="span5">

        <div class="">

            <div class="page-header">
                <h2>筛选条件</h2>
            </div>

            <form class="form-inline" method="get">
                <input type="hidden" name="mark" value="1"/>
                <div class="control-group">
                    <label class="control-label" for="start_date">开始日期</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="start_date"  name="start_date" value="" autocomplete="off">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="end_date">结束日期</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="end_date"  name="end_date" value="" autocomplete="off">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="name_id">产品名称</label>
                    <div class="controls">
                       <select class="span2" name="name_id">
                           <option value="0"> -  - </option>
                           <?php foreach($names as $name): ?>
                           <option value="<?php echo $name['id']; ?>" <?php echo \think\Request::instance()->get('name_id')==$name['id']?'selected' :''; ?>><?php echo $name['data']; ?></option>
                           <?php endforeach; ?>
                       </select>
                   </div>    
               </div>
                <div class="control-group">
                     <label class="control-label" for="income_channel_id">进货渠道</label>
                     <div class="controls">
                        <select class="span2" name="income_channel_id">
                            <option value="0"> -  - </option>
                            <?php foreach($income_channels as $channel): ?>
                            <option value="<?php echo $channel['id']; ?>" <?php echo \think\Request::instance()->get('income_channel_id')==$channel['id']?'selected' :''; ?>><?php echo $channel['data']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>    
                </div>
                <div class="control-group">
                    <label class="control-label" for="create_user_id">进货人</label>
                    <div class="controls">
                        <select class="span2" name="create_user_id">
                            <option value="0"> -  - </option>
                            <?php foreach($create_users as $createUser): ?>
                            <option value="<?php echo $createUser['id']; ?>" <?php echo \think\Request::instance()->get('create_user_id')==$createUser['id']?'selected' :''; ?>><?php echo $createUser['username']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>    
                </div>
                <div class="control-group">
                    <label class="control-label" for="outgo_channel_id">出货途径</label>
                    <div class="controls">
                        <select class="span2" name="outgo_channel_id">
                            <option value="0"> -  - </option>
                            <?php foreach($outgo_channels as $channel): ?>
                            <option value="<?php echo $channel['id']; ?>" <?php echo \think\Request::instance()->get('outgo_channel_id')==$channel['id']?'selected' :''; ?>><?php echo $channel['data']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="sub" value="search">搜索</button>
                <button type="submit" class="btn btn-success" name="sub" value="excel">导出EXCEL</button>
            </form>

        </div>

    </div>

    <div class="span5">
        <div class="slate">

            <div class="page-header">
                <h2>筛选结果</h2>
            </div>

            <p>进货总数量：<?php echo $income_count; ?></p>
            <p>进货总价格：<?php echo $income_price; ?></p>
            <p>平均进货价格：<?php echo $ave_income_price; ?></p>
            <p>销售总数量：<?php echo $outgo_count; ?></p>
            <p>平均销售价格：<?php echo $ave_outgo_price; ?></p>
            <p>总利润：<?php echo $profit; ?></p>
            <p>平均利润：<?php echo $ave_profit; ?></p>
        </div>
    </div>
</div>
<script src="/static/js/jquery-1.8.3.js"></script>
<script>
    $(function () {

        var startDate = "<?php echo $start_date;?>";
        var endDate = "<?php echo $end_date;?>";

        $.datepicker.regional['zh-CN'] = {
            closeText: '关闭',
            prevText: '<上月',
            nextText: '下月>',
            currentText: '今天',
            monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
                '七月', '八月', '九月', '十月', '十一月', '十二月'],
            monthNamesShort: ['一', '二', '三', '四', '五', '六',
                '七', '八', '九', '十', '十一', '十二'],
            dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
            dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
            weekHeader: '周',
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: true,
            yearSuffix: '年'
        };

        $.datepicker.setDefaults( $.datepicker.regional[ "zh-CN" ] );

        $("#start_date, #end_date").datepicker({
            dateFormat: "yy-mm-dd",
            todayHighlight: false,
            // minDate: 0,
            // maxDate: "+2D"
        });

        $('#start_date').datepicker("setDate", startDate);
        $('#end_date').datepicker("setDate", endDate);
    })
</script>
            </div>

        </div> <!-- end span10 -->

    </div> <!-- end row -->

</div> <!-- end container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.js"></script>
<script src="/static/js/excanvas.min.js"></script>
<script src="/static/js/jquery.flot.min.js"></script>
<script src="/static/js/jquery.flot.resize.js"></script>
<script src="/static/js/jquery-192custom.min.js"></script>
<script type="text/javascript">
    $(function () {
        var d1 = [];
        d1.push([0, 32]);
        d1.push([1, 30]);
        d1.push([2, 24]);
        d1.push([3, 17]);
        d1.push([4, 11]);
        d1.push([5, 25]);
        d1.push([6, 28]);
        d1.push([7, 36]);
        d1.push([8, 44]);
        d1.push([9, 52]);
        d1.push([10, 53]);
        d1.push([11, 50]);
        d1.push([12, 45]);
        d1.push([13, 42]);
        d1.push([14, 40]);
        d1.push([15, 36]);
        d1.push([16, 34]);
        d1.push([17, 24]);
        d1.push([18, 17]);
        d1.push([19, 17]);
        d1.push([20, 20]);
        d1.push([21, 28]);
        d1.push([22, 36]);
        d1.push([23, 38]);

        $.plot($("#placeholder"), [ d1 ], { grid: { backgroundColor: 'white', color: '#999', borderWidth: 1, borderColor: '#DDD' }, colors: ["#FC6B0A"], series: { lines: { show: true, fill: true, fillColor: "rgba(253,108,11,0.4)" } } });
    });
</script>


</body>
</html>