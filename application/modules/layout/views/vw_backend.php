<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!------------------ FAVICON ICON ----------------->
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <!--------------- END OF FAVICON ICON -------------->

  <!------------------ CORE CSS ----------------->
  <link rel="stylesheet" href="assets/css/styles.css" />
  <!--------------- END OF CORE CSS -------------->

  <!------------------ CORE JS FILE ----------------->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/app.init.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--------------- END OF CORE JS FILE -------------->

  <!------------------ PAGE TITLE ----------------->
  <title><?= $page_title; ?></title>
  <!--------------- END OF PAGE TITLE -------------->
</head>

<body>
  <!--================= TOAST ================-->
  <div class="toast toast-onload align-items-center text-bg-secondary border-0" role="alert" aria-live="assertive"
    aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
      <i class="ti ti-alert-circle fs-6"></i>
      <div>
        <h5 class="text-white fs-3 mb-1"><?= $page_title; ?></h5>
        <h6 class="text-white fs-2 mb-0">page has been loaded!!!</h6>
      </div>
      <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
        aria-label="Close"></button>
    </div>
  </div>
  <!--============== END OF TOAST =============-->

  <!--================= PRELOADER ================-->
  <div class="preloader">
    <img src="assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!--============== END OF PRELOADER =============-->

  <!--================= MAIN WRAPPER ================-->
  <div id="main-wrapper">

    <!------------------ SIDEBAR VERTICAL ----------------->
    <aside class="left-sidebar with-vertical">
      <div>
        <!-- ---------------------------------- -->
        <!--   Start Vertical Layout Sidebar    -->
        <!-- ---------------------------------- -->

        <!------------------ SIDEBAR SCROLL MENU ----------------->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <!------------------ PROFILE ----------------->
          <div class="user-profile position-relative" style="background: url(./assets/images/backgrounds/user-info.jpg) no-repeat;">

            <!------- USER PROFILE IMAGE ------->
            <div class="profile-img">
              <img src="assets/images/profile/user-1.jpg" alt="user" class="w-100 rounded-circle overflow-hidden" />
            </div>
            <!---- END OF USER PROFILE IMAGE ---->

            <!-- USER PROFILE TEXT-->
            <div class="profile-text hide-menu pt-1 dropdown">
              <a href="#" class="dropdown-toggle u-dropdown w-100 text-white
                  d-block
                  position-relative
                " id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Markarn Doe</a>
              <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>
                  My Profile</a>
                <a class="dropdown-item" href="#"><i data-feather="credit-card"
                    class="feather-sm text-info me-1 ms-1"></i>
                  My Balance</a>
                <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                  Inbox</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="settings"
                    class="feather-sm text-warning me-1 ms-1"></i>
                  Account Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="authentication-login3.html"><i data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1"></i>
                  Logout</a>
                <div class="dropdown-divider"></div>
                <div class="ps-4 p-2">
                  <a href="#" class="btn d-block w-100 btn-info rounded-pill">View Profile</a>
                </div>
              </div>
            </div>
            <!--------------- END OF USER PROFILE TEXT -------------->

          </div>
          <!--------------- END OF PROFILE -------------->

          <!------------------ SIDEBAR MENU ----------------->
          <ul id="sidebarnav">
            <!------------------ HOME ----------------->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="<?= site_url('dashboard'); ?>"
                aria-expanded="false"><iconify-icon icon="solar:widget-outline"></iconify-icon><span
                  class="hide-menu">Dashboard</span></a>
            </li>
            <!--------------- END OF HOME -------------->
            <!------------------ OTHERS ----------------->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">others</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Menu Level</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="javascript:void(0)" class="sidebar-link sublink">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                    </div>
                    <span class="hide-menu">Level 1</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow sublink" href="javascript:void(0)" aria-expanded="false">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                    </div>
                    <span class="hide-menu">Level 1.1</span>
                  </a>
                  <ul aria-expanded="false" class="collapse two-level">
                    <li class="sidebar-item">
                      <a href="javascript:void(0)" class="sidebar-link sublink">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                        </div>
                        <span class="hide-menu">Level 2</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow sublink" href="javascript:void(0)" aria-expanded="false">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                        </div>
                        <span class="hide-menu">Level 2.1</span>
                      </a>
                      <ul aria-expanded="false" class="collapse three-level">
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link sublink">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                            </div>
                            <span class="hide-menu">Level 3</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link sublink">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                            </div>
                            <span class="hide-menu">Level 3.1</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-link link-disabled" aria-expanded="false">
                <span class="d-flex">
                  <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Disabled</span>
              </div>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#sub" aria-expanded="false">
                <span class="d-flex">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <div class="lh-base">
                  <div class="hide-menu">SubCaption</div>
                  <div class="hide-menu fs-2">This is the sutitle</div>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                <div class="d-flex align-items-center gap-2">
                  <span class="d-flex">
                    <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu">Chip</span>
                </div>
                <div class="hide-menu">
                  <span class="badge bg-secondary rounded
                      ms-auto
                      px-2
                      py-1
                    ">9</span>

                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                <div class="d-flex align-items-center gap-2">
                  <span class="d-flex">
                    <iconify-icon icon="solar:smile-circle-outline" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu">Outlined</span>
                </div>
                <span
                  class="hide-menu badge rounded border border-secondary text-secondary fw-medium fs-2 py-1 px-2">Outline</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                <span class="d-flex">
                  <iconify-icon icon="solar:link-square-linear" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">External Link</span>
              </a>
            </li>
            <!--------------- END OF OTHERS -------------->
          </ul>
          <!--------------- END OF SIDEBAR MENU -------------->
        </nav>
        <!--------------- END OF SIDEBAR SCROLL -------------->
      </div>
    </aside>
    <!--------------- END OF SIDEBAR VERTICAL -------------->

    <!------------------ PAGE WRAPPER ----------------->
    <div class="page-wrapper">

      <!------------------ HEADER ----------------->
      <header class="topbar rounded-0 border-0 bg-primary">
        <!------------------ VERTICAL HEADER ----------------->
        <div class="with-vertical">
          <!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg px-lg-0 px-3 py-0">
            <!------------------ BRAND LOGO & TEXT ----------------->
            <div class="d-none d-lg-block">
              <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="<?= site_url('dashboard'); ?>" class="text-nowrap logo-img">
                  <b class="logo-icon">
                    <!-- Dark Logo icon -->
                    <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                    <!-- Light Logo text -->
                    <img src="assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                  </span>
                </a>
              </div>


            </div>
            <!--------------- END OF BRAND LOGO & TEXT -------------->

            <!------------------ DESKTOP,MEDIUM,AND SMALL DEVICE: NAVBAR MENU ----------------->
            <ul class="navbar-nav">
              <!------- SIDEBAR MENU TOGGLER ------->
              <li class="nav-item">
                <a class="nav-link nav-icon-hover sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:list-bold"></iconify-icon>
                </a>
              </li>
              <!---- END OF SIDEBAR MENU TOGGLER ---->

              <!-- ------------------------------- -->
              <!-- start notification Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item d-none d-lg-block search-box">
                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark" href="javascript:void(0)"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                </a>
              </li>
              <!-- <li class="nav-item hover-dd d-none d-lg-block dropdown">
                <a class="nav-link nav-icon-hover" id="drop2" href="#" aria-haspopup="true" aria-expanded="false">
                  <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                </a>
                <div class="dropdown-menu dropdown-menu-nav  dropdown-menu-animate-up py-0" aria-labelledby="drop2">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <div class="ps-3 pt-3">
                        <div class="border-bottom">
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="#" class="d-flex align-items-center pb-9 position-relative ">
                                  <div
                                    class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:chat-line-linear"
                                      class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block ">
                                    <h6 class="mb-0 ">Chat Application</h6>
                                    <span class="fs-3 d-block text-muted">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bill-list-linear"
                                      class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Invoice App</h6>
                                    <span class="fs-3 d-block text-muted">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-2-linear"
                                      class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Contact Application</h6>
                                    <span class="fs-3 d-block text-muted">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:letter-unread-linear"
                                      class="text-warning fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Email App</h6>
                                    <span class="fs-3 d-block text-muted">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-danger-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:cart-large-2-linear"
                                      class="text-danger fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">User Profile</h6>
                                    <span class="fs-3 d-block text-muted">learn more information</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Calendar App</h6>
                                    <span class="fs-3 d-block text-muted">Get dates</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-linear"
                                      class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Contact List Table</h6>
                                    <span class="fs-3 d-block text-muted">Add new contact</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Notes Application</h6>
                                    <span class="fs-3 d-block text-muted">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-3 pb-1">
                          <div class="col-8">
                            <a class="text-dark d-flex align-items-center lh-1 fs-3" href="#"><i
                                class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end pe-4">
                              <button class="btn btn-primary rounded-pill fs-3">Check</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 ms-n7">
                      <div class="position-relative p-3 border-start h-100">
                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                        <ul>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">User Application</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li> -->
            </ul>
            <!--------------- END OF DESKTOP,MEDIUM,AND SMALL DEVICE: NAVBAR MENU -------------->


            <!------------------ MEDIUM & SMALL DEVICE: BRAND LOGO & TEXT ----------------->
            <div class="d-block d-lg-none">
              <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./main/index.html" class="text-nowrap logo-img">
                  <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                    <!-- Light Logo text -->
                    <img src="assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                  </span>
                </a>
              </div>
            </div>
            <!--------------- END OF MEDIUM & SMALL DEVICE: BRAND LOGO & TEXT -------------->

            <!------------------ MEDIUM & SMALL DEVICE: NAVBAR MENU TOGGLER ----------------->
            <ul class="navbar-nav flex-row  align-items-center justify-content-center d-flex d-lg-none">
              <li class="nav-item dropdown">
                <a class="navbar-toggler nav-link text-white nav-icon-hover border-0" href="javascript:void(0)"
                  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="">
                    <i class="ti ti-dots fs-7"></i>
                  </span>
                </a>
              </li>
            </ul>
            <!--------------- END OF MEDIUM & SMALL DEVICE: NAVBAR MENU TOGGLER -------------->

            <!------------------ MEDIUM & SMALL DEVICE: NAVBAR MENU ----------------->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row  align-items-center justify-content-center d-flex d-lg-none">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)"
                      class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button"
                      data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                      aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover waves-effect waves-dark" href="javascript:void(0)" id="drop2"
                      aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd  dropdown-menu-animate-up overflow-hidden"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-primary">
                        <div class="mb-0 fs-6 fw-medium text-white">Notifications</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 4 Notifications</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center  dropdown-item gap-3   border-bottom">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-success-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-info-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="settings" class="feather-sm fill-white text-info"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-primary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Notifications</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>





                    </div>
                  </li>
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd dropdown-menu-animate-up overflow-hidden"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-secondary">
                        <div class="mb-0 fs-6 fw-medium text-white">Messages</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 5 new messages</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-1.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mathew Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-2.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Bianca Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-3.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Andrew Johnson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-4.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark Strokes</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-5.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark, Stoinus & Rishvi..</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-6.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Eliga Rush</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-secondary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Messages</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>

                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                        class="round-20" />
                    </a>
                    <div class="dropdown-menu pt-0  dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">English</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-cn.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Chinese</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-fr.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">French</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-sa.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Arabic</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)"
                      style="display: none;">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                    </a>
                  </li>

                  <li class="nav-item hover-dd dropdown  d-none d-lg-block">
                    <a class="nav-link nav-icon-hover waves-effect waves-dark" href="javascript:void(0)" id="drop2"
                      aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div
                      class="dropdown-menu py-0 content-dd  dropdown-menu-animate-up overflow-hidden dropdown-menu-end"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-primary">
                        <div class="mb-0 fs-6 fw-medium text-white">Notifications</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 4 Notifications</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center  dropdown-item gap-3   border-bottom">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-success-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-info-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="settings" class="feather-sm fill-white text-info"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-primary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Notifications</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>





                    </div>
                  </li>

                  <li class="nav-item hover-dd dropdown  d-none d-lg-block">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div
                      class="dropdown-menu py-0 content-dd dropdown-menu-animate-up dropdown-menu-end overflow-hidden"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-secondary">
                        <div class="mb-0 fs-6 fw-medium text-white">Messages</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 5 new messages</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-1.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mathew Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-2.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Bianca Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-3.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Andrew Johnson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-4.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark Strokes</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-5.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark, Stoinus & Rishvi..</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-6.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Eliga Rush</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-secondary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Messages</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>

                    </div>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="assets/images/profile/user-1.jpg" alt="user"
                        class="profile-pic rounded-circle round-30" />
                    </a>
                    <div class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd"
                      aria-labelledby="drop2">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class=" py-3 border-bottom">
                          <div class="d-flex align-items-center px-3">
                            <img src="assets/images/profile/user-1.jpg" class="rounded-circle round-50" alt="" />
                            <div class="ms-3">
                              <h5 class="mb-1 fs-4">Markarn Doe</h5>
                              <p class="mb-0 fs-2 d-flex align-items-center text-muted">
                                info@materialpro.com
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="message-body pb-3">
                          <div class="px-3 pt-3">
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                My Profile
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                My Projects
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                Inbox
                              </a>
                            </div>
                          </div>
                          <hr>
                          <div class="px-3">
                            <div
                              class="py-8 px-3 d-flex justify-content-between dropdown-item align-items-center h6 mb-0  rounded-2 link">
                              <a href="#" class="">
                                Mode
                              </a>
                              <div>
                                <a class="moon dark-layout" href="javascript:void(0)">
                                  <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                </a>
                                <a class="sun light-layout" href="javascript:void(0)" style="display: none;">
                                  <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                </a>
                              </div>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center  ">
                                Account Settings
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                Sign Out
                              </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>


                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
            <!--------------- END OF MEDIUM & SMALL DEVICE: NAVBAR MENU -------------->

          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

          <!------------------ SMALL DEVICE & MOBILE: OFFCANVAS MENU ----------------->
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
              <div class="offcanvas-header justify-content-between">
                <!-- BRAND LOGO & TEXT -->
                <a href="<?= site_url('dashboard'); ?>" class="text-nowrap logo-img d-block">
                  <!------- LOGO ICON ------->
                  <b class="logo-icon">
                    <!-- Dark Logo Icon -->
                    <img src="assets/images/logos/logo-icon.svg" alt="homepage">
                  </b>
                  <!------- END OF LOGO ICON ------->

                  <!------- LOGO TEXT ------->
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2">
                    <!-- Light Logo text -->
                    <img src="assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage">
                  </span>
                  <!------- END OF LOGO TEXT ------->
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body" data-simplebar="" data-simplebar style="height: calc(100vh - 80px)">
                <ul id="sidebarnav">
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow px-1" href="javascript:void(0)" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:shield-plus-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative ">
                          <div
                            class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-linear" class="text-primary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block ">
                            <h6 class="mb-0 ">Chat Application</h6>
                            <span class="fs-3 d-block text-muted">New messages arrived</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bill-list-linear" class="text-secondary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Invoice App</h6>
                            <span class="fs-3 d-block text-muted">Get latest invoice</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bedside-table-2-linear" class="text-success fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Contact Application</h6>
                            <span class="fs-3 d-block text-muted">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-unread-linear" class="text-warning fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Email App</h6>
                            <span class="fs-3 d-block text-muted">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-danger-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:cart-large-2-linear" class="text-danger fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">User Profile</h6>
                            <span class="fs-3 d-block text-muted">learn more information</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Calendar App</h6>
                            <span class="fs-3 d-block text-muted">Get dates</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bedside-table-linear" class="text-secondary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Contact List Table</h6>
                            <span class="fs-3 d-block text-muted">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="#" class="d-flex align-items-center position-relative">
                          <div
                            class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Notes Application</h6>
                            <span class="fs-3 d-block text-muted">To-do and Daily tasks</span>
                          </div>
                        </a>
                      </li>
                      <ul class="px-8 mt-7 mb-4">
                        <li class="sidebar-item mb-3">
                          <h5 class="fs-5 fw-semibold">Quick Links</h5>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">Pricing
                            Page</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">Authentication Design</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">Register Now</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">404
                            Error Page</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">Notes App</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">User
                            Application</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="#">Account Settings</a>
                        </li>
                      </ul>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="#" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:chat-unread-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="#" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="#" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:inbox-unread-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!--------------- END OF SMALL DEVICE & MOBILE: OFFCANVAS MENU -------------->

        </div>
        <!--------------- END OF VERTICAL HEADER -------------->

        <!------------------ HORIZONTAL HEADER ----------------->
        <div class="app-header with-horizontal">
          <nav class="navbar navbar-expand-xl container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-block">
                <div class="brand-logo d-flex align-items-center justify-content-between">
                  <a href="<?= site_url('dashboard'); ?>" class="text-nowrap logo-img">
                    <!--Logo icon -->
                    <b class="logo-icon">
                      <!-- Dark Logo icon -->
                      <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                      <!-- Light Logo icon -->
                      <img src="assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->

                    <!-- Logo text -->
                    <span class="logo-text">
                      <!-- dark Logo text -->
                      <img src="assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                      <!-- Light Logo text -->
                      <img src="assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                    </span>
                    <!-- end logo text -->
                  </a>
                </div>
              </li>

              <!------------------ SEARCH ICON ----------------->
              <li class="nav-item d-none d-lg-block search-box">
                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark" href="javascript:void(0)"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                </a>
              </li>
              <!--------------- END OF SEARCH ICON -------------->

              <!------------------ MENU APPS ----------------->
              <li class="nav-item hover-dd d-none d-lg-block dropdown">
                <a class="nav-link nav-icon-hover" id="drop2" href="#" aria-haspopup="true" aria-expanded="false">
                  <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                </a>
                <div class="dropdown-menu dropdown-menu-nav  dropdown-menu-animate-up py-0" aria-labelledby="drop2">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <div class="ps-3 pt-3">
                        <div class="border-bottom">
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="#" class="d-flex align-items-center pb-9 position-relative ">
                                  <div
                                    class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:chat-line-linear"
                                      class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block ">
                                    <h6 class="mb-0 ">Chat Application</h6>
                                    <span class="fs-3 d-block text-muted">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bill-list-linear"
                                      class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Invoice App</h6>
                                    <span class="fs-3 d-block text-muted">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-2-linear"
                                      class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Contact Application</h6>
                                    <span class="fs-3 d-block text-muted">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:letter-unread-linear"
                                      class="text-warning fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Email App</h6>
                                    <span class="fs-3 d-block text-muted">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-danger-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:cart-large-2-linear"
                                      class="text-danger fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">User Profile</h6>
                                    <span class="fs-3 d-block text-muted">learn more information</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Calendar App</h6>
                                    <span class="fs-3 d-block text-muted">Get dates</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-linear"
                                      class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Contact List Table</h6>
                                    <span class="fs-3 d-block text-muted">Add new contact</span>
                                  </div>
                                </a>
                                <a href="#" class="d-flex align-items-center pb-9 position-relative">
                                  <div
                                    class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0">Notes Application</h6>
                                    <span class="fs-3 d-block text-muted">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-3 pb-1">
                          <div class="col-8">
                            <a class="text-dark d-flex align-items-center lh-1 fs-3" href="#"><i
                                class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end pe-4">
                              <button class="btn btn-primary rounded-pill fs-3">Check</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 ms-n7">
                      <div class="position-relative p-3 border-start h-100">
                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                        <ul>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">User Application</a>
                          </li>
                          <li class="mb-3">
                            <a class="fs-3" href="#">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!--------------- END OF MENU APPS -------------->
            </ul>

            <a class="navbar-toggler nav-icon-hover p-0 border-0 text-white" href="javascript:void(0)"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown ">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="droplng" aria-expanded="false">
                      <img src="assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                        class="round-20" />
                    </a>
                    <div class="dropdown-menu pt-0  dropdown-menu-animate-up" aria-labelledby="droplng">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">English</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-cn.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Chinese</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-fr.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">French</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="assets/images/svgs/icon-flag-sa.svg" alt="" width="20px" height="20px"
                              class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Arabic</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)"
                      style="display: none;">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                    </a>
                  </li>



                  <li class="nav-item hover-dd dropdown  d-none d-lg-block">
                    <a class="nav-link nav-icon-hover waves-effect waves-dark" href="javascript:void(0)" id="drop2"
                      aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div
                      class="dropdown-menu py-0 content-dd  dropdown-menu-animate-up dropdown-menu-end overflow-hidden"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-primary">
                        <div class="mb-0 fs-6 fw-medium text-white">Notifications</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 4 Notifications</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center  dropdown-item gap-3   border-bottom">
                          <span
                            class="flex-shrink-0 bg-primary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-secondary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-danger-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-warning-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-success-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span
                            class="flex-shrink-0 bg-info-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="settings" class="feather-sm fill-white text-info"></i>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-primary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Notifications</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>





                    </div>
                  </li>

                  <li class="nav-item hover-dd dropdown  d-none d-lg-block">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span> <span class="point"></span>
                      </div>
                    </a>
                    <div
                      class="dropdown-menu py-0 content-dd dropdown-menu-animate-up  dropdown-menu-end overflow-hidden"
                      aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-secondary">
                        <div class="mb-0 fs-6 fw-medium text-white">Messages</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 5 new messages</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-1.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mathew Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-2.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Bianca Anderson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-3.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Andrew Johnson</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-4.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark Strokes</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-5.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark, Stoinus & Rishvi..</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have
                              event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)"
                          class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="assets/images/profile/user-6.jpg" alt="user"
                              class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80 d-inline-block v-middle">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Eliga Rush</h6>
                              <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you
                              want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-secondary rounded align-items-center justify-content-center gap-2"
                          href="javascript:void(0);">
                          <span>Check all Messages</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>

                    </div>
                  </li>


                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="assets/images/profile/user-1.jpg" alt="user" width="30"
                        class="profile-pic rounded-circle" />
                    </a>
                    <div class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd"
                      aria-labelledby="drop2">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class=" py-3 border-bottom">
                          <div class="d-flex align-items-center px-3">
                            <img src="assets/images/profile/user-1.jpg" class="rounded-circle round-50" alt="" />
                            <div class="ms-3">
                              <h5 class="mb-1 fs-4">Markarn Doe</h5>
                              <p class="mb-0 fs-2 d-flex align-items-center text-muted">
                                info@materialpro.com
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="message-body pb-3">
                          <div class="px-3 pt-3">
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                My Profile
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                My Projects
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                Inbox
                              </a>
                            </div>
                          </div>
                          <hr>
                          <div class="px-3">
                            <div
                              class="py-8 px-3 d-flex justify-content-between dropdown-item align-items-center h6 mb-0  rounded-2 link">
                              <a href="#" class="">
                                Mode
                              </a>
                              <div>
                                <a class="moon dark-layout" href="javascript:void(0)">
                                  <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                </a>
                                <a class="sun light-layout" href="javascript:void(0)" style="display: none;">
                                  <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                </a>
                              </div>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center  ">
                                Account Settings
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="#" class=" d-flex  align-items-center ">
                                Sign Out
                              </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <!--------------- END OF HORIZONTAL HEADER -------------->
      </header>
      <!--------------- END OF HEADER -------------->

      <!------------------ SIDEBAR HORIZONTAL ----------------->
      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= site_url('dashboard'); ?>"
                  aria-expanded="false"><iconify-icon icon="solar:screencast-2-linear"
                    class="aside-icon"></iconify-icon><span class="hide-menu">Dashboard</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="./main/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modern Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./main/index2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Awesome Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./main/index3.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Classy Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./main/index4.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Analytical Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./main/index5.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Minimal Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="./main/index6.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">General Dashboard</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Others</span>
              </li> -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                  aria-expanded="false"><iconify-icon icon="solar:layers-minimalistic-linear"
                    class="aside-icon"></iconify-icon><span class="hide-menu">Menu</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="<?= site_url('dashboard'); ?>" class="sidebar-link"><i class="ti ti-circle"></i><span
                        class="hide-menu">
                        Dashboard</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a href="<?= site_url('about'); ?>" class="sidebar-link"><i class="ti ti-circle"></i><span
                        class="hide-menu">
                        About</span></a>
                  </li>
                  <li class="sidebar-item">
                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti ti-circle"></i>
                      <span class="hide-menu">Features</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"><i class="ti ti-circle"></i><span
                            class="hide-menu">
                            item 1.3.1</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"><i class="ti ti-circle"></i><span
                            class="hide-menu">
                            item 1.3.2</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"><i class="ti ti-circle"></i><span
                            class="hide-menu">
                            item 1.3.3</span></a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"><i class="ti ti-circle"></i><span
                            class="hide-menu">
                            item 1.3.4</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"><i class="ti ti-circle"></i><span
                        class="hide-menu"> item 1.4</span></a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--------------- END OF SIDEBAR HORIZONTAL -------------->

      <!------------------ BODY WRAPPER ----------------->
      <div class="body-wrapper">
        <!------------------ BODY CONTAINER ----------------->
        <?= $this->load->view($view, $data); ?>
        <!--------------- END OF BODY CONTAINER -------------->
      </div>
      <!--------------- END OF BODY WRAPPER -------------->

      <!------------------ SETTING THEME BUTTON ----------------->

      <!------------------ BUTTON ----------------->
      <!-- <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7 text-white"></i>
      </button> -->
      <!--------------- END OF BUTTON -------------->

      <!------------------ OFFCANVAS MENU ----------------->
      <!-- <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary " for="light-layout"> <iconify-icon icon="solar:sun-2-outline"
                class="icon fs-7 me-2"></iconify-icon>Light</label>
            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="dark-layout"><iconify-icon icon="solar:moon-outline"
                class="icon fs-7 me-2"></iconify-icon>Dark</label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="ltr-layout"><iconify-icon icon="solar:align-left-linear"
                class="icon fs-7 me-2"></iconify-icon>LTR</label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="rtl-layout">
              <iconify-icon icon="solar:align-right-linear" class="icon fs-7 me-2"></iconify-icon>RTL</label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                <iconify-icon icon="solar:slider-vertical-minimalistic-linear"
                  class="icon fs-7 me-2"></iconify-icon>Vertical</label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                <iconify-icon icon="solar:slider-minimalistic-horizontal-outline" class="icon fs-7 me-2"></iconify-icon>
                Horizontal</label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="boxed-layout">
              <iconify-icon icon="solar:cardholder-linear" class="icon fs-7 me-2"></iconify-icon>
              Boxed</label>

            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="full-layout">
              <iconify-icon icon="solar:scanner-linear" class="icon fs-7 me-2"></iconify-icon> Full</label>
          </div>

          <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <a href="javascript:void(0)" class="fullsidebar">
              <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="full-sidebar"><iconify-icon
                  icon="solar:sidebar-minimalistic-outline" class="icon fs-7 me-2"></iconify-icon> Full</label>
            </a>
            <div>
              <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                <iconify-icon icon="solar:siderbar-outline" class="icon fs-7 me-2"></iconify-icon>Collapse</label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-with-border"><iconify-icon icon="solar:library-broken"
                class="icon fs-7 me-2"></iconify-icon>Border</label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-without-border">
              <iconify-icon icon="solar:box-outline" class="icon fs-7 me-2"></iconify-icon>Shadow</label>
          </div>
        </div>
      </div> -->
      <!--------------- END OF OFFCANVAS MENU -------------->

      <!--------------- END OF SETTING THEME BUTTON -------------->
    </div>
    <!--------------- END OF PAGE WRAPPER -------------->

    <!------------------ SEARCH BAR ----------------->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control fs-2" placeholder="Search here" id="search" />
            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
              <i class="ti ti-x fs-5 ms-3"></i>
            </a>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Modern</span>
                  <span class="fs-2 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Dashboard</span>
                  <span class="fs-2 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Contacts</span>
                  <span class="fs-2 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Posts</span>
                  <span class="fs-2 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Detail</span>
                  <span
                    class="fs-2 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Shop</span>
                  <span class="fs-2 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Modern</span>
                  <span class="fs-2 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Dashboard</span>
                  <span class="fs-2 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Contacts</span>
                  <span class="fs-2 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Posts</span>
                  <span class="fs-2 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Detail</span>
                  <span
                    class="fs-2 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                <a href="#">
                  <span class="h6 mb-1">Shop</span>
                  <span class="fs-2 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <!--------------- END OF SERACH BAR -------------->

  </div>
  <!--============== END OF MAIN WRAPPER =============-->

  <!------------------ FOOTER ----------------->
  <div class="dark-transparent sidebartoggler">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul>
      <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>
  </div>
  <!--------------- END OF FOOTER -------------->

  <!------------------ CUSTOM JS FILE ----------------->
  <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script>
    function handleColorTheme(e) {
      $("html").attr("data-color-theme", e);
      $(e).prop("checked", !0);
    }
  </script>
  <!--------------- END OF CUSTOM JS FILE -------------->

</body>

</html>