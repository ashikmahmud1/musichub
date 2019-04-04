<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 24/08/2017
 * Time: 11:43 PM
 */

class Album_Model extends CI_Model
{
    function add_album($songs, $album_image)
    {

        if ($this->session->userdata('is_admin')) {

            $genreid = $this->input->post('genre');
            $album_title = $this->input->post('albumtitle');
            $releasedate = $this->input->post('releasedate');
            $price = $this->input->post('albumprice');

            $this->db->trans_begin();

            $songid = $this->songid();
            $noofsongs = 0;
            $songsid = array();
            $albumid = $this->albumid();
            for ($i = 0; $i < count($songs); $i++) {
                //Decode songs title from songs name
                $titles = explode("_", $songs[$i]);
                $finaltitle = implode(" ", $titles);

                $song_data = array(
                    'title' => $finaltitle,
                    'filename' => $songs[$i],
                    'genreid' => $genreid,
                    'date_created' => date("Y-m-d H:i:s")
                );
                $songid++;
                $songsid[$i] = $songid;
                $this->db->insert('song', $song_data);
                $noofsongs++;
            }
            $format_releasedate = date("Y-m-d", strtotime($releasedate));
            $album_data = array(
                'title' => $album_title,
                'imageurl' => $album_image,
                'releasedate' => $format_releasedate,
                'noofsongs' => $noofsongs,
                'price' => $price,
                'date_created' => date("Y-m-d H:i:s")
            );
            $this->db->insert('album', $album_data);
            $albumid++;

            //Insert Data into albumsongs table
            for ($i = 0; $i < count($songsid); $i++) {
                $albumsongs_data = array(
                    'albumid' => $albumid,
                    'songid' => $songsid[$i],
                    'date_created' => date("Y-m-d H:i:s")
                );
                $this->db->insert('albumsongs', $albumsongs_data);
            }

            $albumartist_data = array(
                'albumid' => $albumid,
                'artistid' => $this->session->userdata('user_id')
            );
            $this->db->insert('albumartist', $albumartist_data);


            if ($this->db->trans_status() === FALSE) {

                $this->db->trans_rollback();
                return false;

            } else {

                $this->db->trans_commit();
                return true;

            }
        }
    }

    private function albumid()
    {
        $this->db->select_max('id');
        $result = $this->db->get('album')->row();

        return $result->id;
    }

    private function songid()
    {
        $this->db->select_max('id');
        $result = $this->db->get('song')->row();

        return $result->id;
    }

    function allalbum()
    {
        $this->db->select();
        $this->db->from('album');
        $result = $this->db->get();
        return $result;
    }

    function albumdetails($albumid)
    {
        if (isset($albumid)) {
            //Get songid from albumsongs table
            $this->db->trans_begin();
            $this->db->select('songid');
            $this->db->from('albumsongs');
            $this->db->where('albumid', $albumid);

            $songsid = $this->db->get();
            $songsinfo = array();

            $count = 0;
            foreach ($songsid->result() as $row) {
                $songsinfo[$count] = $row->songid;
                $count++;
            }

            //Get the songs from songs table where id(1,2,3)
            $this->db->select();
            $this->db->from('song');
            $this->db->where_in('id', $songsinfo);

            $songs = $this->db->get();

            //Get The Album Information
            $this->db->select();
            $this->db->from('album');
            $this->db->where('id',$albumid);
            $album = $this->db->get();

            //Finally Get the popular albums


            $albumsongs = array(
                'songs' => $songs,
                'album' => $album
            );
            if ($this->db->trans_status() === FALSE) {

                $this->db->trans_rollback();
                return null;

            } else {

                $this->db->trans_commit();
                return $albumsongs;

            }
        }
    }
}