<!DOCTYPE html>
<html>
<head>
    <title>Demo Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('src/js/main.js')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in </h1>
            <div class="account-wall">
                <img id="profile-img" class="profile-img-card" style="display:inline; position:relative; left:20%" src="qdi-generic-testimonial-person.png"/>
                <form action="{{URL::to('updateuserdata')}}" method="post" class="form-signin"  enctype="multipart/form-data">

                    <label >Frist name</label>
                    <input type="text" id="FN" name="name" class="form-control" placeholder="firstname" >

                    <label >Last name</label>
                    <input type="text"  name="lname" class="form-control" placeholder="lastname">


                    <label >Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" >

                    <br>
                    <label >Image Upload </label>
                    <input type="file" name="file[]"   >
                    <br>

                    <label >Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Registration</button>


                    <button class="btn btn-lg btn-primary btn-block" type="reset">
                        Reset</button>

                    <input type="hidden" name="_token" value="{{Session::token()}}">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        