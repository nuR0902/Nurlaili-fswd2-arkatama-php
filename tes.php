<?php
class Animal {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini adalah " . $this->nama . "\njenis " . $this->jenis;
    }
}

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Kucing.");
    }

    public function getInfo() {
        return parent::getInfo() . "\nKucing adalah hewan yang suka bermain dan bersih.";
    }
}

class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "Anjing.");
    }

    public function getInfo() {
        return parent::getInfo() . "\nAnjing adalah hewan yang setia dan cerdas";
    }
}

// Membuat objek Animal
$animal = new Animal("Harimau", "Karnivora.");
echo $animal->getInfo();
echo '<br>';

// Membuat objek Cat
$cat = new Cat("Kitty");
echo $cat->getInfo();
echo '<br>';

// Membuat objek Dog
$dog = new Dog("Buddy");
echo $dog->getInfo();
