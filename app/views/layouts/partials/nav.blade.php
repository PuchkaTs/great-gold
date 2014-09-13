
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
    <div class="slidenav1" id="navslide">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand animated fadeInDown hidden-xs" href="/">{{ HTML::image("logo_en.png") }}</a>
            <a class="navbar-brand animated fadeInDown visible-xs" href="/"><img src="logo_xs.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li class="{{ set_active('/') }}"><a href="/">About us</a></li>
                <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">News</a></li>
                <li class="dropdown {{ Request::is('services/*') ? 'active' : '' }}" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li ><a href="/services/design_service">Design</a></li>
                        <li><a href="/services/foundation">Foundation</a></li>
                        <li><a href="/services/structure">Structure</a></li>
                        <li><a href="/services/curtain_wall">Curtain wall</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="/projects">Projects</a></li>
                <li class="{{ Request::is('career') ? 'active' : '' }}"><a href="/career">Career</a></li>
                <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="/contact_us">Contact us</a></li>
                <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="/admin">Login</a></li>
        </div>
    </div>
</nav>