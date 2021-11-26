<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <script src="/js/app.js"></script>
        <!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="269900525012-5p2dvkcetgoma3a4l7jh27ki0mgre59n.apps.googleusercontent.com"> -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/app.css?<?php echo date("mj", time())?>">
    </head>
    <boby>
        <div class="toolbar_section">
            <span class="toolbar_title">TEST_FOR_LOGIN</span>
            <span class="toolbar_title2"></span>
            
        </div>

        <div class="container">
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </div>
    </body>
</html>