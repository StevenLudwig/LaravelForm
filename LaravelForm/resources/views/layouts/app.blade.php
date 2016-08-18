<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulario Laravel</title>
        
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="{{URL::asset('js/jquery-2.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/modernizr.custom.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/jquery.flexisel.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/jquery.dlmenu.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/jquery.prettyPhoto.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>

    </head>

    <body>
        <header class="header">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-lg-9">
                  <div class="logo">
                    <p  class="text-center"><a href="/">Marketing Operations Hub</a></p>
                  </div>
                </div>
                <div class="col-md-2 col-lg-3">
                    <div class="menu">
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Abrir Menu</button>
                            <ul class="dl-menu">
                                <li><a href="/log">SUPPORT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 copyright">
                    &copy; [COMPANY NAME]
                </div>
                <div class="col-md-10 col-lg-10">
                    <P class="text-right terminos">
                        Terms of Use&nbsp;&nbsp;&nbsp;&nbsp;*Trademarks&nbsp;&nbsp;&nbsp;&nbsp;Privacy&nbsp;&nbsp;&nbsp;&nbsp;Cookies                    
                    </P>
                </div>
            </div>
        </footer>

    </body>
</html>