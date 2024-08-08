<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Magazine News</title>
    <meta name="description" content />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.html" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/icon/favicon.png"
    />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script nonce="e0535283-92c1-49eb-a947-c18b27ec9680">
      (function (w, d) {
        !(function (j, k, l, m) {
          j[l] = j[l] || {};
          j[l].executed = [];
          j.zaraz = { deferred: [], listeners: [] };
          j.zaraz.q = [];
          j.zaraz._f = function (n) {
            return async function () {
              var o = Array.prototype.slice.call(arguments);
              j.zaraz.q.push({ m: n, a: o });
            };
          };
          for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
          j.zaraz.init = () => {
            var q = k.getElementsByTagName(m)[0],
              r = k.createElement(m),
              s = k.getElementsByTagName("title")[0];
            s && (j[l].t = k.getElementsByTagName("title")[0].text);
            j[l].x = Math.random();
            j[l].w = j.screen.width;
            j[l].h = j.screen.height;
            j[l].j = j.innerHeight;
            j[l].e = j.innerWidth;
            j[l].l = j.location.href;
            j[l].r = k.referrer;
            j[l].k = j.screen.colorDepth;
            j[l].n = k.characterSet;
            j[l].o = new Date().getTimezoneOffset();
            if (j.dataLayer)
              for (const w of Object.entries(
                Object.entries(dataLayer).reduce(
                  (x, y) => ({ ...x[1], ...y[1] }),
                  {}
                )
              ))
                zaraz.set(w[0], w[1], { scope: "page" });
            j[l].q = [];
            for (; j.zaraz.q.length; ) {
              const z = j.zaraz.q.shift();
              j[l].q.push(z);
            }
            r.defer = !0;
            for (const A of [localStorage, sessionStorage])
              Object.keys(A || {})
                .filter((C) => C.startsWith("_zaraz_"))
                .forEach((B) => {
                  try {
                    j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B));
                  } catch {
                    j[l]["z_" + B.slice(7)] = A.getItem(B);
                  }
                });
            r.referrerPolicy = "origin";
            r.src =
              "../../cdn-cgi/zaraz/sd0d9.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(j[l])));
            q.parentNode.insertBefore(r, q);
          };
          ["complete", "interactive"].includes(k.readyState)
            ? zaraz.init()
            : j.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, "zarazData", "script");
      })(window, document);
    </script>
</head>
<body>
<header>
      <div class="header-area">
        <div class="main-header">
          <div class="header-top">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-12">
                  <div
                    class="d-flex justify-content-lg-between align-items-center justify-content-sm-end"
                  >
                    <div class="header-info-mid">
                      <div class="logo">
                        <a href="index-2.html"
                          ><img src="assets/img/logo/logo.png" alt
                        /></a>
                      </div>
                    </div>
                    <div class="header-info-right d-flex align-items-center">
                      <ul>
                        <li>
                          <a href="login.html" class="header-btn">Sign in</a>
                        </li>
                      </ul>

                      <div class="header-social">
                        <a href="https://www.fb.com/sai4ull"
                          ><i class="fab fa-facebook"></i
                        ></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-bottom header-sticky">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-xl-12">
                  <div
                    class="bottom-wrap d-flex justify-content-between align-items-center"
                  >
                    <div class="logo2">
                      <a href="index-2.html"
                        ><img src="assets/img/logo/logo.png" alt
                      /></a>
                    </div>

                    <div class="main-menu d-none d-lg-block">
                      <nav>
                        <ul id="navigation">
                          <li><a href="index-2.html">Home</a></li>
                          <li>
                            <a href="#">Page</a>
                            <ul class="submenu">
                              <li><a href="blog.html">Blog</a></li>
                              <li>
                                <a href="blog_details.html">Blog Details</a>
                              </li>
                              <li>
                                <a href="post_details.html">Post Details</a>
                              </li>
                              <li><a href="category.html">Category</a></li>
                              <li><a href="elements.html">Element</a></li>
                              <li><a href="{{ route('contactus') }}">Contact</a></li>
                            </ul>
                          </li>
                          <li><a href="category.html">Science</a></li>
                          <li><a href="category.html">Technology</a></li>
                          <li><a href="category.html">Beauty</a></li>
                          <li><a href="category.html">Health</a></li>
                          <li><a href="category.html">Arts & Culture</a></li>
                          <li><a href="category.html">Opinion</a></li>
                          <li><a href="category.html">Videos</a></li>
                          <li><a href="category.html">Gallery</a></li>
                        </ul>
                      </nav>
                    </div>

                    <form class="search-form d-none d-sm-block" action="#">
                      <i class="ti-search"></i>
                      <input
                        type="search"
                        class="form-control"
                        placeholder="Search Here"
                        title="Search here"
                      />
                    </form>
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="container">

       @yield('content')
    </main>

    <footer>
      <div class="footer-wrapper">
        <div class="footer-area footer-padding">
          <div class="container">
            <div class="row d-flex justify-content-between">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>About</h4>
                    <ul>
                      <li><a href="#">Our Story</a></li>
                      <li><a href="#">Mission</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">News</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Categories</h4>
                    <ul>
                      <li><a href="#">Work</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">Tips & Tricks</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Categories</h4>
                    <ul>
                      <li><a href="#">Work</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">Tips & Tricks</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>Quick Links</h4>
                    <ul>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Privacy Statement</a></li>
                      <li><a href="#">Use of cookies</a></li>
                      <li><a href="#">International Editions</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row d-flex align-items-center">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p>
                      Copyright &copy;
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      All rights reserved | This template is made with
                      <i
                        class="fa fa-heart color-danger"
                        aria-hidden="true"
                      ></i>
                      by
                      <a
                        href="https://colorlib.com/"
                        target="_blank"
                        rel="nofollow noopener"
                        >Colorlib</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

     <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
      integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
      data-cf-beacon='{"rayId":"7f823a957c90bc22","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
      crossorigin="anonymous"
    ></script>
</body>
</html>