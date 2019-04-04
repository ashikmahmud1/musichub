<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 8/7/2017
 * Time: 3:38 PM
 */

class Artist_Model extends CI_Model
{

    function registration($image_url)
    {
        $register_name = $this->input->post('name');
        $register_email = $this->input->post('useremail');
        $gender = $this->input->post('gender');
        $phoneno = $this->input->post('phoneno');
        $country = $this->input->post('country');
        $membership = $this->input->post('membership');
        $password = $this->input->post('password');

        $encrypted_password = password_hash($password,PASSWORD_BCRYPT);
        $data = array(
            'name' => $register_name,
            'gender' => $gender,
            'email' => $register_email,
            'imageurl' => $image_url,
            'membershipid' => $membership,
            'phone_no' => $phoneno,
            'country' => $country,
            'password' => $encrypted_password,
            'date_created' =>date("Y-m-d H:i:s")

        );
        $result = $this->db->insert('artist',$data);

        return $result;
    }

    public function login_user($useremail,$password)
    {
        $this->db->where('email',$useremail);

        $user = $this->db->get('artist');

        $db_password = $user->row(7)->password;

        if(password_verify($password , $db_password))
        {
            $userid = $user->row(0)->id;
            $data = array(
                'user_id' => $user->row(0)->id,
            );

            return $data;
        }
        else
        {
            return false;
        }
    }

    function allartist()
    {
        $artistfollower = array();
        $this->db->select();
        $this->db->from('artist');
        $artist = $this->db->get();
        $artistfollower['allartist'] =$artist;


        //Get follower of artist is user logged in
        if($this->session->userdata('logged_in')) {
            $this->db->select();
            $this->db->from('follow');
            $this->db->where('userid', $this->session->userdata('user_id'));
            $follower = $this->db->get();
            $artistfollower['follower'] = $follower;
        }

        return $artistfollower;
    }
    function followartist()
    {
        $artistid = $this->input->post('artist-id');
        $userid = $this->session->userdata('user_id');

        $follow_data = array(
            'userid' => $userid,
            'artistid' => $artistid
        );

        $result = $this->db->insert('follow',$follow_data);

        return $result;
    }
}