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


            /* Menu */
            .create-time,
            .create-menu {
                background-color: #008037;
                padding: 10px;
                border: 0;
                color: #fff;
                border-radius: 5px;
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

                .time input {
                    padding: 5px;
                }

                .seats input {
                    padding: 5px;
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

        <main>
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
            
            <style>
                

            </style>

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
                                        <div class="time"><input type="text" class="input-time" value=""></div>
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
                                            <div class="time"><input type="text" class="input-time" value="<?php echo $time->name?>"></div>
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
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.save-business').click(function(){
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
                    location.reload();
                }, 2000);
            });


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
            let html = "<div class='wrap-times-row' data-id='0' data-taxonomy='times' data-tempid='"+tempId+"'><div class='time'><input type='text'  class='input-time' value=''></div><div class='seats'><input type='number' class='input-slots' value=''></div><div class='group-button'><div class='button-menu'><button class='create-time'>Add</button></div><div class='delete-level'><button class='delete-time' data-toggle='modal' data-target='#deleteTimes'>Delete</button></div></div></div>";
            $(this).parents(".wrap-times-row").after(html);
            tempId ++;
        });

        $(document).on('click', '.save-time', function() { 
            let indexTime = 1;
            $(".wrap-times-row").each(function (index, obj) {
                let id = $(this).data("id");
                let taxonomy = $(this).data("taxonomy");
                let time =  $(this).children(".time").children().val();
                let slots =  $(this).children(".seats").children().val();

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
                                time: time,
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
                } else if(time != null) {
                    $.ajax({
                        type : "GET", 
                        dataType: 'html',
                        url : "./wp-admin/admin-ajax.php",
                        data : {
                                action: "createTime",
                                taxonomy: taxonomy,
                                time: time,
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
        

      
    </script>
</html>
