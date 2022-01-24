@include('header')
  <body>
      @include('navbar')
        <div class="container">
          <div class="row mt-5">

            <div class="col-md-4 offset-md-4">
              @if(session('errorMail'))
                     <div class="alert alert-danger" role="alert">
                           Enter Correct Email !
                     </div>
               @elseif(session('errorPass'))
                                            <div class="alert alert-danger" role="alert">
                           Enter Correct Password !
                     </div>
               @endif      
               <h3>Login</h3>
              <form action="/auth" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"><br>
                <input type="password" class="form-control" id="phone" name="password" placeholder="Enter Password"><br>

                <button type="submit" class="btn btn-danger btn-block"> Submit</button>
              </form>  
            </div>
          </div>
        </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>