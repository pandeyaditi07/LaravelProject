<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" href="{{asset('css/form.css')}}">  
</head>
<body>  

<div class="container"> 
    <div class="row form-full-cont" > 
    <form action="{{url('/')}}/deleteuser/{{$Admins->id}}" method="POST">  
    @csrf
        <div class="form-group">
            <label for="Name" class="label-form" >Name</label> 
            <input type="text" value="{{$Admins->name}}" class="form-control" name="name"> 
            @error('name') 
            {{$message}}  
            @enderror   
        </div> 
        <div class="form-group">
            <label for="email"  class="label-form" >email</label> 
            <input type="email" value="{{$Admins->email}}" class="form-control" name="email"> 
            @error('email') 
            {{$message}}  
            @enderror
        </div> 
      
       
        <div class="form-group">
         <input type="submit" name="submit" class="w-100 mt-3 button-form-submit bg bg-info"> 
        </div>

    </form> 
    </div>
</div>
    
</body>
</html>