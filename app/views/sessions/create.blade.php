@extends('layout')

@section('content')

 <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

           {{\Illuminate\Support\Facades\Form::open(array('route' => 'sessions.store', 'method' => 'post', 'class' => 'form-horizontal')) }}

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>

                            <div class="input-group">

                                <div style="margin:10px" class="form-group">
           {{\Illuminate\Support\Facades\Form::submit('Login', array('class' => 'btn btn-success'))}}

                                </div>

       {{\Illuminate\Support\Facades\Form::close()}}
                        </div>
                    </div>
        </div>

         </div>
    </div>
</div>

    @stop