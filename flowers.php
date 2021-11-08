<?php 
class Flowers {

    private $flower_array;

    public function __construct(){
        $this->flower_array = array(
            array(
                "category" => "Shrubs",
                "price" => 15.99,
                "instructions" => "Large double. Good grower, heavy bloomer. Early to mid-season, acid loving plants. Plant in moist well drained soil with pH of 4.0-5.5.",
                "photo" => "california_snow.jpg",
                "name" => "Azalea",
                "productId" => 1
            ),
            array(
                "category" => "Shrubs",
                "price" => 33.99,
                "instructions" => "Beautiful large royal purple flowers adorn attractive satiny green leaves that turn orange\\/red in cold weather. Grows to up to 18 feet, or prune annually to shorten.",
                "photo" => "princess_flower.jpg",
                "name" => "Tibouchina Semidecandra",
                "productId" => 2
            ),
            array(
                "category" => "Shrubs",
                "price" => 12.99,
                "instructions" => "Blooms in summer, 20-35 inches high. Fertilize regularly for best results. Full sun, drought tolerant.",
                "photo" => "haight_ashbury.jpg",
                "name" => "Hibiscus",
                "productId" => 3
            ),
            array(
                "category" => "Shrubs",
                "price" => 5.99,
                "instructions" => "Quick-growing, herbaceous, shrub reaching up to 30 inches in height, forming a rounded, dense bush.",
                "photo" => "mona_lavender.jpg",
                "name" => "Plectranthus",
                "productId" => 4
            ),
            array(
                "category" => "Shrubs",
                "price" => 15.99,
                "instructions" => "Slow growing, upright to spreading shrub. Oval, glossy, leaves and profuse winter to spring blooming flowers.",
                "photo" => "camellia.jpg",
                "name" => "Camellia Japonica",
                "productId" => 5
            ),
            array(
                "category" => "Shrubs",
                "price" => 10.99,
                "instructions" => "Thorny woody vine scrambles over other plants with their hooked thorns. Pest free.",
                "photo" => "bougainvillea.jpg",
                "name" => "Bougainvillea Spectabilis",
                "productId" => 6
            )
        );
    }

    public function getFlowers(){
        return $this->flower_array;
    }

    public function getFlower($id){
        $flowersToReturn = array_filter($this->flower_array,
            function ($flower) use($id) {
                return $flower["productId"] == $id;
            }
        );

        return array_pop($flowersToReturn);
    }
}

?>