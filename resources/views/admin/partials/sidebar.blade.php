<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/dashboard">Bem Vokasi</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/dashboard">BV</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown">
          <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/kepengurusan" class="nav-link"><i class="fas fa-sitemap"></i><span>Kepengurusan</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/anggota" class="nav-link"><i class="fas fa-users"></i><span>Anggota</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/berita" class="nav-link"><i class="far fa-newspaper"></i><span>Berita</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/galeri" class="nav-link"><i class="far fa-images"></i><span>Galeri</span></a>
        </li>

        @if( Auth::user()->superadmin == '1')
        <li class="nav-item dropdown">
          <a href="/user" class="nav-link"><i class="fas fa-cog"></i><span>Pengaturan Admin</span></a>
        </li>
        @endif

      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> BEM VOKASI
        </a>
      </div>
  </aside>
</div>