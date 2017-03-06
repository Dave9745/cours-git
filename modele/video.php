<?php

  class Video {
      
      private $link;
      private $Titre;
      private $Categorie;
      private $Description;
      
      public function getId(){
        return $this->id;
      }
      
      public function getTitre(){
          return $this->Titre;
      }
      
      public function setTitre($titre){
          $this->Titre = $titre;
      }
      
      public function getCategorie(){
          return $this->Categorie;
      }
      
      public function setCategorie($categorie){
          $this->Categorie = $categorie;
      }
      
       public function getDescription(){
          return $this->Description;
      }
      
      public function setDescription($description){
          $this->Description = $description;
      }
      
      
  }


?>
