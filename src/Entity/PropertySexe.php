<?php

namespace App\Entity;

class PropertySexe
{

   private $genre;

   
   public function getGenre(): ?string
   {
       return $this->genre;
   }

   public function setGenre(string $genre): self
   {
       $this->genre = $genre ;

       return $this;
   }
}