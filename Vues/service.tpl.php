<div class="container">
    <h1 class="text-center mt-3 mb-2"><?= $data["h1"] ?></h1>
    <div class="row">

    <?php foreach($data["srv"] as $key =>$value ):?>
        <div class="col">
            <div class="card text-center">
                <div class="card-header  <?= $key === 2 ? "bg-dark text-white" : "" ?> ">
                <?= $value["titre"] ?>
                </div>
                <div class="card-body ">
                    <h5 class="card-title h2"><?= $value["h5"] ?></h5>
                    <p class="card-text"><?= $value["p"] ?></p>
                    <a href="#" class="btn border-dark col-12 <?= $key === 1 ? "bg-dark text-white" : "" ?>   <?= $key === 2 ? "bg-dark text-white" : "" ?> "><?= $value["a"] ?></a>
                </div>
        
            </div>

        </div>

    <?php endforeach ?>


    
    </div>
</div>