<?php
    add_action('wp_ajax_insert', 'insert_function');
    add_action('wp_ajax_nopriv_insert', 'insert_function');
    function insert_function() {

        if($_GET['phoneNumber'] != null && $_GET['fullName'] != null && $_GET['time_id'] != null && $_GET['datepicker'] && $_GET['slots'])
        {
            $phoneNumber = $_GET['phoneNumber'];
            $fullName = $_GET['fullName'];
            $time_id = $_GET['time_id'];
            $datepicker = $_GET['datepicker'];
            $message = $_GET['message'];
            $slots = $_GET['slots'];
            $email = $_GET['email'];
            booking_insert($phoneNumber, $fullName, $time_id, $datepicker, $message, $slots, $email);
        }
        wp_die(); 
    }



    add_action('wp_ajax_getSlots', 'getSlots_function');
    add_action('wp_ajax_nopriv_getSlots', 'getSlots_function');
    function getSlots_function() {
        $json = array();
        if($_GET["date"] != null && $_GET["time_id"] != null)
        {

            $date=date_create($_GET["date"]);
            $dateNew = date_format($date,"Y/m/d");
            $slotsBooking = time_data_get_slots($dateNew , $_GET["time_id"]);

            $booked = 0;
            foreach($slotsBooking as $slot)
            {
                $booked = $booked + $slot->booking_slots;
            }
            
            $slots = time_data_by_id($_GET["time_id"])[0]->time_slots;
            $slots = $slots - $booked;
            $json['slots'] = $slots;

            wp_send_json_success( $slots);
        }

        wp_die(); 
    }

?>