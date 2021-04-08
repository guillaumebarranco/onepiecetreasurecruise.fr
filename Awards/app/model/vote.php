 <?php

 class Vote{
 	private $id;
 	private $pseudo;
 	private $vote;

 	function __construct($id="default", $pseudo="default", $vote="default"){
 		$this->id=$id;
 		$this->pseudo=$pseudo;
 		$this->vote=$vote;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getPseudo(){
 		return $this->pseudo;
 	}

 	public function getVote(){
 		return $this->vote;
 	}

	public static function legende($dsn,$pseudo,$vote){
		$query="INSERT INTO legende (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function supevo($dsn,$pseudo,$vote){
		$query="INSERT INTO supevo (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function lot($dsn,$pseudo,$vote){
		$query="INSERT INTO lot (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function gratuit($dsn,$pseudo,$vote){
		$query="INSERT INTO gratuit (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function sugo($dsn,$pseudo,$vote){
		$query="INSERT INTO sugo (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function difficile($dsn,$pseudo,$vote){
		$query="INSERT INTO difficile (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function moment($dsn,$pseudo,$vote){
		$query="INSERT INTO moment (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

 	public static function nouveaute($dsn,$pseudo,$vote){
		$query="INSERT INTO nouveaute (id, pseudo, vote) VALUES (NULL, '$pseudo', '$vote')";
		$pdo = $dsn->query($query);
 	}

}