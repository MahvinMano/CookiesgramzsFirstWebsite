@if(count($errors)>0)
  @foreach($errors->all() as $errors)
   <div class="alert alert-danger">
    {{$errors}}
     
   </div>
  @endforeach
@endif


@if (session('status'))
   <div class="alert alert-success">
     {{session('status')}}
 </div>
@endif