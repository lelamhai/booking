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
        height: calc(100vh - 32px);
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

    #datepicker .ui-datepicker-inline {
        width: 100%;
        background-color: transparent;
        border: 0 !important;
        color: #fff;
    }

    #datepicker .ui-datepicker-header {
        background-color: transparent;
        border: 0;
    }

    #datepicker .ui-datepicker-title {
        color: #fff;
    }
    
    #datepicker .ui-datepicker-calendar td a {
        background-color: transparent !important;
        color: #fff !important; 
        border: 0 !important;
    }

    #datepicker .ui-datepicker-calendar .custom-ui-datepicker-current-day a {
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
        height: 600px;
        overflow: scroll;
        scroll-behavior: smooth;
    }

    .today {
        display: flex;
        flex-direction: column;
    }

    .item-book-header {
        display: inline-flex;
        background-color: #00ff85;
    }

    .item-book-body {
        display: inline-flex;
    }

    .cell-book {
        margin: 5px;
        width: 250px;
    }

    .item-book-header .cell-book:nth-child(1) {
        width: 100px;
    }

    .item-book-body .cell-book:nth-child(1) {
        width: 100px;
    }

    .group-button {
        text-align: center;
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

    .icon-collapse {
        float:right;
        cursor: pointer;
        position: relative;
    }

    .icon-collapse .dashicons-minus {
        position: absolute;
        top: 0;
        right: 5px;
    }

    .icon-collapse .first-minus {
        transform: rotate(90deg);
        transition: all .25ms;
    }

    .hide-card {
        display: none;
        transition: width 500ms ease-in-out 25ms;
    }

    .group-button .edit {
        background-color: #fdbd59;
        color: #fff;
        padding: 3px;
    }

    .group-button .delete {
        background-color: #fd0000;
        color: #fff;
        padding: 3px;
    }

    .status-books {
        font-size: 18px;
        font-weight: bold;
    }

    .wrap-service-parent {
        display: none;
    }
    
    .add-appointment {
        cursor: pointer;
    }
    /* addpointments */
    .over-hide {
        overflow: hidden;
    }

    .select-nember {
        display: flex;
        flex-wrap: wrap;
    }

    [type="radio"]:checked,
    [type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
    width: 0;
    height: 0;
    visibility: hidden;
    }

    .checkbox-budget:checked + label,
    .checkbox-budget:not(:checked) + label {
    position: relative;
    display: inline-block;
    padding: 12.5px 0;
    width: 100px;
    margin-right: 48.8px;
    margin-bottom: 10px;
    text-align: center;
    overflow: hidden;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 10px;
    transition: all .3s;
    border: 1px solid #5b6a66;
    }

    .checkbox-budget:checked + label {
    background-color: transparent;
    }

    .checkbox-budget:not(:checked) + label:hover {
    background-image: url('../../assets/img/icon-theme/bg-btn.png');
    background-size: cover;
    }

    .checkbox-budget:not(:checked) + label:hover span {
    color: #ffffff;
    }

    .checkbox-budget:checked + label::before,
    .checkbox-budget:not(:checked) + label::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    z-index: -1;
    }

    .checkbox-budget:checked + label span,
    .checkbox-budget:not(:checked) + label span {
    position: relative;
    display: block;
    }
    .checkbox-budget:checked + label span::before,
    .checkbox-budget:not(:checked) + label span::before {
    position: absolute;
    content: attr(data-hover);
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    color: white;
    }
    .checkbox-budget:not(:checked) + label span::before {
    max-height: 0;
    }
    .checkbox-budget:checked + label span::before {
    max-height: 100%;
    }

    .error {
        font-size: 18px !important;
        transform: unset !important;
        margin-top: 7px;
        opacity: 0;
    }

    .red {
        color: red;
        font-size: 30px;
        transform: translate(3px,2px);
        display: inline-block;
    }

    .wrap-input-form {
    width: 100%;
    margin-bottom: 15px;
    }

    .label-card {
    padding-bottom: 11.5px;
    font-size: 30px;
    font-family: 'Playfair Display', serif;
    font-weight: 400;
    }

    .wrap-input-form input {
    border: 1px solid #d6d4cd;
    width: 100%;
    height: 50px;
    padding: 0 15px;
    background-color: transparent;
    font-size: 22px;
    color: black;
    }


    .wrap-service-parent .wrap-service-child .error-checkbox {
    display: none;
    }

    .wrap-number-of-guest .guest-title {
        font-size: 40px;
        padding-bottom: 29px;
        font-weight: 400;
        font-family: 'Playfair Display', serif;
    }

    .guest-item-title {
        padding-bottom: 10px;
        font-size: 30px;
        font-family: 'Playfair Display', serif;
    }

    .wrap-button-number {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 30px;
    } 

    .number {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        position: relative;
        padding-left: 80px;
        margin-right: 130px;
        margin-bottom: 20px;
        cursor: pointer;
        font-size: 40px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-family: 'Playfair Display', serif;
        font-weight: 400;
        }

        .number input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 50px;
  width: 50px;
  border: 1px solid #a8a6a6;
  transition: all .25s;
}

