<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 8/9/2017
 * Time: 3:44 PM
 */

class Event_Model extends CI_Model
{

    function addevent($mysqldate)
    {


        $event_id = $this->max_eventid();

        if (empty($event_id))
        {
            $event_id = 1;
        }
        else
        {
            $event_id += 1;
        }

        $bandname = $this->input->post('bandname');
        $location = $this->input->post('location');
        $comment = $this->input->post('event-comment');

        $data = array(
            'id' => $event_id ,
            'bandname' => $bandname,
            'location' => $location,
            'datetime' => $mysqldate,
            'comment' => $comment,
            'artistid' => $this->session->userdata('user_id'),
            'date_created' => date("Y-m-d H:i:s")
        );
        $result = $this->db->insert('event',$data);

        return $result;
        
    }

    private function max_eventid()
    {
        $this->db->select_max('id');
        $result = $this->db->get('event')->row();

        return $result->id;


    }
    function allevent()
    {
        $this->db->select();
        $this->db->from('event');
        $result = $this->db->get();
        return $result;
    }
}