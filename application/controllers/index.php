<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->library("pagination");

        $this->load->model('model_students');
        $this->load->model('model_english_level');
	}

	public function index( $cur_page = 0 ) {

        $this->smarty->assign('deleteStudent', $this->session->flashdata('deleteStudent'));













        //paginator
        $config["base_url"] = base_url() . "index/";
        $config["total_rows"] = count($this->model_students->getAll());
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $students = $this->model_students->getALl($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //end paginator





        $this->smarty->assign('students', $students);
        $this->smarty->assign('data', $data);

        $this -> smarty -> assign('content', $this->smarty->fetch('public/' . $this->router->fetch_class() . '/' . $this->router->fetch_method() . '.htm'));
		$this -> smarty -> display('public/main.htm');
	}

    public function create() {

        //	check post
        if ($post = $this->input->post()) {

            $response = $this->model_students->create($this->input->post());

            $this->smarty->assign('response', $response);

        }

        $this->smarty->assign( 'post' , $post);
        $this->smarty->assign('english_level_all', $this->model_english_level->getAll());
        $this -> smarty -> assign('content', $this->smarty->fetch('public/' . $this->router->fetch_class() . '/' . $this->router->fetch_method() . '.htm'));
        $this -> smarty -> display('public/main.htm');

    }

    public function update( $student_id ) {

        $student = $this->model_students->getById($student_id);

        if (!$student) {
            redirect('/create', 'refresh');
        }

        $this->smarty->assign('student', $student);
        $this->smarty->assign('english_level_all', $this->model_english_level->getAll());
        $this -> smarty -> assign('content', $this->smarty->fetch('public/' . $this->router->fetch_class() . '/' . $this->router->fetch_method() . '.htm'));
        $this -> smarty -> display('public/main.htm');

    }

    public function update_ajax( $student_id =0 )
    {

        if ($this -> input -> is_ajax_request()) {

            $post		= $this->input->post();

            $json		= $this->model_students->update($post, $student_id);

        } else {

            $json	= array(
                'status'	=> false,
                'message'	=> 'This is not AJAX request.'
            );
        }

        print_r(json_encode($json));
        exit ;
    }

    public function delete( $student_id ) {
        $mark = $this->model_students->delete($student_id);
        $this->session->set_flashdata('deleteStudent', 'Student id: ' . $student_id . ' is deleted!');

        redirect('/index');
    }
	
}