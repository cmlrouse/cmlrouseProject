<?php
class movieTableModel extends Model{

	private $evid;
	public function setEvid($evid){
		$this->evid=$evid;
	}
	public function getCommlist($evcommparentid=0,&$result=array()){
		$where=array("eb_evcomm.evcommparentid"=>$evcommparentid,"eb_evcomm.evid"=>$this->evid);
		$arr = M('evcomm')->field('eb_evcomm.evcommid,eb_ev.evtitle as evtitle,eb_user.username as username,eb_user.userid as userid,eb_evcomm.evcommcont,eb_evcomm.evcommtime')->join('eb_ev ON eb_evcomm.evid=eb_ev.evid' )->join('eb_user ON eb_evcomm.userid=eb_user.userid' )->where($where)->order("evcommtime desc")->select();  
		if(empty($arr)){
			return array();
		}	 
		foreach($arr as $cm){
			$thisArr=&$result[];
			$cm['children']=$this->getCommlist($cm['evcommid'],$thisArr);
			$thisArr=$cm;
		}
		return $result;
}
}
?>
