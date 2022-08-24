jQuery(document).ready(function() {

    // đổi chỗ vị trí item ở my account admin bar trong /wp-admin/
    jQuery("#wp-admin-bar-my-account li:eq(1)").before(jQuery("#wp-admin-bar-my-account li:eq(3)"));
    jQuery("#wp-admin-bar-my-account li:eq(2)").before(jQuery("#wp-admin-bar-my-account li:eq(4)"));
});