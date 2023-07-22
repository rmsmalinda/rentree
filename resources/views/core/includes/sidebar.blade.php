<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="@if(Auth::user()->image != null)
                            {{ Auth::user()->image }}
                          @else
                          {{ asset('/assets/images/users/avatar.png') }}
                          @endif" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{Auth::user()->name}}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{Auth::user()->email}}</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Alerts</li>
                <li>
                    <a href="/rent_requests" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Front Web Requests </span>
                    </a>
                </li>
                <li>
                    <a href="/rent_requests" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Emergency alerts</span>
                    </a>
                </li>
                <li class="menu-title">Order Process</li>
                <li>
                    <a href="/rent_product" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Add Orders Self</span>
                    </a>
                </li>
                <li>
                    <a href="/ordered_items" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Ordered Items</span>
                    </a>
                </li>
                <li>
                    <a href="/pending_items" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Pending Items</span>
                    </a>
                </li>
                <li>
                    <a href="/pending_items" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Recovering Items</span>
                    </a>
                </li>  
                <li class="menu-title">Reporting</li>            
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>All Summary</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/summary_available">Available</a></li>
                        <li><a href="/summary_unavailable">Unavailable</a></li>
                        <li><a href="/summary_rented">Rented</a></li>
                        <li><a href="/summary_returned">Returned</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>Revenue Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/revenue_daily">Daily</a></li>
                        <li><a href="/revenue_monthly">Monthly</a></li>
                        <li><a href="/revenue_from_to">From To</a></li>
                    </ul>
                </li>
                <li class="menu-title">Setting</li>
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/product_dashboard">Products</a></li>
                        <li><a href="/category_dashboard">Categories</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>Front Web</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/update_front_products">Update Products</a></li>
                        <li><a href="/update_front_homepage">Update Home Page</a></li>
                        <li><a href="/all_message">Messages</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
