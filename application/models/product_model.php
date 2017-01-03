<?php

class Product_model extends CI_Model {
    public $table="tab_products";
    function Product_model() {
        parent::__construct();
    }
    public function save_product($param) {
        return $this->db->insert($this->table,$param);
    }

    function product_list($param) {
        $sql = "SELECT * FROM ".$this->table." WHERE int_seller_id = '".$param."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}

?>