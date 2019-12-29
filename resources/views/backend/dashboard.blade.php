@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
<?php use Illuminate\Log\Events; ?>
@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Traffic</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- start info users -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="callout callout-info">
                                                <small class="text-muted">New Clients</small>
                                                <br>
                                                <strong class="h4">{!! $newuser !!}</strong>
                                                <div class="chart-wrapper">
                                                    <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="callout callout-danger">
                                                <small class="text-muted">All Clients</small>
                                                <br>
                                                <strong class="h4">{!! $user !!}</strong>
                                                <div class="chart-wrapper">
                                                    <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="callout callout-warning">
                                                <small class="text-muted">Pageviews</small>
                                                <br>
                                                <strong class="h4">78,623</strong>
                                                <div class="chart-wrapper">
                                                    <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
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
                                    <br>
                                    <!-- end info users -->
                                    <hr class="mt-0">
                                    <!-- start info socialite -->
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fas fa-globe progress-group-icon"></i>
                                            <div>Organic Search</div>
                                            <div class="ml-auto font-weight-bold mr-2">191.235</div>
                                            <div class="text-muted small">(56%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-facebook-f progress-group-icon"></i>
                                            <div>Facebook</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $fb !!}</div>
                                            <div class="text-muted small">({!! $fb !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $fb !!}%" aria-valuenow="{!! $fb !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-twitter progress-group-icon"></i>
                                            <div>Twitter</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $tw !!}</div>
                                            <div class="text-muted small">({!! $tw !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $tw !!}%" aria-valuenow="{!! $tw !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-linkedin progress-group-icon"></i>
                                            <div>LinkedIn</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $linkedin !!}</div>
                                            <div class="text-muted small">({!! $linkedin !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $linkedin !!}%" aria-valuenow="{!! $linkedin !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-bitbucket progress-group-icon"></i>
                                            <div>Bitbucket</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $bit !!}</div>
                                            <div class="text-muted small">({!! $bit !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $bit !!}%" aria-valuenow="{!! $bit !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-github progress-group-icon"></i>
                                            <div>Github</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $git !!}</div>
                                            <div class="text-muted small">({!! $git !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $git !!}%" aria-valuenow="{!! $git !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header align-items-end">
                                            <i class="fab fa-google progress-group-icon"></i>
                                            <div>Google</div>
                                            <div class="ml-auto font-weight-bold mr-2">{!! $google !!}</div>
                                            <div class="text-muted small">({!! $google !!}%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: {!! $google !!}%" aria-valuenow="{!! $google !!}" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end info socialite -->
                                </div>
                            </div>
                            <hr class="mt-0">
                            <!-- start logs info -->
                            <div class="row">
                                <p class="">Error info</p>
                            </div>

                            <!-- end logs info -->
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <!-- row welcome -->
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
    <!-- end row welcome -->
@endsection
