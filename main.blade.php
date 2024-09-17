<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>NADI Batam</title>

  {{-- Meta untuk tampil di Whatsapp --}}
  @if (Request::segment(1) == '')
  <meta property="og:title" content="Nuryanto Hardi" />
  <meta name="description" content="NADI Batam" />
  <meta property="og:url" content="https://nadiforbatam.com/" />
  <meta property="og:description" content="Ayo READI (Relawan Nadi)" />
  <meta property="og:image" content="{{ asset('images/thumbnail.png') }}" />
  <meta property="og:type" content="article" />
  <title>Pesantren Al Hijrah</title>
  @elseif (Request::segment(1) == 'detail')
    <meta property="og:title" content="Nuryanto - Hardi" />
    <meta name="description" content="NADI Batam" />
    <meta property="og:url" content="https://nadiforbatam.com/" />
    <meta property="og:description" content="Ayo READI (Relawan Nadi)" />
    <meta property="og:image" content="{{ asset('images/thumbnail.png') }}" />
    <meta property="og:type" content="article" />

    <title>NADI Batam</title>
  @endif
  {{-- Meta untuk tampil di Whatsapp --}}

  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">NADI BATAM</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ Request::is('/') ? 'nav-link active' : 'nav-link collapsed' }}">Home</a></li>
          <li><a href="/cekkepesertaanrelawan" class="{{ Request::is('cekkepesertaanrelawan*') ? 'nav-link active' : 'nav-link collapsed' }}">Cek Kepesertaan Relawan</a></li>
          <li><a href="#" id="openPopup">Cek TPS Anda</a></li>
          <!--<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>-->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

  @yield('section')

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about" style="margin: 0">
          <a href="/" class="logo d-flex align-items-center mt-3">
            <span class="sitename">NADI BATAM</span>
          </a>
          <div class="footer-contact pt-3" style="margin: 0">
            <!--<p>Nadi Kami, Nadi Pejuang</p>
            <p>Nadi Kami, Harus Menang</p>-->
            <img src="images/footer.svg" class="batam-mudah img-fluid aos-init aos-animate" width="100%">
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Links</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/cekkepesertaanrelawan">Cek Kepesertaan Relawan</a></li>
            <li><a href="#" id="openPopup">Cek TPS Anda</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NADI Batam</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Developed by <a href="#">Kevin Perdana</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

  <script>
    document.getElementById('openPopup').addEventListener('click', function() {
        // Open the popup window
        let popupWindow = window.open('https://cekdptonline.kpu.go.id', 'PopupWindow', 'width=600,height=400');

        // Wait for the popup window to load
        popupWindow.onload = function() {
            // Find the search input field by its name, ID, or class
            let searchInput = popupWindow.document.querySelector('#__BVID__20'); // replace with the actual name attribute of the search input

            if (searchInput) {
                // Fill in the search input
                searchInput.value = '2172021104940002';

                // Optionally submit the form
                let searchForm = searchInput.closest('form'); // find the closest form
                if (searchForm) {
                    searchForm.submit();
                }
            } else {
                console.error('Search input not found');
            }
        };
    });
  </script>

</body>

</html>