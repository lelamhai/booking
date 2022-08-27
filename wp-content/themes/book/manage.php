<?php
/**
* Template Name: manage
*/
?>
<?php
    $user = wp_get_current_user()->roles[0];
    if($user == NULL)
    {
        $url = home_url() . "/wp-admin";
        wp_redirect($url);
    } 
    get_header();
?>
<style>
    header,
    footer {
        display: none;
    }

    /* animation */
    .sidebar-menu {
        transform: translateX(-100%);
    }

    .collapse180 {
        transform: rotate(180deg);
    }

    .margin-content {
        margin-left: 240px;
    }

    #manage {
        display: flex;
        width: 100%;
    }

    #manage-menu-wrap {
        position: fixed;
        width: 240px;
        height: 100%;
        height: calc(100vh - 32px);
        background-color: #1d5f9b;
        display: flex;
        align-items: stretch;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 500ms ease-in-out 25ms;
    }

    
    #manage-content-wrap {
        width: 100%;
        overflow-y: scroll;
        /* transition: transform 500ms ease-in-out 25ms; */
        transition: margin 500ms ease-in-out 25ms;
    }

    .first-menu-manage {
        position: relative;
        padding: 0 15px;
    }

    .last-menu-manage {

    }

    .wrap-container {
        padding: 0 30px;
    }


    .site-title {
        text-align: center;
        background-color: #2c374d;
        padding: 10px 0;
        /* margin-bottom: 30px; */
    }

    .site-title a {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
    }

    .ui-datepicker-inline {
        width: 100%;
        background-color: transparent;
        border: 0 !important;
        color: #fff;
    }

    .ui-datepicker-header {
        background-color: transparent;
        border: 0;
    }

    .ui-datepicker-title {
        color: #fff;
    }

    /* .ui-state-default {
        background-color: transparent!important;
        color: #fff !important; 
        border: 0 !important;
    } */
    
    .ui-datepicker-calendar td a {
        background-color: transparent !important;
        color: #fff !important; 
        border: 0 !important;
    }

    .ui-datepicker-calendar .ui-datepicker-current-day a {
        background-color: #fff !important;
        color: #000 !important;
    }

    .list-item-footer {
        padding: 0 30px;
    }

    .list-item-footer li {
        padding: 5px 0;
    }

    .list-item-footer li a {
        color: #000;
        text-decoration: none;
    }

    .control-collapse {
        background-color: #1d5f9b;
        position: absolute;
        right: -30px;
        padding: 5px;
        display: flex;
        cursor: pointer;
        transition: transform 500ms ease-in-out 25ms;
    }

    .control-collapse img {
        width: 20px;
        height: auto;
    }

    .header-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .table-data-books {
        border-collapse: separate;
        border-spacing: 0 10px;
        width: 100%;
    }

    .calendar-books {
        text-align: center;
    }

    .table-data-books tbody tr:nth-child(odd) {background: #CCC}
    .table-data-books tbody tr:nth-child(even) {background: #FFF}
</style>



<?php
  
// $monday = "";
// if(date('D')!='Mon')
// {    
//   $monday = date('Y-m-d',strtotime('last Monday'));    

// }else{
//     $monday = date('Y-m-d');   
// }
// var_dump($monday);

// $date = date('Y-m-d', strtotime("+6 day", strtotime($monday)));
// var_dump($date);



// $args = array(  
//     'post_type'		    => 'books',
//     'posts_per_page'    => -1,
//     'tax_query'         => array(
//         array(
//             'taxonomy'  => 'times',
//             'field'     => 'term_id',
//             'terms'     => 154,
//         )
//     ),
//     'meta_query'	    => array(
//         array(
//             'key' => 'booking_date',
//             'value' => '2022-08-25',
//             'type' => 'date',
//             'compare' => '=',
//         )
//     )
// );
// $listBooks = get_posts($args);
// var_dump($listBooks);

?>




<main id="manage">
    <div id="manage-menu-wrap">
        <div class="first-menu-manage">
            <div class="control-collapse "><img src="<?php echo get_template_directory_uri()?>/assets/img/icon/white-left-arrow.png" alt=""></div>

            <div class="item-menu-manage datepicker">
                <div id="datepicker"></div>
            </div>
            <ul  class="nav nav-pills">
                <li class="active">
                    <a  href="#appointments" data-toggle="tab">Appointments</a>
                </li>
                <li>
                    <a href="#clients" data-toggle="tab">Client List</a>
                </li>
            </ul>
        </div>

        <div class="last-menu-manage">
            <ul class="list-item-footer">
                <li><a href="./edit-web">Edit Website</a></li>
                <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
            </ul>
            <div class="site-title"><a href="./"><?php echo get_bloginfo()?></a></div>
        </div>
    </div>
    <div id="manage-content-wrap" class="margin-content">
        <div class="wrap-container">
           
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="appointments">
                    <div class="header-bar">
                        <div class="filter-control">
                            <button>Today</button>
                            <button>Week</button>
                        </div>

                        <div class="add-appointment">+ Add appointment</div>

                        <div class="search-phone">
                            Search
                        </div>
                    </div>
                    <div class="content-books">
                        <div class="ajax-books">
                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="clients">Client List</div>
            </div>
        </div>
    </div>
</main>
<?php
    get_footer();
?>      