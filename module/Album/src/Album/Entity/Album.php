<?php
namespace Album\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
 class album
 {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
     public $id;
     /** @ORM\Column(type="string") */
     public $artist;
     /** @ORM\Column(type="string") */
     public $title;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
         $this->title  = (!empty($data['title'])) ? $data['title'] : null;
     }
     
     public function getId() {
         return $this->id;
         
     }
     public function setTitle($data) {
        $this->title = $data;
         
     }
     public function setArtist($data) {
        $this->artist = $data;
         
     }
 }