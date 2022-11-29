<?php  $pageTitle = "Register"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title><?= $pageTitle;?></title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Sign <span class="tx-info">Up</span> <span class="tx-normal"></span></div>
            <div class="tx-center mg-b-40">Softness IT</div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                </div><!-- form-group -->
                <div class="form-group">
                    <select name="role" id="role" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        <option value="3">Vendor</option>
                    </select>
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your email" name="email">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>

            <div class="mg-t-40 tx-center">Not yet a member? <a href="{{route('login')}}" class="tx-info">Sign In</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}lib/select2/js/select2.min.js"></script>
    <script>
        $(function() {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>

</body>

</html>