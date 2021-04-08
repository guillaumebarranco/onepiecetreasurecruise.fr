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

	public static function index($dsn,$pseudo,$vote){
		$query="INSERT INTO vote (id, pseudo, vote) VALUES (NULL, '".addslashes($pseudo)."', '".addslashes($vote)."')";
		$pdo = $dsn->query($query);
 	}

}