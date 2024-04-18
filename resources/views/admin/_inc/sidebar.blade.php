<nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            Admin Dashboard
        </a>
        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="{{ route('dashboard.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>

            <li class="menu-item-has-children dropdown {{ Request::segment(1) == 'companies' ? 'active show' : '' }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Companies</a>
                <ul class="sub-menu children dropdown-menu {{ Request::segment(1) == 'companies' ? 'show' : '' }}">
                    <li class="{{ Request::segment(1) == 'companies' && !Request::segment(2) ? 'active show' : '' }}"><i class="menu-icon fa fa-fort-awesome"></i><a class="dropdown-item" href="{{ route('companies.index') }}">All Companies</a></li>
                    <li class="{{ Request::segment(1) == 'companies' && Request::segment(2) == 'create' ? 'active show' : '' }}"><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('companies.create') }}">Add New Company</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown {{ Request::segment(1) == 'employes' ? 'active show' : '' }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Employes</a>
                <ul class="sub-menu children dropdown-menu {{ Request::segment(1) == 'employes' ? 'show' : '' }}">
                    <li class="{{ Request::segment(1) == 'employes' && !Request::segment(2) ? 'active show' : '' }}"><i class="menu-icon fa fa-users"></i><a class="dropdown-item" href="{{ route('employes.index') }}">All Employes</a></li>
                    <li class="{{ Request::segment(1) == 'employes' && Request::segment(2) == 'create' ? 'active show' : '' }}"><i class="menu-icon fa fa-users"></i><a href="{{ route('employes.create') }}">Add New Employee</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
