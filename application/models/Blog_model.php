<?php
    class Blog_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
        }
        
        public function get_latest_posts($limit = 3) {
            $this->db->order_by('posts.id', 'desc');
            $this->db->limit($limit);
            $query = $this->db->get('posts');
            return $query->result();
        }            
    }
?>
