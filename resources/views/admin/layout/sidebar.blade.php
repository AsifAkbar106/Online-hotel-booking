<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin_home')}}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{Request::is('admin/home') ? 'active' : ''}}"><a class="nav-link" href="{{route('admin_home')}}"><i class="fa fa-hand-o-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{Request::is('admin/amenity/view')||Request::is('admin/room/view')  ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right"></i><span>Room Section</span></a>
                <ul class="dropdown-menu">
                    <li class="{{Request::is('admin/amenity/view') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_amenity_view') }}"><i class="fa fa-angle-right"></i>Amenities</a></li>
                    <li class="{{Request::is('admin/room/view') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_room_view') }}"><i class="fa fa-angle-right"></i>Rooms</a></li>
                </ul>
            </li>
            
            
            <li class="nav-item dropdown {{Request::is('admin/page/cart')||Request::is('admin/page/checkout')||Request::is('admin/page/payment')||Request::is('admin/page/signup')||Request::is('admin/page/signin') ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{Request::is('admin/page/cart') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_page_cart') }}"><i class="fa fa-angle-right"></i>Cart</a></li>
                    <li class="{{Request::is('admin/page/checkout') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_page_checkout') }}"><i class="fa fa-angle-right"></i>Checkout</a></li>
                    <li class="{{Request::is('admin/page/payment') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_page_payment') }}"><i class="fa fa-angle-right"></i>Payment</a></li>
                    <li class="{{Request::is('admin/page/signup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_page_signup') }}"><i class="fa fa-angle-right"></i>Sign Up</a></li>
                    <li class="{{Request::is('admin/page/signin') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_page_signin') }}"><i class="fa fa-angle-right"></i>Sign In</a></li>

                </ul>
            </li>
            
            <li class="{{Request::is('admin/customers') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_customer') }}"><i class="fa fa-hand-o-right"></i> <span>Customers</span></a></li>
            <li class="{{Request::is('admin/order/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_order_view') }}"><i class="fa fa-hand-o-right"></i> <span>Orders</span></a></li>

            <li class="{{Request::is('admin/slide/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_slide_view') }}"><i class="fa fa-hand-o-right"></i> <span>Slides</span></a></li>

            <li class="{{Request::is('admin/feature/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_feature_view') }}"><i class="fa fa-hand-o-right"></i> <span>Features</span></a></li>
            
            <li class="{{Request::is('admin/photo/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_photo_view') }}"><i class="fa fa-hand-o-right"></i> <span>Photo Gallery</span></a></li>
            <li class="{{Request::is('admin/faq/*') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin_faq_view') }}"><i class="fa fa-hand-o-right"></i> <span>FAQ</span></a></li>

        </ul>
    </aside>
</div>