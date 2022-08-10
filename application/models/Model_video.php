<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_video extends CI_Model{

    public function get($data){
		$this->db->trans_start();
		$this->db->select('iVideoId AS id, vName AS name, vMusicName AS music, tTime AS time, vUserId AS userid, ttDescription AS description');
		$this->db->from('sk_videos');
		// $this->db->order_by('tTime', 'DESC');
		$this->db->limit(10, 0);

		// if(isset($data['year']) && $data['year'] != 'all'){
		// 	$this->db->where('YEAR(dAudioDate)', $data['year']);
		// }
		// if(isset($data['month']) && $data['month'] != 'all'){
		// 	$this->db->where('MONTH(dAudioDate)', $data['month']);
		// }
        // if(isset($data['day']) && $data['day'] != 'all'){
		// 	$this->db->where('dAudioDate', $data['year'].'-'.$data['month'].'-'.$data['day']);
		// }

		$this->db->trans_complete();

		if($this->db->trans_status() === TRUE){
			return $this->db->get()->result_array();
		}
		else{
			return array(
				'status' => 'failed',
				'message' => 'Query not executed'
			);
		}
	}
}