@extends("layouts/app")

@section("content")
  <h1>Messages</h1>
  

    
      
     <table id="mess" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Messages</th>
            
        </tr>
    </thead>
        <tbody>
           @if(count($messages)>0)
     @foreach($messages as $message)
        <tr>   
        <td>{{$message->username}}</td>
        <td>{{$message->email}}</td>
        <td>{{$message->messages}}</td>
        </tr> 
       @endforeach
        @endif
</tbody>
</table>
    

   
@endsection



