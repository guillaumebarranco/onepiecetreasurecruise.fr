 <?php

 class Index{
 	private $id;
 	private $nom;
 	private $capacite;
 	private $obtention;
 	private $image;
 	private $telechargement;
 	private $lien;
 	private $target;

 	function __construct($id="default", $nom="default", $capacite="default", $obtention="default", $image="default", $telechargement="default", $lien="default", $target="default"){
 		$this->id=$id;
 		$this->nom=$nom;
 		$this->capacite=$capacite;
 		$this->obtention=$obtention;
 		$this->image=$image;
 		$this->telechargement=$telechargement;
 		$this->lien=$lien;
 		$this->target=$target;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getNom(){
 		return $this->nom;
 	}

 	public function getCapacite(){
 		return $this->capacite;
 	}

 	public function getObtention(){
 		return $this->obtention;
 	}

 	public function getTelechargement(){
 		return $this->telechargement;
 	}

 	public function getImage(){
 		return $this->image;
 	}

 	public function getLien(){
 		return $this->lien;
 	}

 	public function getTarget(){
 		return $this->target;
 	}

	public static function getAllPersonnage($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='histoire'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$personnage = $dsn->fetchAll();
		return $personnage;
	}

	public static function getAllForet($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='foret'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$foret = $dsn->fetchAll();
		return $foret;
	}

	public static function getAllMission($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='mission'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$mission = $dsn->fetchAll();
		return $mission;
	}

	public static function getAllEvenement($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='evenement'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$evenement = $dsn->fetchAll();
		return $evenement;
	}

	public static function getAllRayleigh($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='rayleigh'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$rayleigh = $dsn->fetchAll();
		return $rayleigh;
	}

	public static function getAllDeblocable($pdo){
		$result = "SELECT id, nom, image, capacite, obtention, telechargement, lien, target FROM personnage WHERE obtention='deblocable'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$deblocable = $dsn->fetchAll();
		return $deblocable;
	}
}