jQuery(document).ready(function() {

	try {

		if (! jQuery('#wpcf7-mailchimp-cf-active').is(':checked'))

			jQuery('.mailchimp-custom-fields').hide();

		jQuery('#wpcf7-mailchimp-cf-active').click(function() {

			if (jQuery('.mailchimp-custom-fields').is(':hidden')
			&& jQuery('#wpcf7-mailchimp-cf-active').is(':checked')) {

				jQuery('.mailchimp-custom-fields').slideDown('fast');
			}

			else if (jQuery('.mailchimp-custom-fields').is(':visible')
			&& jQuery('#wpcf7-mailchimp-cf-active').not(':checked')) {

				jQuery('.mailchimp-custom-fields').slideUp('fast');
        jQuery(this).closest('form').find(".mailchimp-custom-fields input[type=text]").val("");

			}

		});



		jQuery(".mce-trigger").click(function() {

			jQuery(".mce-support").slideToggle("fast");

      jQuery(this).text(function(i, text){
          return text === "Show advanced settings" ? "Hide advanced settings" : "Show advanced settings";
      })

			return false; //Prevent the browser jump to the link anchor

		});


    jQuery(".mce-trigger2").click(function() {
      jQuery(".mce-support2").slideToggle("fast");
      return false; //Prevent the browser jump to the link anchor
    });


    jQuery(".mce-trigger3").click(function() {
      jQuery(".mce-support3").slideToggle("fast");
      return false; //Prevent the browser jump to the link anchor
    });


	}

	catch (e) {

	}

});