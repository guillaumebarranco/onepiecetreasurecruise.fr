 <?php

 class Vote{
 	private $id;
 	private $pseudo;
 	private $vote;
 	private $ip;

 	function __construct($id="default", $pseudo="default", $vote="default", $ip="default"){
 		$this->id=$id;
 		$this->pseudo=$pseudo;
 		$this->vote=$vote;
 		$this->ip=$ip;
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

 	public function getIP(){
 		return $this->ip;
 	}

	public static function index($dsn,$pseudo,$vote,$ip){
		$query="INSERT INTO vote (id, pseudo, vote, ip) VALUES (NULL, '".addslashes($pseudo)."', '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

}