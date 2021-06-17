@extends('welcome')

@section('content')



<h1>Bangladesh Traffic Police</h1>
<br>
<br>


<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        <a href="{{ route('add_case')}}"class="btn btn-danger"> Input Case  </a>
        <a href="{{ route('search_case')}}"class="btn btn-info">Search Case </a>
       <br>
       @if ($errors->any())
           <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
        <!-- <form action="#" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" placeholder="Category Name" name="name">
            </div>
         
          <div class="form-group floating-label-form-group controls">
              <label>Slug Name</label>
              <input type="text" class="form-control" placeholder="Slug Name" name="slug">
            </div>
          <br>
          
          <button type="submit" class="btn btn-primary" >Submit</button>
        </form> -->
      </div>
    </div>
</div>

<br>
<br>

@endsection