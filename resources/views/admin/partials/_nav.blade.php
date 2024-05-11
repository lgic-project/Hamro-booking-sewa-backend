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
                <li>
                    <a href="{{ route('addowner') }}" class="">
                        <i class="fa-solid fa-user-plus"></i>
                        Add Hotel
                    </a>
                    <a href="{{ route('listowner') }}" class="">
                        <i class="fa-solid fa-users-between-lines"></i>
                        List Hotels
                    </a>
                    <!-- <a href="{{ route('listowner') }}">
                        <i class=" metismenu-icon pe-7s-display2"></i>
                        List Hotels
                    </a> -->
                    <!-- <a href="/report">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        रिपोर्ट हेर्नुहोस
                    </a> -->
                </li>
                <li class="app-sidebar__heading"><i class="fa-solid fa-bed"></i> Room Section</li>
                <li>
                    <a href="{{ route('display.room.form') }}">
                        <i class="fa-solid fa-door-open"></i> Add Rooms
                    </a>
                    <a href="{{ route('listrooms') }}">
                        <i class="fa-solid fa-list-ol"></i> List Rooms
                    </a>
                </li>
                <li class="app-sidebar__heading">रोजगारदाता अनुरोध सूची</li>
                <li>
                    <a href="/employer-request">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>सबै अनुरोध सूची
                    </a>
                </li>
                <li class="app-sidebar__heading">तालीम केन्द्र र सीप परिक्ष्यण केन्द्रहरु</li>
                <li>
                    <a href="/listtraininguser">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i> तालीम तथा सीप परिक्ष्यण केन्द्रहरु
                    </a>
                </li>
                <li>
                    <a href="/addtraininguser">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>नयाँ संस्थाको दर्ता
                    </a>
                </li>
                <li class="app-sidebar__heading">Help Section</li>
                <li>
                    <a href="/adminportal/help-data-add">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Help Center
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>