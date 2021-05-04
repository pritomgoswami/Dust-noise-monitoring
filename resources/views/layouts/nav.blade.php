<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5"> -->
{{--    <title>main</title>--}}

    <link rel="stylesheet" href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
tfoot input{
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
}

    </style>
@yield('styles')

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Dust and Noise Monitoring</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto navmenu-1">
            <li class="nav-item ">
                <a class="nav-link " href="/index">Dust <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sound">Sound</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/temp">Temperature</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/hum">Humidity</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/combined">Combined</a>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Graphs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item" href="/dustGraph">Dust</a>
                    <a class="dropdown-item" href="/soundGraph">Sound</a>
                    <a class="dropdown-item" href="/tempGraph">Temperature</a>
                    <a class="dropdown-item" href="/humGraph">Humidity</a>
{{--                    <a class="dropdown-item" href="/allGraph">All Graphs</a>--}}
                </div>
            </li>

            {{--            change for logout--}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>






        </ul>
        <!-- <div  class="ml-5 float-right"> <button class="btn btn-success mr-2" >Settings</button>
            <a href="/create"><button class="btn btn-success" >Create</button></a></div> -->

    </div>

</nav>


@yield('content')


<footer class="page-footer font-small"  ><div class="footer-copyright text-center py-3" style="color: white"> Copyright &copy; BUTEX</div></footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.navmenu-1').on('click','li',function(){
        $('.navmenu-1 li.active').removeClass('active');
        $(this).addClass('active');
    });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

@yield('javascripts')
</body>
</html>
