<?php
include_once "header.php"
?>


<main>

<!-- Imagen con el texto -->
<section>
    <div id="section1" class=" d-flex justify-content-end flex-column">
    <h2 class="d-inline-block mb-4 ms-4 col-auto canchasf5f9">    
        Canchas de fútbol 9 y fútbol 5      
    </h2>
    </div>
</section>


<section>
<div class="d-flex mt-5 mb-5">

<!-- Carrusel -->

<div class="centrar col-6 img-fluid">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="imagenes/fotocanchas1.jpg" class="img-fluid d-block w-100" alt="Chicos defendiendo en fútbol 5" width="489" height="600">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="imagenes/fotocanchas2.jpg" class="img-fluid d-block w-100" alt="Jugadores peleando el corner" width="489" height="600">
            </div>
            <div class="carousel-item">
            <img src="imagenes/fotocanchas3.jpg" class="img-fluid d-block w-100" alt="Arco de fútbol 5" width="489" height="600">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>



<!-- Texto al lado del carrusel -->
<div class="col-6 centrar">

    <div>
        <h2 class="canchasf5f9 mb-4">El complejo</h2>
        <div>
            <p class="letratexto mb-4 me-5">Nuestras actividades fomentan el entretenimiento, el deporte en equipo, la diversión y el encuentro entre amigos, motivando a la realización de actividad física en un ambiente de respeto y compañerismo. Contamos con canchas de fútbol 5 y fútbol 9 con una iluminación de excelente calidad. Además, contamos con vestuarios y un bar en donde los jugadores podrán pasar un buen momento con sus amigos después de los partidos.</p>
        </div>
        <div>
            <ul class="iconolista letratexto">
                <li>Canchas de fútbol 5 y fútbol 9</li>
                <li>Vestuarios</li>
                <li>Duchas</li>
                <li>Bar</li>
                <li>Salón</li>
            </ul>
        </div>
    </div>
</div>
</div>


</section>

</main>
   
<?php
include_once "footer.php"
?>