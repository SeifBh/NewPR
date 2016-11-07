<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div>

    <section class="header">
        @include('includes.nav')
        @include('includes.header')
        @include('includes.headmobileversion0')

    </section>
<section class="home" id="home" ng-app="postApp" ng-controller="postController">
    <div class="container" >
        <div id="content" class="col-md-12">
            @yield('content')
        </div>

    </div>   
</section>

    <div id="footer">
        @include('includes.footer')
    </div>

</div>
</body>
</html>