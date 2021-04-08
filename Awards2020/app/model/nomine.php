 <?php

 class Nomine{
 	private $id;
 	private $nomine1;
 	private $nomine2;
 	private $ip;

 	function __construct($id="default", $nomine1="default", $nomine2="default", $ip="default"){
 		$this->id=$id;
 		$this->nomine1=$nomine1;
 		$this->nomine2=$nomine2;
 		$this->ip=$ip;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getNomine1(){
 		return $this->nomine1;
 	}

 	public function getNomine2(){
 		return $this->nomine2;
 	}

 	public function getIP(){
 		return $this->ip;
 	}

 	public static function nouveaute($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO nouveaute1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function moment($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO moment1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function sugo($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO sugo1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function attente($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO attente1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function artwork($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO artwork1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function artworkf($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO artworkf1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function raid($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO raid1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function colisee($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO colisee1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function evenement($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO evenement1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function tm($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO tm1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function kizuna($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO kizuna1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function pf($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO pf1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function rr($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO rr1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

 	public static function supevo($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO supevo1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

	public static function legende($dsn,$nomine1,$nomine2,$ip){
		$query="INSERT INTO legende1 (id, nomine1, nomine2, ip) VALUES (NULL, '".addslashes($nomine1)."', '".addslashes($nomine2)."', '".addslashes($ip)."')";
		$pdo = $dsn->query($query);
 	}

}