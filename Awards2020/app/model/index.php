 <?php

 class Index{
 	private $id;
 	private $pseudo;
 	private $nouveaute;
 	private $moment;
 	private $difficile;
 	private $sugo;
 	private $gratuit;
 	private $lot;
 	private $supevo;
 	private $legende;

 	function __construct($id="default", $pseudo="default", $nouveaute="default", $moment="default", $difficile="default", $sugo="default", $gratuit="default", $lot="default", $supevo="default", $legende="default"){
 		$this->id=$id;
 		$this->pseudo=$pseudo;
 		$this->nouveaute=$nouveaute;
 		$this->moment=$moment;
 		$this->difficile=$difficile;
 		$this->sugo=$sugo;
 		$this->gratuit=$gratuit;
 		$this->lot=$lot;
 		$this->supevo=$supevo;
 		$this->legende=$legende;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getPseudo(){
 		return $this->pseudo;
 	}

 	public function getNouveaute(){
 		return $this->nouveaute;
 	}

 	public function getMoment(){
 		return $this->moment;
 	}

 	public function getDifficile(){
 		return $this->difficile;
 	}

 	public function getSugo(){
 		return $this->sugo;
 	}

 	public function getGratuit(){
 		return $this->gratuit;
 	}

 	public function geLot(){
 		return $this->lot;
 	}

 	public function getSupevo(){
 		return $this->supevo;
 	}

 	public function getLegende(){
 		return $this->legende;
 	}

	public static function envoi($dsn,$pseudo,$nouveaute,$moment,$difficile,$sugo,$gratuit,$lot,$supevo,$legende){
		$query="INSERT INTO awards (id, pseudo, nouveaute, moment, difficile, sugo, gratuit, lot, supevo, legende) VALUES (NULL, '$pseudo', '$nouveaute', '$moment', '$difficile', '$sugo', '$gratuit', '$lot', '$supevo', '$legende')";
		$pdo = $dsn->query($query);
 	}

}