<?php
class Location_model extends CI_Model{
	public $city_table='cities';
        public $state_table='states';
        public $countries_table='countries';
	function Location_model(){
		parent::__construct();	
	}
        
        public function get_all_countries() {
            $sql="SELECT * FROM ".$this->countries_table." ";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        public function get_all_cities() {
            $sql="SELECT * FROM ".$this->city_table." ";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        public function getStatesByCountry($param) {
            $sql="SELECT * FROM ".$this->state_table." WHERE country_id = $param";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        public function getCityByState($param) {
            $sql="SELECT * FROM ".$this->city_table." WHERE state_id = $param";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
}