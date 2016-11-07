<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div>

    <section class="header">
        @include('includes.header')
        @include('includes.headmobileversion0')
    </section>
<section class="home" id="home">
    <div class="container" >
        <div id="content" class="col-md-8">
            @yield('content')
        </div>
        <div  class="col-md-4">
            @include('includes.sidebar')
        </div>
    </div>   
</section>

    <div id="footer">
        @include('includes.footer')
    </div>

</div>
</body>
</html>