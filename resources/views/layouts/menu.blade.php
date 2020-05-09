<li class="nav-item {{ Request::is('categorys*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categorys.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categorys</span>
    </a>
</li>
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Products</span>
    </a>
</li>
