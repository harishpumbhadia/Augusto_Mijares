<!DOCTYPE html>
<html lang="en">

   <head>
      @include('includes.head')
   </head>
   <body class="body"> 
        <div id="outer">
            @include('includes.outer')
        </div>
        @yield('content')
    <footer id='footer'>
        @include('includes.footer')
    </footer>
     @yield('script')
   </body>
     
</html>