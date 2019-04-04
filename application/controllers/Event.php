<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 05/08/2017
 * Time: 3:29 PM
 */

class Event extends CI_Controller
{
    function addevent()
    {
        //$dtNow = new DateTime();
        //$mysqlDateTime = $dtNow->format(DateTime::COOKIE);

        if ($this->session->userdata('is_artist')) {

            $time = $this->input->post('event-time');
            $date = $this->input->post('event-date');
            $stringDate = $date . " " . $time;
            $mysqldate = date("Y-m-d H:i:s", strtotime($stringDate));
            $result = $this->Event_Model->addevent($mysqldate);

            if ($result) {
                echo "Event Successfully Added";
            }
        }
        else
        {
            echo "You are not allowed to add an event";
        }
    }
}