<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        *{

padding: 0;
margin: 0;

}

nav{
position: fixed;
background-color: #423cf0;
height: 70px;
width: 100%;
z-index: 1;
}

.logo{
font-size: 25px;
position: relative;
left: 5%;
color: white;
font-weight: bold;
line-height: 70px;
}

ul{
position: relative;
float: right;
margin-right: 20px;
}

ul li{
display: inline;
line-height: 70px;
margin: 0 5px;

}

ul li a{
text-decoration: none;
}


.section1{
padding-top: 70px;
}

.card{
    background-color: #423cf0;
}


    
    </style>
</head>
<body>
    <nav>
        <label for="" class="logo">CoinDock</label>
        <ul>
            <li><a href="" class="btn btn-primary">Registration</a></li>
            <li><a href="" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <img alt="image" src="{{ url('storage/sailslogo.png') }}">
    </div>
    <footer class="container-fluid text-center">
        <div class="card">
            <div class="card-body">
                <p>Designed and Developed @sailssoftwaresolutions2022</p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>