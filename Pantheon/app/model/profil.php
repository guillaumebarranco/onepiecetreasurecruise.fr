 <?php

 class Profil{
 	private $id;
 	private $pseudo;
 	private $avatar;
 	private $lvl;
 	private $jour;
 	private $identifiant;
 	private $effectif;
 	private $effectif6;
 	private $login;
 	private $mdp;

 	function __construct($id="default", $pseudo="default", $avatar="default", $lvl="default", $jour="default", $identifiant="default", $effectif="default", $effectif6="default", $login="default", $mdp="default"){
 		$this->id=$id;
 		$this->pseudo=$pseudo;
 		$this->avatar=$avatar;
 		$this->lvl=$lvl;
 		$this->jour=$jour;
 		$this->identifiant=$identifiant;
 		$this->effectif=$effectif;
 		$this->effectif6=$effectif6;
 		$this->login=$login;
 		$this->mdp=$mdp;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getPseudo(){
 		return $this->pseudo;
 	}

 	public function getAvatar(){
 		return $this->avatar;
 	}

 	public function getLVL(){
 		return $this->lvl;
 	}

 	public function getJour(){
 		return $this->jour;
 	}

 	public function getIdentifiant(){
 		return $this->identifiant;
 	}

 	public function getEffectif(){
 		return $this->effectif;
 	}

 	public function getEffectif6(){
 		return $this->effectif6;
 	}

 	public function getLogin(){
 		return $this->login;
 	}

 	public function getMdp(){
 		return $this->mdp;
 	}

 	public static function getAllProfil($pdo){
		$result = "SELECT * FROM profil";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$profil = $dsn->fetchAll();
		return $profil;
	}

	public static function inscription($dsn,$pseudo,$avatar,$lvl,$jour,$identifiant,$effectif,$effectif6,$login,$mdp){
		$query="INSERT INTO profil (id, pseudo, avatar, lvl, jour, identifiant, effectif, effectif6, login, mdp) VALUES (NULL, '$pseudo', '$avatar', '$lvl', '$jour', '$identifiant', '$effectif', '$effectif6', '$login', '$mdp')";
		$pdo = $dsn->query($query);
 	}

 	public static function getProfilByID($dsn, $loginOK){
 		$result="SELECT * FROM profil WHERE login='$loginOK'";
    	$pdo = $dsn->query($result);
    	$pdo->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);	
		$profils=$pdo->fetch();
		return $profils;
 	}

 	public static function getAllDetails($pdo, $id){
		$result = "SELECT * FROM profil WHERE profil.id='$id'";
		$dsn = $pdo->query($result);	
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$details=$dsn->fetchAll();
		return $details;
	}

	public static function editDetails($dsn,$pseudo,$avatar,$lvl,$jour,$identifiant,$effectif,$effectif6,$login,$mdp,$id){
 		$result="UPDATE profil SET pseudo='$pseudo', avatar='$avatar', lvl='$lvl', jour='$jour', identifiant='$identifiant', effectif='$effectif', effectif6='$effectif6', login='$login', mdp='$mdp' WHERE id='$id'";
		$pdo = $dsn->query($result);
 	}
}