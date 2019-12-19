<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light">
    <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
        <li class="m-menu__item m-menu__item--active m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="m-menu__link m-menu__toggle" title="Dashboard">
                <span class="m-menu__item-here"></span>
                <span class="m-menu__link-text">Dashboard</span>
                <i class="m-menu__hor-arrow la la-angle-down"></i>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                <span class="m-menu__arrow m-menu__arrow--adjust" style="left: 61.5px;"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                        <a href="{{ route('web.publishers.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-laptop"></i>
                            <span class="m-menu__link-text">Publishers</span>
                        </a>
                    </li>
                    <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                        <a href="{{ route('web.deals.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-clipboard"></i>
                            <span class="m-menu__link-text">Deals</span>
                        </a>
                    </li>
                    <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                        <a href="{{ route('web.campaigns.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon la la-paperclip"></i>
                            <span class="m-menu__link-text">Campaigns</span>
                        </a>
                    </li>
                    <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                        <a href="{{ route('web.user.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-users"></i>
                            <span class="m-menu__link-text">Users</span>
                        </a>
                    </li>
                    <li class="m-menu__item" m-menu-link-redirect="1" aria-haspopup="true">
                        <a href="{{ route('web.permissions.index') }}" class="m-menu__link ">
                            <i class="m-menu__link-icon flaticon-lock"></i>
                            <span class="m-menu__link-text">Permissions</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
