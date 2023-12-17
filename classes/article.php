<?php
include "connexion.php";
class Article extends Connexion
{
    private $title;
    private $contenu;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    function readAll(){
        //select all data
        $query = "SELECT `id`, `title`, `contenu`, `date_creation`, `id_writer` FROM `article`";  
  
        $stmt = $this->connectdb()->prepare( $query );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        
    }

    public function addArticle($titre,$contenu)
    {
        
        $stm = $this->connectdb()->prepare("INSERT INTO article (title,contenu, date_creation) VALUES ('$titre','$contenu',date('y-m-d'))");
        $stm->execute();
    }

    public function deleteArticle($id){
        $stm = $this->connectdb()->prepare("DELETE FROM `article` WHERE `id` = :id");
        $stm->bindParam(':id',$id);
        $stm->execute();
    }

    public function updateArticle($id,$titre,$contenu){
        $stm= $this->connectdb()->prepare("UPDATE `article` SET `title`= :titre,`contenu`= :contenu WHERE  `id` = :id ");
        $stm->bindParam(':id',$id);
        $stm->bindParam(':titre',$titre);
        $stm->bindParam(':contenu',$contenu);
        $stm->execute();
    }

}