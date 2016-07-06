<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends Action {
	public function arrangeIndex(){
	header("Content-type:text/html;charset=utf-8");
         $this->userline=M('user')->where(array('userid'=>I('userid')))->find();
		$this->display();
	}
	public function commReply(){
	header("Content-type:text/html;charset=utf-8");
	$userid=I('userid');
        $this->userline=M('user')->where(array('userid'=>I('userid')))->find();
		if(IS_POST){
			$type=I('optionsRadios');
			$title=I('title');
			$cont=I('content');
			$time=date("Y-m-d H:i:s",time());
			if($type=="notice"){
				$data=array('notitle'=>$title,'nocont'=>$cont,'notime'=>$time);
				if(M('notice')->add($data)){
					$this->success("发布公告成功～～");
				} else{
					$this->error("发布公告失败~~请重试");
				}
			} else{
				if($type=="movie"){
					$data=array('evtitle'=>$title,'evcont'=>$cont,'evtime'=>$time,'userid'=>1);	
               // var_dump($data);
                //die();
            if(M('ev')->add($data)){
						$this->success("发布影视交流帖子成功～～");
					} else{
						$this->error("发布影视交流帖子失败~~请重试");
					}
				} else{
					$data=array('eetitle'=>$title,'eecont'=>$cont,'eetime'=>$time,'userid'=>1);
					if(M('ee')->add($data)){
						$this->success("发布每日英语帖子成功～～");
					} else{
						$this->error("发布每日英语帖子失败~~请重试");
					}
				}
			}
		}
		
		
		
	}

        public function arrangemovie(){
		header("Content-type:text/html;charset=utf-8");
            $this->userline=M('user')->where(array('userid'=>I('userid')))->find();
        header("Content-type:text/html;charset=utf-8");
	//$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
        $movie=M('ev');
        //用来展示影视交流的列表,现实ID 标题 时间 作者，按照时间倒序排序显示
        $this->mvlist=$movie->table('eb_ev ev,eb_user user')->field('ev.evid,ev.evtitle,ev.evtime,user.username as username')->order('ev.evtime desc')->where('ev.userid=user.userid')->select();
        
        $this->display();
}
//点击每一条影视交流，进去之后可以看到该条影视交流的帖子的内容，及其评论该帖子的其他回复
	public function amovieContent(){
header("Content-type:text/html;charset=utf-8");
		$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
	   $moviehand=M('ev');
	$evid=I('evid');
      // $evid=1;
        $where=array('eb_ev.evid'=>$evid);
        //根据传过来的ID号来查询出该影视交流帖子的内容
       $this->movieline=$moviehand->field('eb_ev.evid,eb_ev.evtitle,eb_ev.evcont,eb_ev.evtime,eb_user.username as username')->join('eb_user ON eb_ev.userid=eb_user.userid' )->where($where)->find();
        $evcomm=M('evcomm');
     //根据传过来的ID号来查询出该影视帖子的所有评论帖子
     	$evcommlist= new movieTableModel('movieTableModel');
        $evcommlist->setEvid($evid);
        echo $evcommlist->evid;
        //echo $commlist->eeid;
        $this->data=$evcommlist-> getCommlist();
      //$this->evcommlist = $evcomm->field('eb_evcomm.evcommid,eb_ev.evtitle as evtitle,eb_user.username as username,eb_evcomm.evcommcont,eb_evcomm.evcommtime')->join('eb_ev ON eb_evcomm.evid=eb_ev.evid' )->join('eb_user ON eb_evcomm.userid=eb_user.userid' )->where($where)->order('eb_evcomm.evcommtime desc')->select();
    // var_dump($this->movieline);
        //var_dump($this->data);
	$this->display();	
}
  //展示noticeCont.html通知公告模板，
		public function arrangenotice(){
			header("Content-type:text/html;charset=utf-8");
			$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
			$no= M('notice');
            //用来展示通知公告列表，ID 标题 时间 
			$this->ntlist=$no->select();
			//var_dump($this->ntlist);
            $this->display();
    }
    //点击每一条通知公告，进去显示详细内容
	public function anoticeContent(){
	header("Content-type:text/html;charset=utf-8");
		$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
		$no= M('notice');
		$noid=I('noid');
		//var_dump($noid);
       // $noid=1;
        $where=array('noid'=>$noid);
		$this->ntline=$no->where($where)->find();
       //var_dump($this->nh);
	//$this->assign('ntline',$ntline);	
	$this->display();
}
public function arrangeeveryday(){
		header("Content-type:text/html;charset=utf-8");
		$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
		$e = M('ee');
        $this->eelist=$e->table('eb_ee ee,eb_user user')->field('ee.eeid,ee.eetitle,ee.eetime,user.username as username')->order('ee.eeid desc')->where('ee.userid=user.userid')->select();
	//var_dump($this->ee);
		$this->display();
}

///当点击进入一条每日英语的进去之后，看到该条每日英语帖子的内容，及所有评论过该每日英语帖子的其他回复评论
public function aeverydayContent(){
    header("Content-type:text/html;charset=utf-8");
	$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
            $eehand=M('ee');
            //$eeid=2;
            $eeid=I('eeid');
        $where=array('eb_ee.eeid'=>$eeid);
        //根据传过来的ID号来查询出该条每日英语的内容
       $this->eeline=$eehand->field('eb_ee.eeid,eb_ee.eetitle,eb_ee.eecont,eb_ee.eetime,eb_user.username as username')->join('eb_user ON eb_ee.userid=eb_user.userid' )->where($where)->find();
       // table('eb_comm comm,eb_ee ee,eb_user user')->field('comm.commid,ee.eetitle as eetitle,user.username as username,comm.commcont,comm.commtime')->order('comm.commtime desc')->where('comm.eeid=ee.eeid AND comm.userid=user.userid')->select();
		//$this->eeline=$eehand->where($where)->find();
        $evco=M('comm');//根据每一条每日英语的ID号，得出该条每日英语的所有评论，并且按照时间的顺序排列出来
    
	$commlist= new eeTableModel('eeTableModel');
	$commlist->setEeid($eeid);
   //echo $commlist->eeid;
   $this->data=$commlist-> getCommlist();
     //var_dump($this->data);
	$this->display();
}
public function noticedel(){
		header("Content-type:text/html;charset=utf-8");
		$userid=I('userid');
		$noid=I('noid');
			//var_dump($userid);
			$noidfrom=array('noid'=>$noid);
			if(M('notice')->where($noidfrom)->delete()){
				$this->success("删除一条公告成功～～");
			} else{
				$this->error("删除一条公告失败，请重试～～～");
			}
    }
    
    public function moviedel(){
header("Content-type:text/html;charset=utf-8");
		$userid=I('userid');
		$evid=I('evid');
			//var_dump($evid);
			$evidfrom=array('evid'=>$evid);
            M('evcomm')->where($evidfrom)->delete();
			if(M('ev')->where($evidfrom)->delete()){
				$this->success("删除一条影视交流帖子成功～～");
			} else{
				$this->error("删除一条影视交流帖子失败，请重试～～～");
			}
        }
public function everydaydel(){
	header("Content-type:text/html;charset=utf-8");
		$userid=I('userid');
		$eeid=I('eeid');
			//var_dump($eeid);
			$eeidfrom=array('eeid'=>$eeid);
             M('comm')->where($eeidfrom)->delete();
			if(M('ee')->where($eeidfrom)->delete()){
				$this->success("删除一条每日英语帖子成功～～");
			} else{
				$this->error("删除一条每日英语帖子失败，请重试～～～");
        }
        }
}