/* When the checkbox is checked, add a blue background */
.number input:checked ~ .checkmark {
  background-color: #008037;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.number input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.number .checkmark:after {
  position: absolute;
  content: '';
  background: url('../../assets/img/icon-theme/icon-check.png') no-repeat;
  width: 60px;
  height: 60px;
  top: -6px;
  left: 4px;
}

.hidden-child {
    display: none;
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

        <div class="modal fade" id="modalDeleteBook">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Do you want to delete?</h5>
                        <input type="hidden" id="idDeleteBooks" value="">
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary yes-delete-books">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #modalEditBook .modal-body .wrap-modal-books,
            #createBook .modal-body .wrap-modal-books {
                overflow-y: auto;
                height: 500px;
            }
        </style>

        <div class="modal fade" id="createBook">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="wrap-modal-books">
                            <div class="wrap-input-form wrap-input-full">
                                <div class="label-card TextColorBody">Your name<span class="red">*</span></div>
                                <input type="text" class="full-name">
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-input-form wrap-input-phone-number">
                                <div class="label-card TextColorBody">Phone number<span class="red">*</span></div>
                                <input type="tel" class="phone-number">
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-input-form wrap-input-email">
                                <div class="label-card TextColorBody">Your email</div>
                                <input type="email" class="email">
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-input-form wrap-input-location">
                                <div class="label-card TextColorBody">Your location</div>
                                <input type="text" class="location">
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-input-form wrap-input-datepicker">
                                <div class="label-card TextColorBody">Pick a day<span class="red">*</span></div>
                                <input type="text" id="datepickerCalendar">
                                <!-- <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-theme/icon-time.png" alt="" class="calendar"> -->
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-input-form wrap-input-single-main">
                                <div class="label-card TextColorBody">Pick a preferred time<span class="red">*</span></div>
                                <?php
                                    $terms = get_terms( array(
                                        'taxonomy' => 'times',
                                        'orderby'  => 'id',
                                        'order'    => 'ASC',
                                        'hide_empty' => false,
                                    ) );
                                ?>

                                <select id="single-main" class="single-main" style="width: 100%">
                                    <?php
                                    foreach($terms as $term)
                                    {
                                        ?>
                                            <option value="<?php echo $term->term_id?>"><?php echo $term->name?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <div class="error red">Error</div>
                            </div>
                            <div class="wrap-data-ajax">
                            <!-- load ajax -->
                            </div>

                            <!-- <div class="wrap-button submit ">
                                <button class="BackgroundButtonBody TextColorButtonBody">Submit</button>
                            </div> -->
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary submit">Save</button>
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
           
            <div class="tab-content">
                <div class="tab-pane active" id="appointments">
                    <div class="header-bar">
                        <div class="filter-control">
                            <button class="option-select" data-option="1">Today</button>
                            <button class="option-select option-active" data-option="7">Week</button>
                        </div>

                        <div class="add-appointment" data-toggle="modal" data-target="#createBook"  data-backdrop="static" data-keyboard="false">+ Add appointment</div>

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