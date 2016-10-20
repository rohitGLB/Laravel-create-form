
<!DOCTYPE html>
<html><head>
    <title>Demo project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in </h1>
            <div class="account-wall">
                <form action="/forgotpassotp" method="post" class="form-signin" >

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" name="otp" class="form-control" placeholder="Write OTP here " required>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit OTP </button>

                    <a href="#" class="pull-right need-help"></a><span class="clearfix"></span>
                </form>
            </div>
            <a href="/signup" class="text-center new-account">Create an account</a>
        </div>
    </div>
</div>
</html>


