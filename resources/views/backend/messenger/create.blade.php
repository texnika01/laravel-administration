@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong><h5>@lang('strings.backend.messages.create')</h5></strong>
                </div>
                <div class="card-body">
                        {!! Form::open(['route' => 'admin.messages.store']) !!}

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="text-input">Subject</label>
                            <div class="col-md-9">
                                <input class="form-control" id="text-input" type="text" name="subject" placeholder="subject"
                                       value="{{ old('subject') }}">
                                       @if($errors->has('subject'))
                                            <span class="help-block text-danger">
                                                {{$errors->first('subject')}}
                                            </span>
                                        @endif
                                        <br/>
                                <span class="help-block text-danger">* This is a help Message</span> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="textarea-input">Message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="textarea-input" name="message" rows="9" placeholder="@lang('strings.backend.messages.text_messages')">
                                    {{ old('message') }}
                                </textarea>
                                @if($errors->has('message'))
                                    <span class="help-block text-danger">
                                        {{$errors->first('message')}}
                                    </span>
                                @endif
                                <br/>
                                
                                <span class="help-block text-danger">* This is a help Subject</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            @if($users->count() > 0)
                                <label class="col-md-3 col-form-label">Messages from :</label>
                                <div class="col-md-9 col-form-label">
                                    @foreach($users as $user)
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" name="recipients" id="inline-checkbox1" type="checkbox" value="{{ $user->id }}">
                                        <label class="form-check-label" for="inline-checkbox1">{!!$user->first_name!!}</label>
                                    </div>
                                    @endforeach
                                    <br/>
                                    @if($errors->has('recipients'))
                                        <span class="help-block text-danger">
                                            {{$errors->first('recipients')}}
                                        </span>
                                    @endif
                                <br>
                                    <span class="help-block text-danger">* This is a help Messages from</span>
                                </div>

                            @endif
                        </div>
                        <div class="text-center">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button class="btn btn-sm btn-danger" type="reset">
                                <i class="fa fa-ban"></i>Reset
                            </button>
                        </div>
                    {!! Form::close() !!}

                </div>
                <div class="card-footer text-danger">
                    All input on ( * ) its recuired
                </div>
            </div>
        </div>
    </div>
@stop
