<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student_model extends Model {
    
    public function read() {
        return $this->db->table('jmc_users')->get_all();
    }

    public function get_paginated($limit, $offset) {
        return $this->db->table('jmc_users')->limit($limit, $offset)->get_all();
    }

    public function get_total_count() {
        $results = $this->db->table('jmc_users')->get_all(); // Fetch all records
        return count($results); // Count the records
    }

    public function create($lastname, $firstname, $email, $gender, $address) {
        $data = array(
            'jmc_lastname' => $lastname,
            'jmc_first_name' => $firstname,
            'jmc_email' => $email,
            'jmc_gender' => $gender,
            'jmc_address' => $address
        );
        return $this->db->table('jmc_users')->insert($data);
    }

    public function get_one($id) {
        return $this->db->table('jmc_users')->where('id', $id)->get();
    }

    public function update($id, $lastname, $firstname, $email, $gender, $address) {
        $data = array(
            'jmc_lastname' => $lastname,
            'jmc_first_name' => $firstname,
            'jmc_email' => $email,
            'jmc_gender' => $gender,
            'jmc_address' => $address
        );
        return $this->db->table('jmc_users')->where('id', $id)->update($data);
    }

    public function delete($id) {
        return $this->db->table('jmc_users')->where('id', $id)->delete(); 
    }

    public function search_students($query, $limit = null, $offset = null) {
        $this->db->table('jmc_users');
        
        $this->db->like('id', $query);
        $this->db->or_like('jmc_lastname', $query);
        $this->db->or_like('jmc_first_name', $query);
        
        if ($limit !== null && $offset !== null) {
            $this->db->limit($limit, $offset); 
        }
        
        return $this->db->get_all(); 
    }

    public function get_search_count($query) {
        $this->db->table('jmc_users');
        
        $this->db->like('id', $query);
        $this->db->or_like('jmc_lastname', $query);
        $this->db->or_like('jmc_first_name', $query);
        
        $this->db->select('COUNT(*) as total'); 
        $result = $this->db->get(); 

        if (!empty($result) && isset($result[0]['total'])) {
            return $result[0]['total']; 
        } else {
            return 0; 
        }
    }
}
?>
