<ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
    </li>
    <li class="nav-title">Data</li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('piala.dunia') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('template/dist') }}/vendors/@coreui/icons/svg/free.svg#cil-football"></use>
            </svg> Piala Dunia
        </a>
    </li>


</ul>
<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
