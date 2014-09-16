
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
            <a class="navbar-brand animated fadeInDown hidden-xs" href="/">{{ (App::getLocale() == 'en') ? HTML::image("logo_en.png") : HTML::image("logo_mn.png") }}</a>
            <a class="navbar-brand animated fadeInDown visible-xs" href="/"><img src="logo_xs.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
                <li class="{{ set_active('/') }}"><a href="/">{{ trans('main.aboutUs') }}</a></li>
                <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">{{ trans('main.news') }}</a></li>
                <li class="dropdown {{ Request::is('services/*') ? 'active' : '' }}" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('main.services') }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li ><a href="/services/design_service">{{ trans('main.design') }}</a></li>
                        <li><a href="/services/foundation">{{ trans('main.foundation') }}</a></li>
                        <li><a href="/services/structure">{{ trans('main.structure') }}</a></li>
                        <li><a href="/services/curtain_wall">{{ trans('main.curtainWall') }}</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="/projects">{{ trans('main.projects'); }}</a></li>
                <li class="{{ Request::is('career') ? 'active' : '' }}"><a href="/career">{{ trans('main.career'); }}</a></li>
                <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="/contact_us">{{ trans('main.contactUs'); }}</a></li>
                <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="/admin">{{ trans('main.login'); }}</a></li>
                <li><a href="/lang">{{ (App::getLocale() == 'en') ? 'Mon' : 'Eng' }}</a></li>
        </div>
    </div>
</nav>