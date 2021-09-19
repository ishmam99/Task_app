
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Welcome</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="card">
   <div> <h1>Welcome</h1></div>
    <div class="text-center">
    
            
            @if (Auth::user()==true)
            <h3>hello {{Auth::user()->name}}</h3>
                <a href="{{URL('/dashboard')}}"><h4>Click here to Continue . . . .</h4></a>
                <img src="{{Auth::user()->image}}" alt="">
         
              
          @else
          <h5>Please Log in to Continue</h5>
         <a href="{{route('login') }}"><h5>login</h5></a>
          @endif
        </div>
       
        
   
  </body>
</html>
