@extends('layouts.default_min')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active"><a href="#admin-tab" role="tab" data-toggle="tab">{{ trans('main.Admin') }}</a></li>
                <li><a href="#email-tab" role="tab" data-toggle="tab">{{ trans('main.Email') }}</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="admin-tab">
                    <h3>{{trans('main.SignIn')}}</h3>

                    {{ Form::open(['route' => 'login_path']) }}
                    <!-- Email form input -->
                    <div class="form-group">
                        {{ Form::label('email', trans('main.email'))}}
                        {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required'])}}
                    </div>

                    <!-- Password form input -->
                    <div class="form-group">
                        {{ Form::label('password', trans('main.password'))}}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required'])}}
                    </div>

                    <!-- Submit form input -->
                    <div class="form-group">
                        {{ Form::submit(trans('main.SignIn'), ['class' => 'btn btn-primary'])}}
                    </div>

                    {{ Form::close() }}
                </div>
                <div class="tab-pane" id="email-tab">
                    <style>
                        /*.bizmail_loginpanel{font-size:12px;width:300px;height:auto;border:1px solid #cccccc;background:#ffffff; margin: 50px auto;}*/
                        .bizmail_LoginBox{padding:10px 0px; margin-top: 30px;}
                        .bizmail_loginpanel h3{padding-bottom:5px;margin:0 0 5px 0;border-bottom:1px solid #cccccc;font-size:14px;}
                        .bizmail_loginpanel form{margin:0;padding:0;}
                        .bizmail_SubmitArea input{
                            display: inline-block;
                            padding: 6px 12px;
                            margin-bottom: 0;
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 1.42857143;
                            text-align: center;
                            white-space: nowrap;
                            vertical-align: middle;
                            cursor: pointer;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            background-image: none;
                            border: 1px solid transparent;
                            border-radius: 4px;
                            background-color: #009ddc;
                        }
                        .bizmail_SubmitArea input:hover{
                            background-color: #0490C9;
                            border-color: #0490C9;
                            border-width: 0px;
                        }
                        .bizmail_loginpanel input.text{
                            display: block;
                            width: 100%;
                            height: 34px;
                            padding: 6px 12px;
                            font-size: 14px;
                            line-height: 1.42857143;
                            color: #555;
                            background-color: #fff;
                            background-image: none;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                        }
                        .bizmail_loginpanel .bizmail_column{}
                        .bizmail_loginpanel .bizmail_column label{}
                        .bizmail_loginpanel .bizmail_column .bizmail_inputArea{}
                        .bizmail_loginpanel .bizmail_column span{}
                        .bizmail_loginpanel .bizmail_SubmitArea{clear:both; padding-top: 20px;}
                        .bizmail_loginpanel .bizmail_SubmitArea a{font-size:12px;margin-left:5px;}
                        .bizmail_loginpanel select{width:110px;height:20px;margin:0 2px;}
                    </style>
                    <script type="text/javascript" src="http://exmail.qq.com/zh_CN/htmledition/js_biz/outerlogin.js"  charset="gb18030"></script>
                    <script type="text/javascript">
                        writeLoginPanel({domainlist:"greatgoldstar.com", mode:"vertical"});
                    </script>
                </div>
            </div>
        </div>

    </div>

<!--    place holder-->
<div style="height: 250px; width: 100%"></div>


@stop