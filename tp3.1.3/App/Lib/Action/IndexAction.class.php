<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	/*
	2、join() 两表查询
		$list = $Form->join('think_sort ON think_form.sort_id = think_sort.sort_id' )->select();
		3、join() 多表查询
		$list = $Form->join('think_sort ON think_form.sort_id = think_sort.sort_id' )->join('think_brand ON think_form.brand_id = think_brand.brand_id' )->select();
	*/
	/* 1 the notice of index page*/
    	/*2 eb_user table user by express user's message*/
	public function user(){
		header("Content-type:text/html;charset=utf-8");
		$us = M('user');
		$this->user=$us->select();
		var_dump($this->user);
        
	}
	public function login(){
		header("Content-type:text/html;charset=utf-8");	
		$this->display();
	}
	public function loginhandle(){
		header("Content-type:text/html;charset=utf-8");	
       //var_dump($_POST);
		if(!empty($_POST)){
			$username=I('username');
			$password=I('password');
              $where=array('username'=>$username);
			$res=M('user')->where($where)->find();
            //var_dump($res);
			if($res['username']!=$username){
				//$this->error("用户不存在～～");
				 $this->error("no such user,go to regist",U('Index/regist'));
			} else{
				if($res['userpass']==md5($password)){
                    if($res['type']==0){
                        $this->redirect('Index/index',array('userid'=>$res['userid']));	
                        }else{
                             $this->redirect('Admin/arrangeIndex',array('userid'=>$res['userid']));	
                            }
				} else{
                    $this->error("用户和密码错误～～");
                    }
			}
		}
	}
	public function index(){
		session_start();
			defined('APP_NAME') or exit('Access Denied!');
           $this->userline=M('user')->where(array('userid'=>I('userid')))->find();
           // var_dump($this->userline);
           // var_dump($userid);
			$no= M('notice');
            //用来展示通知公告列表的查询
            $this->ntlist=$no->select();
			$e=M('ee');
            //用来展示每日英语列表的查询，里面不用现实每日英语的内容
			$this->eelist=$e->table('eb_ee ee,eb_user user')->field('ee.eeid,ee.eetitle,ee.eetime,user.username as username')->order('ee.eetime desc')->where('ee.userid=user.userid')->select();
			$ev=M('ev');
              //用来展示影视交流列表的查询，里面不用现实每日英语的内容
           $this->evlist=$ev->table('eb_ev ev,eb_user user')->field('ev.evid,ev.evtitle,ev.evcont,ev.evtime,user.username as username')->order('ev.evid desc')->where('ev.userid=user.userid')->select();
           // var_dump($this->evlist);			
           	$noid=I('noid');
       // $noid=1;
        $where=array('noid'=>$noid);
		$this->ntline=$no->where($where)->find();
           $this->display();
        }
        //展示noticeCont.html通知公告模板，
		public function notice(){
			header("Content-type:text/html;charset=utf-8");
			$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
			$no= M('notice');
            //用来展示通知公告列表，ID 标题 时间 
			$this->noticelist=$no->select();
			//var_dump($this->noticelist);
            $this->display();
    }
    //点击每一条通知公告，进去显示详细内容
	public function noticeContent(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
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
//展示movie.html影视交流的模板，
public function movie(){
	session_start();
	defined('APP_NAME') or exit('Access Denied!');
        header("Content-type:text/html;charset=utf-8");
	$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
        $movie=M('ev');
        //用来展示影视交流的列表,现实ID 标题 时间 作者，按照时间倒序排序显示
        $this->movielist=$movie->table('eb_ev ev,eb_user user')->field('ev.evid,ev.evtitle,ev.evtime,user.username as username')->order('ev.evtime desc')->where('ev.userid=user.userid')->select();
        //var_dump($this->movielist);		
        $this->display();
}
//点击每一条影视交流，进去之后可以看到该条影视交流的帖子的内容，及其评论该帖子的其他回复
	public function movieContent(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
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
	
	/*3 eb_ee table eb_ee by display English of every day*/
	public function everyday(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
		header("Content-type:text/html;charset=utf-8");
		$this->userline=M('user')->where(array('userid'=>I('userid')))->find();
		$e = M('ee');
        $this->eelist=$e->table('eb_ee ee,eb_user user')->field('ee.eeid,ee.eetitle,ee.eetime,user.username as username')->order('ee.eeid desc')->where('ee.userid=user.userid')->select();
	//	var_dump($this->ee);
		$this->display();
}

//当点击进入一条每日英语的进去之后，看到该条每日英语帖子的内容，及所有评论过该每日英语帖子的其他回复评论
public function everydayContent(){
	session_start();
	defined('APP_NAME') or exit('Access Denied!');
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
//发布每日英语的处理方法，用户或管理员发布帖子，然后保存数据到数据库
public function everydayissue(){
                if(IS_POST){
                        $commline["eeid"]=I["eeid"];
                        $commline["userid"]=I["userid"];
                        $commline["commcont"]=I["commcont"];
                        $commtime["commtime"]=date("Y-m-d H:i:s",time());
                        $isscom=M('comm');
                        if($isscomm->add($commline)){
                                $this->success("亲～～～发表每日英语评论成功了～～～～");
                            } else{
                                 $this->success("亲～～～发表每日英语评论失败了，再试试看呗～～～～");
                                }
                    }
}
    public function info(){
	session_start();
	defined('APP_NAME') or exit('Access Denied!');
        header("Content-type:text/html;charset=utf-8");
	$userid=I('userid');
	$userfrom=array('userid'=>$userid);
      	$this->userline=M('user')->where($userfrom)->find();
	//var_dump($this->userline);
	
	$uscom=M('ev');
	$this->evlist=$uscom->where($userfrom)->select();
	//var_dump($this->usercommlist);


        $this->display();

        }
	public function infohandle(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
		 header("Content-type:text/html;charset=utf-8");
		//$this->usermess=M('user')->where($userfrom)->select();
		if(IS_POST && !empty($_POST)){
			$userid=I('userid');
			$userfrom=array('userid'=>$userid);
			$userpass=I('userpass');
        	        $newuserpass1=I('newuserpass1');
			$newuserpass2=I('newuserpass2');
			//var_dump($newuserpass2);
			if($userpass=='' || $newuserpass1=='' || $newuserpass2==''){
				$this->error("不能输入空数据，请重新输入～～～");
			}
			$usermess=M('user')->where($userfrom)->find();
			if($usermess['userpass'] != $userpass){
				$this->error("旧密码输入错误～～～");
			} else{
				if($newuserpass1!=$newuserpass2){
					$this->error("两次输入新密码不一致～～～");
				} else{
					if(M('user')->where($userfrom)->data(array('userpass'=>$newuserpass2))->save() ){
						$this->success("设置新密码成功～～～");
					} else{
						$this->error("设置新密码失败，请重试哦～～～");
					}
				}
			}

		}
	
	}	
	public function infodel(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
		$userid=I('userid');
		$evid=I('evid');
	//	$commid=I('commid');
	//	$evcommid=I('evcommid');
		if($userid!=NULL && $evid!=NULL){
			//var_dump($evid);
			$evidfrom=array('evid'=>$evid);
			$evcoml=M('evcomm')->where($evidfrom)->delete();
			if(M('ev')->where($evidfrom)->delete()){
				$this->success("删除一条影视交流帖子成功～～");
			} else{
				$this->error("删除一条影视交流帖子失败，请重试～～～");
			}
		} 
/**
		if($userid!=NULL && commid!=NULL){
			$commidfrom=array('commid'=>$commid);
			if(M('comm')->where($commidfrom)->delete()){				
				$this->success("删除一条每日英语评论成功～～");			
			} else{
				$this->error("删除一条每日英语评论帖子失败，请重试～～～");
			}
		}
		if($userid!=NULL && $evcommid!=NULL){
			$evcommidfrom=array('evcommid'=>$evcommid);
			if(M('evcomm')->where($evcommfrom)->delete()){
				$this->success("删除一条影视交流评论帖子成功～～");
			} else{
				 $this->error("删除一条影视交流评论帖子失败，请重试～～～");
			}		
		}
**/
	}
	public function evcommCommand(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
                 header("Content-type:text/html;charset=utf-8");
                $userid=I('useridinput');
                $evid=I('evidinput');
		$evcommcont=I('evcommcont');
      		$evcommtime=date("Y-m-d H:i:s",time());
		$evcont=array('evid'=>$evid,'userid'=>$userid,'evcommcont'=>$evcommcont,'evcommtime'=>$evcommtime);
		if(M('evcomm')->add($evcont)){
			$this->success("发表评论成功");
		} else{
			$this->error("发表评论失败");
		}
        }

	 public function evcommReply(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
                 header("Content-type:text/html;charset=utf-8");
                $userid=I('useridReply');
                $evid=I('evidReply');
		$evcommparentid=I('evcommparentid');
                $evcommcont=I('evcommcontReply');
                $evcommtime=date("Y-m-d H:i:s",time());
                $evcont=array('evid'=>$evid,'userid'=>$userid,'evcommcont'=>$evcommcont,'evcommtime'=>$evcommtime,'evcommparentid'=>$evcommparentid);
                //var_dump($evcont);
		if(M('evcomm')->add($evcont)){
                        $this->success("回复评论成功");
                } else{
                        $this->error("回复评论失败");
                }
        }

	public function commCommand(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
                header("Content-type:text/html;charset=utf-8");
                $userid=I('useridinput');
                $eeid=I('eeidinput');
		$commcont=I('commcont');
		$commparentid=I('commparentid');
      		$commtime=date("Y-m-d H:i:s",time());
		$eecont=array('eeid'=>$eeid,'userid'=>$userid,'commcont'=>$commcont,'commtime'=>$commtime,'commparentid'=>$commparentid);

		if(M('comm')->add($eecont)){
			$this->success("发表评论成功");
		} else{
			$this->error("发表评论失败");
		}
        }
 	public function commReply(){
		session_start();
		defined('APP_NAME') or exit('Access Denied!');
                header("Content-type:text/html;charset=utf-8");

                $userid=I('useridReply');
                $eeid=I('eeidReply');
		$commparentid=I('commparentid');
                $commcont=I('commcontReply');
                $commtime=date("Y-m-d H:i:s",time());
                $eecont=array('eeid'=>$eeid,'userid'=>$userid,'commcont'=>$commcont,'commtime'=>$commtime,'commparentid'=>$commparentid);
                //var_dump($eecont);

		if(M('comm')->add($eecont)){
                        $this->success("回复评论成功");
                } else{
                        $this->error("回复评论失败");
                }
        }
	public function regist(){

		$this->display();	
	}
	public function registhandle(){

		$username=I('username');
		$password=I('password');
		$newuser=array('username'=>$username,'userpass'=>md5($password));
		if(M('user')->add($newuser)){
			$this->success("register successed,go to login",U('Index/login'));
		} else{
			$this->error("register failed");
		}

	}

}
