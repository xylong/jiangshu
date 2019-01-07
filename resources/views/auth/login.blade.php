<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v3.bootcss.com/examples/signin/signin.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="form-signin-heading">{{ __('Login') }}</h2>

        <div class="form-group row">
            <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
            <input type="email" name="email" id="inputEmail" class="form-control" value="{{ old('email') }}"
                   placeholder="{{ __('E-Mail Address') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
            <input type="password" name="password" id="inputPassword" class="form-control"
                   placeholder="{{ __('Password') }}" required>
        </div>

        <div class="form-group row">
            <div class="checkbox">
                <label>
                    <input type="checkbox"
                           name="is_remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

        <div class="form-group row mb-0">
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>

            <a href="{{ route('register') }}" class="btn btn-lg btn-primary btn-block" type="submit">去注册>></a>
        </div>
    </form>

</div> <!-- /container -->

</body>
</html>
