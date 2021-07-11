<?php

namespace App\Entity;

class PropertyAge
{

   private $age;

   
   public function getAge(): ?int
   {
       return $this->age;
   }

   public function setAge(int $age): self
   {
       $this->age = $age ;

       return $this;
   }
}