<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">

    <title>Events</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
       
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto" style="font-family: system-ui, -apple-system, BlinkMacSystemFont; font-size: 25px;">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('dashboard') }}">Home</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="https://www.swahilipothub.co.ke/about">About Us</a>
                </li>
                
            </ul>
        </div>
        <div class="input-group rounded" style="margin-right: 10%; margin-left: 10%;">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" 
             />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"><img src="Assets/search.png"></i>
            </span>
          </div>
          </div>

    </nav>
    <header style="text-align: center; margin-left: 30%; margin-right: 30%;">
        <h1>Our Events</h1>
                <p>It's true that a lot of the best known creative events have yet to announce
                     they're actually happening, and that should surprise no one. But there are
                      still plenty of confirmed dates to get excited about around the world, and
                       we've listed the best of them below.

                    
                    
                    </p>
                </header>

    <form>
        <div class="row">
            <div class="col-md-4" style="margin-left: 10%;">
              <img src="Assets/wall.jpeg">
            </div>
            <div class="col-md-6"><br><br><br>
                <marquee><p style="text-align: center; font-size: 30px;
                 color: blue;">WE ARE HERE TO MAKE YOU HAPPY <br>
                 <img src="Assets/laughing (2).png"></p></marquee>
            </div>
        </div>

    </form><br><br>

    <div class="row" style="margin-left: 5%; margin-right: 5%;">
        <div class="col-md-3">
            
            <img src="Assets/dance.jpeg" 
            style="width: 150px; height: 110px; border-radius: 25%; margin-left: 30%;">
            <div class="set" style="text-align: center;">
            <h4>Dancing</h4>
            <h4>Wasaka Group</h4>
            <h5>Host:Mombasa</h5>
            <p>Everyone is welcome</p>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"><a href="{{ url('eventbook') }}" ><h2>Book now</h2></a></button>
             </div>
            
        </div>
        <div class="col-md-3">
            
            <img src="Assets/drawing.jpeg"  
            style="width: 150px; height: 100px; border-radius: 25%; margin-left: 30%;">
            <div class="set" style="text-align: center;">
            <h4>Drawing</h4>
            <h4>Msenos Drawers</h4>
            <h5>Host:Mombasa</h5>
            <p>Student Only</p>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"><a href="{{ url('eventbook') }}" ><h2>Book now</h2></a></button>
             </div>
            
        </div>
        <div class="col-md-3">
            
            <img src="Assets/beachwalk.jpeg" 
            style="width: 150px; height: 100px; border-radius: 25%; margin-left: 30%;">
            <div class="set" style="text-align: center;">
            <h4>Nature Walk</h4>
            <h4>Serenas Walkie</h4>
            <h5>Host:Serena Hotel Beach</h5>
            <p>Exercise Doing</p>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"><a href="{{ url('eventbook') }}" ><h2>Book now</h2></a></button>
             </div>
            
        </div>
        <div class="col-md-3">
            
            <img src="Assets/acting.jpeg"
            style="width: 150px; height: 100px; border-radius: 25%; margin-left: 30%;">
            <div class="set" style="text-align: center;">
            <h4>Acting</h4>
            <h4>Changers Actors</h4>
            <h5>Host:Mombasa, Swahilipot</h5>
            <p>Everyone Welcome</p>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"><a href="{{ url('eventbook') }}" ><h2>Book now</h2></a></button>
             </div>
            
        </div>
    </div>
   


          
        
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
    crossorigin="anonymous"></script> 
</body>
</html>