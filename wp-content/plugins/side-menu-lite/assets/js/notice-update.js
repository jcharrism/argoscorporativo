jQuery(document).on( 'click', '.wow-plugin-notice .notice-dismiss', function() {
		jQuery.ajax({
        url: ajaxurl,
        data: {
            action: 'side_menu_notice_action'
        }
    })
})