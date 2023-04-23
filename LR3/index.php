<?php
require_once 'process_login.php';
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
  header('Location: content/content.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COVID-19 чекер</title>
    <link rel="icon" href="img/icon.ico" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-secondary py-0">
        <div class="container" id="upheader">
          <ul class="navbar-nav me-auto w-100">
            <li class="nav-item dropdown me-5">
              <a class="nav-link dropdown-toggle py-2 ps-0 pe-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Москва и МО </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Москва и МО</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Санкт-Петербург</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Волгоград</a>
                </li>
              </ul>
            </li>
            <li class="nav-item ms-5 me-1">
              <a class="nav-link bg-yellow py-2 px-3" href="#">
                <img src="img/calendar.png" width="17px" alt="...">
                <span>Записаться на прием</span>
              </a>
            </li>
            <li class="nav-item me-auto">
              <a class="nav-link py-2" href="#">
                <img src="img/telephone.png" width="17px" alt="...">
                <span>+7 (495) 152-47-53</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> RU </a>
              <ul class="dropdown-menu" style="max-width: 50px;">
                <li>
                  <a class="dropdown-item" href="#">RU</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">EN</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg bg-white">
        <!--.fixed-top-->
        <div class="container">
          <a class="navbar-item" href="#">
            <img src="img/menu.svg" width="16px" alt="...">
          </a>
          <a class="navbar-brand ms-4 me-5" href="#">
            <img src="img/logo.png" width="134px" alt="...">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-4">
                <a class="nav-link" href="#">Услуги</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" href="#">Врачи</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" href="#">Клиники</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link" href="#">Акции</a>
              </li>
              <li class="nav-item ms-4">
                <a class="nav-link active" href="#">Подписка МЕДСИ+</a>
              </li>
              <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Ещё </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">Подарочная карта МЕДСИ</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Premium</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Стационары</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Программы</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Check up</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Центры Компетенций</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Программа лояльности</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Спасибо МЕДСИ</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Франчайзинг</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">
                  <img src="img/search.png" width="23px" alt="...">
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">
                  <img src="img/glasses.png" width="42px" alt="...">
                </a>
              </li>
              <?php
                if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                ?>
                    <li class="nav-item">
                        Вы вошли как <?php echo $_SESSION['user'].'.'; ?>
                        <a class="nav nav-link red" href="logout.php" style="--bs-link-hover-color: #00aeab; --bs-link-color: black; display:inline; font-size:16px">
                            Выйти.
                        </a>
                    </li>
                <?php
                }else{
                ?>
                    <li class="nav-item" style="font-size:16px">
                        Вы не авторизованы.
                        <a class="nav nav-link" href="index.php" style="--bs-link-hover-color: #00aeab; --bs-link-color: black; display:inline; font-size:14px">
                            Авторизоваться
                        </a>
                        или
                        <a class="nav nav-link" href="signup.php" style="--bs-link-hover-color: #00aeab; --bs-link-color: black; display:inline; font-size:14px">
                            зарегестрироваться
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
    <div class="container-fluid d-block my-5">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10 mx-auto" style="background-color: white;min-height: 20rem;">
            <div class="col-md-5 mx-auto">
                <div class="text-center">
                    <h3 class="mb-5"><b>Авторизация</b></h3>
                    <?php

                    if(isset($_SESSION['reg_success'])){
                        echo '<p class="green"> '.$_SESSION['reg_success'].'</p>';
                    }
                    unset($_SESSION['reg_success']);

                    ?>
                    <?php
                    if(!isset($_SESSION['user'])){
                    ?>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="action" value="signin">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="example@example.com" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>">
                            <span class="red"><?php if(!empty($arrErr['email'])){echo $arrErr['email'];} ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="**********">
                            <span class="red"><?php if(!empty($arrErr['password'])){echo $arrErr['password'];} ?></span>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm login-btn" style="margin-top: 1rem">
                                Войти
                            </button>
                        </div>
                        <div class="form-group">
                            <p class="text-center mt-1">Ещё нет аккаунта?<br><a href="signup.php">Зарегистрируйтесь</a></p>
                        </div>
                    </form>
                    <?php
                    }else{
                        echo '<p class="text-warning"> Вы уже авторизованы как ' . $_SESSION['user'] . '</p>' . '<a class="red" href="logout.php">Выйти.</a>';
                    }
                    ?>
                    <?php

                    if(isset($_SESSION['login_success'])){
                        echo '<p class="text-warning mt-5">' . $_SESSION['login_success'] . '</p>';
                    }
                    unset($_SESSION['login_success']);

                    ?>
                </div>
            </div>


        </div>
        <div class="col-md-1">

        </div>
    </div>
</div>
    </main>
    <footer>
      <div class="container-fluid bg-green mt-5">
        <div class="container d-flex justify-content-between">
          <button type="button" class="btn btn-warning my-3 fs-18 px-3">Записаться на прием</button>
          <button type="button" class="btn btn-outline-light bg-green-footer my-3 fs-18 px-3">Горячая линия/Оставить отзыв</button>
          <button type="button" class="btn btn-outline-light bg-green-footer my-3 fs-18 px-3">Вызвать врача/медсестру</button>
          <button type="button" class="btn btn-outline-light bg-danger my-3 fs-18 px-3">Вызвать скорую помощь</button>
          <button type="button" class="btn btn-outline-light bg-green-footer my-3 fs-18 px-3">Спасибо МЕДСИ</button>
        </div>
      </div>
      <div class="container fs-5">
        <div class="row">
          <div class="container col-9 pb-4 border-end">
            <h5 class="fw-bold mt-5 mb-4">Карта сайта</h5>
            <div class="row">
              <div class="col">
                <ul>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Услуги</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Клиики</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Врачи</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Акции</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Программы</a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle text-decoration-none text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">О компании</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">О компании</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Миссия</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">История</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle text-decoration-none text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Пресс-центр</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Пресс-центр</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Новости</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Статьи</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle text-decoration-none text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Партнеры</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">Партнеры</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Велнес клубы</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Медицинские учреждения</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Прочие партнеры</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Программа лояльности</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Закупки</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none text-black">Акселератор МЕДСИ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="container col-3 ps-5">
            <h5 class="fw-bold mt-5 mb-4">Присоединяйтесь к нам</h5>
            <div class="row">
              <div class="col">
                <div class="d-inline">
                  <a href="#" class="text-decoration-none me-2">
                    <img src="img/telegram.svg" alt="">
                  </a>
                  <a href="#" class="text-decoration-none me-2"> 
                    <img src="img/vk.svg" alt="">
                  </a>
                  <a href="#" class="text-decoration-none me-2">
                    <img src="img/odnoklassniki.png" alt="">
                  </a>
                  <a href="#" class="text-decoration-none me-2">
                    <img src="img/youtube.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-body-secondary">
        <div class="border-bottom">
          <div class="container pt-4 pb-5">
            <div class="row">
              <div class="col-3">
                <p class="fs-6 text-green">Контактный центр</p>
                <a class="fs-4 text-black" href="">+7 (495) 023-60-84</a>
              </div>
              <div class="col-3">
                <p class="fs-6 text-green">Экстренная госпитализация</p>
                <a class="fs-4 text-black" href="">+7 (495) 182-71-14</a>
              </div>
              <div class="col-3">
                <p class="fs-6 text-green">Приложение SmartMed</p>
                <a href="">
                  <img src="img/appstore.svg" height="35px" alt="">
                </a>
                <a href="">
                  <img src="img/googleplay.svg" height="35px" alt="">
                </a>
              </div>
              <div class="col-3 d-flex align-items-center ps-4">
                <a href="" class="d-inline-flex">
                  <img src="img/eagle.svg" width="54px" alt="">
                  <p class="fs-13 lh-1 m-0 ms-3 gray-h">Независимая оценка качества оказания услуг медицинским организациям<br><br>
                  <span class="text-green">Участвовать в голосовании</span>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div >
        <div class="container d-flex flex-row fs-13">
          <div class="col-8 py-4">
            <a class="me-3 gray-h" href="">Оплата услуг</a>
            <a class="me-3 gray-h" href="">Публичное предложение МЕДСИ</a>
            <a class="me-3 gray-h" href="">Версия для слабовидящих</a>
          </div>
          <div class="col-4 d-flex justify-content-end py-4 gray-h">
            <p>© 1996-2023 АО «Группа компании «МЕДСИ»</p>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</html>