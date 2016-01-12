@extends('box')
@section('content')
    <link href="{{ asset('assets/admin/pages/css/timeline.css')}} " type="text/css"  rel="stylesheet" >
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head ">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>首页 <small>成长时间线</small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">

            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="timeline">
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item" id="gmzb">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset("assets/global/img/src/ggzb_icon.jpeg")  }}">

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-blue-soft">产品开发 购萌早报</span>
                                        <span class="timeline-body-time font-grey-cascade">2015.10</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-warning"> Yii 2.0 </span>&nbsp;
                                    <span class="label label-warning"> 阿里百川 </span>&nbsp;
                                    <span class="label label-warning"> web与app通信协议 </span>&nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item" id="pico">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset("assets/global/img/src/picopico_icon.jpg")  }}">

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-green-meadow">产品开发 PicoPico</span>
                                        <span class="timeline-body-time font-grey-cascade">2015.3</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-warning"> Yii 2.0 </span>&nbsp;
                                    <span class="label label-warning"> LBS </span>&nbsp;
                                    <span class="label label-warning"> 基于用户行为的推荐算法 </span>&nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item" id="mmark">
                            <div class="timeline-badge">
                                <div class="timeline-badge">
                                    <img class="timeline-badge-userpic" src="{{ asset("assets/global/img/src/mmark_icon.jpeg")  }}">

                                </div>

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-red-pink">产品开发 萌Mark</span>
                                        <span class="timeline-body-time font-grey-cascade">2014.11.11</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-warning"> Yii 1.1 </span>&nbsp;
                                    <span class="label label-warning"> PHP扩展Yar </span>&nbsp;
                                    <span class="label label-warning"> 第三方登录分享 </span>&nbsp;
                                    <span class="label label-warning"> 基于RBAC的权限管理 </span>&nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-notebook font-yellow-saffron"></i>
                                </div>

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-yellow-saffron">正式就职 北京惊鱼科技有限公司</span>
                                        <span class="timeline-body-time font-grey-cascade">2014.10 - 至今</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-info"> 团队沟通 </span>&nbsp;
                                    <span class="label label-info"> PHP开发组管理 </span>&nbsp;
                                    <span class="label label-info"> 海外服务搭建 </span>&nbsp;
                                    <span class="label label-info"> 技术选型 </span>&nbsp;

                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-notebook font-green-meadow"></i>
                                </div>

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-green-meadow">正式就职 天树梦想（北京）科技有限公司</span>
                                        <span class="timeline-body-time font-grey-cascade">2014.6 - 2014.10</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-info"> 完整项目上线更新维护 </span>&nbsp;
                                    <span class="label label-info"> socket即时通讯 </span>&nbsp;
                                    <span class="label label-info"> LBS算法 </span>&nbsp;
                                    <span class="label label-info"> 类微博关系以及Feed系统开发 </span>&nbsp;

                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset("assets/global/img/src/1_diandianxiyu.jpg")  }}">

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-blue-soft">开始更新 CSDN技术博客</span>
                                        <span class="timeline-body-time font-grey-cascade">2013.11.25</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-success"> 分享技术点 </span> &nbsp;
                                    <span class="label label-success"> 记录成长历程 </span> &nbsp;
                                    <span class="label label-success"> 持续更新中 </span> &nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <img class="timeline-badge-userpic" src="{{ asset("assets/global/img/src/github_logo.png")  }}">

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-blue-soft">加入 Github</span>
                                        <span class="timeline-body-time font-grey-cascade">2013.10.24</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-success">  学习开源精神 </span>&nbsp;
                                    <span class="label label-success"> 分享工具类  </span>&nbsp;
                                    <span class="label label-success"> 个人项目开源  </span>&nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-envelope-letter"></i>
                                </div>

                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-blue-madison">实习 天树梦想（北京）科技有限公司</span>
                                        <span class="timeline-body-time font-grey-cascade">2013.11 - 2014.6</span>
                                    </div>

                                </div>
                                <div class="timeline-body-content">
                                    <span class="label label-info"> 响应式设计 </span>&nbsp;
                                    <span class="label label-info"> 需求分析 </span>&nbsp;
                                    <span class="label label-info"> 数据库结构设计 </span>&nbsp;
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                        <!-- TIMELINE ITEM -->
                        <div class="timeline-item">
                            <div class="timeline-badge">
                                <div class="timeline-icon">
                                    <i class="icon-trophy font-red-intense"></i>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <div class="timeline-body-arrow">
                                </div>
                                <div class="timeline-body-head">
                                    <div class="timeline-body-head-caption">
                                        <span class="timeline-body-alerttitle font-green-haze">就读于 河北工业职业技术学院</span>
                                        <span class="timeline-body-time font-grey-cascade">2011 - 2014</span>
                                    </div>
                                    <div class="timeline-body-head-actions">

                                    </div>
                                </div>
                                <div class="timeline-body-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            微博协会副会长
                                        </li>
                                        <li class="list-group-item">
                                            动漫社社长
                                        </li>
                                        <li class="list-group-item">
                                            计算机系E科技工作室早期成员
                                        </li>
                                        <li class="list-group-item ">
                                            公益广告大赛一等奖
                                        </li>
                                        <li class="list-group-item ">
                                            广播台机务组
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END TIMELINE ITEM -->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>


    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
@endsection