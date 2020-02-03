<!Doctype>
<html>
  <head>
    <title>Cookiesgramz</title>
     <link rel="stylesheet" href="css/app.css">
      <script src="js/app.js"></script>
      <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
      <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
      
      
    </head>
   <body>
    @include('inc.navbar')
       @if(Request::is('/'))
          @include('inc.jumbo')
       @endif
       <br>
       <div class="container">
         <div class="row">
          <div class="col-md-8">
             @include('inc.messages')
             @yield('content')
             
             </div>    
        </div>
       </div>
       
    
    
    @include('inc.sidebar')
       
       <!-- Footer -->
<footer class="page-footer font-small bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:white;">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Vin Software Solution.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
       
<script>
$(document).ready(function() {
    $('#mess').DataTable();
} );
</script>

    </body>
</html>

