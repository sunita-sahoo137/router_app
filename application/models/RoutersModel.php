<?php
class RoutersModel extends CI_Model{ 
    
    public function getRouters(){
        $query = $this->db->where('status', 'active')->get("routers");
        return $query->result();
    }
    function saveRouter($data)
	{
          $this->db->insert('routers',$data);
          return $this->db->insert_id();
	}
	function getRouterDetails($id){
		$this->db->select('*');
	    $this->db->from('routers');
	    $this->db->where('routers.id', $id);  
	    $result = $this->db->get()->row();    
	    return $result;
	}

	function updateRouter($data)
	{
        $this->db->where('id', $data['id']);
        $this->db->update('routers', $data);
	}
	function deleteRouter($id)
	{
        $this->db->where('id', $id);
        $this->db->update('routers', array('status'=>'inactive'));
	}
	function updateRouterDetails($data)
	{
        $this->db->where('loopback', $data['loopback']);
        $this->db->update('routers', $data);
	}
	function getRouterDetailsBySapid($sapid){
		$this->db->select('*');
	    $this->db->from('routers');
	    $this->db->where('routers.sapid', $sapid);  
	    $result = $this->db->get()->result();    
	    return $result;
	}
	function getRouterDetailsByIprange($iprange){
		$this->db->select('*');
	    $this->db->from('routers');
	    $this->db->like('loopback', $iprange, 'after'); 
	    $result = $this->db->get()->result();    
	    return $result;
	}
	function deleteRouterByIp($ip){
		$this->db->where('loopback', $ip);
        $result = $this->db->update('routers', array('status'=>'inactive'));
        return $result;
	}
}
?>