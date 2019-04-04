<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 05/08/2017
 * Time: 3:50 PM
 */

class Album extends CI_Controller
{


    function addalbum()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $album_image = "";
            $songs = array();
            $album_file = $_FILES['upload-album-image']['name'];

            if ($album_file !== "") {
                $config['upload_path'] = FCPATH . 'albumfiles/';;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['overwrite'] = false;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('upload-album-image');
                $upload_data = $this->upload->data();
                $album_image = $upload_data['file_name'];
            }
            $uploaded_files = $_FILES['upload-song'];
            unset($_FILES);

            foreach ($uploaded_files as $desc => $arr) {
                foreach ($arr as $k => $string) {
                    $_FILES[$k][$desc] = $string;
                }
            }

            $this->load->library('upload');
            $config['upload_path'] = './albumfiles/';
            $config['allowed_types'] = '*';

            $i = 0;
            foreach ($_FILES as $k => $file) {

                $this->upload->initialize($config);

                if (!$this->upload->do_upload($k)) {
                    $errors = $this->upload->display_errors();
                    var_dump($errors);
                } else {
                    $song_name = $this->upload->data('file_name');
                    $songs[$i] = $song_name;
                }
                $i++;

            }

            $upload_success = $this->Album_Model->add_album($songs, $album_image);

            if ($upload_success) {
                redirect('home/myupcomingalbum');
            }
        }
    }

    function albumdetails($albumid = 0)
    {
        if ($albumid !== 0) {
            $albumdetails = $this->Album_Model->albumdetails($albumid);

            if (!empty($albumdetails)) {
                $data['main_view'] = "albumdetail";
                $data['songs'] = $albumdetails['songs'];
                $data['album'] = $albumdetails['album'];
                $this->load->view('home', $data);
            }
        }
        else
        {
            redirect('home/album');
        }
    }
}