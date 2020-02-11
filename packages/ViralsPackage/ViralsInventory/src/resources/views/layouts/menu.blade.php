<li class="app-sidebar__heading">Dashboard</li>
<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a href="{{ route('inventory.dashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i><span>Dashboard</span></a>
</li>
<li class="app-sidebar__heading">Inventory Management </li>
<li class="{{ Request::is('stores') ? 'active' : '' }}">
    <a href="{{ route('admin.stores.index') }}"><i class="metismenu-icon pe-7s-home"></i><span>Store</span></a>
</li>
<li class="{{ Request::is('stores') ? 'active' : '' }}">
    <a href="{{ route('admin.stores.index') }}"><i class="metismenu-icon pe-7s-display1"></i><span>Inventory</span></a>
</li>
<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="{{ route('inventory.dashboard') }}"><i class="metismenu-icon pe-7s-display2"></i><span>Vendor</span></a>
</li>
<li class="{{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="{{ route('inventory.dashboard') }}"><i class="metismenu-icon pe-7s-box1"></i><span>Product</span></a>
</li>
