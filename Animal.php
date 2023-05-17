<?php

class Animal
{
    public $nama;
    public $jenis;

    function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    function infoAnimal()
    {
        return " Hewan ini adalah " . $this->nama . "\njenis " . $this->jenis . " . ";   
    }
}

$animal1 = new Animal("Harimau","Karnivora");
echo $animal1->infoAnimal();

echo '<br>';

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function infoCat() {
        return parent::infoAnimal() . "\nKucing adalah hewan yang suka bermain dan bersih.";
    }
}

// objek dari kelas kucing
$kucing = new Cat("Kitty");
echo $kucing->infoCat() . "\n";

echo '<br>';

class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Anjing");
    }

    public function infoDog() {
        return parent::infoAnimal() . "\nAnjing adalah hewan yang setia dan cerdas.";
    }
}

// objek dari kelas anjing
$kucing = new Dog("Buddy");
echo $kucing->InfoDog() . "\n";