<nav id="navbarSupportedContent2" class="collapse wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
  
  <ul class="nav nav-tabs py-3">
    <div class="container">
      {{-- overview --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth"><i class="fas fa-chart-pie"></i> Overview</a>
      </li>
      {{-- orders --}}
      <li class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false"><i class="fab fa-opencart"></i>
          Orders</a>
        <div class="dropdown-ul">
          <div class="li">
            <a class="dropdown-li" href="/auth/orders">All Orders</a>
          </div>
          <div class="li">
            <a class="dropdown-li" href="/auth/checkouts">Abandoned checkouts</a>
          </div>
        </div>
      </li>
      {{-- products --}}
      <li class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tags"></i>
          Products</a>
        <div class="dropdown-ul">
          <div class="li">
            <a class="dropdown-li" href="/auth/products">All Products</a>
          </div>
          <div class="li">
            <a class="dropdown-li" href="/auth/collections">Collections</a>
          </div>
        </div>
      </li>
      {{-- customers --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/customers"><i class="fas fa-user-friends"></i>
          Customers</a>
      </li>
      {{-- admins --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/admins"><i class="fas fa-users-cog"></i>
          Admins</a>
      </li>
      {{-- setting --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/settings">
          <i class="fas fa-cog"></i>
          Settings</a>
      </li>
    </div>
  </ul>
</nav>