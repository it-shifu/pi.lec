<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Day 001 Login Form</title>


    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

    <link rel="stylesheet" href="{{url('css/style.css')}}">


</head>

<body>
<div class="login-wrap">
    <form class="login-html" method="POST" action="{{url('/validate')}}">
        @csrf
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">login</label>
                    <input id="user" type="email" class="input" name="login" required>
                </div>
                <div class="group">
                    <label for="user" class="label">pass</label>
                    <input id="user" type="text" class="input" name="pass" required>
                </div>

                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>

            </div>

        </div></div>
    </form>

</div>


</body>
</html>
