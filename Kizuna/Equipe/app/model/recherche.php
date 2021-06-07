 <?php

 class Recherche{
 	private $id;
 	private $nom;
 	private $gameid;
 	private $commentaire;
 	private $contact;

 	function __construct($id="default", $nom="default", $gameid="default", $commentaire="default", $contact="default"){
 		$this->id=$id;
 		$this->nom=$nom;
 		$this->gameid=$gameid;
 		$this->commentaire=$commentaire;
 		$this->contact=$contact;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getNom(){
 		return $this->nom;
 	}

 	public function getGameID(){
 		return $this->gameid;
 	}

 	public function getCommentaire(){
 		return $this->commentaire;
 	}

 	public function getContact(){
 		return $this->contact;
 	}

	public static function getAllRecherche($pdo){
		$result = "SELECT * FROM recherche";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$recherche = $dsn->fetchAll();
		return $recherche;
	}

	public static function addRecherche($dsn,$nom,$gameid,$commentaire,$contact){
		$query="INSERT INTO recherche (id, nom, gameid, commentaire, contact) VALUES (NULL, '".addslashes($nom)."', '".addslashes($gameid)."', '".addslashes($commentaire)."', '".addslashes($contact)."')";
		$pdo = $dsn->query($query);
 	}

}