jQuery(document).ready(function($) {
  
  var utcoffset = $('#utc-offset');
  if (utcoffset.length) {
    utcoffset.val(new Date().getTimezoneOffset() / 60);
  }

  // When a 'guest' is clicked
  $('.guest').click(function() {
    $('.guest').hide();
    $('#guest-name').fadeIn(400);
  });

  // Attending dropdowns
  $('select[id^=attending]').change(function() {

    var thisId = $(this).attr('id');
    var contactId = thisId.replace('attending-', '');
    var meallist = $('#meal-' + contactId);

    if($(this).val() === 'Y') {

      meallist.removeAttr('disabled');

    } else {

      meallist.val(0);
      meallist.attr('disabled', 'disabled');

    }

  });

  // Progress bar for Note field's total characters (max = 255)
  var onEditCallback = function(totalChars){

    $('.note-progressbar').width(($('.note').width() + 6) * (totalChars / 255));
  
  };

  $('textarea[maxlength]').SendTotalChars( {onEdit: onEditCallback} );

  // Submit Button
  $('#submit-rsvp').click(function(event) {

    var enableSubmit = true;
    
    $('select[id^=attending]').each(function() {

      // If Attending field is blank then show message
      if($(this).val() === '0') {
      
        enableSubmit = false;
      
      // If Attending field is 'Y', then a meal must be selected as well
      } else if($(this).val() === 'Y') {

          var thisId = $(this).attr('id');
          var contactId = thisId.replace('attending-', '');
          
          if ($('#meal-' + contactId).val() === '0') {
            
            enableSubmit = false;
            
          }
          
        }
        
      });

      if (enableSubmit === false) {
        
        $('.required-fields').slideDown('slow');
        event.preventDefault();
      
      }

  });

});
