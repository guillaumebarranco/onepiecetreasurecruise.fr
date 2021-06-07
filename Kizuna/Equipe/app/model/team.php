 <?php

 class Team{
 	private $id;
 	private $nomequipe;
 	private $nom;
 	private $invitation;
 	private $commentaire;
 	private $membre;
 	private $contact;
 	private $mdp;

 	function __construct($id="default", $nomequipe="default", $nom="default", $invitation="default", $commentaire="default", $membre="default", $contact="default", $mdp="default"){
 		$this->id=$id;
 		$this->nomequipe=$nomequipe;
 		$this->nom=$nom;
 		$this->invitation=$invitation;
 		$this->commentaire=$commentaire;
 		$this->membre=$membre;
 		$this->contact=$contact;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getNomEquipe(){
 		return $this->nomequipe;
 	}

 	public function getNom(){
 		return $this->nom;
 	}

 	public function getInvitation(){
 		return $this->invitation;
 	}

 	public function getCommentaire(){
 		return $this->commentaire;
 	}

 	public function getMembre(){
 		return $this->membre;
 	}

 	public function getContact(){
 		return $this->contact;
 	}

 	public function getMdp(){
 		return $this->mdp;
 	}

	public static function getAllTeam($pdo){
		$result = "SELECT * FROM team";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$team = $dsn->fetchAll();
		return $team;
	}

	public static function addTeam($dsn,$nomequipe,$nom,$invitation,$commentaire,$membre,$contact,$mdp){
		$query="INSERT INTO team (id, nomequipe, nom, invitation, commentaire, membre, contact, mdp) VALUES (NULL, '".addslashes($nomequipe)."', '".addslashes($nom)."', '".addslashes($invitation)."', '".addslashes($commentaire)."', '".addslashes($membre)."', '".addslashes($contact)."', '".addslashes($mdp)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function getTeamByID($dsn, $loginOK){
 		$result="SELECT * FROM team WHERE nomequipe='".addslashes($loginOK)."'";
    	$pdo = $dsn->query($result);
    	$pdo->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);	
		$teams=$pdo->fetch();
		return $teams;
 	}

 	public static function editTeam($dsn,$nomequipe,$nom,$invitation,$commentaire,$membre,$contact,$mdp,$id){
 		$result="UPDATE team SET nomequipe='".addslashes($nomequipe)."', nom='".addslashes($nom)."', invitation='".addslashes($invitation)."', commentaire='".addslashes($commentaire)."', membre='".addslashes($membre)."', contact='".addslashes($contact)."', mdp='".addslashes($mdp)."' WHERE id='$id'";
		$pdo = $dsn->query($result);
 	}

}