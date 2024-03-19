<aside class="sidebar-wrapper">
  <div class="sidebar-header">
    <div class="logo-icon">
      <a href="{{ route('home') }}"><img src="{{ asset('/backend/') }}/assets/images/logo-icon.svg" class="logo-img" alt=""></a>
    </div>
    <div class="logo-name flex-grow-1">
      <h5 class="mb-0">{{ config('app.name') }}</h5>
    </div>
    <div class="sidebar-close">
      <span class="material-icons-outlined">close</span>
    </div>
  </div>
  <div class="sidebar-nav" data-simplebar="true">
      <!--navigation-->
      <ul class="metismenu" id="sidenav">
        <li>
          <a href="{{ route('home') }}">
            <div class="parent-icon"><i class="material-icons-outlined">home</i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)" class="has-arrow">
            <div class="parent-icon"><i class="material-icons-outlined">category</i>
            </div>
            <div class="menu-title">Category</div>
          </a>
          <ul>
            <li><a href="{{ route('category.create') }}"><i class="material-icons-outlined">arrow_right</i>Add Category</a>
            </li>
            <li><a href="{{ route('category.index') }}"><i class="material-icons-outlined">arrow_right</i>Manage Category</a>
            </li>
          </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <li>
          <a class="has-arrow" href="javascript:void(0)">
            <div class="parent-icon"><i class="material-icons-outlined">apps</i>
            </div>
            <div class="menu-title">Elements</div>
          </a>
          <ul>
            <li><a class="has-arrow" href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Element</a>
              <ul>
                <li><a href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Sub-elements</a></li>
              </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Element</a>
              <ul>
                <li><a href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Sub-elements</a></li>
              </ul>
            </li>
          </ul>
        </li>
       </ul>
      <!--end navigation-->
  </div>
  <div class="sidebar-bottom gap-4">
      <div class="dark-mode">
        <a href="javascript:void(0)" class="footer-icon dark-mode-icon">
          <i class="material-icons-outlined">dark_mode</i>  
        </a>
      </div>
      <div class="dropdown dropup-center dropup dropdown-laungauge">
        <a class="dropdown-toggle dropdown-toggle-nocaret footer-icon" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('/backend/') }}/assets/images/county/02.png" width="22" alt="">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:void(0)"><img src="{{ asset('/backend/') }}/assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
          </li>
        </ul>
      </div>
      <div class="dropdown dropup-center dropup dropdown-help">
        <a class="footer-icon  dropdown-toggle dropdown-toggle-nocaret option" href="javascript:void(0)"
          data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-icons-outlined">
            info
          </span>
        </a>
        <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
          <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:void(0)"><i
                class="material-icons-outlined fs-6">inventory_2</i>Archive All</a></div>
          <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:void(0)"><i
                class="material-icons-outlined fs-6">done_all</i>Mark all as read</a></div>
          <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:void(0)"><i
                class="material-icons-outlined fs-6">mic_off</i>Disable Notifications</a></div>
          <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:void(0)"><i
                class="material-icons-outlined fs-6">grade</i>What's new ?</a></div>
          <div>
            <hr class="dropdown-divider">
          </div>
          <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:void(0)"><i
                class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
        </div>
      </div>
  </div>
</aside>