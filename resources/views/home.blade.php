<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body> 

<div class="container bg bg-info"> 

    <table>
        <thead style="border:5px solid black; ">
               <th>  Id   </th>
                <th>Name</th>
                <th>Email</th>  
                <th>Action</th>
                
            
           
        </thead> 
        <tbody> 
           

            
            @foreach($Admin as $Admins)  


           
            <tr> 
              
                <td scope="row">{{$Admins->id}} </td>  
                <td scope="row">{{$Admins->name}} </td> 
                 <td scope="row">{{$Admins->email}}</td>    
               
                
                 
                 <td scope="row"><a href="{{url('/')}}/edituser/{{$Admins->id}}" class="btn btn-success">Edit</a> 
               <a href="{{url('/')}}/showuser/{{$Admins->id}}" ><button class="btn btn-dark text-light">Show</button></a>   
                 <a href="{{url('/')}}/deleteuser/{{$Admins->id}}" ><button class="btn btn-danger text-light">Delete</button></a></td> 

                
            </tr> 

            @endforeach  
       
        </tbody>
    </table>
</div>
  
    
   
    
</body>
</html>