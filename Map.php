<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Map as MapModel;

class Map extends Controller {
    
    /*
     * 进入地图
     *
     */
	public function index(){
           $uid =input('id');
          //$uid=98877270392904;
		$map = new MapModel();
		$mapres = $map -> map($uid);
        $res = json_encode($mapres[1]);
		$this->assign('map',$res);
                
		$this->assign('row',$mapres[0]);
        $this->assign('uid',$uid);
		// print_r($mapres[1]);die;
		
		return $this->fetch('map');
	}
		
 
}