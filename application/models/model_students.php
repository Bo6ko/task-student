<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_students extends MY_Model
{

	function __construct()
	{
		parent::__construct();

		$this->primary_column   = 'student_id';
		$this->primary_table    = TABLE_STUDENTS;
	}

    #	============================================================================
    #	CREATE

    public function create( $post = array() )
    {

        #	----------------------------
        #	1.	Convert POST array to variables:
        $post = array_map('trim', $post);
        extract( $post );

        #	----------------------------
        #	2.	validation

        if ( !isset($student_firstname) || empty($student_firstname) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">First name is required</div>!'
            );
        } else if ( strlen($student_firstname) <= 4 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">First name must be more than 4 symbols!</div>'
            );
        }

        if ( !isset($student_lastname) || empty($student_lastname) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Last name is required</div>'
            );
        } else if ( strlen($student_lastname) <= 4 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Last name must be more than 4 symbols!</div>'
            );
        }

        if ( !isset($student_email) || empty($student_email) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Email is required!</div>'
            );
        } else if ( $this->existsByEmail($student_email) ) {
            return array(
                'status'	=> false,
                'message'	=> '<div class="error"><b>Email: ' . $student_email . '</b> already exist!</div>'
            );
        }

        if ( !isset($student_age) || empty($student_age) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Age is required!</div>'
            );
        }
        if( !preg_match('/^([0-9]*)$/', $student_age) || strlen($student_age) >= 3 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Invalid data for age!</div>'
            );
        }

        if( !preg_match('/^\+?\d+$/', $student_phone) || (strlen($student_phone) < 10 || strlen($student_phone) >
            14) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Invalid phone number!</div>'
            );
        }

        if ( !isset($preferred_comunication) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Preferred communication is required!</div>'
            );
        }

        if ( !isset($english_level_id) || $english_level_id <= 0 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">English level is required!</div>'
            );
        }

        if ( !isset($student_start_date) || empty($student_start_date) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Start date is required!</div>'
            );
        }

        if (!isset($student_start_date) || is_null($student_start_date)) {
            return array(
                'status'	=> false,
                'message'	=> '<div class="error">Date is required!</div>'
            );
        }

        #	----------------------------
        #	3.	INSERT ...
        $insert = array(
            'student_firstname'		=> trim($student_firstname),
            'student_lastname'		=> trim($student_lastname),
            'student_email'		    => trim($student_email),
            'student_age'		    => trim($student_age),
            'student_phone'		    => trim($student_phone),
            'preferred_comunication'=> $preferred_comunication,
            'english_level_id'		=> $english_level_id,
            'student_start_date'	=> trim($student_start_date),
            'student_skills'	    => trim($student_skills),
            'student_presentation'	=> trim($student_presentation),
            'study_from_home'	    => isset($study_from_home) ? 1 : 0

        );

        $this->db->insert( TABLE_STUDENTS , $insert );

        if ( $this->db->affected_rows() > 0 ) {

            $id				= $this->db->insert_id();

            return array(
                'status'	=> true,
                'message'	=> '<div class="success">The student:  '.$student_firstname. ' ' . $student_lastname.' is added sucessfully!</div>',
                'id'		=> $id
            );

        }

        return array(
            'status'	=> false,
            'message'	=> 'Insert wrong!'
        );

    }

    #	============================================================================
    #	UPDATE

    public function update( $post = array(), $student_id )
    {

        #	----------------------------
        #	1.	Convert POST array to variables:
        $post = array_map('trim', $post);
        extract( $post );

        #	----------------------------
        #	2.	validation

        if ( !isset($student_firstname) || empty($student_firstname) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">First name is required</div>!'
            );
        } else if ( strlen($student_firstname) <= 4 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">First name must be more than 4 symbols!</div>'
            );
        }

        if ( !isset($student_lastname) || empty($student_lastname) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Last name is required</div>'
            );
        } else if ( strlen($student_lastname) <= 4 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Last name must be more than 4 symbols!</div>'
            );
        }

        if ( !isset($student_email) || empty($student_email) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Email is required!</div>'
            );
        } else if ( $this->existsByEmail($student_email, $student_id) ) {
            return array(
                'status'	=> false,
                'message'	=> '<div class="error"><b>Email: ' . $student_email . '</b> already exist!</div>'
            );
        }

        if ( !isset($student_age) || empty($student_age) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Age is required!</div>'
            );
        }
        if( !preg_match('/^([0-9]*)$/', $student_age) || strlen($student_age) >= 3 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Invalid data for age!</div>'
            );
        }

        if( !preg_match('/^\+?\d+$/', $student_phone) || (strlen($student_phone) < 10 || strlen($student_phone) >
                14) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Invalid phone number!</div>'
            );
        }

        if ( !isset($preferred_comunication) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Preferred communication is required!</div>'
            );
        }

        if ( !isset($english_level_id) || $english_level_id <= 0 ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">English level is required!</div>'
            );
        }

        if ( !isset($student_start_date) || empty($student_start_date) ) {
            return array(
                'status'    => false,
                'message'   => '<div class="error">Start date is required!</div>'
            );
        }

        if (!isset($student_start_date) || is_null($student_start_date)) {
            return array(
                'status'	=> false,
                'message'	=> '<div class="error">Date is required!</div>'
            );
        }

        #	----------------------------
        #	3.	INSERT ...
        $update = array(
            'student_firstname'		=> trim($student_firstname),
            'student_lastname'		=> trim($student_lastname),
            'student_email'		    => trim($student_email),
            'student_age'		    => trim($student_age),
            'student_phone'		    => trim($student_phone),
            'preferred_comunication'=> $preferred_comunication,
            'english_level_id'		=> $english_level_id,
            'student_start_date'	=> trim($student_start_date),
            'student_skills'	    => trim($student_skills),
            'student_presentation'	=> trim($student_presentation),
            'study_from_home'	    => isset($study_from_home) ? 1 : 0

        );

        $this->db->update( $this->primary_table, $update, array( $this->primary_column => $student_id ));

        return array(
            'status'		=> true,
            'message'		=> 'Update successfull!:  '.$student_firstname. ' ' . $student_lastname
        );

    }

