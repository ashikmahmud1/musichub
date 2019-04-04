<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 04/08/2017
 * Time: 4:51 PM
 */

class Home extends CI_Controller
{

    function index()
    {
        $data['main_view'] = "main-page";
        $this->load->view('home', $data);
    }

    function login()
    {
        $data['main_view'] = "login";
        $this->load->view('home', $data);
    }

    function signup()
    {
        $data['main_view'] = "signup";
        $this->load->view('home', $data);
    }

    function events()
    {
        $event = $this->Event_Model->allevent();
        $data['event'] = $event;
        $data['main_view'] = "event";
        $this->load->view('home', $data);
    }

    function contact()
    {
        $data['main_view'] = "contact";
        $this->load->view('home', $data);
    }

    function album()
    {

        $album = $this->Album_Model->allalbum();
        $data['album'] = $album;
        $data['main_view'] = "album";
        $this->load->view('home', $data);
    }

    function myupcomingalbum()
    {
        $album = $this->Album_Model->allalbum();
        $data['album'] = $album;
        $data['main_view'] = "myupcomingalbum";
        $this->load->view('home', $data);
    }

    function popular()
    {
        $album = $this->Album_Model->allalbum();
        $data['album'] = $album;
        $data['main_view'] = "popular";
        $this->load->view('home', $data);

    }
    function about(){
        $data['main_view'] = "about";
        $this->load->view('home', $data);

    }
    function eventcalender()
    {
        $event = $this->Event_Model->allevent();
        $data['event'] = $event;
        $data['main_view'] = "eventcalender";
        $this->load->view('home', $data);
    }
    function addevent()
    {
        $data['main_view'] = "addevent";
        $this->load->view('home', $data);
    }
    function addalbum()
    {
        $data['main_view'] = "addalbum";
        $this->load->view('home', $data);
    }
    function artistlogin()
    {
        $data['main_view'] = "artist-login";
        $this->load->view('home', $data);
    }
}