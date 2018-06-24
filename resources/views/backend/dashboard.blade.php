@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    首页
    <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">
    <!-- Info boxes -->
    <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-pricetag-outline"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Info A</span>
            <span class="info-box-number" title="100 Unit">
                11 <small>Unit</small>
            </span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa ion-ios-body-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Info B</span>
            <span class="info-box-number">33<small>Unit</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Info C</span>
            <span class="info-box-number">760 <small>Unit</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-social-yen-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Info D</span>
            <span class="info-box-number">2,000 <small>Unit</small></span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
    <div class="col-md-12">
        
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
    <!-- Left col -->
    <div class="col-md-8">
        <!-- MAP & BOX PANE -->
        
        <!-- /.box -->
        <div class="row">
        <div class="col-md-6">
            <!-- DIRECT CHAT -->
            
            <!--/.direct-chat -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- USERS LIST -->
            
            <!--/.box -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">最近订单</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                <th># ID</th>
                <th>商品</th>
                <th>状态</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td><a>OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="label label-success">Shipped</span></td>
                </tr>
                <tr>
                <td><a>OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                <td><a>OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                </tr>
                <tr>
                <td><a>OR7429</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-info">Processing</span></td>
                </tr>
                <tr>
                <td><a>OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                <td><a>OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="label label-danger">Delivered</span></td>
                </tr>
                <tr>
                <td><a>OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="label label-success">Shipped</span></td>
                </tr>
                </tbody>
            </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
        </div>
        <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Inventory</span>
            <span class="info-box-number">5,200</span>

            <div class="progress">
            <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
                50% Increase in 30 Days
                </span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Mentions</span>
            <span class="info-box-number">92,050</span>

            <div class="progress">
            <div class="progress-bar" style="width: 20%"></div>
            </div>
            <span class="progress-description">
                20% Increase in 30 Days
                </span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Downloads</span>
            <span class="info-box-number">114,381</span>

            <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
            </div>
            <span class="progress-description">
                70% Increase in 30 Days
                </span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Direct Messages</span>
            <span class="info-box-number">163,921</span>

            <div class="progress">
            <div class="progress-bar" style="width: 40%"></div>
            </div>
            <span class="progress-description">
                40% Increase in 30 Days
                </span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->

        
        <!-- /.box -->

        <!-- PRODUCT LIST -->
        
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