#	============================================================================
#	GET
	public function getAll( $limit = null, $start = null ) {

        if ($limit != 0) {
            $this->db->limit($limit, $start);
        }

		$this->db->select( '*' );
		$this->db->from( $this->primary_table );
        $this -> db -> join(TABLE_ENGLISH_LEVEL, TABLE_STUDENTS . '.english_level_id = ' . TABLE_ENGLISH_LEVEL . '.english_level_id', 'left');

		$result = $this->db->get();
		return ( $result->num_rows() > 0 ) ? $result->result_array() : FALSE;

	}

    public function getById( $student_id ) {
        if ( empty( $student_id ) ) {
            return FALSE;
        }

        $this->db->select( '*' );
        $this->db->from( $this->primary_table );
        $this->db->where( $this->primary_table.'.'.$this->primary_column , $student_id );
        $this->db->limit( 1 );
        $result = $this->db->get();
        return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
    }

    #	============================================================================
    #	CHECK
    public function existsByEmail( $student_email, $student_id = 0 )
    {
        if ( !isset($student_email) || empty( $student_email ) ) {
            return FALSE;
        }

        $this->db->select( '*' );
        $this->db->from( $this->primary_table );
        $this->db->where( $this->primary_table.'.student_email' , trim($student_email) );

        if ( isset($id) || $student_id > 0 ) {
            $this->db->where( $this->primary_table.'.'.$this->primary_column.' !=' , $student_id );
        }

        $this->db->limit( 1 );
        $result = $this->db->get();
        return ( $result->num_rows() > 0 ) ? $result->row_array() : FALSE;
    }

    #	============================================================================
    #	DELETE
    public function delete( $student_id ) {
        $this->db->delete($this->primary_table, array('student_id' => $student_id));
    }

}