<?php
/**
* Template Name: edit-books
*/
?>
<?php
    get_header();
?>


<style>
    header,
    footer {
        display: none;
    }
    
</style>
<main>
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
            <div id="exTab1" class="container-fs">
                <ul  class="nav nav-pills" id="myTab">
                    <li class="active">
                        <a  href="#1a" data-toggle="tab">BUSINESS INFO</a>
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
                                    <!-- <div class="title-menu">Your Business Info</div> -->
                                </div>

                                <div class="body-business">
                                    <div class="col">
                                        <div class="wrap-business">
                                            <div class="label-business">Business name</div>
                                            <?php
                                                $name = "";
                                                if(get_option($businessName))
                                                {
                                                    $name = get_option($businessName);
                                                }
                                            ?>
                                            <input type="text" class="input-business" data-key="<?php echo $businessName?>" value="<?php echo $name; ?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Address</div>
                                            <?php
                                                $address = "";
                                                if(get_option($businessAddress))
                                                {
                                                    $address = get_option($businessAddress);
                                                }
                                            ?>
                                            <input type="text" class="input-business" data-key="<?php echo $businessAddress?>" value="<?php echo $address?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Phone number</div>
                                            <?php
                                                $phoneNumber = "";
                                                if(get_option($businessPhoneNumber))
                                                {
                                                    $phoneNumber = get_option($businessPhoneNumber);
                                                }
                                            ?>
                                            <input type="number" class="input-business" data-key="<?php echo $businessPhoneNumber ?>" value="<?php echo $phoneNumber?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Google maps (link)</div>
                                            <?php
                                                $googleMaps = "";
                                                if(get_option($businessGoogleMap))
                                                {
                                                    $googleMaps = get_option($businessGoogleMap);
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="<?php echo $businessGoogleMap?>" value="<?php echo $googleMaps?>">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="wrap-business">
                                            <div class="label-business">Google review (link)</div>
                                            <?php
                                                $googleReview = "";
                                                if(get_option($businessGoogleReview))
                                                {
                                                    $googleReview = get_option($businessGoogleReview);
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="<?php echo $businessGoogleReview?>" value="<?php echo $googleReview?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your facebook (link)</div>
                                            <?php
                                                $facebook = "";
                                                if(get_option($businessFacebook))
                                                {
                                                    $facebook = get_option($businessFacebook);
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="<?php echo $businessFacebook?>" value="<?php echo $facebook?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your instagram (link)</div>
                                            <?php
                                                $instagram = "";
                                                if(get_option($businessInstagram))
                                                {
                                                    $instagram = get_option($businessInstagram);
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="<?php echo $businessInstagram?>" value="<?php echo $instagram?>">
                                        </div>
                                        <div class="wrap-business">
                                            <div class="label-business">Your youtube channel (link)</div>
                                            <?php
                                                $youtube = "";
                                                if(get_option($businessYoutube))
                                                {
                                                    $youtube = get_option($businessYoutube);
                                                }
                                            ?>
                                            <input type="url" class="input-business" data-key="<?php echo $businessYoutube?>" value="<?php echo $youtube?>">
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
                    <div class="tab-pane" id="2a">
                        <section class="menu">
                            <div class="wrap-menu">
                                    <div class="head-menu">
                                        <div class="title-menu">Header</div>
                                    </div>

                                    <div class="body-menu">
                                            <div class="wrap-header-edit">
                                                <div class="group-color">
                                                    <div class="wrap-body-text-color">
                                                        <div class="label-color">Header Color</div>
                                                        <?php
                                                            $color = "#008037";
                                                            if(get_option($businessBackgroundColorHeader))
                                                            {
                                                                $color = get_option($businessBackgroundColorHeader);
                                                            }
                                                        ?>
                                                        
                                                        <div class="group-input-color">
                                                            <input type="color" id="headerColor" class="header-color" data-key="<?php echo $businessBackgroundColorHeader ?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>"> 
                                                            <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexHeaderColor" class="hexcolor"></input>
                                                        </div>
                                                    </div>

                                                    <div class="wrap-body-text-color">
                                                        <div class="label-color">Text Color</div>
                                                        <?php
                                                            $colorText = "#ffffff";
                                                            if(get_option($businessTextColorHeader))
                                                            {
                                                                $colorText = get_option($businessTextColorHeader);
                                                            }
                                                        ?>
                                                        <div class="group-input-color">
                                                            <input type="color" id="textColor" class="text-color" data-key="<?php echo $businessTextColorHeader?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorText?>"> 
                                                            <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorText?>" id="hexTextColor" class="hexcolor"></input>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="header-logo image-welcome upload-image">
                                                    <div class="label-logo">Logo</div>
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessLogoHeader))
                                                        {
                                                            $url = get_option($businessLogoHeader);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" id="fileinput" class="file-input" accept="image/*" data-key="<?php echo $businessLogoHeader?>">
                                                    <b>Image (Max size: 400x75)</b>
                                                </div>

                                                <div class="header-menu">
                                                    <div class="title-header-menu name-body">
                                                        Header Menu
                                                    </div>

                                                    <div class="menu-additional-menu">
                                                        <div class="label-additional-menu">Additional menu</div>
                                                        <?php 
                                                            $additionalMenu = "";
                                                            if(get_option($businessAddMenuHeader))
                                                            {
                                                                $additionalMenu = get_option($businessAddMenuHeader);
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $additionalMenu?>" class="additional-menu" data-key="<?php echo $businessAddMenuHeader?>">
                                                    </div>

                                                    <div class="menu-link-menu">
                                                        <div class="label-link-menu">Link</div>
                                                        <?php 
                                                            $linkMenu = "";
                                                            if(get_option($businessLinkMenuHeader))
                                                            {
                                                                $linkMenu = get_option($businessLinkMenuHeader);
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $linkMenu?>" class="link-menu" data-key="<?php echo $businessLinkMenuHeader;?>">
                                                    </div>

                                                    <div class="menu-youtube-menu">
                                                        <div class="label-youtube-menu">Youtube video -> share -> embed -> copy the yellow highlight part of that video (see the example below) & paste in here</div>
                                                        <?php 
                                                            $youtubeHeader = "LKChoK8R4-Q";
                                                            if(get_option($businessYoutubeVideoBanner))
                                                            {
                                                                $youtubeHeader = get_option($businessYoutubeVideoBanner);
                                                            }
                                                        ?>
                                                        <input type="text" value="<?php echo $youtubeHeader?>" class="youtube-header" data-key="<?php echo $businessYoutubeVideoBanner?>">
                                                        <img src="<?php echo get_template_directory_uri()."/assets/img/TutorialYoutube.png";?>" alt="" style="width: 50%; padding: 15px 0">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <button class="save save-header">Save changes</button>
                            </div>
                        </section>
                        
                     

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Body</div>
                                </div>

                                <div class="body-menu">
                                    <div class="group-color">
                                        <div class="wrap-body-text-color">
                                            <div class="label-color">Background Color</div>
                                                <?php
                                                    $color = "#f6f1ea";
                                                    if(get_option($businessBackgroundColorBody))
                                                    {
                                                        $color = get_option($businessBackgroundColorBody);
                                                    }
                                                ?>
                                                        
                                            <div class="group-input-color">
                                                <input type="color" id="backgroundColor" class="background-color" data-key="<?php echo $businessBackgroundColorBody?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexBackgroundColor" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-body-text-color">
                                            <div class="label-color">Text Color</div>
                                                <?php
                                                    $textColorBody = "#000000";
                                                    if(get_option($businessTextColorBody))
                                                    {
                                                        $textColorBody = get_option($businessTextColorBody);
                                                    }
                                                ?>
                                            <div class="group-input-color">
                                                <input type="color" id="textColorBody" class="text-color-body" data-key="<?php echo $businessTextColorBody?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>" id="hexTextColorBody" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-body-text-color">
                                            <div class="label-color">Button and Line Color</div>
                                                <?php
                                                    $colorButton = "#000000";
                                                    if(get_option($businessBackgroundButtonBody))
                                                    {
                                                        $colorButton = get_option($businessBackgroundButtonBody);
                                                    }
                                                ?>
                                            <div class="group-input-color">
                                                <input type="color" id="buttonColor" class="button-color" data-key="<?php echo $businessBackgroundButtonBody?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorButton?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorButton?>" id="hexButtonColor" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-body-text-color">
                                            <div class="label-color">Text Color Button</div>
                                                <?php
                                                    $textColorBody = "#000000";
                                                    if(get_option($businessTextColorButtonBody))
                                                    {
                                                        $textColorBody = get_option($businessTextColorButtonBody);
                                                    }
                                                ?>
                                            <div class="group-input-color">
                                                <input type="color" id="textColorButtonBody" class="text-color-button-body" data-key="<?php echo $businessTextColorButtonBody?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorBody?>" id="hexTextColorButtonBody" class="hexcolor"></input>
                                            </div>
                                        </div>

                                      
                                    </div>

                                    <div class="welcome-word">
                                        <div class="name-body">Your welcome words</div>
                                        <div class="wrap-title-welcome-word">
                                            <div class="title-body">Title text</div>
                                            <?php
                                                    $text = "";
                                                    if(get_option($businessTitleWelcome))
                                                    {
                                                        $text = get_option($businessTitleWelcome);
                                                    }
                                            ?>
                                            <input type="text" class="title-welcome" data-key="<?php echo $businessTitleWelcome ?>" value="<?php echo $text?>">
                                        </div>
                                        <div class="wrap-content-welcome-word">
                                            <div class="title-body">Body text</div>
                                            <?php
                                                $text = "";
                                                if(get_option($businessContentWelcome))
                                                {
                                                    $text = get_option($businessContentWelcome);
                                                }
                                            ?>
                                            <textarea cols="30" rows="5" class="content-welcome" data-key="<?php echo $businessContentWelcome?>"><?php echo $text?></textarea>
                                        </div>
                                    </div>

                                        <div class="wrap-image-welcome">

                                                <div class="image-welcome upload-image">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessSlider1Welcome))
                                                        {
                                                            $url = get_option($businessSlider1Welcome);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img id="output1" class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" class="file-input" id="fileinput1" accept="image/*" data-key="<?php echo $businessSlider1Welcome?>">
                                                    <b>Image (size: 950x680)</b>
                                                </div>

                                                <div class="image-welcome upload-image">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessSlider2Welcome))
                                                        {
                                                            $url = get_option($businessSlider2Welcome);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img id="output2" class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" class="file-input" id="fileinput2" accept="image/*" data-key="<?php echo $businessSlider2Welcome?>">
                                                    <b>Image (size: 950x680)</b>
                                                </div>


                                                <div class="image-welcome upload-image">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessSlider3Welcome))
                                                        {
                                                            $url = get_option($businessSlider3Welcome);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img id="output3" class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" class="file-input" id="fileinput3" accept="image/*" data-key="<?php echo $businessSlider3Welcome?>">
                                                    <b>Image (size: 950x680)</b>
                                                </div>


                                                <div class="image-welcome upload-image">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessSlider4Welcome))
                                                        {
                                                            $url = get_option($businessSlider4Welcome);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img id="output4" class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" class="file-input" id="fileinput4" accept="image/*" data-key="<?php echo $businessSlider4Welcome?>">
                                                    <b>Image (size: 950x680)</b>
                                                </div>


                                                <div class="image-welcome upload-image">
                                                    <?php
                                                        $url = get_template_directory_uri()."/assets/img/image.png";
                                                        if(get_option($businessSlider5Welcome))
                                                        {
                                                            $url = get_option($businessSlider5Welcome);
                                                            ?>
                                                                <button class="remove-image">x</button> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <button class="remove-image" style="display:none">X</button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <img id="output5" class="output-image preview-image" src="<?php echo $url?>"/>
                                                    <input type="file" class="file-input" id="fileinput5" accept="image/*" data-key="<?php echo $businessSlider5Welcome?>">
                                                    <b>Image (size: 950x680)</b>
                                                </div>

                                        </div>
                                </div>
                                <button class="save save-body">Save changes</button>
                            </div>
                        </section>
                        

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="body-menu">
                                    <div class="wrap-reivews">
                                        <div class="name-body">Client's Reviews or Your Notifications</div>
                                        <div class="group-color">
                                            <div class="wrap-background-color">
                                                <div class="label-color">Background Color</div>
                                                    <?php
                                                        $colorReviews = "#eefce8";
                                                        if(get_option($businessBackgroundColorReviews))
                                                        {
                                                            $colorReviews = get_option($businessBackgroundColorReviews);
                                                        }
                                                    ?>
                                                            
                                                <div class="group-input-color">
                                                    <input type="color" id="backgroundColorReviews" class="background-color-reviews" data-key="<?php echo $businessBackgroundColorReviews?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorReviews?>"> 
                                                    <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorReviews?>" id="hexBackgroundColorReviews" class="hexcolor"></input>
                                                </div>
                                            </div>

                                            <div class="wrap-button-color">
                                                <div class="label-color">Text Color</div>
                                                    <?php
                                                        $textColorReviews = "#000000";
                                                        if(get_option($businessTextColorReviews))
                                                        {
                                                            $textColorReviews = get_option($businessTextColorReviews);
                                                        }
                                                    ?>
                                                <div class="group-input-color">
                                                    <input type="color" id="textColorReivews" class="text-color-reviews" data-key="<?php echo $businessTextColorReviews?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorReviews?>"> 
                                                    <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $textColorReviews?>" id="hexTextColorReviews" class="hexcolor"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wrap-title-welcome-word">
                                            <div class="title-body">Title text</div>
                                            <?php
                                                    $text = "";
                                                    if(get_option($businessTitleReviews))
                                                    {
                                                        $text = stripslashes(get_option($businessTitleReviews));
                                                    }
                                            ?>
                                            <input type="text" class="title-welcome title-reviews" data-key="<?php echo $businessTitleReviews?>" value="<?php echo $text?>">
                                        </div>
                                        <div class="wrap-content-reviews-word">
                                            <div class="title-body">Body text 1</div>
                                            <input type="hidden" class="textBodyReviews1" data-key="<?php echo $businessContent1Reviews?>">
                                            <?php
                                                $content = "";
                                                if(get_option($businessContent1Reviews))
                                                {
                                                    $content = stripslashes(get_option($businessContent1Reviews));
                                                }
                                                    
                                                $editor_id = $businessContent1Reviews;
                                                $settings  = array (
                                                          'wpautop'          => true,   // Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
                                                          'media_buttons'    => false,   // Whether to display media insert/upload buttons
                                                          'textarea_name'    => $editor_id,   // The name assigned to the generated textarea and passed parameter when the form is submitted.
                                                          'textarea_rows'    => get_option( 'default_post_edit_rows', 10 ),  // The number of rows to display for the textarea
                                                          'tabindex'         => '',     // The tabindex value used for the form field
                                                          'editor_css'       => '',     // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
                                                          'editor_class'     => '',     // Any extra CSS Classes to append to the Editor textarea
                                                          'teeny'            => false,  // Whether to output the minimal editor configuration used in PressThis
                                                          'dfw'              => false,  // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
                                                          'tinymce'          => true,   // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
                                                          'quicktags'        => true,   // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
                                                          'drag_drop_upload' => true    // Enable Drag & Drop Upload Support (since WordPress 3.9)
                                                );
                                                  
                                                // display the editor
                                                wp_editor($content, $editor_id, $settings );
                                            ?>
                                        </div>
                                        <div class="wrap-content-reviews-word">
                                            <div class="title-body">Body text 2</div>
                                            <input type="hidden" class="textBodyReviews2" data-key="<?php echo $businessContent2Reviews?>">
                                            <?php
                                                $content = "";
                                                if(get_option($businessContent2Reviews))
                                                {
                                                    $content = get_option($businessContent2Reviews);
                                                }
                                                    
                                                $editor_id = $businessContent2Reviews;
                                                $settings  = array (
                                                          'wpautop'          => true,   // Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
                                                          'media_buttons'    => false,   // Whether to display media insert/upload buttons
                                                          'textarea_name'    => $editor_id,   // The name assigned to the generated textarea and passed parameter when the form is submitted.
                                                          'textarea_rows'    => get_option( 'default_post_edit_rows', 10 ),  // The number of rows to display for the textarea
                                                          'tabindex'         => '',     // The tabindex value used for the form field
                                                          'editor_css'       => '',     // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
                                                          'editor_class'     => '',     // Any extra CSS Classes to append to the Editor textarea
                                                          'teeny'            => false,  // Whether to output the minimal editor configuration used in PressThis
                                                          'dfw'              => false,  // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
                                                          'tinymce'          => true,   // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
                                                          'quicktags'        => true,   // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
                                                          'drag_drop_upload' => true    // Enable Drag & Drop Upload Support (since WordPress 3.9)
                                                );
                                                  
                                                // display the editor
                                                wp_editor($content, $editor_id, $settings );
                                            ?>
                                        </div>
                                        <div class="wrap-content-reviews-word">
                                            <div class="title-body">Body text 3</div>
                                            <input type="hidden" class="textBodyReviews3" data-key="<?php echo $businessContent3Reviews?>">
                                            <?php
                                                $content = "";
                                                if(get_option($businessContent3Reviews))
                                                {
                                                    $content = get_option($businessContent3Reviews);
                                                }
                                                $editor_id = $businessContent3Reviews;
                                                $settings  = array (
                                                          'wpautop'          => true,   // Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
                                                          'media_buttons'    => false,   // Whether to display media insert/upload buttons
                                                          'textarea_name'    => $editor_id,   // The name assigned to the generated textarea and passed parameter when the form is submitted.
                                                          'textarea_rows'    => get_option( 'default_post_edit_rows', 10 ),  // The number of rows to display for the textarea
                                                          'tabindex'         => '',     // The tabindex value used for the form field
                                                          'editor_css'       => '',     // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
                                                          'editor_class'     => '',     // Any extra CSS Classes to append to the Editor textarea
                                                          'teeny'            => false,  // Whether to output the minimal editor configuration used in PressThis
                                                          'dfw'              => false,  // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
                                                          'tinymce'          => true,   // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
                                                          'quicktags'        => true,   // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
                                                          'drag_drop_upload' => true    // Enable Drag & Drop Upload Support (since WordPress 3.9)
                                                );
                                                  
                                                // display the editor
                                                wp_editor($content, $editor_id, $settings );
                                            ?>
                                        </div>

                                    </div>
                                </div>
                                <button class="save save-reviews">Save changes</button>
                            </div>
                        </section>
                        
                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="body-menu">
                                    <div class="wrap-gift">
                                        <div class="name-body">Gift Cards</div>

                                        <div class="wrap-title-welcome-word">
                                            <div class="title-body">Title text</div>
                                            <?php
                                                    $text = "";
                                                    if(get_option($businessTitleGift))
                                                    {
                                                        $text = get_option($businessTitleGift);
                                                    }
                                            ?>
                                            <input type="text" class="title-welcome title-gift" data-key="<?php echo $businessTitleGift?>" value="<?php echo $text?>">
                                        </div>

                                        <div class="wrap-content-welcome-word">
                                            <div class="title-body">Body text</div>
                                            <?php
                                                $text = "";
                                                if(get_option($businessContentGift))
                                                {
                                                    $text = get_option($businessContentGift);
                                                }
                                            ?>
                                            <textarea cols="30" rows="5" class="content-welcome content-gift" data-key="<?php echo $businessContentGift?>"><?php echo $text?></textarea>
                                        </div>

                                        <div class="image-welcome upload-image">
                                            <?php
                                                $url = get_template_directory_uri()."/assets/img/image.png";
                                                if(get_option($businessImageGift))
                                                {
                                                    $url = get_option($businessImageGift);
                                                    ?>
                                                        <button class="remove-image">x</button> 
                                                    <?php
                                                } else {
                                                    ?>
                                                        <button class="remove-image" style="display:none">X</button>
                                                    <?php
                                                }
                                            ?>
                                                <img id="outputGift" class="output-image preview-image" src="<?php echo $url?>"/>
                                                <input type="file" class="file-input" id="fileinputGift" accept="image/*" data-key="<?php echo $businessImageGift?>">
                                        </div>

                                        <button class="save save-gift">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="body-menu">
                                    <div class="wrap-map">
                                        <div class="name-body">Google Map</div>
                                    </div>
                                    <div class="wrap-map">
                                        <div class="title-body">Google map -> Share -> Embed a map -> Copy html</div>
                                        <?php
                                            $text = "";
                                            if(get_option($businessMapIframe))
                                            {
                                                $text = stripslashes(get_option($businessMapIframe));
                                            }
                                        ?>
                                        
                                        <textarea name="" class="map-iframe" data-key="<?php echo $businessMapIframe?>" id="" cols="30" rows="10"><?php echo $text?></textarea>
                                    </div>
                                </div>
                                <button class="save save-map">Save changes</button>
                            </div>
                        </section>

                        <section class="menu">
                            <div class="wrap-menu">
                                <div class="head-menu">
                                    <div class="title-menu">Footer</div>
                                </div>

                                <div class="body-menu">
                                    <div class="group-color">
                                        <div class="wrap-footer-color">
                                            <div class="label-color">Footer Color</div>
                                            <?php
                                                $color = "#7c756c";
                                                if(get_option($businessBackgroundColorFooter))
                                                {
                                                    $color = get_option($businessBackgroundColorFooter);
                                                }
                                            ?>
                                                        
                                            <div class="group-input-color">
                                                <input type="color" id="footerColor" class="footer-color" data-key="<?php echo $businessBackgroundColorFooter?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $color?>" id="hexFooterColor" class="hexcolor"></input>
                                            </div>
                                        </div>

                                        <div class="wrap-text-color wrap-button-color">
                                            <div class="label-color">Text Color</div>
                                            <?php
                                                $colorText = "#ffffff";
                                                if(get_option($businessTextColorFooter ))
                                                {
                                                    $colorText = get_option($businessTextColorFooter );
                                                }
                                            ?>
                                            <div class="group-input-color">
                                                <input type="color" id="textColorFooter" class="text-color-footer" data-key="<?php echo $businessTextColorFooter?>" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorText?>"> 
                                                <input type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?php echo $colorText?>" id="hexTextColorFooter" class="hexcolor"></input>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="wrap-content-welcome-word">
                                        <div class="title-body">About Us</div>
                                        <?php
                                            $text = "";
                                            if(get_option($businessAboutUsFooter))
                                            {
                                                $text = get_option($businessAboutUsFooter);
                                            }
                                        ?>
                                        <textarea cols="30" rows="15" class="content-welcome content-about-us" data-key="<?php echo $businessAboutUsFooter?>"><?php echo $text?></textarea>
                                    </div>

                                   
                                    <div class="wrap-content-page-word">
                                        <div class="title-body">Terms of Service</div>
                                        <input type="hidden" id="terms" data-key="<?php echo $termsId?>">
                                        <?php
                                            $postId = get_post($termsId);
                                            $content = $postId ->post_content;

                                            $editor_id = 'terms_id';
                                            $settings  = array (
                                                    'wpautop'          => true,   // Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
                                                    'media_buttons'    => false,   // Whether to display media insert/upload buttons
                                                    'textarea_name'    => $editor_id,   // The name assigned to the generated textarea and passed parameter when the form is submitted.
                                                    'textarea_rows'    => get_option( 'default_post_edit_rows', 30 ),  // The number of rows to display for the textarea
                                                    'tabindex'         => '',     // The tabindex value used for the form field
                                                    'editor_css'       => '',     // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
                                                    'editor_class'     => '',     // Any extra CSS Classes to append to the Editor textarea
                                                    'teeny'            => false,  // Whether to output the minimal editor configuration used in PressThis
                                                    'dfw'              => false,  // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
                                                    'tinymce'          => true,   // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
                                                    'quicktags'        => true,   // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
                                                    'drag_drop_upload' => true    // Enable Drag & Drop Upload Support (since WordPress 3.9)
                                            );
                                            
                                            // display the editor
                                            wp_editor($content, $editor_id, $settings );
                                        ?>
                                    </div>

                                    <div class="wrap-content-page-word">
                                        <div class="title-body">Privacy Policy</div>
                                        <input type="hidden" id="policy" data-key="<?php echo $policyId?>">
                                        <?php
                                            $postId = get_post($policyId);
                                            $content = $postId ->post_content;
                                            $editor_id = 'privacyPolicy_id';
                                            $settings  = array (
                                                    'wpautop'          => true,   // Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
                                                    'media_buttons'    => false,   // Whether to display media insert/upload buttons
                                                    'textarea_name'    => $editor_id,   // The name assigned to the generated textarea and passed parameter when the form is submitted.
                                                    'textarea_rows'    => get_option( 'default_post_edit_rows', 30 ),  // The number of rows to display for the textarea
                                                    'tabindex'         => '',     // The tabindex value used for the form field
                                                    'editor_css'       => '',     // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
                                                    'editor_class'     => '',     // Any extra CSS Classes to append to the Editor textarea
                                                    'teeny'            => false,  // Whether to output the minimal editor configuration used in PressThis
                                                    'dfw'              => false,  // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
                                                    'tinymce'          => true,   // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
                                                    'quicktags'        => true,   // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
                                                    'drag_drop_upload' => true    // Enable Drag & Drop Upload Support (since WordPress 3.9)
                                            );
                                            
                                            // display the editor
                                            wp_editor( $content, $editor_id, $settings );
                                        ?>
                                    </div>

                                </div>
                                <button class="save save-footer">Save changes</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </main>
<?php
    get_footer();
?>  