<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minuta Virtual v-2</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles/index.css">
  <link rel="stylesheet" href="assets/js/app1.js">
</head>
<body>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 text-center p-5 align-self-center" id="leftseccion">
          <div>
            <h1 class="display-2"><strong>S I M I V</strong></h1>
            <h3><strong>Sistema de Minutas Virtuales</strong></h3>
          </div>
          <div class="row">
            <div class="boxlogominuta align-self-center my-5">
              <img src="./assets/img/LogoSimiv.png" alt="" class="img-fluid w-50">
            </div>
          </div>
          <div>
            <br>
            <p class="fs-4"> Aplicativo para registrar anotaciones y novedades en los puestos de servicio en los ERON y sedes administrativas de la <strong>Regional Noroeste</strong></p>
          </div>
        </div>
        <div class="col-sm-7" id="rightseccion" >
          <div class="row  justify-content-md-center">
            <div class="col-1 col-sm-12 col-xs-12"></div>
            <div class="col-md-5 col-sm-12 col-xs-12" id="id_userbox">
              <div class="c_userbox rounded-5 text-center bg-light p-3">
                <div>
                  <h3>Inicio de sesión</h3>
                </div>
                <img src="./assets/img/logoreg.png" alt="Escudo regional INPEC" class="img-fluid w-25 py-3">
                <form action="validar.php" method="post" >
                  <div class="mb-3 mx-3">
                    <input type="text" placeholder="Ingresa tu usuario" name="usuario" class="form-control" id="usuario">
                  </div>
                  <div class="mb-3 mx-3">
                    <input type="password" placeholder="Su contraseña" class="form-control" name="contraseña" id="Password">
                  </div>
                  <h5>Ingresar</h5>
                  <button type="submit" value = 'Ingresar' class="btn btn-primary border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="80" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#004964" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 11l2 2l4 -4" />
                  </svg>
                  </button>
                  <div class="row m-3">
                    <div class="col text-center" id="error"></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-1 col-sm-12 col-xs-12"></div>
          </div> 
        </div>
      </div>
  </div>
  <footer>
    <div class="container p-3">
      <div class="row">
        <div class="col-md-3 col-xs-12 text text-center">
          <img src="./assets/img/letrasInpec.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-xs-12 text-center">
          <a href="https://www.inpec.gov.co" target="_blank" >
            <svg target class="icon icon-tabler icon-tabler-world" width="44" height="44"   viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="12" cy="12" r="9" />
              <line x1="3.6" y1="9" x2="20.4" y2="9" />
              <line x1="3.6" y1="15" x2="20.4" y2="15" />
              <path d="M11.5 3a17 17 0 0 0 0 18" />
              <path d="M12.5 3a17 17 0 0 1 0 18" />
            </svg>
          </a>
        </div>
        <div class="col-md-3 col-xs-12 text-center">
          <a href="https://twitter.com/INPEC_Colombia" target="_blank" >
            <svg class="icon icon-tabler icon-tabler-brand-twitter" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg>
          </a> 
        </div>
        <div class="col-md-3 col-xs-12 text-center">
          <img src="./assets/img/letrasJusticia.png" alt="" class="img-fluid w-50">
        </div>
      </div>
    </div>
  </footer>
</body> 
</html>