<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 06/08/2017
 * Time: 11:50 PM
 */

class Users extends CI_Controller
{

    function registration()
    {
        $user_type = $this->input->post('user-type');

        $config['upload_path'] = "./pictures/profilepicture/";
        $config['allowed_types'] = '*';
        $new_name = time();
        $config['file_name'] = $new_name;

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $this->upload->do_upload("profile-picture");
        $newfilename = $this->upload->data('file_name');
        $newlocation = base_url()."pictures/profilepicture/".$newfilename;
        if (strcmp($user_type,'artist') == 0)
        {
            $register = $this->Artist_Model->registration($newlocation);
            if($register)
            {
                redirect('home/login');
            }
        }
        else
        {
            $register = $this->User_Model->registration($newlocation);
            if($register)
            {
                redirect('home/login');
            }
        }

        redirect('home');
    }

    function login() {
        $this->form_validation->set_rules( 'useremail', 'Username', 'required' );
        $this->form_validation->set_rules( 'password', 'Password', 'required' );

        if ( $this->form_validation->run() == FALSE ) {
            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata( $data );
            redirect( 'home/login' );
        } else {
            $useremail = $this->input->post( 'useremail' );
            $password = $this->input->post( 'password' );

            //user_model should be autoload first in autoload.php file autoload['model']=array(user_model)
            $user_data = $this->User_Model->login_user( $useremail, $password ); //this will return the user_id from the database
            $user_id = $user_data[ 'user_id' ];


            if ( $user_id ) {
                $userdata = array(
                    'user_id' => $user_id,
                    'useremail' => $useremail,
                    'logged_in' => true,
                    'is_user' => true
                );

                $this->session->set_userdata( $userdata ); //this session will help us to work with this data in the view
                $this->session->set_flashdata( 'login_success', 'You are logged in' );
                redirect('home');
            } else {
                $this->session->set_flashdata( 'login_failed', 'Sorry, You are not logged in' );
                redirect( 'home/login' );
            }
        }
    }

    function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('useremail');
        $this->session->unset_userdata('logged_in');
        redirect('home');
    }
}