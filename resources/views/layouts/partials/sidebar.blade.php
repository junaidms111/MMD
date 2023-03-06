<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{env('APP_NAME')}}</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="{{route('employers.list')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Employers</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('branches.list')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Branches</span></a>
</li>
</ul>

