<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="m-3">
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Information List </h3>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <thead>
                    <th>#SL</th>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Contact  </th>
                    <th>Action </th>
                </thead>
                <tbody>
                    @if($users)
                        @foreach ($users as $key=>$user )
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->contact}}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="btn btn-danger">DLT</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{route('user.show',$user->id)}}">Show </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @endforeach
                    @endif 
                </tbody>
            </table>
        </div>
          
      </div>
       
       
   </div>
</body>
</html>