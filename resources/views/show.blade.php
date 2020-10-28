<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>ALl data SHow</title>
</head>
<body>
     
    <div class="container">
        <div class="row">
       <legend class="justify-content-center"> Show Data</legend>
          @if(session('info'))
              <div class="alert alert-success">
                   {{session('info')}}
      
              </div>
          @endif
      
          <table class="table table-striped">
            <thead>
              <tr class="bg-primary">
                <th scope="col">ACTION</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">COMPLETED</th>

               
              </tr>
            </thead>

            <tbody>
              @if(count($vlogs) > 0)
                @foreach($vlogs->all() as $vlog)
      
      
              <tr>
                <th scope="row"><a class="btn btn-warning btn-sm" href="{{route('vlog.edit',$vlog->id)}}">Edit</a>
                  <a class="btn btn-danger btn-sm" href="{{route('vlog.delete',$vlog->id)}}"> Delete</a>


                </th>

                <td>{{$vlog->title}}</td>
                <td>{{$vlog->description}}</td>
                @if (!$vlog->completed)
                <td><a href="{{route('vlog.complete',$vlog->id)}}"><span class="fas fa-check-circle ml-5" style="font-size: 28px;color: red"; /></a></td>
                 
                @else

                <td ><a href="{{route('vlog.complete',$vlog->id)}}"><span class="fas fa-check-circle ml-5" style="font-size: 28px;color: green"; /></a></td>

                @endif


              </tr>
      
              @endforeach
            @endif
      
      
            </tbody>
          </table>
        </div>
    <a class="btn btn-success " href="{{route('vlog')}}">Back</a>
    </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>