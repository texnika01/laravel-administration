@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
  <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="brand-card">
                        <div class="brand-card-header bg-facebook">
                            <i class="fa fa-facebook"></i>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="social-box-chart-1" height="96" width="208" class="chartjs-render-monitor" style="display: block; width: 208px; height: 96px;"></canvas>
                                <div id="social-box-chart-1-tooltip" class="chartjs-tooltip bottom" style="opacity: 0; left: 35px; top: 65.6px;"><div class="tooltip-header"><div class="tooltip-header-item">February</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span class="tooltip-body-item-value">59</span></div></div></div></div>
                        </div>
                        <div class="brand-card-body">
                            <div>
                                <div class="text-value">{{ $fb }}</div>
                                <div class="text-uppercase text-muted small">regiser</div>
                            </div>
                            <div>
                                <div class="text-value">459</div>
                                <div class="text-uppercase text-muted small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="brand-card">
                        <div class="brand-card-header bg-twitter">
                            <i class="fa fa-twitter"></i>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="social-box-chart-2" height="96" width="208" class="chartjs-render-monitor" style="display: block; width: 208px; height: 96px;"></canvas>
                            </div>
                        </div>
                        <div class="brand-card-body">
                            <div>
                                <div class="text-value">{{ $tw }}</div>
                                <div class="text-uppercase text-muted small">register</div>
                            </div>
                            <div>
                                <div class="text-value">1.792</div>
                                <div class="text-uppercase text-muted small">tweets</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="brand-card">
                        <div class="brand-card-header bg-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="social-box-chart-3" height="96" width="208" class="chartjs-render-monitor" style="display: block; width: 208px; height: 96px;"></canvas>
                            </div>
                        </div>
                        <div class="brand-card-body">
                            <div>
                                <div class="text-value">500+</div>
                                <div class="text-uppercase text-muted small">contacts</div>
                            </div>
                            <div>
                                <div class="text-value">292</div>
                                <div class="text-uppercase text-muted small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="brand-card">
                        <div class="brand-card-header bg-google-plus">
                            <i class="fa fa-google-plus"></i>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="social-box-chart-4" height="96" width="208" class="chartjs-render-monitor" style="display: block; width: 208px; height: 96px;"></canvas>
                            </div>
                        </div>
                        <div class="brand-card-body">
                            <div>
                                <div class="text-value">894</div>
                                <div class="text-uppercase text-muted small">followers</div>
                            </div>
                            <div>
                                <div class="text-value">92</div>
                                <div class="text-uppercase text-muted small">circles</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-group mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-people"></i>
                        </div>
                        <div class="text-value">87.500</div>
                        <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-user-follow"></i>
                        </div>
                        <div class="text-value">385</div>
                        <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-basket-loaded"></i>
                        </div>
                        <div class="text-value">1238</div>
                        <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-pie-chart"></i>
                        </div>
                        <div class="text-value">28%</div>
                        <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="icon-speedometer"></i>
                        </div>
                        <div class="text-value">5:34:11</div>
                        <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="callout callout-info">
                                <small class="text-muted">User</small><br>
                                <strong class="h4">{{ $user }}</strong>
                            </div>
                        </div><!--/.col-->
                        <div class="col-sm-2">
                            <div class="callout callout-danger">
                                <small class="text-muted">New User</small><br>
                                <strong class="h4">{{ $newuser }}</strong>
                            </div>
                        </div><!--/.col-->
                        <div class="col-sm-2">
                            <div class="callout callout-warning">
                                <small class="text-muted">Pageviews</small><br>
                                <strong class="h4">78,623</strong>
                            </div>
                        </div><!--/.col-->
                        <div class="col-sm-2">
                            <div class="callout callout-success">
                                <small class="text-muted">Organic</small><br>
                                <strong class="h4">49,123</strong>
                            </div>
                        </div><!--/.col-->
                        <div class="col-sm-2">
                            <div class="callout">
                                <small class="text-muted">CTR</small><br>
                                <strong class="h4">23%</strong>
                            </div>
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div>
            </div>
            <!-- dffff -->
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">Traffic &amp; Sales</div>
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<div class="callout callout-info">
<small class="text-muted">New Clients</small>
<br>
<strong class="h4">9,123</strong>
<div class="chart-wrapper">
<canvas id="sparkline-chart-1" width="100" height="30"></canvas>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="callout callout-danger">
<small class="text-muted">Recuring Clients</small>
<br>
<strong class="h4">22,643</strong>
<div class="chart-wrapper">
<canvas id="sparkline-chart-2" width="100" height="30"></canvas>
</div>
</div>
</div>

