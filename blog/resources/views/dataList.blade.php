@include('header')
<body>
  @include('navbar')
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        @if(session('updateSuccess'))
                    <div class="alert alert-success" role="alert">
                          Data Updated Successfully !
                     </div>
        @endif 
        <h2 class="mt-5">Aspirants List </h2>
        <table class="table table-striped mt-3">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Roll No</th>
              <th scope="col">Phone</th>
              <th scope="col">Subject</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>

            </tr>
          </thead>
          <tbody>
            @foreach($studentList as $value)
            <tr>
              <td scope="row">{{$value['name']}}</td>
              <td>{{$value['email']}}</td>
              <td>{{$value['rollNo']}}</td>
              <td>{{$value['Phone']}}</td>
              <td>{{$value['subject']}}</td>
              <td><img src="{{ asset('storage/'.$value['image'])}}"></td>
              <td><a href="showData/{{$value['id']}}" class="btn btn-success btn-sm">Update</a></td>
              <td><a href="delete/{{$value['id']}}" class="btn btn-danger btn-sm">Delete</a></td>
            
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>