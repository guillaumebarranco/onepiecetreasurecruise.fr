 <?php

 class Video{
 	private $id;
 	private $lien;
 	private $description;
 	private $profilID;

 	function __construct($id="default", $lien="default", $description="default", $profilID="default"){
 		$this->id=$id;
 		$this->lien=$lien;
 		$this->description=$description;
 		$this->profilID=$profilID;
 	}

 	public function getID(){
 		return $this->id;
 	}

 	public function getLien(){
 		return $this->lien;
 	}

 	public function getDescription(){
 		return $this->description;
 	}

 	public function getProfilID(){
 		return $this->profilID;
 	}

 	public static function getAllVideo($pdo){
		$result = "SELECT * FROM video";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$video = $dsn->fetchAll();
		return $video;
	}

	public static function addVideo($dsn,$lien,$description,$profilID){
		$query="INSERT INTO video (id, lien, description, profilID) VALUES (NULL, '$lien', '$description', '$profilID')";
		$pdo = $dsn->query($query);
 	}

 	public static function getVideoByID($pdo, $id){
 		$result="SELECT video.id,video.lien,video.description,video.profilID,profil.id FROM video,profil WHERE video.profilID=profil.id AND profil.id='$id'";
    	$dsn = $pdo->query($result);
    	$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);	
		$videos=$dsn->fetchAll();
		return $videos;
 	}

 	public static function deleteVideo($pdo, $id){
		$result = "DELETE FROM video WHERE video.id='$id'";
		$dsn = $pdo->query($result);
		$dsn->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,__CLASS__);
		$delete = $dsn->fetchAll();
		return $delete;
 	}
}