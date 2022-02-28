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
          <form action="{{route('user.update',$user->id)}}" method="post">
              @csrf 
              @method('PUT')
                <div class="card-header">
                    <h3 class="card-title">
                        User Registration Information
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="from-control">User Name </label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}" />
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span> 
                        @endif 
                    </div>
                    <div class="form-group">
                        <label class="from-control">User Email  </label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}" />
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span> 
                        @endif 
                    </div>
                    <div class="form-group">
                        <label class="from-control">User Contact  </label>
                        <input type="text" class="form-control" name="contact" value="{{$user->contact}}" />
                        @if($errors->has('contact'))
                            <span class="text-danger">{{$errors->first('contact')}}</span> 
                        @endif 
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Submit</button>
                </div>
          </form>
          
      </div>
       
       
   </div>
</body>
</html>