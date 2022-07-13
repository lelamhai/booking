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
                max-width: 960px;
                margin: auto;
            }

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
            }

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

            .button-menu {
                margin-right: 15px
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

            .menu-title,
            .menu-price,
            .menu-description {
                width: 100%;
                margin: 15px 0;
            }

            .title,
            .price,
            .description {
                width: 100%;
                height: 40px;
                padding: 10px 15px;
            }

            .level {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
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
    
    <!-- data-toggle="modal" data-target="#exampleModal" -->

    <div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="message">Do you want to delete?</div>
                <div class="comfirm">
                    <button class="yes">Yes</button>
                    <button class="no">No</button>
                </div>
            </div>
        </div>
    </div>
    </div>

        <main>
            <section class="menu">
                <div class="wrap-menu">
                    <div class="head-menu">
                        <div class="title-menu">Your Services</div>
                        <button class="save">Save changes</button>
                    </div>

                    <div class="create-level">
                        <div class="button-menu"><button class="create-menu">Add a service</button></div>
                        <div class="input-menu"><input type="number" value="1" class="menu-count" min="1"></div>
                    </div>
                    <div class="body-menu">
                        <?php
                            foreach(get_data_taxonomy(0) as $parent)
                            {
                                $price = get_term_meta($parent->term_id, 'services-price', true );
                                ?>
                                    <div class="wrap-menu-block block-level1">
                                        <div class="wrap-level" data-id="<?php echo $parent->term_id?>" data-taxonomy="services" data-parent="0">
                                            <div class="level">
                                                <div class="title-level">Level 1</div>
                                                <div class="delete-level1"><button class="delete-nemu">Delete</button></div>
                                            </div>
                                            <div class="menu-title"><input type="text" class="title" value="<?php echo $parent->name?>"></div>
                                            <div class="menu-price"><input type="number" class="price" value="<?php echo $price?>"></div>
                                            <div class="menu-description"><input type="text" class="description" value="<?php echo $parent->description?>"></div>
                                        </div>
                                        <div class="wrap-menu-block block-level2">
                                        <?php
                                            if(count(get_data_taxonomy($parent->term_id))>0)
                                            {
                                                ?>
                                                  
                                                        <?php
                                                            foreach(get_data_taxonomy($parent->term_id) as $children)
                                                            {
                                                                $price = get_term_meta($children->term_id, 'services-price', true );
                                                                ?>
                                                                    <div class="wrap-level" data-id="<?php echo $children->term_id?>" data-taxonomy="services" data-parent="<?php echo $children->parent?>">
                                                                        <div class="level">
                                                                            <div class="title-level">Level 2</div>
                                                                            <div class="delete-level1"><button class="delete-nemu">Delete</button></div>
                                                                        </div>
                                                                        <div class="menu-title"><input type="text"  class="title" value="<?php echo $children->name?>"></div>
                                                                        <div class="menu-price"><input type="number" class="price" value="<?php echo $price?>"></div>
                                                                        <div class="menu-description"><input type="text" class="description" value="<?php echo $children->description?>"></div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        ?>
                                                <?php
                                            }
                                        ?>
                                        </div>

                                        <div class="wrap-menu-button">
                                            <button class="add-sub">Add a sub-service</button>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>

                       
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-nemu', function() {
                let id = $(this).parent().parent().parent().data('id');
                let taxonomy = $(this).parent().parent().parent().data('taxonomy');
                if(id == 0)
                {
                    $(this).parent().parent().parent().parent().remove();
                    return;
                }

                $.ajax({
                type : "GET", 
                dataType: 'html',
                url : "http://localhost/booking/wp-admin/admin-ajax.php",
                data : {
                    action: "deleteTaxonomy",
                    id: id,
                    taxonomy: taxonomy
                },
                beforeSend: function(){
                   
                },
                success: function(response) {
                    alert(response);
                    location.reload();
                },
                error: function( jqXHR, textStatus, errorThrown ){
                }
                });
            });

            $('.create-menu').click(function(){
                let count = $('.menu-count').val();
                let html = "";
                for(let i=0; i<count; i++)
                {
                    html = html + "<div class='wrap-menu-block block-level1'><div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='0'><div class='level'><div class='title-level'>Level 1</div><div class='delete-level1'><button class='delete-nemu'>Delete</button></div></div><div class='menu-title'><input type='text' class='title'></div><div class='menu-price'><input type='number' class='price'></div><div class='menu-description'><input type='text' class='description'></div></div></div>";
                }
                $( ".body-menu" ).prepend( html );
            });

            $('.add-sub').click(function(){
                let parentId = $(this).parent().parent().children(".wrap-level").data('id');
                let html = "<div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='"+parentId+"'><div class='level'><div class='title-level'>Level 2</div><div class='delete-level1'><button class='delete-nemu'>Delete</button></div></div><div class='menu-title'><input type='text' class='title'></div><div class='menu-price'><input type='number' class='price'></div><div class='menu-description'><input type='text' class='description'></div></div>";
                $(this).parent().parent().children('.block-level2').prepend( html );
            });

            $(document).on('click', '.save', function() { 
                $(".wrap-level").each(function (index, obj) {
                    let id = $(this).data("id");
                    let parentId = $(this).data("parent");
                    let taxonomy = $(this).data("taxonomy");
                    let title = $(this).children('.menu-title').children('.title').val();
                    let price = $(this).children('.menu-price').children('.price').val();
                    let description = $(this).children('.menu-description').children('.description').val();
                    if(id == 0)
                    {
                        $.ajax({
                            type : "GET", 
                            dataType: 'html',
                            url : "http://localhost/booking/wp-admin/admin-ajax.php",
                            data : {
                                action: "createMenu",
                                id:id,
                                parentId:parentId,
                                taxonomy: taxonomy,
                                title: title,
                                price: price,
                                description: description

                            },
                            beforeSend: function(){
                            
                            },
                            success: function(response) {
                                console.log(response);
                            },
                            error: function( jqXHR, textStatus, errorThrown ){
                            }
                        });
                    } else {
                        // update menu
                        $.ajax({
                            type : "GET", 
                            dataType: 'html',
                            url : "http://localhost/booking/wp-admin/admin-ajax.php",
                            data : {
                                action: "updateMenu",
                                id: id,
                                parentId:parentId,
                                taxonomy: taxonomy,
                                title: title,
                                price: price,
                                description: description
                            },
                            beforeSend: function(){
                            
                            },
                            success: function(response) {

                            },
                            error: function( jqXHR, textStatus, errorThrown ){
                            }
                        });
                    }
                });
                location.reload();
            });

        });
    </script>
</html>
