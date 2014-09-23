@extends('layouts.default_min')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Sign In!</h3>

            {{ Form::open(['route' => 'login_path']) }}
            <!-- Email form input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:')}}
                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required'])}}
            </div>

            <!-- Password form input -->
            <div class="form-group">
                {{ Form::label('password', 'Password:')}}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required'])}}
            </div>

            <!-- Submit form input -->
            <div class="form-group">
                {{ Form::submit('Sign In', ['class' => 'btn btn-primary'])}}
            </div>

            {{ Form::close() }}
        </div>
    </div>
<div>
    <style>
        .bizmail_loginpanel{font-size:12px;width:300px;height:auto;border:1px solid #cccccc;background:#ffffff; margin: 50px auto;}
        .bizmail_LoginBox{padding:10px 15px;}
        .bizmail_loginpanel h3{padding-bottom:5px;margin:0 0 5px 0;border-bottom:1px solid #cccccc;font-size:14px;}
        .bizmail_loginpanel form{margin:0;padding:0;}
        .bizmail_loginpanel input.text{font-size:12px;width:100px;height:20px;margin:0 2px;border:1px solid #C3C3C3;border-color:#7C7C7C #C3C3C3 #C3C3C3 #9A9A9A;}
        .bizmail_loginpanel .bizmail_column{height:28px;}
        .bizmail_loginpanel .bizmail_column label{display:block;float:left;width:30px;height:24px;line-height:24px;font-size:12px;}
        .bizmail_loginpanel .bizmail_column .bizmail_inputArea{float:left;width:240px;}
        .bizmail_loginpanel .bizmail_column span{font-size:12px;word-wrap:break-word;margin-left: 2px;line-height:200%;}
        .bizmail_loginpanel .bizmail_SubmitArea{margin-left:30px;clear:both; padding-top: 20px;}
        .bizmail_loginpanel .bizmail_SubmitArea a{font-size:12px;margin-left:5px;}
        .bizmail_loginpanel select{width:110px;height:20px;margin:0 2px;}
    </style>
    <script type="text/javascript" src="http://exmail.qq.com/zh_CN/htmledition/js_biz/outerlogin.js"  charset="gb18030"></script>
    <script type="text/javascript">
        writeLoginPanel({domainlist:"greatgoldstar.com", mode:"vertical"});
    </script>
</div>

<!--    place holder-->
<div style="height: 100px; width: 100%"></div>


@stop