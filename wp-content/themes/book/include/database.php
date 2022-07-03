<?php
/*
** Create table Booking
*/
function booking_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix. "booking";
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
    global $db_version;

    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
    {   $create_sql = "CREATE TABLE " . $table_name . " (
            booking_id INT NOT NULL auto_increment,
            booking_phone INT(11) NOT NULL unique,
            booking_fullname VARCHAR(255) NOT NULL,
            booking_gmail VARCHAR(255) NULL,
            booking_message TEXT NULL,
            booking_date TIMESTAMP,
            booking_slots INT NOT NULL,
            booking_timeid INT NOT NULL,
            booking_serviceid INT NOT NULL,
            PRIMARY KEY (booking_id)
            )$charset_collate;";

        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta( $create_sql );
    }
    
}
add_action( 'init', 'booking_create_table');

function booking_insert()
{

}

function booking_update()
{
    
}

function booking_delete()
{
    
}

function booking_list()
{

}

function booking_count()
{
    
}


/*
** Create table Time
*/
function time_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
    global $db_version;

    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
    {   $create_sql = "CREATE TABLE " . $table_name . " (
            time_id INT NOT NULL auto_increment,
            time_hour VARCHAR(255) NOT NULL,
            time_slots INT NOT NULL,
            PRIMARY KEY (time_id)
            )$charset_collate;";
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta( $create_sql );
    }

    // time_insert("5:00", 1);

    // if(count(time_list()) > 0)
    // {
    //     var_dump(time_list());
    // } 

    // time_update(2, "haitho", 30);

    // time_delete(2);

    // var_dump(time_count());
}
add_action( 'init', 'time_create_table');

function time_insert($hour, $slots)
{
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    $data = array(
        'time_hour' => $hour,
        'time_slots' => $slots
    );
    $wpdb->insert($table_name, $data);
}

function time_update($id, $hour, $slots)
{
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    $wpdb->update( 
        $table_name, 
        array( 
            'time_hour' => $hour,
            'time_slots' => $slots
        ), 
        array('time_id' => $id) 
    );
}

function time_delete($id)
{
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    $wpdb->delete( $table_name, array( 'time_id' => $id) );
}

function time_list()
{
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "
                SELECT *
                FROM  $table_name
            ",
            $table_name
        )
    );

    return $results;
}

function time_count()
{
    global $wpdb;
    $table_name = $wpdb->prefix. "time";
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "
                SELECT *
                FROM  $table_name
            ",
            $table_name
        )
    );

    return count($results);
}


/*
** Create table Service
*/
function service_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix. "service";
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
    global $db_version;

    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
    {   $create_sql = "CREATE TABLE " . $table_name . " (
            service_id INT NOT NULL auto_increment,
            service_parentid INT DEFAULT 0,
            service_name VARCHAR(255),
            service_price VARCHAR(255),
            service_description VARCHAR(255),
            PRIMARY KEY (service_id)
            )$charset_collate;";
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta( $create_sql );
    }
    // service_create(3, "Title", '$70', 'description' );
}
add_action( 'init', 'service_create_table');

function service_create($parentid, $name, $price, $description)
{
    global $wpdb;
    $table_name = $wpdb->prefix. "service";
    $data = array(
        'service_parentid' => $parentid,
        'service_name' => $name,
        'service_price' => $price,
        'service_description' => $description
    );
    $wpdb->insert($table_name, $data);
}

function service_update()
{
    
}

function service_delete()
{
    
}

function service_count()
{
    
}

function service_list_parent()
{
    global $wpdb;
    $table_name = $wpdb->prefix. "service";
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "
                SELECT *
                FROM  $table_name
                WHERE service_parentid = 0
            "
        )
    );

    return $results;
}

function service_list_children($id)
{
    global $wpdb;
    $table_name = $wpdb->prefix. "service";
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "
                SELECT *
                FROM  $table_name
                WHERE service_parentid = $id
            "
        )
    );

    return $results;
}
?>