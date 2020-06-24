<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"/data/www/y5g/public/../application/index/view/index/index.html";i:1592993816;s:48:"/data/www/y5g/application/index/view/layout.html";i:1592482662;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>库存管理系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/static/lib/layuiadmin/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/static/lib/layuiadmin/style/admin.css" media="all">

    <script>
        /^http(s*):\/\//.test(location.href) || alert('请先部署到 localhost 下再访问');
    </script>
    <script src="/static/lib/layuiadmin/layui/layui.js"></script>
    <script>
        layui.config({
            base: '/static/lib/layuiadmin/' //静态资源所在路径
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'admin', 'carousel']);
    </script>
</head>
<body class="layui-layout-body">
    
    <div id="LAY_app">
        <div class="layui-layout layui-layout-admin">
          <div class="layui-header">
            <!-- 头部区域 -->
            <ul class="layui-nav layui-layout-left">
              <li class="layui-nav-item layadmin-flexible" lay-unselect>
                <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
                  <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
                </a>
              </li>
              <!-- <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a href="http://www.layui.com/admin/" target="_blank" title="前台">
                  <i class="layui-icon layui-icon-website"></i>
                </a>
              </li> -->
              <li class="layui-nav-item" lay-unselect>
                <a href="javascript:;" layadmin-event="refresh" title="刷新">
                  <i class="layui-icon layui-icon-refresh-3"></i>
                </a>
              </li>
              <!-- <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <input type="text" placeholder="搜索..." autocomplete="off" class="layui-input layui-input-search" layadmin-event="serach" lay-action="template/search.html?keywords="> 
              </li> -->
            </ul>
            <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
              
              <li class="layui-nav-item" lay-unselect>
                <a lay-href="" layadmin-event="message" lay-text="消息中心">
                  <i class="layui-icon layui-icon-notice"></i>  
                  
                  <!-- 如果有新消息，则显示小圆点 -->
                  <span class="layui-badge-dot"></span>
                </a>
              </li>
              <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a href="javascript:;" layadmin-event="theme">
                  <i class="layui-icon layui-icon-theme"></i>
                </a>
              </li>
              <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a href="javascript:;" layadmin-event="note">
                  <i class="layui-icon layui-icon-note"></i>
                </a>
              </li>
              <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a href="javascript:;" layadmin-event="fullscreen">
                  <i class="layui-icon layui-icon-screen-full"></i>
                </a>
              </li>
              <li class="layui-nav-item" lay-unselect>
                <a href="javascript:;">
                  <cite>贤心</cite>
                </a>
                <dl class="layui-nav-child">
                  <dd><a lay-href="set/user/info.html">基本资料</a></dd>
                  <dd><a lay-href="set/user/password.html">修改密码</a></dd>
                  <hr>
                  <dd layadmin-event="logout" style="text-align: center;"><a>退出</a></dd>
                </dl>
              </li>
              
              <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <!-- <a href="javascript:;" layadmin-event="about"><i class="layui-icon layui-icon-more-vertical"></i></a> -->
              </li>
              <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect>
                <a href="javascript:;" layadmin-event="more"><i class="layui-icon layui-icon-more-vertical"></i></a>
              </li>
            </ul>
          </div>
          
          <!-- 侧边菜单 -->
          <div class="layui-side layui-side-menu">
            <div class="layui-side-scroll">
              <div class="layui-logo" lay-href="home/console.html">
                <span>库存管理系统</span>
              </div>
              
              <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
                <li data-name="home" class="layui-nav-item">
                  <a href="javascript:;" lay-tips="库存查询" lay-direction="2">
                    <i class="layui-icon layui-icon-home"></i>
                    <cite>库存查询</cite>
                  </a>
                  <dl class="layui-nav-child">
                    <dd data-name="console">
                      <a lay-href="/index/item/inventory">在库查询</a>
                    </dd>
                    <dd data-name="console">
                      <a lay-href="/index/item/search">综合查询</a>
                    </dd>
                  </dl>
                </li>
                <li data-name="home" class="layui-nav-item">
                    <a href="javascript:;" lay-tips="产品入库" lay-direction="2">
                      <i class="layui-icon layui-icon-home"></i>
                      <cite>产品入库</cite>
                    </a>
                    <dl class="layui-nav-child">
                      <dd data-name="console">
                        <a lay-href="/index/item/addIncome">采购入库</a>
                      </dd>
                      <dd data-name="console">
                        <a lay-href="/index/item/batchAddIncome">批量入库</a>
                      </dd>
                      <dd data-name="console">
                        <a lay-href="/index/item/income">入库待核</a>
                      </dd>
                      <dd data-name="console">
                        <a lay-href="/index/item/returnIncome">退货入库</a>
                      </dd>
                    </dl>
                </li>
                <li data-name="home" class="layui-nav-item">
                    <a href="javascript:;" lay-tips="产品出库" lay-direction="2">
                      <i class="layui-icon layui-icon-home"></i>
                      <cite>产品出库</cite>
                    </a>
                    <dl class="layui-nav-child">
                      <dd data-name="console">
                        <a lay-href="/index/item/outgo">销售出库</a>
                      </dd>
                      <dd data-name="console">
                        <a lay-href="/index/item/specialOutgo">维修登记</a>
                      </dd>
                    </dl>
                </li>
                <li data-name="home" class="layui-nav-item">
                    <a href="javascript:;" lay-tips="操作审核" lay-direction="2">
                      <i class="layui-icon layui-icon-home"></i>
                      <cite>操作审核</cite>
                    </a>
                    <dl class="layui-nav-child">
                      <dd data-name="console">
                        <a lay-href="/index/item/incomeAgree">入库审核</a>
                      </dd>
                      <dd data-name="console">
                        <a lay-href="/index/item/outgoAgree">出库审核</a>
                      </dd>
                    </dl>
                </li>
                <li data-name="component" class="layui-nav-item">
                  <a href="javascript:;" lay-tips="统计功能" lay-direction="2">
                    <i class="layui-icon layui-icon-component"></i>
                    <cite>统计功能</cite>
                  </a>
                  <dl class="layui-nav-child">
                    <dd data-name="console">
                      <a lay-href="/index/statistics/index">30天统计</a>
                    </dd>
                    <dd data-name="console">
                      <a lay-href="/index/statistics/profit">数据统计</a>
                    </dd>
                  </dl>
                </li>
                <li data-name="get" class="layui-nav-item">
                  <a href="javascript:;" lay-href="/index/item/specialOutgo2" lay-tips="仓库盘点" lay-direction="2">
                    <i class="layui-icon layui-icon-auz"></i>
                    <cite>仓库盘点</cite>
                  </a>
                </li>

                <li data-name="template" class="layui-nav-item">
                  <a href="javascript:;" lay-tips="基础设置" lay-direction="2">
                    <i class="layui-icon layui-icon-template"></i>
                    <cite>基础设置</cite>
                  </a>
                  <dl class="layui-nav-child">
                    <dd><a lay-href="/index/setting/category">产品类别</a></dd>
                    <dd><a lay-href="/index/setting/name">产品名称</a></dd>
                    <dd><a lay-href="/index/setting/type">网络型号</a></dd>
                    <dd><a lay-href="/index/setting/feature">产品配置</a></dd>
                    <dd><a lay-href="/index/setting/appearance">产品外观</a></dd>
                    <!-- <dd><a href="user/reg.html" target="_blank">注册</a></dd>
                    <dd><a href="user/login.html" target="_blank">登入</a></dd>
                    <dd><a href="user/forget.html" target="_blank">忘记密码</a></dd> -->
                    <dd><a lay-href="/index/setting/edition">产品版本</a></dd>
                    <dd><a lay-href="/index/setting/incomeChannel">渠道录入</a></dd>
                    <dd><a lay-href="/index/setting/intelligence">智能识别码</a></dd>
                    <dd><a lay-href="/index/setting/specialEditItemList">特殊修改</a></dd>
                  </dl>
                </li>
                <li data-name="component" class="layui-nav-item">
                  <a href="javascript:;" lay-tips="角色管理" lay-direction="2">
                    <i class="layui-icon layui-icon-component"></i>
                    <cite>角色管理</cite>
                  </a>
                  <dl class="layui-nav-child">
                    <dd data-name="console">
                      <a lay-href="/index/members/add">添加账号</a>
                    </dd>
                    <dd data-name="console">
                      <a lay-href="/index/members/updatePwd">密码修改</a>
                    </dd>
                    <dd data-name="console">
                      <a lay-href="/index/members/updateAccess">权限修改</a>
                    </dd>
                  </dl>
                </li>
                <li data-name="get" class="layui-nav-item">
                  <a href="javascript:;" lay-href='/index/log/index' lay-tips="系统日志" lay-direction="2">
                    <i class="layui-icon layui-icon-auz"></i>
                    <cite>系统日志</cite>
                  </a>
                </li>
              </ul>
            </div>
          </div>
    
          <!-- 页面标签 -->
          <div class="layadmin-pagetabs" id="LAY_app_tabs">
            <div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
            <div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
            <div class="layui-icon layadmin-tabs-control layui-icon-down">
              <ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
                <li class="layui-nav-item" lay-unselect>
                  <a href="javascript:;"></a>
                  <dl class="layui-nav-child layui-anim-fadein">
                    <dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a></dd>
                    <dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a></dd>
                    <dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a></dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
              <ul class="layui-tab-title" id="LAY_app_tabsheader">
                <li lay-id="home/console.html" lay-attr="home/console.html" class="layui-this"><i class="layui-icon layui-icon-home"></i></li>
              </ul>
            </div>
          </div>
          
          
          <!-- 主体内容 -->
          <div class="layui-body" id="LAY_app_body">
                <div class="layadmin-tabsbody-item layui-show">
                    <iframe src="home/console.html" frameborder="0" class="layadmin-iframe">{__CONTENT__}</iframe>
                </div>
            </div>
          
          <!-- 辅助元素，一般用于移动设备下遮罩 -->
          <div class="layadmin-body-shade" layadmin-event="shade"></div>
        </div>
      </div>
</body>





</html>