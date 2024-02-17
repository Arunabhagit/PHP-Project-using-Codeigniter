<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function createUser($user_data) {
	return $this->db->insert('user', $user_data);
	    }

public function validateuser($id,$password){
$this->db->where('id', $id);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            // User exists, now check the password
            $user = $query->row();
            if ($password==$user->password) {
                // Password matches, user is valid
                return true;
            }
        }

return false;
}
}