<nav id="navbarSupportedContent2" class="collapse wow fadeIn shadow" data-wow-duration="0s" data-wow-delay="0s">
  {{-- list --}}
  <ul class="nav nav-tabs py-3">
    <div class="container">
      {{-- overview --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth"><i class="lni-pulse"></i> Overview</a>
      </li>
      {{-- activity --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/activity"><i class="lni-bolt"></i> Activity</a>
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
      {{-- Clients --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/clients"><i class="lni-users size-sm"></i>
          Clients</a>
      </li>
      {{-- admins --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/admins"><i class="fas fa-users-cog"></i>
          Admins</a>
      </li>
      {{-- setting --}}
      <li class="nav-item">
        <a class="nav-link" href="/auth/settings">
          <i class="lni-cog"></i>
          Settings</a>
      </li>
    </div>
  </ul>
</nav>