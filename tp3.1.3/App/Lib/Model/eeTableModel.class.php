<?php
	class eeTableModel extends Model{
		private $eeid;
        public function setEeid($eeid){
                $this->eeid=$eeid;
            }
		public function getCommlist($commparentid=0,&$result=array()){
			//$eeid=2;
			//$where=array("commparentid = '".$commparentid."'");
			//echo $this->eeid;
			$where=array("eb_comm.commparentid"=>$commparentid,"eb_comm.eeid"=>$this->eeid);
			//$where=array("commparentid"=>$commparentid);
			$arr = M('comm')->field('eb_comm.commid,eb_ee.eetitle as eetitle,eb_user.username as username,eb_user.userid as userid,eb_comm.commcont,eb_comm.commtime')->join('eb_ee ON eb_comm.eeid=eb_ee.eeid' )->join('eb_user ON eb_comm.userid=eb_user.userid' )->where($where)->order("commtime desc")->select();  
			//$where=array("commparentid = '".$commparentid."'"); 
			//$arr=M('comm')->field('eb_comm.commid,eb_ee.eetitle as eetitle,eb_user.username as username,eb_comm.commcont,eb_comm.commtime')->join('eb_ee ON eb_comm.eeid=eb_ee.eeid' )->join('eb_user ON eb_comm.userid=eb_user.userid' )->where($where)->order('eb_ee.eetime desc')->select();

			if(empty($arr)){
				return array();
			}
			foreach($arr as $cm){
				$thisArr=&$result[];
				$cm['children']=$this->getCommlist($cm['commid'],$thisArr);
				$thisArr=$cm;
			}
			return $result;
	}
}

?>
