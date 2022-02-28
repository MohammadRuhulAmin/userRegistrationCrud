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
            <h3 class="card-title">User Information Details  </h3>
        </div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <td>ID</td>
                    <td>{{$user->id}}</td>
                </tr>
                <tr>
                    <td>Name </td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Contact </td>
                    <td>{{$user->contact}}</td>
                </tr>
            </table>
        </div>
          
      </div>
       
       
   </div>
</body>
</html>