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

    <title>注册</title>

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

    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="form-signin-heading">{{ __('Register') }}</h2>

        <div class="form-group row">
            <label for="name" class="sr-only">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                   placeholder="{{ __('Name') }}" required autofocus>
        </div>

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
            <label class="sr-only">{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" class="form-control"
                   placeholder="{{ __('Confirm Password') }}" required>
        </div>

        <div class="form-group row">
            <label class="sr-only">验证码</label>

            <div class="col-md-6">
                <input id="captcha" class="form-control" name="captcha">
            </div>

            <div class="col-md-6">
                <img class="thumbnail captcha" src="{{ captcha_src('flat') }}"
                     onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
            </div>

            @if ($errors->has('captcha'))
                <span class="help-block">
                    <strong>{{ $errors->first('captcha') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Register') }}</button>
        </div>
    </form>

</div> <!-- /container -->

</body>
</html>
