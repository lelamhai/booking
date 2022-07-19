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
                        <button class="yes">Yes</button>
                        <button class="no" data-dismiss="modal">No</button>
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

                    <button class="save">Save changes</button>
                </div>
            </section>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
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

            $('.yes').click(function(){
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
                            alert(response);
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
           

            $(document).on('click', '.save', function() { 
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
    </script>
</html>
