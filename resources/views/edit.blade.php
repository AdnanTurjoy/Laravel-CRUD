<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <title>ALl data SHow</title>

    <title>Document</title>
</head>
<body>
    <div class="container pb-5">
        <h1>Create Data</h1>
        <div class="row">
           <div class="col-md-8">
           <form method="POST" action="{{route('vlog.update',$vlog->id)}}">
          {{csrf_field()}}
      
        @if(count($errors) > 0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
          @endforeach
        @endif
      
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" value="{{$vlog->title}}" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" value="{{$vlog->description}}" name="description" id="description" placeholder="Description">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
        <a href="{{url('/')}}" class="btn btn-success">Back</a>
      </form>
      
        </div>
      
        </div>
       
        
      </div>
      
</body>
</html>