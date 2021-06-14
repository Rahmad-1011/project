@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp
<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            CT
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
          </a>
        </div>
        <ul class="nav">
          <li class="{{checkRouteActive('Admin/beranda')}}">
            <a href="{{url('Admin/beranda')}}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{checkRouteActive('Admin/user')}}">
            <a href="{{url('Admin/user')}}">
              <i class="tim-icons icon-single-02"></i>
              <p>Akun</p>
            </a>
          </li>
        </ul>
      </div>
    </div>