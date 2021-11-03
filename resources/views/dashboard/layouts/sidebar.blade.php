<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/wedding*') ? 'active' : '' }}" href="/dashboard/weddings">
            <span data-feather="file-text"></span>
            Wedding
          </a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span> Data Master</span>
        </h6>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/invites*') ? 'active' : '' }}" href="/dashboard/invites">
            <span data-feather="list"></span>
              Buat Daftar Undangan
          </a>
        </li>

        <ul class="nav flex-colomn">
          <li class="nav-item"> 
            <a class="nav-link {{ Request::is('dashboard/ucapan*') ? 'active' : '' }}" href="/dashboard/ucapans">
              <span data-feather="grid"></span>
              Ucapan
            </a>
          </li>
        </ul>

  

        
      </ul>
    </div>
  </nav>