</div>

<hr class="mt-0">
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Monday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Tuesday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Wednesday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Thursday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Friday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Saturday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-4">
<div class="progress-group-prepend">
<span class="progress-group-text">Sunday</span>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<div class="callout callout-warning">
<small class="text-muted">Pageviews</small>
<br>
<strong class="h4">78,623</strong>
<div class="chart-wrapper">
<canvas id="sparkline-chart-3" width="100" height="30"></canvas>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="callout callout-success">
<small class="text-muted">Organic</small>
<br>
<strong class="h4">49,123</strong>
<div class="chart-wrapper">
<canvas id="sparkline-chart-4" width="100" height="30"></canvas>
</div>
</div>
</div>

</div>

<hr class="mt-0">
<div class="progress-group">
<div class="progress-group-header">
<i class="icon-user progress-group-icon"></i>
<div>Male</div>
<div class="ml-auto font-weight-bold">43%</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group mb-5">
<div class="progress-group-header">
<i class="icon-user-female progress-group-icon"></i>
<div>Female</div>
<div class="ml-auto font-weight-bold">37%</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group">
<div class="progress-group-header align-items-end">
<i class="icon-globe progress-group-icon"></i>
<div>Organic Search</div>
<div class="ml-auto font-weight-bold mr-2">191.235</div>
<div class="text-muted small">(56%)</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group">
<div class="progress-group-header align-items-end">
<i class="icon-social-facebook progress-group-icon"></i>
<div>Facebook</div>
<div class="ml-auto font-weight-bold mr-2">51.223</div>
<div class="text-muted small">(15%)</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group">
<div class="progress-group-header align-items-end">
<i class="icon-social-twitter progress-group-icon"></i>
<div>Twitter</div>
<div class="ml-auto font-weight-bold mr-2">37.564</div>
<div class="text-muted small">(11%)</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-group">
<div class="progress-group-header align-items-end">
<i class="icon-social-linkedin progress-group-icon"></i>
<div>LinkedIn</div>
<div class="ml-auto font-weight-bold mr-2">27.319</div>
<div class="text-muted small">(8%)</div>
</div>
<div class="progress-group-bars">
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>

</div>

<br>
<table class="table table-responsive-sm table-hover table-outline mb-0">
<thead class="thead-light">
<tr>
<th class="text-center">
<i class="icon-people"></i>
</th>
<th>User</th>
<th class="text-center">Country</th>
<th>Usage</th>
<th class="text-center">Payment Method</th>
<th>Activity</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/1.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-success"></span>
</div>
</td>
<td>
<div>Yiorgos Avraamu</div>
<div class="small text-muted">
<span>New</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
</td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>50%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-cc-mastercard" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>10 sec ago</strong>
</td>
</tr>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-danger"></span>
</div>
</td>
<td>
<div>Avram Tarasios</div>
<div class="small text-muted">
<span>Recurring</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
 </td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>10%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-cc-visa" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>5 minutes ago</strong>
</td>
</tr>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-warning"></span>
</div>
</td>
<td>
<div>Quintin Ed</div>
<div class="small text-muted">
<span>New</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
</td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>74%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-cc-stripe" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>1 hour ago</strong>
</td>
</tr>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-secondary"></span>
</div>
</td>
<td>
<div>Enéas Kwadwo</div>
<div class="small text-muted">
<span>New</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
</td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>98%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-paypal" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>Last month</strong>
 </td>
</tr>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-success"></span>
</div>
</td>
<td>
<div>Agapetus Tadeáš</div>
<div class="small text-muted">
<span>New</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
</td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>22%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-google-wallet" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>Last week</strong>
</td>
</tr>
<tr>
<td class="text-center">
<div class="avatar">
<img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
<span class="avatar-status badge-danger"></span>
</div>
</td>
<td>
<div>Friderik Dávid</div>
<div class="small text-muted">
<span>New</span> | Registered: Jan 1, 2015</div>
</td>
<td class="text-center">
<i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
</td>
<td>
<div class="clearfix">
<div class="float-left">
<strong>43%</strong>
</div>
<div class="float-right">
<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
</div>
</div>
<div class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</td>
<td class="text-center">
<i class="fa fa-cc-amex" style="font-size:24px"></i>
</td>
<td>
<div class="small text-muted">Last login</div>
<strong>Yesterday</strong>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
            <!-- dffff -->
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    {!! __('strings.backend.welcome') !!}
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
