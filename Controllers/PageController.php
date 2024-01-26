<?php 

class PageController extends AbstractController{
    
    public function accueil() :void {
        $data = [];
        $data["title"] = "Accueil";
        $data["h1"] = "Nos derniers articles :"; 
        $images = [];
        for($i = 1 ; $i < 4 ; $i++){
            $images[] = "https://source.unsplash.com/random/1500x300?v$i";
        }

        $data["diapositives"] = $images;

        $data["cards"] = [
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v1",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v2",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v3",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v4",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
        
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v6",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v6",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v7",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ],
            [
                "img"=>"https://source.unsplash.com/random/1500x300?v8",
                "h5"=>"card title",
                "p"=>"Some quick example text to build on the card title and make up the bulk of the card's content."

            ]

        ];
        $this->render("accueil" , $data);
    }
    public function service() :void{
        $data = [];
        $data["h1"]="Nos Services";
        $data["srv"]=[
            [
               "a"=>"Sign up for free",
                "h5"=>"$0<small class='text-secondary fw-normal'>/mo </small>",
                "p"=>"Some quick example <br> text to build on <br> the card title and make up the <br> bulk of the card's content.",
                "titre"=>"Free"
            ],

            [
                "a"=>"Get started",
                 "h5"=>"$15<small class='text-secondary fw-normal'>/mo </small>",
                 "p"=>"Some quick example <br> text to build on <br> the card title and make up the <br> bulk of the card's content.",
                 "titre"=>"Pro"
             ],

             [
                "a"=>"Contact us",
                 "h5"=>"$29<small class='text-secondary fw-normal'>/mo </small>",
                 "p"=>"Some quick example <br> text to build on <br> the card title and make up the <br> bulk of the card's content.",
                 "titre"=>"Entreprise"
             ]

        ];
        $this->render("service", $data) ;
    }
    public function connexion() :void{
       $data = [];
       $data["h1"]="Accéder à l'espace de gestion";

       $this->render("connexion", $data);
       
    }
 
}