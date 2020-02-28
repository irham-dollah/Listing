<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/logo.png')}}" width="50" height="35">
            </a> --}}
        </div>
        <div class="mx-auto order-0" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <ul class="center">
                <h4 class="nav navbar-text" 
                style="font-family:verdana;color:DodgerBlue;font-size:20px;
                ">
                {{-- border: 1px solid powderblue; padding: 10px; --}}
                {{-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp --}}
                {{-- ::&nbsp<b> O . S . I . S </b>  --}}
                <i style="color:white;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    :: LIST SYSTEM ::</i>
                {{-- <b>O . S . I . S </b> &nbsp :: --}}
                    {{-- <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwimmKC8kLTmAhXi_XMBHTPWCAYQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.shutterstock.com%2Fvideo%2Fclip-2872816-god-name-hand-arabic-phrase-islamic-writing&psig=AOvVaw0fPcPkFB2DrINPWwTzYQJN&ust=1576377968983327" width="50" height="35"> --}}
                </h4>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li><a href="{{ url('/') }}">Login</a></li>
                {{-- <li><a href="{{ url('/About') }}">About</a></li> --}}
            </ul>
        </div>
    </div>
</nav>