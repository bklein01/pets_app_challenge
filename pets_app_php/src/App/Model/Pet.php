<?php
namespace App\Model;

abstract class Pet {
    
    protected $name;
    protected $age;
    protected $sound;
    protected $defaultSound;
    protected $nameHistory = array();
    protected $speakCount = 0;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->nameHistory[] = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        $this->nameHistory[] = $name;
    }

    public function setSound($sound) {
        $this->sound = $sound;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAverageNameSize() {
        $totalSize = 0;
        $nameCount = sizeof($this->nameHistory);
        if ($nameCount > 0) {
            foreach ($this->nameHistory as $name) {
                $nameSize = strlen($name);     
                $totalSize += $nameSize;   
            }
            return $totalSize / $nameCount;
        } else {
            return 0;
        }
    }

    public function speak() {
        $this->speakCount++;
        if ($this->speakCount % 2) {
            $this->age += 1;
        }
        if ($this->sound != '') {
            return $this->sound;
        } else {
            return $this->defaultSound;
        }
    }

}