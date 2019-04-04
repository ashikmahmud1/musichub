<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 06/08/2017
 * Time: 10:29 PM
 */

class Artist extends CI_Controller
{
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
            $user_data = $this->Artist_Model->login_user( $useremail, $password ); //this will return the user_id from the database
            $user_id = $user_data[ 'user_id' ];


            if ( $user_id ) {
                $userdata = array(
                    'user_id' => $user_id,
                    'useremail' => $useremail,
                    'logged_in' => true,
                    'is_artist' => true
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

    function artists()
    {
        $artist = $this->Artist_Model->allartist();
        $data['main_view'] = "artist";
        $data['artist'] = $artist['allartist'];
        if($this->session->userdata('logged_in'))
        {
            $data['follower'] = $artist['follower'];
        }
        $this->load->view('home', $data);
    }
    function followartist()
    {
        $following = $this->Artist_Model->followartist();
        if ($following)
        {
            echo "#4587d9";
        }
    }
}