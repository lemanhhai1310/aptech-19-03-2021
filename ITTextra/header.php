<nav class="navbar navbar-expand-lg bg-white navbar-light container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php for ($i = 1; $i <= 10; $i++) : ?>
        <li class="nav-item d-flex align-items-center justify-content-center">
          <img class="mx-3 my-2 mw-100" src="./assets/img/logo<?php echo $i ?>.png" alt="">
        </li>
      <?php endfor ?>
    </ul>
  </div>

  <a class="btn btn-round btn-warning font-weight-bold my-1"
    style="width:8rem;margin:0 auto"
    href="#regis-form"
    >ĐĂNG KÝ</a>
</nav>