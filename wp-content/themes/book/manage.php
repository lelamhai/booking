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

    #manage {
        display: flex;
        width: 100%;
        height: calc(100vh - 32px);;
    }

    #manage-menu-wrap {
        width: 260px;
        height: 100%;
        background-color: #1d5f9b;
        display: flex;
        align-items: stretch;
        flex-direction: column;
        justify-content: space-between;
    }

    #manage-content-wrap {
        width: calc(100% - 260px);
        overflow-y: scroll;
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

    .ui-state-default {
        background-color: transparent!important;
        color: #fff !important; 
        border: 0 !important;
    }

    .ui-datepicker-current-day a {
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
</style>
<main id="manage">
    <div id="manage-menu-wrap">
        <div class="first-menu-manage">
            <!-- <div class="site-title"><a href="./"><?php echo get_bloginfo()?></a></div> -->
            <div class="item-menu-manage datepicker">
                <div id="datepicker"></div>
            </div>
            <ul class="item-menu-manage">
                <li>a</li>
                <li>b</li>
                <li>c</li>
            </ul>
        </div>

        <div class="last-menu-manage">
            <ul class="list-item-footer">
                <li><a href="./edit-web">Edit web</a></li>
                <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
            </ul>
            <div class="site-title"><a href="./"><?php echo get_bloginfo()?></a></div>
        </div>
    </div>
    <div id="manage-content-wrap">
        <div class="wrap-container">
            content
        </div>
    </div>
</main>
<?php
    get_footer();
?>      