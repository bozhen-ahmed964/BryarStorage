  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gradient-dark" id="sidenav-main">

      <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
              aria-hidden="true" id="iconSidenav"></i>
          <div class="navbar-brand text-center">
              <img src="{{ asset('img/logo/cloud.png') }}" alt="Cloud">
              <label class="text-white fw-bold">B Storage</label>
          </div>
      </div>

      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-gradient-primary' : '' }}"
                      href="/dashboard">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">home</i>
                      </div>
                      <span class="nav-link-text ms-1">Home</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('billing') ? 'active bg-gradient-primary' : '' }}"
                      href="/billing">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">people</i>
                      </div>
                      <span class="nav-link-text ms-1">Shared With Me</span>
                  </a>
              </li>


              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('trainer') ? 'active bg-gradient-primary' : '' }}"
                      href="/trainer">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">star</i>
                      </div>
                      <span class="nav-link-text ms-1">Starred</span>
                  </a>
              </li>



              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('buildingCourse') ? 'active bg-gradient-primary' : '' }}"
                      href="/buildingCourse">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">star</i>
                      </div>
                      <span class="nav-link-text ms-1">Trash</span>
                  </a>
              </li>




              <li class="nav-item mt-3">
                  <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account Managment
                  </h6>
              </li>

              <li class="nav-item">
                  <a class="nav-link text-white {{ Request::is('settings') ? 'active bg-gradient-primary' : '' }}"
                      href="/settings">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">settings</i>
                      </div>
                      <span class="nav-link-text ms-1">Settings</span>
                  </a>
              </li>

              <li class="nav-item mt-3">
                  <div class="ps-2 pe-2">
                      <div class="progress" style="height: 20px;">
                          <div class="progress-bar bg-primary progress-bar-animated" aria-valuenow="50"
                              aria-valuemin="0" aria-valuemax="100" style="width: 50%; height: 100%;">50%</div>
                      </div>
                      <small class="text-white fw-bold">5.0 GB of 10GB used</small>
                  </div>
              </li>
              {{-- logout --}}
              {{-- <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>

                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">login</i>
                      </div>
                      <span class="nav-link-text ms-1">Logout</span>
                  </a>
              </li> --}}
          </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
          <div class="mx-3">
              <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button">Get More Storage</a>
          </div>
      </div>
  </aside>
