
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
</head>
<body>
	<header>
		<div id="cabecera" class="cabecera container-fluid" >
<nav class="navbar navbar-expand-sm ">
  <a class="navbar-brand" href="#"> <img class="logo" src="images/tpr.png" class="img-rounded" alt="Cinque Terre" > </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="navbar-collapse collapse" id="gi">
        <ul class="navbar-nav ml-auto d-flex justify-content-start align-items-sm-center mt-3 mt-sm-0">
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="logo" src="images/linkedin.svg" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="logo" src="images/github.svg" alt=""></a>
            </li>
  </div>
</nav>
			    <div class="row">
		            <div id="con-h" class="col-12 col-sm-6 col-lg-3 hero">
		                <h1 class="py-2 py-md-4">
		                    Contratanos y haremos crecer tu negocio.
		                </h1>
		                <p class="hero-text" itemprop="description">
		                    Ofrecemos servicios enfocados en tus necesidades respaldados por nuestra evaluaci&oacute;n de calidad.
		                </p>
		                <a href="#contacto" class="btn-custom btn btn-main link my-2 my-md-4 btn-block">
		                    Contáctanos
		                </a>
		            </div>
		        </div>
		</div>

	</header>

	    <div id="info" class="container my-3 font-base">
        <h2>Nuestros servicios</h2>
        <div id="info" class="d-flex flex-column flex-md-row justify-content-center  align-items-md-stretch px-1 px-sm-3  px-md-0 py-3 border-bottom border-secondary flex-nowrap">
            <div class="card py-4 col-12 col-md-4 mb-3 mx-0 mx-md-1 mx-lg-3">
                <div class="py-3">
                    <img src="images/diseño.svg" alt="..." width="115" height="115">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Diseño Web</h5>
                    <p class="card-text">Proponemos diversos modelos ilustrativos enfocados a su negocio. Ofreciendo un producto adaptable desde ordenadores de
                    escritorios hasta dispositivos móviles, implementando mejoras continúas de acuerdo a la interacción con el cliente y sus
                    necesidades.</p>
                    <a href="" class="btn-custom btn btn-main link my-2 my-md-4 btn-block">
                        Ver detalle
                    </a>
                </div>
            </div>
            <div class="card py-4 col-12 col-md-4 mb-3 mx-0 mx-md-1 mx-lg-3">
                <div class="py-3">
                    <img src="images/software.svg" alt="..." width="115" height="115">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Desarrollo de Software</h5>
                    <p class="card-text">Desarrollamos aplicaciones multiplataformas con base a las necesidades del cliente, que se integran con una gran
                    variedad de dispositivos y sistemas operativos: en versión Web, Smartphones, Tablets, Windows y Linux.</p>
                </div>
            </div>
            <div class="card py-4 col-12 col-md-4 mb-3 mx-0 mx-md-1 mx-lg-3">
                <div class="py-3">
                    <img src="images/hardware.svg" alt="..." width="115" height="115">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Desarrollo de Hardware</h5>
                    <p class="card-text">Apoyamos sus ideas desarrollando el hardware que respondan las preguntas críticas de su negocio. Elaborando nuevos
                    productos tecnológicos que satisfacen las necesidades de los usuarios llevando sus ideas a la realidad. Fusionamos
                    creatividad, tecnología e innovación para crear el soporte físico que el público desea y su empresa necesita.</p>
                </div>
            </div>
        </div>
    </div>

   <div class="row pt-4 justify-content-center align-items-center">
          <div class="col-sm-auto mr-0">
            <a class="btn-custom btn-outline btn-small btn btn-tg btn-social link mr-0 mr-sm-2 mt-3 mt-sm-0 btn-control" href="https://t.me/tpanicroom" rel="noreferrer" target="_blank">
              <img class="btn-icon" src="images/telegram.webp" alt="Telegram" />
              Telegram
            </a>
          </div>
          <div class="col-sm-auto mr-0">
            <a class="btn-custom btn-outline btn-small btn btn-ws btn-social link mr-sm-2  mt-3 mt-sm-0 btn-control"
              href="https://api.whatsapp.com/send?phone=584120835034" rel="noreferrer" target="_blank">
              <img class="btn-icon" src="images/whatsapp.webp" alt="Whatsapp" />
              Whatsapp
            </a>
          </div>
          <div class="col-sm-auto mr-0">
            <button class="btn-custom btn-outline btn-small btn btn-yl btn-social link   mr-sm-2  mt-3 mt-sm-0 btn-control"
              onclick="openMail()">
              <i class="fas fa-envelope" title="Enviar un correo electr&oacute;nico"></i>
              Correo
            </button>
          </div>
        </div>
	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<style>

	body{
		color: white;
		background: #202020;
		font-family: 'Cabin', sans-serif !important;
	}
	.hero-text {
    color: #d9d9d9;

    font-size: 1.10rem;
}
.btn_full{
  width: 100%;
}
.btn-custom {
    font-size: 0.7rem;
    letter-spacing: .1rem;
    text-transform: uppercase;
    font-weight: bold;
    color: white;
    padding-top: 1rem;
    padding-bottom: 1rem;
}
@include tablet-down {
    .btn-control {
        display: block;
        width: 100%;
    }
    .btn-custom {
        font-size: 1rem;
    }
}
.btn-main {
    border: none;
    background-size: 150% auto;
    background-image: linear-gradient(to right, #9b4dca 0%, rgb(78, 69, 197) 51%, rgb(41, 125, 194) 100%);
}
.btn-icon {
    height: 1em;
    width: auto;
    padding-right: 1em;
}
.btn-main:hover {
    background-size: 200% auto;
    background-image: linear-gradient(to right, #c334d6 0%, #9b4dca 20%, rgb(78, 69, 197) 50%);
}
.btn-social {
    line-height: 3.3em ;
}
.btn-outline {
    border-color: white;
}
.btn-small {
    padding-top: .5rem;
    padding-bottom: .5rem;
}
.btn-tg:hover {
    background: rgba(30, 75, 117, 0.438);
}

.btn-ws:hover {
    background: rgba(38, 138, 91, 0.281) ;
}

.btn-yl:hover {
    background: rgba(138, 127, 38, 0.28);
}
.btn-rd:hover {
    background: rgba(138, 47, 38, 0.28);
}
.link {
    color: white
}
.link:hover {
    text-decoration: none;
    color: white;
}
.logo{
	width: auto;
	height: 50px;
	 line-height: 3.3em ;
}

#cabecera{
 background-image: url("images/bg.webp"); /* The image used */
    height: 750px;
    width: 100%;
    background-position: top right;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -18px;

}


#con-h{
	font-size: 1.25rem;
	color: white;
    position: relative;
    margin-top: 5%;
    margin-left: 10%;
    width: 90%;

}
.ico_email{
  padding-right: 1.5em;
}

nav{
	padding: 1em;
	margin-top: 18px;
	margin-left: 8px;
}

#gi>ul>li {
padding: 0.5em;
}

/* cards */
.card, .media {
    background: rgb(24, 24, 26);
}

.card {
    text-align: center
}

.card-title {
    color: #9b4dca
}
.btn-touch {
    height: 50px;
    display: inline-block;
    margin: 8px;
}
</style>