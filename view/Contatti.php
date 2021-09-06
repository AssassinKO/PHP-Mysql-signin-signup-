<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- <link href="features.css" rel="stylesheet"> -->
  <link href="./assets/css/carousel.rtl.css" rel="stylesheet">
  <link href="./assets/css/prezzo-site.css" rel="stylesheet">
  <link href="./assets/css/menu-navigation.css" rel="stylesheet">

  <script>
    function verificaEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    function controlloForm() {
      var nome = document.forms["formmail"]["nome"].value;
      var email = document.forms["formmail"]["email"].value;
      var tel = document.forms["formmail"]["tel"].value;
      var msg = document.forms["formmail"]["msg"].value;

      if (nome == "" || email == "" || msg == "") {
        alert("I campi Nome, Email e Messaggio sono obbligatori!");
        return false;
      }
      else if (verificaEmail(email) !== true) {
        alert("L'indirizzo email non sembra corretto!");
        return false;
      } else {
        return true;
      }
    }
  </script>

</head>

<body style="padding: 0">

  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <use xlink:href="" />
        </svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../index.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="chi-siamo.php" class="nav-link px-2 link-dark">Chi siamo</a></li>
        <li><a href="Contatti.php" class="nav-link px-2 link-dark">Contatti</a></li>
        <li><a href="servizi.php" class="nav-link px-2 link-dark">Servizi</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>
  <br>

  <!-- Heading -->
  <h1 class=" text-center mb-xl-5">
    <span class="text-primary">CONTATTI</span>.
    <br>
    Il tuo software per il tuo business
  </h1>
  <br>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8 col-xl-6">
          <div class="text-center mb-4">
            <h2 class="h1 text-primary">Modulo di contatto</h2>
            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium.
            </p>
          </div>
          <form method="POST" action="" data-form-email="" novalidate="" ... onsubmit="return controlloForm()">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Your Name *</label>
                  <input name="contact-name" type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                    Please type your name.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email Address *</label>
                  <input name="contact-email" type="email" placeholder="you@yoursite.com" class="form-control"
                    required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Company Name</label>
                  <input name="contact-company" type="text" class="form-control" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input name="contact-phone" type="tel" class="form-control" required="">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Message:</label>
                  <textarea class="form-control" name="contact-message" rows="10"
                    placeholder="How can we help?"></textarea>
                </div>
              </div>
              <div class="col">
                <div class="d-none alert alert-success" role="alert" data-success-message="">
                  Thanks, a member of our team will be in touch shortly.
                </div>
                <div class="d-none alert alert-danger" role="alert" data-error-message="">
                  Please fill all fields correctly.
                </div><br>
                <button type="submit" class="btn btn-primary btn-loading" data-loading-text="Sending">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon"
                    data-src="assets/img/icons/theme/code/loading.svg">
                    <title>Icon For Loading</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="chat-quote-fill">
                      <g>
                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                      </g>
                      <path
                        d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) ">
                      </path>
                    </g>
                  </svg>
                  <span>Send Enquiry</span>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section><br><br>
  <footer class="mt-6 mb-6" style="background-color: royalblue;">
    <div class="container text-center">
      <p style="color: white;">@ Copyright 2021</p>
      <p>fdfdsfds</p>
    </div>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>