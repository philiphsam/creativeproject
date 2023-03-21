<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">

    <title>Creative arts and design</title>
</head>
<body style="background-image: url(Assets/land2.jpeg); background-repeat: no-repeat;">
    
    <div style="text-align: center; color: white;">
       <h1>THIS IS CREATIVE ARTS AND DESIGN ENTERTAINMENT</h1>
       <p>Creative Arts and Design has been associated with a lot of things including graphic design, painting, theatre, dance, 
        fashion design, as well as UI/UX designing, animation, magazines, brochures and a 
        whole lot more!<br> A lot of students doubt they will find a job if they study Creative Arts and Design.</p>
    </div>
    <div class="row">
        <div class="col-md-5" style="margin-left: 10%;">
            <img src="Assets/sing.jpeg">
        </div>

        <div class="col-md-3" style="margin-right: 1%;">
            <img src="Assets/dance.jpeg">
        </div>
       

    </div><br><br>

    <div style="margin-left: 60%;">
        <button type="button" class="btn btn-primary btn-lg"><a href="{{route('register')}}"  style="color: black;" >Register Here</a></button>
        <button type="button" class="btn btn-primary btn-lg"><a href="{{route('login')}}" style="color: black;">LogIn</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>