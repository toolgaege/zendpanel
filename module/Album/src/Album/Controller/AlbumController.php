<?php

namespace Album\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AlbumController extends AbstractActionController
 {
     public function indexAction()
     {
         return new ViewModel(array(
             'albums' => $this->getAlbumTable()->fetchAll(),
         ));
         
         
     }

     public function addAction()
     {
         $objectManager = $this
                 ->getServiceLocator()
                 ->get('Doctrine\ORM\EntityManager');
         $album = new \Album\Entity\Album();
         $album->setTitle("Tolga EGE");
         $album->setArtist("Tolga EGE");
         $objectManager->persist($album);
         $objectManager->flush();
         
         die(var_dump($album->getId()));
     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }
     
     public function getAlbumTable()
     {
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Entity\AlbumTable');
         }
         return $this->albumTable;
     }
 }