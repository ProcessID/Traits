<?php
   namespace processid\traits;
   
   trait Hydrate {
      
      protected function hydrate(array $donnees) {
         foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (is_callable(array($this, $method))) {
               $this->$method($value);
            }
         }
      }
      
   }
?>
