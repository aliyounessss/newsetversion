<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-sm navbar-light bg-light fixed-top"
      style="height: 1.5cm; background-color: white !important"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="Home.php"
          ><img
            src="../images/LOGO.jpg"
            alt=""
            width="40"
            height="40"
            class="d-inline-block align-text-top"
          />
          BookADoc</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Home.php"
                  >Home</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Doctors
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="../ListofDr/list.php"
                      >Doctor List</a
                    >
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Appointments</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Schedual Timing</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Chat</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Profile Settings</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Patient
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Bookings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Profile Settings</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Hospitals
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Hosoital Search</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Admin Log In</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Admin Profile</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav me-right mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="
                    nav-link
                    active
                    d-grid
                    gap-2
                    d-md-flex
                    justify-content-md-end
                  "
                  aria-current="page"
                  href="#"
                  >About Us</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="
                    nav-link
                    active
                    d-grid
                    gap-2
                    d-md-flex
                    justify-content-md-end
                  "
                  aria-current="page"
                  href="#"
                  >Contact Us</a
                >
              </li>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../LogInPage/login.php">
                  <button
                    class="btn btn-primary me-md-2"
                    id="btnreg"
                    type="submit"
                  >
                    Login / Register
                  </button>
                </a>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="heading-section mb-5 pb-md-4">List Of Doctors</h2>
          </div>
          <div class="col-md-12">
            <div class="featured-carousel owl-carousel">
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc1.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- my work -->
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc2.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc3.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor1.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor05.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor06.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor08.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc18.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc12.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doc16.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor02.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor03.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor04.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr.Fouad Abi Aad</a></h3>
                    <p>Specialiste in Urologie Ex:6847</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book an Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end -->

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor07.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading">
                      <a href="#">Dr. Walid Abi Rached</a>
                    </h3>
                    <p>Ex: 5588</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book An Appointment<span
                            class="ion-ios-arrow-round-forward"
                          ></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor10.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr. Farah Naser </a></h3>
                    <p>Ex: 8771</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book An Appointment<span
                            class="ion-ios-arrow-round-forward"
                          ></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor11.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr. Farah Hachem</a></h3>
                    <p>Ex: 7755</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book An Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor12.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr. Daniel Eid </a></h3>
                    <p>Ex: 4589</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book An Appointment<span
                            class="ion-ios-arrow-round-forward"
                          ></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="blog-entry">
                  <a
                    href="#"
                    class="block-20 d-flex align-items-start"
                    style="background-image: url('./images/doctor09.jpg')"
                  >
                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">Nov.</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="#">Dr. Ibrahim Hachem</a></h3>
                    <p>Ex: 6314</p>
                    <div class="d-flex align-items-center mt-4">
                      <p class="mb-0">
                        <a href="#" class="btn btn-primary"
                          >Book An Appointment
                          <span class="ion-ios-arrow-round-forward"></span
                        ></a>
                      </p>
                      <p class="ml-auto meta2 mb-0">
                        <a href="#" class="mr-2">Admin</a>
                        <a href="#" class="meta-chat"
                          ><span class="ion-ios-chatboxes"></span> 3</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</html>
