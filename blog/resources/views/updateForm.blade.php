@include('header')
  <body>
      @include('navbar')
        <div class="container">
          <div class="row mt-5">

            <div class="col-md-4 offset-md-4">  
               <h3>Add Data</h3>
              <form action="addData" method="POST" enctype="multipart/form-data" class="mt-3">
              	
                @csrf
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$value['name']}}"><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{$value['email']}}"><br>
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{$value['Phone']}}"><br>
                <input type="text" class="form-control" id="roll"  name="roll" placeholder="Enter Roll" value="{{$value['rollNo']}}"><br>
                <input type="subject" class="form-control" id="subject" name="subject" placeholder="Enter Subject" value="{{$value['subject']}}"><br>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="Upload Image"><br>
            
                <button type="submit" class="btn btn-danger"> Submit</button>
              </form>  
            </div>
          </div>
        </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>