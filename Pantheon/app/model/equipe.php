 <?php

 class Equipe{
 	private $id;
 	private $image;
 	private $description;
 	private $profilID;

 	function __construct($id="default", $image="default", $description="default", $profilID="default"){
 		$this->id=$id;
 		$this->image=$image;
 		$this->description=$description;
 		$this->profilID=$profilID;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getImage(){
 		return $this->image;
 	}

 	public function getDescription(){
 		return $this->description;
 	}

 	public function getProfilID(){
 		return $this->profilID;
 	}

 	public static function getAllEquipe($pdo){
		$result = "SELECT * FROM equipe";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$equipe = $dsn->fetchAll();
		return $equipe;
	}

	public static function addEquipe($dsn,$image,$description,$profilID){
		$query="INSERT INTO equipe (id, image, description, profilID) VALUES (NULL, '$image', '$description', '$profilID')";
		$pdo = $dsn->query($query);
 	}

 	public static function getEquipeByID($pdo, $id){
 		$result="SELECT equipe.id,equipe.image,equipe.description,equipe.profilID,profil.id FROM equipe,profil WHERE equipe.profilID=profil.id AND profil.id='$id'";
    	$dsn = $pdo->query($result);
    	$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);	
		$equipes=$dsn->fetchAll();
		return $equipes;
 	}

 	public static function deleteEquipe($pdo, $id){
		$result = "DELETE FROM equipe WHERE equipe.id='$id'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$delete = $dsn->fetchAll();
		return $delete;
 	}
}