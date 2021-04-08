 <?php

 class Vote{
 	private $id;
 	private $vote;
 	private $ip;

 	function __construct($id="default", $vote="default", $ip="default"){
 		$this->id=$id;
 		$this->vote=$vote;
 		$this->ip=$ip;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getVote(){
 		return $this->vote;
 	}

 	public function getIP(){
 		return $this->ip;
 	}

 	public static function nouveaute($dsn,$vote,$ip){
		$query="INSERT INTO nouveaute2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function moment($dsn,$vote,$ip){
		$query="INSERT INTO moment2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function sugo($dsn,$vote,$ip){
		$query="INSERT INTO sugo2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function attente($dsn,$vote,$ip){
		$query="INSERT INTO attente2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function artwork($dsn,$vote,$ip){
		$query="INSERT INTO artwork2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function artworkf($dsn,$vote,$ip){
		$query="INSERT INTO artworkf2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function raid($dsn,$vote,$ip){
		$query="INSERT INTO raid2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function colisee($dsn,$vote,$ip){
		$query="INSERT INTO colisee2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function evenement($dsn,$vote,$ip){
		$query="INSERT INTO evenement2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function tm($dsn,$vote,$ip){
		$query="INSERT INTO tm2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function kizuna($dsn,$vote,$ip){
		$query="INSERT INTO kizuna2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function pf($dsn,$vote,$ip){
		$query="INSERT INTO pf2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function rr($dsn,$vote,$ip){
		$query="INSERT INTO rr2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function supevo($dsn,$vote,$ip){
		$query="INSERT INTO supevo2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function legende($dsn,$vote,$ip){
		$query="INSERT INTO legende2 (id, vote, ip) VALUES (NULL, '".addslashes($vote)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

}