<?php
class Client extends Component{
	private $id;
	private $browser;
    public function __construct($updateLog=true){
		parent::__construct("client");
		// recuperation des infos sur le navigateur du client
		$this->browser = $_SERVER['HTTP_USER_AGENT'];
		//log
		if($updateLog){
			$this->Log("new Client ");
			$this->Log("browser :".$this->browser);
		}
    }
	public function getBrowser(){
		$browser =$_SERVER['HTTP_USER_AGENT'];
		return ($browser);
	}
}
?>
