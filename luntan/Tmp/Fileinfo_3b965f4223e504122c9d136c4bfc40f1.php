<?php
namespace Model;
use HY\Model;
!defined('HY_PATH') && exit('HY_PATH not defined.');
class Fileinfo extends Model {
	public function get_row($id,$name = '*'){
        return $this->find($name,['fileid'=>$id]);
    }
	//获取文件信息
	public function read($id){
		
		return $this->get_row($id);
	}
	
	
}