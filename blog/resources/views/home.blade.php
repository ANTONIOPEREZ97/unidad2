@extends('layouts.master')
@section('title', 'Home')

@section ('welcome')
<!--Section: Jumbotron-->
<section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background3.jpg);">

    <!-- Content -->
    <div class="card-body text-white text-center py-5 px-5 my-5">

      <h1 class="mb-4">
        <strong> "El mejor post de publicaciones "</strong>
      </h1>
      
      <p class="mb-4">
        <strong>Te damos la bienvenida a nuestro blog. En este espacio nuestros usuarios comparten  todos aquellos conocimientos y pensamientos, ya sean personales o técnicos. Esperamos que disfrutes de nuestras publicaciones y compartas las tuyas,
        <br>
        ¡¡QUE ESPERAS PARA SUSCRIBIRTE!!.</strong>
      </p>
      <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Registrate <i class="fas fa-graduation-cap ml-2"></i>
      </a>

    </div>
    <!-- Content -->
  </section>
@endsection

<hr class="my-5">
<!--Section: Magazine v.1-->
@section('wow')
<!--Section heading-->
<h2 class="h1 text-center my-5 font-weight-bold">Secciones disponibles</h2>

<!--Grid row-->
<div class="row text-left">

  <!--Grid column-->
  <div class="col-lg-6 col-md-12">

    <!--Image-->
    <div class="view overlay rounded z-depth-1-half mb-3">
      <img src="img/secc-viaje.jpg" class="img-fluid" alt="Sample post image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Excerpt-->
    <div class="news-data">
      <a href="" class="light-blue-text">
        <h6>
          <i class="fas fa-plane"></i>
          <strong> Viajes</strong>
        </h6>
      </a>
      <p>
        <strong>
          <i class="far fa-clock"></i> 20/03/2020</strong>
      </p>
    </div>
    <h3>
      <a>
        <strong>Viajes</strong>
      </a>
    </h3>
    <p> La confianza en uno mismo se obtiene, sobretodo, si se viaja a la otra punta del mundo. Conocer culturas muy diferentes a la propia nos ayuda a reforzar la confianza en uno mismo. Si se es tímido, viajar puede ayudar mucho.
    </p>

    <!--/Featured news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/photo8.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>19/03/2020</strong>
        </p>
        <a>Lorem ipsum dolor sit amet
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/54.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>18/02/2020</strong>
        </p>
        <a>Soluta nobis est eligendi
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>18/02/2020</strong>
        </p>
        <a>Voluptatem accusantium doloremque
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-lg-6 col-md-12">

    <!--Image-->
    <div class="view overlay rounded z-depth-1-half mb-3">
      <img src="img/secc-tecnologia.jpg" class="img-fluid" alt="Sample post image" class="img-tecnologia">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Excerpt-->
    <div class="news-data">
      <a href="" class="light-blue-text">
        <h6>
          <i class="fas fa-plane"></i>
          <strong> Tecnología</strong>
        </h6>
      </a>
      <p>
        <strong>
          <i class="far fa-clock"></i> 20/03/2020</strong>
      </p>
    </div>
    <h3>
      <a>
        <strong>Tencnología</strong>
      </a>
    </h3>
    <p> Actualmente estamos viviendo una gran revolución de la información sin darnos cuenta y sin conocer totalmente la tecnología que nos rodea. Nuevos cambios hacen que tengamos que actualizarnos constantemente en conocimientos relacionados con las nuevas tecnologías.
    </p>

    <!--/Featured news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/photo11.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>19/03/2018</strong>
        </p>
        <a>Lorem ipsum dolor sit amet
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>18/08/2018</strong>
        </p>
        <a>Soluta nobis est eligendi
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

    <hr>

    <!--Small news-->
    <div class="row">
      <div class="col-md-3">

        <!--Image-->
        <div class="view overlay rounded z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/images/44.jpg" class="img-fluid" alt="Minor sample post image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>

      <!--Excerpt-->
      <div class="col-md-9">
        <p class="dark-grey-text">
          <strong>17/08/2018</strong>
        </p>
        <a>Voluptatem accusantium doloremque
          <i class="fas fa-angle-right float-right"></i>
        </a>
      </div>

    </div>
    <!--/Small news-->

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->   
@endsection
<!--/Section: Magazine v.1-->