

 @include('partials._head')
  <body>
 @include('partials._nav')  

<main role="main">

<div class="container marketing">

@yield('content')

</div><!-- /.container -->

@include('partials._footer')
 
</main>
@include('partials._javascript')
</body>
</html>
