<style>
    .app-header {
        background: #2460b9 !important;
        color: white !important;
    }

    .app-sidebar__heading {
        font-size: 1rem !important;
    }

    .vertical-nav-menu li a {
        font-size: 1rem !important;
    }

    .table thead th {
        font-size: 1.1rem !important;
        background: #2460b9 !important;
        color: white !important;
    }

    .table th,
    .table td {
        font-size: 1rem !important;
    }

    .hamburger-inner,
    .hamburger-inner::before,
    .hamburger-inner::after {
        width: 24px;
        height: 2px;
        background-color: #ffffff !important;
        border-radius: 10px;
        position: absolute;
        transition-property: transform;
        transition-duration: .15s;
        transition-timing-function: ease;
    }

    .search-wrapper .input-holder .search-icon {
        width: 42px;
        height: 42px;
        border: none;
        padding: 0;
        outline: none;
        position: relative;
        z-index: 2;
        float: right;
        cursor: pointer;
        transition: all .3s ease-in-out;
        background: rgb(255 255 255) !important;
        border-radius: 30px;
    }

    .vertical-nav-menu li a.mm-active {
        color: #ffffff !important;
        background: #2460b9 !important;
        font-weight: 700;
    }
</style>
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"><i class="fa-solid fa-hotel"></i> Hotel Section</li>
                
                <li class="app-sidebar__heading"><i class="fa-solid fa-bed"></i> Room Section</li>
                <li>
                    <a href="{{ route('display.app.room.form') }}">
                        <i class="fa-solid fa-door-open"></i> Add Rooms
                    </a>
                    <a href="{{ route('app.listrooms') }}">
                        <i class="fa-solid fa-list-ol"></i> List Rooms
                    </a>
                </li>
                <li class="app-sidebar__heading"><i class="fa-solid fa-users"></i> Local Users</li>
               
            </ul>
        </div>
    </div>
</div>