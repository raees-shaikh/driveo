  <!-- BEGIN LOADER -->
  <div id="load_screen">
      <div class="loader">
          <div class="loader-content">
              <div class="spinner-grow align-self-center"></div>
          </div>
      </div>
  </div>
  <div class="header-container fixed-top">
      <header class="header navbar navbar-expand-sm">
          <ul class="navbar-nav theme-brand flex-row  text-center blue-color">
              <li class="nav-item theme-text w-auto">
                  {{-- <a href="/" class="nav-link">
                      <img src="{{ asset('backend/images/logo.png') }}" class="navbar-logo img-fluid" alt="logo"
                          style="width: 183px">
                  </a> --}}
                  <h1 class=" logo-cms remove-cls">
                    <a class="home-link" href="{{ url('') }}" title="driveo" rel="home">
                       <img id="logo-img" height="35" width="155"
                           class="img-fluid auto_size mt-3" src="frontend/images/bg-image/driveo.png"
                           alt="logo-img">
                   </a>

               </h1>
              </li>
              <h1 class=" logo-cms remove-cls d-lg-none d-block px-2 py-1">
                <a class="home-link" href="{{ url('') }}" title="driveo" rel="home">
                   <img id="logo-img" height="35" width="155"
                       class="img-fluid auto_size mt-3 " src="frontend/images/bg-image/driveo.png"
                       alt="logo-img">
               </a>

           </h1>

              <li class="nav-item toggle-sidebar">
                  <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 4.15381H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path d="M4 12H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          <path d="M4 19.8462H21" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                  </a>
              </li>
          </ul>

          <ul class="navbar-item flex-row search-ul">

          </ul>
          <ul class="navbar-item flex-row navbar-dropdown">

              <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-settings">
                          <circle cx="12" cy="12" r="3"></circle>
                          <path
                              d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                          </path>
                      </svg>
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                      <div class="user-profile-section">
                          <div class="media mx-auto">
                              {{-- <img src="assets/img/90x90.svg" class="img-fluid mr-2" alt="avatar"> --}}
                              <div class="media-body">
                                  <h5>{{ ucfirst(auth()->user()->name) }}</h5>
                                  <h5>{{ ucfirst(auth()->user()->role) }}</h5>
                                  <!-- <p>Project Leader</p> -->
                              </div>
                          </div>
                      </div>
                      <div class="dropdown-item">
                          <a href="{{ route('cms.changePassword.index') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-user">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="12" cy="7" r="4"></circle>
                              </svg> <span>Change Password</span>
                          </a>
                      </div>

                      <div class="dropdown-item">
                          <a href="{{ route('cms.logout') }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-log-out">
                                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                  <polyline points="16 17 21 12 16 7"></polyline>
                                  <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg> <span>Log Out</span>
                          </a>
                      </div>
                  </div>
              </li>
          </ul>
      </header>
  </div>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="search-overlay"></div>
      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
          <nav id="sidebar">
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  <li class="menu">
                      <a href="{{ route('cms.statistics.index') }}"
                          aria-expanded="{{ route('cms.statistics.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg> --}}
                              <svg class=" {{ URL::current() == url('/') ? 'svg-color' : '' }} xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 576 512">
                                  <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                  <path
                                      d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" />
                              </svg>
                              <span>Dashboard</span>
                          </div>
                      </a>
                  </li>
                  <li class="menu">
                      <a href="{{ route('backend.gallery.index') }}"
                          aria-expanded="{{ route('backend.gallery.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              {{-- <svg class="{{ URL::current() == url('/users') ? 'svg-color' : '' }}"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                  <path
                                      d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                              </svg> --}}

                              <svg class=" {{ URL::current() == url('/gallery') ? 'svg-color' : '' }} fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 512.2 512.2" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M495.1,38.4H85.5c-9.4,0-17.1,7.6-17.1,17.1v17.1H51.3c-9.4,0-17.1,7.6-17.1,17.1v17.1H17.1c-9.4,0-17.1,7.6-17.1,17.1
				v332.8c0,9.4,7.6,17.1,17.1,17.1h409.6c9.4,0,17.1-7.6,17.1-17.1v-17.1h17.1c9.4,0,17.1-7.6,17.1-17.1v-17.1h17.1
				c9.4,0,17.1-7.6,17.1-17.1V55.5C512.2,46,504.6,38.4,495.1,38.4z M426.8,314.4l-44.7-51.2c-3.4-3.9-9.4-3.9-12.9,0l-54,61.8
				L168,194.2c-3.2-2.9-8.1-2.9-11.3,0L17.3,318.1V132.3c0-4.7,3.8-8.5,8.5-8.5h392.5c4.7,0,8.5,3.8,8.5,8.5V314.4z M452.5,422.4
				H444V123.7c0-9.4-7.6-17.1-17.1-17.1H51.4v-8.5c0-4.7,3.8-8.5,8.5-8.5h392.5c4.7,0,8.5,3.8,8.5,8.5l0.1,315.8
				C461,418.6,457.2,422.4,452.5,422.4z M486.6,388.2h-8.5V89.6c0-9.4-7.6-17.1-17.1-17.1H85.5V64c0-4.7,3.8-8.5,8.5-8.5h392.5
				c4.7,0,8.5,3.8,8.5,8.5v315.7h0.1C495.1,384.4,491.3,388.2,486.6,388.2z"/>
			<path d="M307.4,174.9c-18.8,0-34.1,15.3-34.1,34.1c0,18.8,15.3,34.1,34.1,34.1c18.8,0,34.1-15.3,34.1-34.1
				C341.5,190.2,326.2,174.9,307.4,174.9z"/>
		</g>
	</g>
</g>
</svg>
                              <span>Galleries</span>
                          </div>
                      </a>
                  </li>
                  {{-- <li class="menu">
                      <a href="{{ route('backend.order.index') }}"
                          aria-expanded="{{ route('backend.order.index') == request()->url() ? 'true' : 'false' }}"
                          class="dropdown-toggle">
                          <div class="">
                              <svg class="{{ URL::current() == url('/orders') ? 'svg-color' : '' }}"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                  <path
                                      d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z" />
                              </svg>
                              <span>Orders</span>
                          </div>
                      </a>
                  </li> --}}
                  <li class="menu">
                      <a href="" aria-expanded="true">

                      </a>
                  </li>
              </ul>

          </nav>

      </div>
      <!--  END SIDEBAR  -->

      <style>
          #sidebar ul.menu-categories li.menu>.dropdown-toggle svg {
              fill: rgb(68 94 222 / 84%);
          }
      </style>
