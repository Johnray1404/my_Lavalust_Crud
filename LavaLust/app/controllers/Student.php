<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {

    private $limit = 5; // Number of students per page

    public function read($page = 1) {
        $offset = ($page - 1) * $this->limit;
        $data['stud'] = $this->student_model->get_paginated($this->limit, $offset);
        $data['total_count'] = $this->student_model->get_total_count();
        $data['total_pages'] = ceil($data['total_count'] / $this->limit);
        $data['current_page'] = $page;

        $this->call->view('student/display', $data);
    }
    public function __construct() {
        parent::__construct();
        $this->call->model('student_model');
    }

    

    public function create() {
        if ($this->form_validation->submitted()) {
            // Remove $id since it's auto-incrementing
            $lastname = $this->io->post('jmc_lastname');
            $firstname = $this->io->post('jmc_first_name');
            $email = $this->io->post('jmc_email');
            $gender = $this->io->post('jmc_gender');
            $address = $this->io->post('jmc_address');

            // Update parameters according to the model's definition
            $this->student_model->create($lastname, $firstname, $email, $gender, $address);
            header("Location: " . site_url('student/display'));
            exit;
        }
        $this->call->view('student/create');
    }

    public function update($id) {
        if ($this->form_validation->submitted()) {
            $lastname = $this->io->post('jmc_lastname');
            $firstname = $this->io->post('jmc_first_name');
            $email = $this->io->post('jmc_email');
            $gender = $this->io->post('jmc_gender');
            $address = $this->io->post('jmc_address');

            $this->student_model->update($id, $lastname, $firstname, $email, $gender, $address);
            header("Location: " . site_url('student/display'));
            exit;
        }
        $data['student'] = $this->student_model->get_one($id);
        $this->call->view('student/update', $data);
    }

    public function delete($id) {
        if ($id) {
            $this->student_model->delete($id);
        }
        header("Location: " . site_url('student/display'));
        exit;
    }

    public function search($page = 1) {
        $query = $this->io->get('query');
        $data['is_search'] = true;
        
        // Ensure $page is a positive integer
        $page = max(1, intval($page));
        
        // Calculate offset
        $offset = ($page - 1) * $this->limit;
    
        if ($query) {
            $data['stud'] = $this->student_model->search_students($query, $this->limit, $offset);
            
            // Total count for pagination
            $data['total_count'] = $this->student_model->get_search_count($query);
            $data['total_pages'] = ceil($data['total_count'] / $this->limit);
            $data['current_page'] = $page;
        } else {
            $data['stud'] = $this->student_model->read();
        }
        
        $this->call->view('student/display', $data);
    }
    
}
?>
