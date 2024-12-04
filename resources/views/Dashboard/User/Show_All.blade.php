
@extends('Dashboard/Dashboard_main')

@section('content')    
  
        <h2>Users</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded mr-4" placeholder="Search by Name or Email or Phone" aria-label="Search"
              aria-describedby="search-addon"  /> 
           
              <button type="button" class="btn btn-primary float-Right"> <i class="fas fa-plus "></i> </button>

         
        </div>
        <div >
            <label>Search by Category : </label>
            <select class="form-select form-select-lg mb-3 mt-3 rounded" aria-label=".form-select-lg example">
              <option selected>All</option>
              <option value="1">Admin</option>
              <option value="2">Company Owner</option>
              <option value="3">Client</option>
            </select>
        </div>

          
         



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
   
    
 

            @foreach($Users as $user)
                        
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}} {{$user->Second_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->Category}}</td>
                                <td>{{$user->Phone}}</td>
                            </tr>
                        

             @endforeach
            
                
    </tbody>
</table>         
  </div>
@endsection  