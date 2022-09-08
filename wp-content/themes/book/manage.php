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
        padding-left: 20%;
    }

    #manage {
        display: flex;
        width: 100%;
    }

    #manage-menu-wrap {
        position: fixed;
        width: 20%;
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
        height: calc(100vh - 32px);
        transition: padding 500ms ease-in-out 25ms;
    }

    .first-menu-manage {
        position: relative;
        padding: 0 15px;
    }

    .first-menu-manage .nav-pills {
        display: flex;
        flex-direction: column;
    }

    .last-menu-manage {
        width: 100%;
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

    .group-calendar {
        display: flex;
        justify-content: center;
        align-content: center;
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

    .ui-datepicker-calendar .custom-ui-datepicker-current-day a {
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

    .item-boook {
        margin: 5px;
        padding: 5px;
    }
    
    .list-calendar {
        overflow: scroll;
        scroll-behavior: smooth;
        transform: rotateX(180deg);
    }

    .not-data-books {
        color: red;
        opacity: 0;
    }

    .wrap-book-title {
        display: flex;
        margin-top: 30px;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
    }

    .wrap-book-item {
        display: flex;
        margin-bottom: 30px;
    }

    .book-control {
        display: flex;
        align-items: flex-start;
    }

    .book-name {
        width: 20%;
    }

    .book-time {
        width: 15%;
    }

    .book-date {
        width: 15%;
    }

    .book-serivces {
        width: 25%;
    }

    .book-control button {
        margin: 0 5px;
        padding: 5px;
        color: #fff;
    }

    .button-confirm-books {
        background-color: #008037;
    }

    .button-cancel-books {
        background-color: #ff5757;
    }

    button[disabled], html input[disabled] {
        background-color: #00803775;
    }

    .option-active {
        background-color: red;
    }


    /* modal */
    .modal-title {
        text-align: center;
        font-size: 28px;
    }

    .input-phone-popup input {
        width: 100%;
    }

    .modal-header {
        border-bottom: 0;
    }

    .modal-footer {
        border-top: 0;
        text-align: center;
    }
</style>


        <div class="modal fade" id="modalPhone">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Enter Client's phone number</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-phone-popup">
                            <input type="tel" class="modal-input-phone">
                        </div>
                        
                        <div class="not-data-books">There is no appointment with this phone number</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="modal-button-phone">Enter</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalBooks">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment</h5>
                    </div>

                    <div class="modal-body" id="ajax-searchbooks">
                        <div class="wrap-book-title">
                            <div class="book-name">Name</div>
                            <div class="book-date">Date</div>
                            <div class="book-time">Time</div>
                            <div class="book-serivces">Services</div>
                            <div class="book-control"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalComfirm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment has been comfirmed</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalCancel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Do you want to cancel this appointment?</h5>
                        <input type="hidden" id="idBooks" value="">
                        <input type="hidden" id="statusBooks" value="">
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary yes-cancel-books">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalCancelYes">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Your appointment has been cancelled</h5>
                    </div>
                </div>
            </div>
        </div>

<style>
    #manage {
        position: relative;
    }

    .design {
        position: absolute;
        opacity: 0.5;
    }
</style>

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
                            <button class="option-select" data-option="1">Today</button>
                            <button class="option-select option-active" data-option="7">Week</button>
                        </div>

                        <div class="add-appointment">+ Add appointment</div>

                        <div class="search-phone">
                            <button class="button-search-books" data-toggle="modal" data-target="#modalPhone" data-backdrop="static" data-keyboard="false">Confirm/Cancel Appointments</button>
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
    <!-- <div class="design">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/Manage.png" alt="">
    </div> -->
</main>
<?php
    get_footer();
?>      