<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{ Html::style('admin/css/bootstrap.min.css') }}
    {{ Html::style('admin/css/style.css') }}
    {{ Html::style('admin/css/responsive.css') }}
    {{ Html::style('admin/css/font-awesome.min.css') }}
    </head>

    <body>
    <ul>
        <li class="login-modal">
            <a href="#" class="login" data-dismiss="modal" data-toggle="modal" data-target="#modal-login"><i class="fa fa-user"></i>member Login</a>
            <a href="#" class="register" data-dismiss="modal"  data-toggle="modal" data-target="#modal-register"><i class="fa fa-user"></i>member register</a>

            <div class="modal fade" id="modal-login">
                <div class="login-form position-center-center">
                    <h2>@lang('lang.login')
                        <button class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h2>
                    {{ Form::open(['route' => 'login', 'method' => 'POST']) }}
                        <div class="form-group">
                            {{ Form::text('email', old('email'), [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.email_address')
                            ]) }}
                            <i class=" fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.password')
                            ]) }}
                            <i class=" fa fa-lock"></i>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="form-group">
                                    {{ Form::checkbox('remember') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label(trans('lang.remember_me')) }}
                                </div>
                                <div class="form-group">
                                    <a href="#" class="forgot-password" data-dismiss="modal" data-toggle="modal" data-target="#modal-forgot-pass">@lang('lang.forgot_password')</a>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            {{ Form::button(trans('lang.login'), [
                                'class' => 'btn full-width red-btn',
                                'id' => 'btn-submit'
                            ]) }}
                        </div>
                    {{ Form::close() }}
                    <span class="or-reprater"></span>
                    <ul class="others-login-way">
                        <li>
                            <a class="wsm-bg" href="#"> @lang('lang.wsm')</a>
                        </li>
                         <li>
                            <a class="google-plus-bg" href="#">
                                <i class="fa fa-google-plus"></i> @lang('lang.google_plus')
                            </a>
                        </li>
                        <li>
                            <a class="facebook-bg" href="#">
                                <i class="fa fa-facebook"></i> @lang('lang.facebook')
                            </a>
                        </li>
                        <li>
                            <a class="tweet-bg" href="#">
                                <i class="fa fa-twitter"></i> @lang('lang.twitter')
                            </a>
                        </li>
                    </ul>
                     <div class="form-group">
                         <div class="form-inline">
                             <div class="form-group">
                                 <label for="">@lang('lang.not_a_member_yet')</label>
                             </div>
                             <div class="form-group">
                                 <a href="#" class="register" data-dismiss="modal" data-toggle="modal" data-target="#modal-register">@lang('lang.register')</a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-register">
                <div class="login-form position-center-center">
                    <h2>@lang('lang.register')
                        <button class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h2>
                    {{ Form::open(['route' => 'login', 'method' => 'POST']) }}
                        <div class="form-group">
                            {{ Form::text('name', old('name'), [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.name')
                            ]) }}
                            <i class=" fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::text('email', old('email'), [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.email')
                            ]) }}
                            <i class=" fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.password')
                            ]) }}
                            <i class=" fa fa-lock"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::password('password_confirmation', [
                                'class' => 'form-control',
                                'placeholder' => trans('lang.password')
                            ]) }}
                            <i class=" fa fa-lock"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::button(trans('lang.register'), ['class' => 'btn full-width red-btn']) }}
                        </div>
                    {{ Form::close() }}
                    <span class="or-reprater"></span>
                    <ul class="others-login-way">
                        <li>
                            <a class="wsm-bg" href="#"> @lang('lang.wsm')</a>
                        </li>
                         <li>
                            <a class="google-plus-bg" href="#">
                                <i class="fa fa-google-plus"></i> @lang('lang.google_plus')</a>
                        </li>
                        <li>
                            <a class="facebook-bg" href="#">
                                <i class="fa fa-facebook"></i> @lang('lang.facebook')</a>
                        </li>
                        <li>
                            <a class="tweet-bg" href="#">
                                <i class="fa fa-twitter"></i> @lang('lang.twitter')</a>
                        </li>
                    </ul>
                     <div class="form-group">
                         <div class="form-inline">
                             <div class="form-group">
                                 <label for="">@lang('lang.already_has_an_account')</label>
                             </div>
                             <div class="form-group">
                                 <a href="#" class="" data-dismiss="modal" data-toggle="modal" data-target="#modal-login">@lang('lang.login')</a>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-forgot-pass">
                <div class="login-form position-center-center">
                    <h2>@lang('lang.forgot_password')
                        <button class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h2>
                    {{ Form::open(['route' => 'login', 'method' => 'POST']) }}
                        <div class="form-group">
                            {{ Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => trans('lang.email')]) }}
                            <i class=" fa fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            {{ Form::button(trans('lang.reset_password'), ['class' => 'btn full-width red-btn']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </li>
    </ul>
    {{ Html::script('admin/js/jquery.js') }}
    {{ Html::script('admin/js/bootstrap.min.js') }}
</body>

</html>
