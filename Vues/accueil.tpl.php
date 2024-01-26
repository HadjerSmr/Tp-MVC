<div class="container mt-3 ">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
   
  <?php foreach($data ["diapositives"] as $key => $value) :?>
            <div class="carousel-item <?= $key === 0 ? "active" : "" ?>">
                <img src="<?= $value ?>" alt="" class="d-block w-100">

            </div>

        <?php endforeach ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<h1 class="mt-3 mb-3"><?= $data["h1"] ?></h1>


<div class="row">

    
 
  <?php foreach($data ["cards"] as $key => $value ):?>
    <div class="col-6 col-md-3 mt-5">
      <div class="card" >
        <img src="<?= $value["img"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class=""><?= $value["h5"]?></h5>
          <p class="card-text"><?= $value["p"]?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
    
</div>
 
</div>



