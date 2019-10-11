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
