<?php

namespace App\Entity;

class PropertyPathologie
{

   private $nompathologie;

   
   public function getNompathologie(): ?string
   {
       return $this->nompathologie;
   }

   public function setNompathologie(string $nompathologie): self
   {
       $this->nompathologie = $nompathologie ;

       return $this;
   }
}