@extends('backend.layouts.app')


@section('content')
    <div class="row">
            <div class="col">
                    <div class="card">
                         <!-- start -->
                    <div class="card-header">
                        <strong>@lang('strings.backend.messages.index')</strong>
                    </div><!--card-header-->
                        @if (Session::has('error_message'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error_message') }}
                            </div>
                        @endif
                        @if($threads->count() > 0)
                        <div class="card-body">
                            @foreach($threads as $thread)
                            <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
                            <div id="thread_list_{{$thread->id}}" class="media alert {{ $class }}">
                                <h4 class="media-heading">{!! link_to('admin/messages/' . $thread->id, $thread->subject) !!}</h4>
                                <p id="thread_list_{{$thread->id}}_text">{{ $thread->latestMessage->body }}</p>
                                <p><small><strong>Creator:</strong> {{ $thread->creator()->first_name }}</small></p>
                                <p><small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(), ['first_name']) }}</small></p>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <p>Sorry, no threads.</p>
                            <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Compose
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <h4 class="modal-title">Compose</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form role="form" class="form-horizontal">
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">To</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="cc" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Subject</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-2 control-label">Message</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-2 col-lg-10">
                                                      <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>Attachment</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span>
                                                      <button class="btn btn-send" type="submit">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                        @endif
                    </div>
            </div>
            
                <div class="email-app mb-4">
<nav>
<a class="btn btn-danger btn-block" href="page-inbox-compose.html">New Email</a>
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-inbox"></i> Inbox
<span class="badge badge-danger">4</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-star"></i> Stared</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-rocket"></i> Sent</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-trash-o"></i> Trash</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-bookmark"></i> Important
<span class="badge badge-info">5</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<i class="fa fa-inbox"></i> Inbox
<span class="badge badge-danger">4</span>
</a>
</li>
</ul>
</nav>
<main class="inbox">
<div class="toolbar">
<div class="btn-group">
<button class="btn btn-light" type="button">
<span class="fa fa-envelope"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-star"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-star-o"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-bookmark-o"></span>
</button>
</div>
<div class="btn-group">
<button class="btn btn-light" type="button">
<span class="fa fa-mail-reply"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-mail-reply-all"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-mail-forward"></span>
</button>
</div>
<button class="btn btn-light" type="button">
<span class="fa fa-trash-o"></span>
</button>
<div class="btn-group">
<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
<span class="fa fa-tags"></span>
<span class="caret"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">add label
<span class="badge badge-danger"> Home</span>
</a>
<a class="dropdown-item" href="#">add label
<span class="badge badge-info"> Job</span>
</a>
<a class="dropdown-item" href="#">add label
<span class="badge badge-success"> Clients</span>
</a>
<a class="dropdown-item" href="#">add label
<span class="badge badge-warning"> News</span>
</a>
</div>
</div>
<div class="btn-group float-right">
<button class="btn btn-light" type="button">
<span class="fa fa-chevron-left"></span>
</button>
<button class="btn btn-light" type="button">
<span class="fa fa-chevron-right"></span>
</button>
</div>
</div>
<ul class="messages">
<li class="message unread">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">
<span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">
<span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message unread">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message unread">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
<li class="message">
<a href="#">
<div class="actions">
<span class="action">
<i class="fa fa-square-o"></i>
</span>
<span class="action">
<i class="fa fa-star-o"></i>
</span>
</div>
<div class="header">
<span class="from">Lukasz Holeczek</span>
<span class="date">Today, 3:47 PM</span>
</div>
<div class="title">Lorem ipsum dolor sit amet.</div>
<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</a>
</li>
</ul>
</main>
</div>

                        @endif
                    </div>
            </div>

    </div>
@stop

