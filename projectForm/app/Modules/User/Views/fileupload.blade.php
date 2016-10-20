
<!DOCTYPE html>
<html>
<head>
    <title>Demo Project</title>
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
                <img id="profile-img" class="profile-img-card" style="display:inline; position:relative; left:20%" src="qdi-generic-testimonial-person.png"/>
                <form action="fileupload" method="post" enctype="multipart/form-data" id="upload"  class="form-signin" >

                    <br>
                    <label >Image Upload </label>
                    <input type="file" name="file[]" multiple  >
                    <br>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                       Submit </button>


                    {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}


                    <input type="hidden" name="_token" value="{{csrf_token()}}">


                </form>
            </div>
        </div>
    </div>
</div>
<div id="message">

</div>

<script>
    var form = document.getElementById('upload');
    var request = new XMLHttpRequest();
    form.addEventListener('submit',function(e){
        e.preventDefault();
        var formdata = new formdata(form);
        request.open('post','/fileupload');
        request.addEventListener("load",trasfercomplete);
        request.send(formdata);

    });

    function trasfercomplete(data){
        response JSON.parse( data.currentTarget.response);
        if(response.success) {
            document.getElementById('message'), innerHTML = "successfull";
        }
    }

</script>

</body>
</html>







