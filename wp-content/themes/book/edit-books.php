<?php
/**
* Template Name: edit-books
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            /* modal */
            .loader {
                border: 9px solid #000;
                border-top-color: #0f6ac4;
                width: 70px;
                height: 70px;
                border-radius: 50%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0);
                }
                100% {
                    transform: rotate(360deg);
                }
            }

            main {
                max-width: 800px;
                margin: auto;
            }

            .menu {
                margin-bottom: 45px;
            }

            /* Business */
            .body-business {
                display: flex;
            }
            .col {
                width: 50%;
            }

            .wrap-business {
                padding: 15px 0;
            }

            .label-business {
                padding-bottom: 5px;
                font-weight: bold;
            }

            .input-business {
                width: 90%;
                height: 40px;
                padding: 0 15px;
            }

            /* Hours */
            .wrap-hours {
                margin: 15px 0;
            }

            .label-hours {
                padding-bottom: 10px;
                font-weight: bold;
            }

            .time-from {
                padding: 0 5px;
                margin-right: 15px;
            }

            .time-to {
                padding: 0 5px;
                margin-right: 15px;
            }

            .wrap-input-hours b {
                padding: 0 15px;
            }

            .hours-active {
                margin-left: 60px;
                color: #fff;
                padding: 3px;
                border: 0;
            }

            /* Menu */
            .create-time,
            .create-menu {
                background-color: #008037;
                padding: 10px;
                border: 0;
                color: #fff;
                border-radius: 5px;
            }

            .create-time {
                padding: 5px;
            }

            .menu-count {
                width: 160px;
                height: 100%;
                padding: 0 15px;
            }

            .head-menu {
                display: flex;
                justify-content: space-between;
                padding-top: 30px;
            }

            .title-level {
                font-weight: bold;
                font-size: 24px;
            }

            .title-menu {
                font-size: 32px;
                color: #0f6ac4;
            }

            .save {
                padding: 15px;
                font-size: 20px;
                background-color: #0f6ac4;
                color: #fff;
                border: 0;
                border-radius: 5px;
                margin: 30px 0 45px 0;
            }

            .delete-time,
            .delete-nemu {
                color: #fff;
                background-color: #ac2b2b;
                border: 0;
                padding: 10px 15px;
                border-radius: 5px;
            }

            .delete-time {
                padding: 5px;
            }

            .create-level {
                display: flex;
                padding: 30px 0 45px 0;
            }

            .block-level1:first-child>.wrap-level>.level>.wrap-right>.delete-level {
                display: none;
            }

           

            .wrap-level {
                width: 100%;
                margin: 30px 0;
            }

            .wrap-menu-block {
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }

            .menu-price {
                position: relative;
            }

            .menu-title,
            .menu-price,
            .menu-description {
                width: 100%;
                margin: 15px 0;
            }

            .menu-title span,
            .menu-price span,
            .menu-description span {
                font-weight: bold;
            }

            .title,
            .price,
            .description {
                width: 100%;
                height: 40px;
                padding: 10px 15px;
            }

            .price {
                padding-left: 30px;
            }

            .price-dolla {
                position: absolute;
                top: 30px;
                left: 15px;
                font-weight: bold;
            }

            .level {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
            }

            .wrap-right {
                display: flex;
            }

            .block-level2 {
                width: 80%;
            }

            .wrap-menu-button {
                padding-bottom: 30px;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .add-sub {
                background-color: #008037;
                padding: 10px;
                border: 0;
                color: #fff;
                border-radius: 5px;
            }

            .delete-level {
                margin-left: 15px;
            }

            .add-sub-service {
                text-align: center;
                width: 100%;
            }

            .add-sub-service button {
                border: 0;
                background-color: #008037;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
            }

            /* times */
            .wrap-times-tile .seats,
            .wrap-times-tile .time {
                font-weight: bold;
            }
            .wrap-times-tile {
                display:flex;
                margin: 15px 0 30px 0;
            }

            .group-button {
                display:flex;
            }

            .wrap-times-row:nth-child(4) > .group-button > .delete-level {
                display: none;
            }

            .time {
                    width: 300px;
                }
                .seats {
                    width: 100px;
                     margin-right: 15px;
                }

                .wrap-times-row {
                    display: flex;
                    padding: 15px 0;
                    align-items: center;
                }

                .time .input-time {
                    width: 80px;
                    margin-right: 15px;

                }

                .seats input {
                    width: 100%;
                }

                .input-fill {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    font-size: 10px;
                }

                .input-fill .fill-all {
                    width: 64px;
                    padding: 0 5px;
                    margin-left: 5px;
                }

                .time-excerpt {
                    padding: 30px 0;
                }

                .button-fill-all {
                    font-size: 10px;
                    background-color: #008037;
                    border: 0;
                    color: #fff;
                    border-radius: 5px;
                }

            @media (min-width: 768px)
            {
                .modal-dialog {
                    width: 500px;
                    text-align: center;
                }
            }
            
            .message {
                padding-bottom: 30px;
                font-size: 28px;
                font-weight: bold;
            }

            .yes {
                background-color: #008037;
                border: 0;
                color: #fff;
                padding: 5px 15px;
                margin-right: 10px;
            }

            .no {
                background-color: #0f6ac4;
                color: #fff;
                border: 0;
                padding: 5px 15px;
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
    <!-- Modal -->
    
    <!-- data-toggle="modal" data-target="#deleteModal" -->

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="message">Do you want to delete?</div>
                    <input type="hidden" id="popup-title" value="">
                    <input type="hidden" id="popup-id" value="">
                    <input type="hidden" id="popup-taxonomy" value="">
                    <input type="hidden" id="popup-tempParentId" value="">
                    <input type="hidden" id="popup-tempChildId" value="">
                    <div class="comfirm">
                        <button class="yes yes-serivces">Yes</button>
                        <button class="no no-serivces" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteTimes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="message">Do you want to delete?</div>
                    <input type="hidden" id="popup-times-id" value="">
                    <input type="hidden" id="popup-times-taxonomy" value="">
                    <input type="hidden" id="popup-times-tempId" value="">
                    <div class="comfirm">
                        <button class="yes yes-times">Yes</button>
                        <button class="no no-times" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="finish">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="message">Save successfully</div>
                    <div class="comfirm">
                        <button class="yes" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in" id="loading" data-keyboard="false" data-backdrop="static">
        <div class="loader"></div>
    </div>
        <main>
            <div id="exTab1" class="container-fs">
                <ul  class="nav nav-pills" id="myTab">
                    <li class="active">
                        <a  href="#1a" data-toggle="tab">BUSINESSS INFO</a>
                    </li>
                    <li>
                        <a href="#2a" data-toggle="tab">WEBSITE INFO</a>
                    </li>
                    <li>
                        <a href="./" target="_blank">VISIT YOUR WEBSITE</a>
                    </li>
                   
                </ul>
                <div class="tab-content clearfix">
                    <!-- Business info -->
                    <div class="tab-pane active" id="1a">
                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Your Business Info</div>
                                </div>

                                <div class="body-business">
                                    <div class="col">
                                        <div class="wrap-business">
                                            <div class="label-business">Business name</div>
                                            <?php
                                                $businessName = "";
                                                if(get_option("businessName"))
                                                {
                                                    $businessName = get_option("businessName");
                                                }
                                            ?>
                                            <input type="text" class="input-business" data-key="businessName" value="<?php echo $businessName; ?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Address</div>
                                            <?php
                                                $address = "";
                                                if(get_option("address"))
                                                {
                                                    $address = get_option("address");
                                                }
                                            ?>
                                            <input type="text" class="input-business" data-key="address" value="<?php echo $address?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Phone number</div>
                                            <?php
                                                $phoneNumber = "";
                                                if(get_option("phoneNumber"))
                                                {
                                                    $phoneNumber = get_option("phoneNumber");
                                                }
                                            ?>
                                            <input type="number" class="input-business" data-key="phoneNumber" value="<?php echo $phoneNumber?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Google maps (link)</div>
                                            <?php
                                                $googleMaps = "";
                                                if(get_option("googleMaps"))
                                                {
                                                    $googleMaps = get_option("googleMaps");
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="googleMaps" value="<?php echo $googleMaps?>">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="wrap-business">
                                            <div class="label-business">Google review (link)</div>
                                            <?php
                                                $googleReview = "";
                                                if(get_option("googleReview"))
                                                {
                                                    $googleReview = get_option("googleReview");
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="googleReview" value="<?php echo $googleReview?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your facebook (link)</div>
                                            <?php
                                                $facebook = "";
                                                if(get_option("facebook"))
                                                {
                                                    $facebook = get_option("facebook");
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="facebook" value="<?php echo $facebook?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your instagram (link)</div>
                                            <?php
                                                $instagram = "";
                                                if(get_option("instagram"))
                                                {
                                                    $instagram = get_option("instagram");
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="instagram" value="<?php echo $instagram?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your youtube channel (link)</div>
                                            <?php
                                                $youtube = "";
                                                if(get_option("youtube"))
                                                {
                                                    $youtube = get_option("youtube");
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="youtube" value="<?php echo $youtube?>">
                                        </div>
                                    </div>
                                </div>

                                <button class="save save-business">Save changes</button>
                            </div>
                        </section>
                        
                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Your Services</div>
                                </div>

                                <div class="body-menu">
                                    <?php
                                        if(count(get_data_taxonomy(0)) == 0)
                                        {
                                            ?>
                                                    <div class="wrap-menu-block block-level1">
                                                        <div class="wrap-level" data-id="0" data-taxonomy="services" data-parent="0" data-title="parent" data-tempparent='0'>
                                                            <div class="level">
                                                                <div class="title-level">Level 1</div>
                                                                <div class="wrap-right">
                                                                    <div class="button-menu"><button class="create-menu">Add</button></div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-title"><span>Title</span><input type="text" class="title" value="<?php echo $parent->name?>"></div>
                                                            <div class="menu-price"><span>Price</span><input type="number" class="price" value="<?php echo $price?>"><div class="price-dolla">$</div></div>
                                                            <div class="menu-description"><span>Description</span><input type="text" class="description" value="<?php echo $parent->description?>"></div>
                                                        </div>
                                                        <div class="add-sub-service"><button class="add-sub">Add sub-services</button></div>
                                                    </div>
                                            <?php
                                        } else {

                                            foreach(get_data_taxonomy(0) as $parent)
                                            {
                                                $price = get_term_meta($parent->term_id, 'services-price', true );
                                                ?>
                                                    <div class="wrap-menu-block block-level1">
                                                        <div class="wrap-level" data-id="<?php echo $parent->term_id?>" data-taxonomy="services" data-parent="0" data-title="parent">
                                                            <div class="level">
                                                                <div class="title-level">Level 1</div>
                                                                <div class="wrap-right">
                                                                    <div class="button-menu"><button class="create-menu">Add</button></div>
                                                                    <div class="delete-level"><button class="delete-nemu" data-toggle="modal" data-target="#deleteModal">Delete</button></div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-title"><span>Title</span><input type="text" class="title" value="<?php echo $parent->name?>"></div>
                                                            <div class="menu-price"><span>Price</span><input type="number" class="price" value="<?php echo $price?>"><div class="price-dolla">$</div></div>
                                                            <div class="menu-description"><span>Description</span><input type="text" class="description" value="<?php echo $parent->description?>"></div>
                                                        </div>
                                                        
                                                        <?php
                                                            if(count(get_data_taxonomy($parent->term_id))>0)
                                                            {
                                                                ?><div class="wrap-menu-block block-level2"><?php
                                                                ?>
                                                                        <?php
                                                                            foreach(get_data_taxonomy($parent->term_id) as $children)
                                                                            {
                                                                                $price = get_term_meta($children->term_id, 'services-price', true );
                                                                                ?>
                                                                                    <div class="wrap-level" data-id="<?php echo $children->term_id?>" data-taxonomy="services" data-parent="<?php echo $children->parent?>" data-title="children">
                                                                                        <div class="level">
                                                                                            <div class="title-level">Level 2</div>
                                                                                            <div class="wrap-right">
                                                                                                <div class="button-menu"><button class="create-menu">Add</button></div>
                                                                                                <div class="delete-level"><button class="delete-nemu" data-toggle="modal" data-target="#deleteModal">Delete</button></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="menu-title"><span>Title</span><input type="text"  class="title" value="<?php echo $children->name?>"></div>
                                                                                        <div class="menu-price"><span>Price</span><input type="number" class="price" value="<?php echo $price?>"><div class="price-dolla">$</div></div>
                                                                                        <div class="menu-description"><span>Description</span><input type="text" class="description" value="<?php echo $children->description?>"></div>
                                                                                    </div>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                <?php
                                                                ?></div><?php
                                                            } else {
                                                                ?>
                                                                    <div class="add-sub-service"><button class="add-sub">Add sub-services</button></div>
                                                                <?php
                                                            }
                                                        ?>
                                                        
                                                    </div>
                                                <?php
                                            }
                                        }
                                    ?>

                                
                                </div>

                                <button class="save save-services">Save changes</button>
                            </div>
                        </section>

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Your Opening Hours</div>
                                </div>

                                <div class="body-hours">
                                    <?php
                                        for($i=0; $i<7; $i++)
                                        {
                                            ?><div class="wrap-hours"><?php
                                            $key = "week".($i+2);

                                            $value = "";
                                            if(get_option($key))
                                            {
                                                $value = get_option($key);
                                                $arr = explode('-', $value);
                                            }

                                            // var_dump($arr);

                                            if($i == 0)
                                            {
                                                ?>
                                                    <div class="label-hours">Monday</div>
                                                <?php
                                            }

                                            if($i == 1)
                                            {
                                                ?>
                                                    <div class="label-hours">Tuesday</div>
                                                <?php
                                            }

                                            if($i == 2)
                                            {
                                                ?>
                                                    <div class="label-hours">Wednesday</div>
                                                <?php
                                            }

                                            if($i == 3)
                                            {
                                                ?>
                                                    <div class="label-hours">Thursday</div>
                                                <?php
                                            }

                                            if($i == 4)
                                            {
                                                ?>
                                                    <div class="label-hours">Firday</div>
                                                <?php
                                            }

                                            if($i == 5)
                                            {
                                                ?>
                                                    <div class="label-hours">Saturday</div>
                                                <?php
                                            }

                                            if($i == 6)
                                            {
                                                ?>
                                                    <div class="label-hours">Sunday</div>
                                                <?php
                                            }
                                            ?>
                                                <div class="wrap-input-hours">
                                                    <?php
                                                        $valueFrom = "9:30";
                                                        if(count($arr) > 0)
                                                        {
                                                            $valueFrom = $arr[0];
                                                        } 
                                                    ?>
                                                    <input type="text" class="time-from" value="<?php echo $valueFrom?>">
                                                    <?php 
                                                        $list = array("AM", "PM");
                                                        $index = 1;
                                                        if(count($arr) > 0)
                                                        {
                                                            if($arr[1] != "")
                                                            {
                                                                $index = $arr[1];
                                                            }
                                                        }
                                                    ?>
                                                    <select name="" id="" class="option-from">
                                                        <?php
                                                            for($j=0; $j<count($list); $j++)
                                                            {
                                                                if($j == $index)
                                                                {
                                                                    ?>
                                                                        <option value="<?php echo $j;?>" selected><?php echo $list[$j];?></option>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                        <option value="<?php echo $j;?>"><?php echo $list[$j];?></option>
                                                                    <?php
                                                                }
                                                                
                                                            }
                                                        ?>
                                                    </select>
                                                    <b>to</b>
                                                    <?php
                                                        $valueFrom = "9:30";
                                                        if(count($arr) > 0)
                                                        {
                                                            $valueFrom = $arr[2];
                                                        } 
                                                    ?>
                                                    <input type="text" class="time-to" value="<?php echo $valueFrom?>">
                                                    <?php 
                                                        $index = 2;
                                                        if(count($arr) > 0)
                                                        {
                                                            if($arr[3] != "")
                                                            {
                                                                $index = $arr[3];
                                                            }
                                                        }
                                                    ?>
                                                    <select name="" id="" class="option-to">
                                                        <?php
                                                            for($j=0; $j<count($list); $j++)
                                                            {
                                                                if($j == $index)
                                                                {
                                                                    ?>
                                                                        <option value="<?php echo $j;?>" selected><?php echo $list[$j];?></option>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                        <option value="<?php echo $j;?>"><?php echo $list[$j];?></option>
                                                                    <?php
                                                                }
                                                                
                                                            }
                                                        ?>
                                                    </select>
                                                    <?php
                                                        $actives = array("Closed","Open");
                                                        $index = 1;
                                                        if(count($arr) > 0)
                                                        {
                                                            if($arr[4] != "")
                                                            {
                                                                $index = $arr[4];
                                                            }
                                                        }

                                                        $styleSelect = "style='background-color: #ac2b2b;'";
                                                        if($index == 1)
                                                        {
                                                            $styleSelect = "style='background-color: #008037;'";
                                                        }
                                                    ?>
                                                    <select name="" id="" class="hours-active" <?php echo $styleSelect; ?>>
                                                        <?php

                                                            for($k=0; $k<count($actives); $k++)
                                                            {
                                                                if($k == $index)
                                                                {
                                                                    ?>
                                                                        <option value="<?php echo $k;?>" selected><?php echo $actives[$k];?></option>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                        <option value="<?php echo $k;?>"><?php echo $actives[$k];?></option>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            <?php
                                            ?></div><?php
                                        }
                                    ?>
                                </div>

                                <button class="save save-hours">Save changes</button>
                            </div>
                        </section>

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Time & Seat Available for Online Appointments</div>
                                </div>
                                
                                <div class="body-menu">
                                    <div class="time-excerpt">Enter 0 (zero) in the box below to turn off online appointments</div>
                                    
                                    <div class="wrap-times-tile">
                                        <div class="time"></div>
                                        <div class="seats input-fill">
                                            Fill all: <input type="number" value="1" class="fill-all">
                                        </div>
                                        <div class="group-button">
                                            <button class="button-fill-all ">Update</button>
                                        </div>
                                    </div>

                                    <div class="wrap-times-tile" style="margin-bottom: 0;">
                                        <div class="time">Time</div>
                                        <div class="seats">Seats</div>
                                        <div class="group-button"></div>
                                    </div>
                                    <?php
                                        if(count(get_data_times()) == 0)
                                        {
                                            ?>
                                                <div class="wrap-times-row" data-id="0" data-taxonomy="times" data-tempid="0">
                                                    <div class="time">
                                                        <input type="text" class="input-time" value="">
                                                        <select name="" id="" class="time-option">
                                                            <?php
                                                                for($j=0; $j<count($list); $j++)
                                                                {
                                                                    ?>
                                                                        <option value="<?php echo $j?>"><?php echo $list[$j]?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="seats"><input type="number" class="input-slots" value=""></div>
                                                    <div class="group-button">
                                                        <div class="button-menu"><button class="create-time">Add</button></div>
                                                        <div class="delete-level"><button class="delete-time" data-toggle="modal" data-target="#deleteTimes">Delete</button></div>
                                                    </div>
                                                </div>
                                            <?php
                                        } else {
                                            foreach(get_data_times() as $time)
                                            {
                                                $slots = get_term_meta($time->term_id, 'times-slots', true );
                                                ?>
                                                    <div class="wrap-times-row" data-id="<?php echo $time->term_id?>" data-taxonomy="times">
                                                        <div class="time">

                                                            <?php
                                                                $timeExplode = explode('-', $time->name);
                                                                $index = 0;
                                                                if($timeExplode[1] != "")
                                                                {
                                                                    $index = $timeExplode[1];
                                                                }
                                                            ?>

                                                            <input type="text" class="input-time" value="<?php echo $timeExplode[0]?>">
                                                            <select name="" id="" class="time-option">
                                                                <?php
                                                                    for($j=0; $j<count($list); $j++)
                                                                    {
                                                                        if($index == $j)
                                                                        {
                                                                            ?>
                                                                                <option value="<?php echo $j?>" selected><?php echo $list[$j]?></option>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                                <option value="<?php echo $j?>"><?php echo $list[$j]?></option>
                                                                            <?php
                                                                        }
                                                                        
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="seats"><input type="number" class="input-slots" value="<?php echo $slots?>"></div>
                                                        <div class="group-button">
                                                            <div class="button-menu"><button class="create-time">Add</button></div>
                                                            <div class="delete-level"><button class="delete-time" data-toggle="modal" data-target="#deleteTimes">Delete</button></div>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        }

                                    ?>
                                </div>

                                <button class="save save-time">Save changes</button>
                            </div>
                        </section>
                    </div>

                    <!-- Website info -->

                    <style>
                        #exTab1  {
                            margin-top: 45px;
                        }

                        #exTab1 .nav-pills {
                            display: flex;
                            justify-content: center;
                        }

                        #exTab1 .nav-pills>li>a {
                            font-size: 20px;
                            font-weight: bold;
                        }

                        #output,
                        #output1,
                        #output2,
                        #output3,
                        #output4,
                        #output5 {
                            width: 100px;
                            height: auto;
                        }

                        .group-color {
                            display: flex;
                            margin-bottom: 30px;
                        }

                        .wrap-header-color {
                            margin-right: 60px;
                        }

                        .header-logo {
                            margin-bottom: 30px;
                        }

                        .title-header-menu {
                            font-weight: bold;
                            padding-bottom: 15px;
                            font-size: 17px;
                        }

                        .menu-link-menu {
                            margin: 15px 0;
                        }

                        
                        .youtube-header,
                        .link-menu,
                        .additional-menu {
                            width: 100%;
                        }

                        .nav>li>a {
                            background-color: #eee;
                        }

                        .nav-pills>li+li {
                            margin-left: 15px;
                        }

                        .group-input-color {
                            display: flex;
                        }

                        .hexcolor {
                            width: 100px;
                        }

                        .wrap-button-color {
                            margin: 0 60px;
                        }

                        .wrap-title-welcome-word {
                            margin-bottom: 30px;
                        }

                        .title-welcome {
                            width: 100%;
                        }
                        
                        .content-welcome {
                            width: 100%;
                        }
                    </style>


                    <div class="tab-pane" id="2a">
                        <section class="menu">
                            <div class="wrap-menu">
                                <form id="header-form" method="post" enctype="multipart/form-data">
                                    <div class="head-menu">
                                        <div class="title-menu">Header</div>
                                    </div>

                                    <div class="body-menu">
                                            <div class="wrap-header-edit">
                                                <div class="group-color">
                                                    <div class="wrap-header-color">
                                                        <div class="label-color">Header Color</div>
                                                        <?php
                                                            $color = "#000000";
                                                            if(get_option("headerColor"))
                                                            {
                                                                $color = get_option("headerColor");
                                                            }
                                                        ?>
                                                        
                                                        <div class="group-input-color">
                                                            <input type="color" id="headerColor" class="header-color" data-key="headerColor" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>"> 
                                                            <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexHeaderColor" class="hexcolor"></input>
                                                        </div>
                                                    </div>

                                                    <div class="wrap-text-color">
                                                        <div class="label-color">Text Color</div>
                                                        <?php
                                                            $colorText = "#000000";
                                                            if(get_option("textColor"))
                                                            {
                                                                $colorText = get_option("textColor");
                                                            }
                                                        ?>
                                                        <div class="group-input-color">
                                                            <input type="color" id="textColor" class="text-color" data-key="textColor" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorText?>"> 
                                                            <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexTextColor" class="hexcolor"></input>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="header-logo">
                                                    <div class="label-logo">Logo</div>
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("logo"))
                                                        {
                                                            $url = get_option("logo");
                                                        }
                                                    ?>
                                                    <img id="output" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput" accept="image/*" onchange="loadFile(event)" data-key="logo">
                                                </div>

                                                <div class="header-menu">
                                                    <div class="title-header-menu">
                                                        Header Menu
                                                    </div>

                                                    <div class="menu-additional-menu">
                                                        <div class="label-additional-menu">Additional menu</div>
                                                        <?php 
                                                            $additionalMenu = "";
                                                            if(get_option("additionalMenu"))
                                                            {
                                                                $additionalMenu = get_option("additionalMenu");
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $additionalMenu?>" class="additional-menu" data-key="additionalMenu">
                                                    </div>

                                                    <div class="menu-link-menu">
                                                        <div class="label-link-menu">Link</div>
                                                        <?php 
                                                            $linkMenu = "";
                                                            if(get_option("linkMenu"))
                                                            {
                                                                $linkMenu = get_option("linkMenu");
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $linkMenu?>" class="link-menu" data-key="linkMenu">
                                                    </div>

                                                    <div class="menu-youtube-menu">
                                                        <div class="label-youtube-menu">Header Youtube Video (youtube video -> share -> embed -> copy link & paste in here)</div>
                                                        <?php 
                                                            $youtubeHeader = "";
                                                            if(get_option("youtubeHeader"))
                                                            {
                                                                $youtubeHeader = get_option("youtubeHeader");
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $youtubeHeader?>" class="youtube-header" data-key="youtubeHeader">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <button class="save save-header">Save changes</button>
                                </form>
                            </div>
                        </section>
                        
                        <style>
                            .name-body {
                                font-size: 18px;
                                color: #0f6ac4;
                            }

                            .image-welcome {
                                margin: 15px 0;
                            }
                        </style>

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Body</div>
                                </div>

                                <div class="body-menu">
                                    <div class="group-color">
                                        <div class="wrap-background-color">
                                            <div class="label-color">Background Color</div>
                                                <?php
                                                    $color = "#000000";
                                                    if(get_option("backgroundColor"))
                                                    {
                                                        $color = get_option("backgroundColor");
                                                    }
                                                ?>
                                                        
                                            <div class="group-input-color">
                                                <input type="color" id="backgroundColor" class="background-color" data-key="backgroundColor" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexBackgroundColor" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-button-color">
                                            <div class="label-color">Button Color</div>
                                                <?php
                                                    $colorButton = "#000000";
                                                    if(get_option("buttonColor"))
                                                    {
                                                        $colorButton = get_option("buttonColor");
                                                    }
                                                ?>
                                            <div class="group-input-color">
                                                <input type="color" id="buttonColor" class="button-color" data-key="buttonColor" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorButton?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorButton?>" id="hexButtonColor" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-body-text-color">
                                            <div class="label-color">Text Color</div>
                                                <?php
                                                    $textColorBody = "#000000";
                                                    if(get_option("textColorBody"))
                                                    {
                                                        $textColorBody = get_option("textColorBody");
                                                    }
                                                ?>
                                            <div class="group-input-color">
                                                <input type="color" id="textColorBody" class="text-color-body" data-key="textColorBody" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>" id="hexTextColorBody" class="hexcolor"></input>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="welcome-word">
                                        <div class="name-body">Your welcome words</div>
                                        <div class="wrap-title-welcome-word">
                                            <div class="title-body">Title text</div>
                                            <?php
                                                    $text = "";
                                                    if(get_option("titleWelcome"))
                                                    {
                                                        $text = get_option("titleWelcome");
                                                    }
                                            ?>
                                            <input type="text" class="title-welcome" data-key="titleWelcome" value="<?php echo $text?>">
                                        </div>
                                        <div class="wrap-content-welcome-word">
                                            <div class="title-body">Body text</div>
                                            <?php
                                                $text = "";
                                                if(get_option("contentWelcome"))
                                                {
                                                    $text = get_option("contentWelcome");
                                                }
                                            ?>
                                            <textarea cols="30" rows="5" class="content-welcome" data-key="contentWelcome"><?php echo $text?></textarea>
                                        </div>
                                    </div>

                                    <div class="wrap-image-welcome">

                                            <div class="image-welcome">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("slider1"))
                                                        {
                                                            $url = get_option("slider1");
                                                        }
                                                    ?>
                                                    <img id="output1" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput1" accept="image/*" onchange="loadFile1(event)" data-key="slider1">
                                            </div>

                                            <div class="image-welcome">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("slider2"))
                                                        {
                                                            $url = get_option("slider2");
                                                        }
                                                    ?>
                                                    <img id="output2" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput2" accept="image/*" onchange="loadFile2(event)" data-key="slider2">
                                            </div>


                                            <div class="image-welcome">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("slider3"))
                                                        {
                                                            $url = get_option("slider3");
                                                        }
                                                    ?>
                                                    <img id="output3" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput3" accept="image/*" onchange="loadFile3(event)" data-key="slider3">
                                            </div>


                                            <div class="image-welcome">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("slider4"))
                                                        {
                                                            $url = get_option("slider4");
                                                        }
                                                    ?>
                                                    <img id="output4" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput4" accept="image/*" onchange="loadFile4(event)" data-key="slider4">
                                            </div>


                                            <div class="image-welcome">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option("slider5"))
                                                        {
                                                            $url = get_option("slider5");
                                                        }
                                                    ?>
                                                    <img id="output5" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput5" accept="image/*" onchange="loadFile5(event)" data-key="slider5">
                                            </div>

                                    </div>
                                </div>
                                <button class="save save-body">Save changes</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            let isFinish = localStorage.getItem('isFinish');

            if ( isFinish == 1) {
                $('#finish').modal('toggle');
                localStorage.setItem("isFinish", 0);
            } 

            $('.save-business').click(function(){
                $('#loading').modal('toggle');

                $(".wrap-business").each(function (index, obj) {
                    let elements = $(this).children(".input-business");
                    let key = elements.data("key");
                    let name = elements.val();
				
                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                            action: "addOption",
                            key: key,
                            name: name
                        },
                        beforeSend: function(){
                            
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function( jqXHR, textStatus, errorThrown ){
                            console.log(errorThrown);
                        }
                    });
                });
                setTimeout(
                function() 
                {
                    localStorage.setItem("isFinish", 1);
                    location.reload();
                }, 2000);
            });


            // Hours
            $('.save-hours').click(function(){
                $('#loading').modal('toggle');

                $(".wrap-hours").each(function (index, obj) {
                    let timeFrom = $(this).children(".wrap-input-hours").children(".time-from").val();
                    let optionFrom = $(this).children(".wrap-input-hours").children(".option-from").val();
                    let timeTo = $(this).children(".wrap-input-hours").children(".time-to").val();
                    let optionTo = $(this).children(".wrap-input-hours").children(".option-to").val();
                    let active = $(this).children(".wrap-input-hours").children(".hours-active").val();

                    let key = "week"+ (index + 2);
                    let name = timeFrom + "-" + optionFrom + "-" + timeTo + "-" + optionTo + "-" + active;

                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                            action: "addOption",
                            key: key,
                            name: name
                        },
                        beforeSend: function(){
                            
                        },
                        success: function(response) {

                        },
                        error: function( jqXHR, textStatus, errorThrown ){
                            console.log(errorThrown);
                        }
                    });
                });
                setTimeout(
                function() 
                {
                    localStorage.setItem("isFinish", 1);
                    location.reload();
                }, 2000);
            });

            $('.hours-active').change(function (){
                let index = $(this).find('option:selected').val();
                if(index == 0)
                {
                    $(this).css("background-color", "#ac2b2b");
                } else {
                    $(this).css("background-color", "#008037");
                }
            });
            

            // services
            $(document).on('click', '.delete-nemu', function() {
                clearInputPopup ();
                let id = $(this).parents(".wrap-level").data('id');
                $("#popup-id").val(id);
                if(id==0)
                {
                    let title = $(this).parents(".wrap-level").data('title');
                    $("#popup-title").val(title);
                    if(title == "parent")
                    {
                        let tempParentID = $(this).parents(".wrap-level").data('tempparent');
                        $("#popup-tempParentId").val(tempParentID);
                        
                    } else {
                        let tempChildrenID = $(this).parents(".wrap-level").data('tempchildren');
                        $("#popup-tempChildId").val(tempChildrenID);
                    }
                } else {
                    let taxonomy = $(this).parents(".wrap-level").data('taxonomy');
                    $("#popup-taxonomy").val(taxonomy);
                }
            });
            $('.yes-serivces').click(function(){
                let id = $("#popup-id").val();
                if(id == 0)
                {
                    let title = $("#popup-title").val();
                    if(title == "parent")
                    {
                        let parentId = $("#popup-tempParentId").val();
                        $('.wrap-level[data-tempparent="'+parentId +'"]').parents(".block-level1").remove();

                    } else {
                        let childrenId = $("#popup-tempChildId").val();
                        let count = $('.wrap-level[data-tempchildren="'+childrenId+'"]').parents(".block-level2").children().length;
                        if(count == 1)
                        {
                            let html = "<div class='add-sub-service'><button class='add-sub'>Add sub-services</button></div>";
                            $('.wrap-level[data-tempchildren="'+childrenId+'"]').parents(".block-level1").append(html);

                            $('.wrap-level[data-tempchildren="'+childrenId+'"]').parents(".block-level2").remove();
                        }

                        $('.wrap-level[data-tempchildren="'+childrenId+'"]').remove();
                    }
                    $('#deleteModal').modal('toggle');
                } else {
                    let taxonomy = $("#popup-taxonomy").val();
                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                            action: "deleteTaxonomy",
                            id: id,
                            taxonomy: taxonomy
                        },
                        beforeSend: function(){
                        
                        },
                        success: function(response) {
                            $('#deleteModal').modal('toggle');
                            location.reload();
                        },
                        error: function( jqXHR, textStatus, errorThrown ){
                            console.log(errorThrown);
                        }
                    });
                }
                
            });
            let tempParent = 1;
            let tempChild = 1;
            $(document).on('click', '.create-menu', function() {
                let title = $(this).parents(".wrap-level").data("title");
                let parentId = $(this).parents(".wrap-level").data("parent");
                let html = "";
                if(title === "parent")
                {
                    html = "<div class='wrap-menu-block block-level1'><div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='0' data-title='parent' data-tempparent='"+tempParent+"'><div class='level'><div class='title-level'>Level 1</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div><div class='add-sub-service'><button class='add-sub'>Add sub-services</button></div></div>";
                    $(this).parents(".wrap-level").parent().after(html);
                    tempParent ++;
                } else {
                    html = "<div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='"+parentId+"' data-title='children' data-tempchildren='"+tempChild+"'><div class='level'><div class='title-level'>Level 2</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div></div>";
                    $(this).parents(".wrap-level").after(html);
                    tempChild ++;
                }
            });
            $(document).on('click', '.add-sub', function() {
                let parentId = $(this).parents(".block-level1").children().data("id");
                let html = "";
                html = "<div class='wrap-menu-block block-level2'><div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='"+parentId+"' data-title='children' data-tempchildren='"+tempChild+"'><div class='level'><div class='title-level'>Level 2</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div></div></div>";
                $(this).parents(".block-level1").append(html);
                $(this).parents(".add-sub-service").remove();
                tempChild ++;
            });
            $(document).on('click', '.save-services', function() { 
                $('#loading').modal('toggle');
                let indexParent = 1;
                
                //parent
                $(".block-level1").each(function (index, obj) {
                    let id = $(this).children(".wrap-level").data("id");
                    let parentId = $(this).children(".wrap-level").data("parent");
                    let taxonomy = $(this).children(".wrap-level").data("taxonomy");
                    let title = $(this).children(".wrap-level").children('.menu-title').children('.title').val();
                    let price = $(this).children(".wrap-level").children('.menu-price').children('.price').val();
                    let description = $(this).children(".wrap-level").children('.menu-description').children('.description').val();

                    if(id != 0)
                    {
                        $.ajax({
                            type : "GET", 
                            dataType: 'html',
                            url : "./wp-admin/admin-ajax.php",
                            data : {
                                action: "updateMenu",
                                id: id,
                                parentId:parentId,
                                taxonomy: taxonomy,
                                title: title,
                                price: price,
                                description: description,
                                index: indexParent
                            },
                            beforeSend: function(){

                            },
                            success: function(response) {

                            },
                            error: function( jqXHR, textStatus, errorThrown ){
                            }
                        });
                        indexParent ++
                    } else {
                        $.ajax({
                            type : "GET", 
                            dataType: 'html',
                            url : "./wp-admin/admin-ajax.php",
                            data : {
                                action: "createMenu",
                                id:id,
                                parentId:parentId,
                                taxonomy: taxonomy,
                                title: title,
                                price: price,
                                description: description,
                                index: indexParent
                            },
                            beforeSend: function(){

                            },
                            success: function(response) {
                                // $(this).children(".block-level2").children(".wrap-level").css("background-color","red");
                                let indexChildren = 1;
                                $(this).children(".block-level2").children(".wrap-level").each(function (index, obj) {
                                    let parentId = response;
                                    let taxonomy = $(obj).data("taxonomy");
                                    let title = $(obj).children('.menu-title').children('.title').val();
                                    let price = $(obj).children('.menu-price').children('.price').val();
                                    let description = $(obj).children('.menu-description').children('.description').val();
                                   
                                    $.ajax({
                                        type : "GET", 
                                        dataType: 'html',
                                        url : "./wp-admin/admin-ajax.php",
                                        data : {
                                            action: "createMenu",
                                            id:id,
                                            parentId:parentId,
                                            taxonomy: taxonomy,
                                            title: title,
                                            price: price,
                                            description: description,
                                            index: indexChildren
                                        },
                                        beforeSend: function(){

                                        },
                                        success: function(response) {
                                        },
                                        error: function( jqXHR, textStatus, errorThrown ){
                                        }
                                    });
                                    indexChildren++;
                                });

                            }.bind(this),

                            error: function( jqXHR, textStatus, errorThrown ){
                            }
                        });
                        indexParent ++;
                    }

                    // children
                    if(id != 0)
                    {
                        if($(this).children(".wrap-menu-block").hasClass("block-level2"))
                        {
                            let indexChildren = 1;
                            $(this).children(".block-level2").children(".wrap-level").each(function (index, obj) {
                                let id = $(this).data("id");
                                let parentId = $(this).data("parent");
                                let taxonomy = $(this).data("taxonomy");
                                let title = $(this).children('.menu-title').children('.title').val();
                                let price = $(this).children('.menu-price').children('.price').val();
                                let description = $(this).children('.menu-description').children('.description').val();

                                if(id != 0)
                                {
                                    $.ajax({
                                        type : "GET", 
                                        dataType: 'html',
                                        url : "./wp-admin/admin-ajax.php",
                                        data : {
                                            action: "updateMenu",
                                            id: id,
                                            parentId:parentId,
                                            taxonomy: taxonomy,
                                            title: title,
                                            price: price,
                                            description: description,
                                            index: indexChildren
                                        },
                                        beforeSend: function(){

                                        },
                                        success: function(response) {

                                        },
                                        error: function( jqXHR, textStatus, errorThrown ){
                                        }
                                    });
                                    indexChildren ++;
                                } else {
                                    $.ajax({
                                        type : "GET", 
                                        dataType: 'html',
                                        url : "./wp-admin/admin-ajax.php",
                                        data : {
                                            action: "createMenu",
                                            id:id,
                                            parentId:parentId,
                                            taxonomy: taxonomy,
                                            title: title,
                                            price: price,
                                            description: description,
                                            index: indexChildren
                                        },
                                        beforeSend: function(){

                                        },
                                        success: function(response) {
                                        },
                                        error: function( jqXHR, textStatus, errorThrown ){
                                        }
                                    });
                                    indexChildren ++;
                                }
                            });
                        }
                    }
                });
                setTimeout(
                function() 
                {
                    localStorage.setItem("isFinish", 1);
                    location.reload();
                }, 2000);
            });
        });

        function clearInputPopup ()
        {
            $("#popup-id").val("");
            $("#popup-taxonomy").val("");
            $("#popup-tempParentId").val("");
            $("#popup-tempChildId").val("");
        }

        let tempId = 1;
        $(document).on('click', '.create-time', function() { 
            let html = "<div class='wrap-times-row' data-id='0' data-taxonomy='times' data-tempid='"+tempId+"'><div class='time'><input type='text'  class='input-time' value=''><select class='time-option'><option value='0' selected>AM</option><option value='1'>PM</option></select></div><div class='seats'><input type='number' class='input-slots' value=''></div><div class='group-button'><div class='button-menu'><button class='create-time'>Add</button></div><div class='delete-level'><button class='delete-time' data-toggle='modal' data-target='#deleteTimes'>Delete</button></div></div></div>";
            $(this).parents(".wrap-times-row").after(html);
            tempId ++;
        });

        $(document).on('click', '.save-time', function() { 
            $('#loading').modal('toggle');
            let indexTime = 1;
            $(".wrap-times-row").each(function (index, obj) {
                let id = $(this).data("id");
                let taxonomy = $(this).data("taxonomy");
                let time =  $(this).children(".time").children(".input-time").val();
                let timeOption = $(this).children(".time").children(".time-option").val();
                let slots =  $(this).children(".seats").children().val();
                strTime = time + "-" + timeOption;
                if(id != 0)
                {
                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                                action: "updateTime",
                                id: id,
                                taxonomy: taxonomy,
                                time: strTime,
                                slots: slots,
                                index: indexTime
                        },
                        beforeSend: function(){

                        },
                        success: function(response) {

                        },
                        error: function( jqXHR, textStatus, errorThrown ){
                        }
                    });
                    indexTime ++;
                } else if(time != "") {
                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                                action: "createTime",
                                taxonomy: taxonomy,
                                time: strTime,
                                slots: slots,
                                index: indexTime
                        },
                        beforeSend: function(){

                        },
                        success: function(response) {

                        },
                        error: function( jqXHR, textStatus, errorThrown ){
                        }
                    });
                    indexTime ++;
                }
            });
            setTimeout(
            function() 
            {
                localStorage.setItem("isFinish", 1);
                location.reload();
            }, 2000);
        });

        $(document).on('click', '.delete-time', function() { 
            clearInputTimes();
            let id = $(this).parents(".wrap-times-row").data("id");
            let taxonomy = $(this).parents(".wrap-times-row").data("taxonomy");

            if(id == 0)
            {
                let tempId = $(this).parents(".wrap-times-row").data("tempid");
                $("#popup-times-id").val(id);
                $("#popup-times-tempId").val(tempId);
            } else {
                $("#popup-times-id").val(id);
                $("#popup-times-taxonomy").val(taxonomy);
            }
        });

        $(document).on('click', '.yes-times', function() { 
            let id = $("#popup-times-id").val();
            let taxonomy = $("#popup-times-taxonomy").val();
            if(id == 0)
            {
                let tempId = $("#popup-times-tempId").val();
                $('.wrap-times-row[data-tempid="'+tempId+'"]').remove();
                $('#deleteTimes').modal('toggle');
            } else {
                $.ajax({
                    type : "GET", 
                    dataType: 'html',
                    url : "./wp-admin/admin-ajax.php",
                    data : {
                        action: "deleteTaxonomy",
                        id: id,
                        taxonomy: taxonomy
                    },
                    beforeSend: function(){
                        
                    },
                    success: function(response) {
                        $('#deleteTimes').modal('toggle');
                        location.reload();
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        console.log(errorThrown);
                    }
                });
            }
        });

        $(document).on('click', '.button-fill-all', function() { 
            let fillAll = $(".fill-all").val();
            $(".wrap-times-row").each(function (index, obj) {
                $(this).children(".seats").children().val(fillAll);
            });
        });

        function clearInputTimes()
        {
            $("#popup-times-id").val("");
            $("#popup-times-taxonomy").val("");
            $("#popup-times-tempId").val("");
        }
        
        // ====================== Tab2 ================== \\
        $('#headerColor').on('input', function() {
            $('#hexHeaderColor').val(this.value);
        });
        $('#hexHeaderColor').on('input', function() {
            $('#headerColor').val(this.value);
        });

        $('#backgroundColor').on('input', function() {
            $('#hexBackgroundColor').val(this.value);
        });
        $('#hexBackgroundColor').on('input', function() {
            $('#backgroundColor').val(this.value);
        });

        $('#buttonColor').on('input', function() {
            $('#hexButtonColor').val(this.value);
        });
        $('#hexButtonColor').on('input', function() {
            $('#buttonColor').val(this.value);
        });

        $('#textColorBody').on('input', function() {
            $('#hexTextColorBody').val(this.value);
        });
        $('#hexTextColorBody').on('input', function() {
            $('#textColorBody').val(this.value);
        });
        
        
        $(function() {
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                localStorage.setItem('lastTab', $(this).attr('href'));
            });
            var lastTab = localStorage.getItem('lastTab');
            
            if (lastTab) {
                $('[href="' + lastTab + '"]').tab('show');
            }
        });

        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        $( "#header-form" ).submit(function( event ) {
            $('#loading').modal('toggle');

            let headerColor = $(".header-color").val();
            let keyHeaderColor = $(".header-color").data("key");
           
            let textColor = $(".text-color").val();
            let keyTextColor = $(".text-color").data("key");
           
            let file = $("#fileinput").prop('files')[0];
            let keyFile = $("#fileinput").data("key");

            let additionalMenu = $(".additional-menu").val();
            let keyadditionalMenu = $(".additional-menu").data("key");

            let linkMenu = $(".link-menu").val();
            let keyLinkMenu = $(".link-menu").data("key");

            let youtubeHeader = $(".youtube-header").val();
            let keyYoutubeHeader = $(".youtube-header").data("key");

            // console.log("headerColor: " + headerColor + " keyHeaderColor: " + keyHeaderColor);
            // console.log("textColor: " + textColor + " keyTextColor: " + keyTextColor);
            // console.log("additionalMenu: " + additionalMenu + " keyadditionalMenu: " + keyadditionalMenu);
            // console.log("linkMenu: " + linkMenu + " keyLinkMenu: " + keyLinkMenu);
            // console.log("youtubeHeader: " + youtubeHeader + " keyYoutubeHeader: " + keyYoutubeHeader);


            var data_form = new FormData();
            data_form.append('keyHeaderColor', keyHeaderColor);
            data_form.append('keyTextColor', keyTextColor);
            data_form.append('keyFile', keyFile);
            data_form.append('keyadditionalMenu', keyadditionalMenu);
            data_form.append('keyLinkMenu', keyLinkMenu);
            data_form.append('keyYoutubeHeader', keyYoutubeHeader);

            data_form.append('headerColor', headerColor);
            data_form.append('textColor', textColor);
            data_form.append('file', file);
            data_form.append('additionalMenu', additionalMenu);
            data_form.append('linkMenu', linkMenu);
            data_form.append('youtubeHeader', youtubeHeader);


            data_form.append('action', 'upload_image')
            jQuery.ajax({
                type: "post",
                url: "./wp-admin/admin-ajax.php",
                processData: false,
                contentType: false,
                data: data_form,
                beforeSend: function () {
                
                },
                success: function (response) {
                    localStorage.setItem("isFinish", 1);
                    location.reload();
                },
                error: function (request, status, error) {
                    console.log(error);
                },
            });

            event.preventDefault();
        });

        var loadFile1 = function(event) {
            var output = document.getElementById('output1');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        var loadFile2 = function(event) {
            var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        var loadFile3 = function(event) {
            var output = document.getElementById('output3');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        var loadFile4 = function(event) {
            var output = document.getElementById('output4');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        var loadFile5 = function(event) {
            var output = document.getElementById('output5');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };

        $(document).on('click', '.save-body', function() {
            let backgroundColor = $(".background-color").val();
            let keyBackgroundColor = $(".background-color").data("key");

            let buttonColor = $(".button-color").val();
            let keyButtonColor = $(".button-color").data("key");

            let textColorBody = $(".text-color-body").val();
            let keyTextColorBody = $(".text-color-body").data("key");

            let titleWelcome = $(".title-welcome").val();
            let keyTitleWelcome = $(".title-welcome").data("key");

            let contentWelcome = $(".content-welcome").val();
            let keyContentWelcome = $(".content-welcome").data("key");
           
            var data_form = new FormData();
            data_form.append('backgroundColor', backgroundColor);
            data_form.append('keyBackgroundColor', keyBackgroundColor);

            data_form.append('buttonColor', buttonColor);
            data_form.append('keyButtonColor', keyButtonColor);

            data_form.append('textColorBody', textColorBody);
            data_form.append('keyTextColorBody', keyTextColorBody);

            data_form.append('titleWelcome', titleWelcome);
            data_form.append('keyTitleWelcome', keyTitleWelcome);

            data_form.append('contentWelcome', contentWelcome);
            data_form.append('keyContentWelcome', keyContentWelcome);

            for(let i=1; i<= 5; i ++)
            {
                let file = $("#fileinput"+i).prop('files')[0];
                let keyFile = $("#fileinput"+i).data("key");
                console.log("file: " + file + "--- keyFile: " + keyFile);

                data_form.append('keyFile'+i, keyFile);
                data_form.append('file'+i, file);
            }

            data_form.append('action', 'body')

            // console.log(titleWelcome + "\n" + keyTitleWelcome);
            jQuery.ajax({
                type: "post",
                url: "./wp-admin/admin-ajax.php",
                processData: false,
                contentType: false,
                data: data_form,
                beforeSend: function () {
                
                },
                success: function (response) {
                    console.log(response);
                    // localStorage.setItem("isFinish", 1);
                    // location.reload();
                },
                error: function (request, status, error) {
                    console.log(error);
                },
            });
        });
    </script>
</html>
