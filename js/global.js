//@codekit-prepend "jquery.fitvids.js"

// Global - Videos everywhere
$("article").fitVids();

// Global - Small screen navigation stuff
$("#show-nav").on("click", function(e) {
  e.preventDefault();
  $("body").toggleClass("nav-shown");
});

// Global
// Used by All RSVP forms and the Contact form
// http://that-matt.com/2010/04/updated-textarea-maxlength-with-jquery-plugin/
jQuery.fn.SendTotalChars = function (options){

  var settings = jQuery.extend({
    attribute: 'maxlength',
    onEdit: function(){}
  }, options);

  // Send length to onEditCallback below
  var onEdit = function(){
    jQuery.proxy(settings.onEdit, this)(jQuery(this).val().length);
  };

  this.each(onEdit);

  return this.keyup(onEdit)
             .keydown(onEdit)
             .focus(onEdit)
             .live('input paste', onEdit);
};

// ---------------------------------------
// website.aspx to show debug info on bottom of screen
$('#heart').on("click", function(e) {
  e.preventDefault();
  $('#heart-info').toggle(500);
  $('html, body').delay(500).animate({scrollTop: $(document).height()}, 2000);
});

// theme.aspx only
$("#toggle-sidebar").click(function() {
  $("body").toggleClass("right-sidebar").toggleClass("left-sidebar");
});

$("#embed-image").on("click", function(e) {
  e.preventDefault();
  var embed = "<figure><img src='//s3.amazonaws.com/idohq/images/happy.jpg' /><figcaption>We're married!!</figcaption></figure>";
  $("#embed-here").html(embed);
});

$("#embed-map").on("click", function(e) {
  e.preventDefault();
  var embed = "<iframe width='100%' height='450' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps/ms?msa=0&amp;msid=214593146899538575765.0004cf58ef4d64dd766f2&amp;ie=UTF8&amp;t=v&amp;source=embed&amp;ll=40.442791,-79.955408&amp;spn=0.006614,0.00828&amp;output=embed'></iframe><br /><small>View <a href='https://maps.google.com/maps/ms?msa=0&amp;msid=214593146899538575765.0004cf58ef4d64dd766f2&amp;ie=UTF8&amp;t=v&amp;source=embed&amp;ll=40.442791,-79.955408&amp;spn=0.006614,0.00828' style='color:#0000FF;text-align:left'>Wedding</a> in a larger map</small>";
  $("#embed-here").html(embed);
});

$("#embed-video").on("click", function(e) {
  e.preventDefault();
  var embed = "<iframe src='https://player.vimeo.com/video/49756216?badge=0&autoplay=1' width='500' height='281' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href='http://vimeo.com/49756216'>Their Story Begins</a> from <a href='http://vimeo.com/kerrylueders'>Kerry Lueders</a> on <a href='http://vimeo.com'>Vimeo</a>.</p>";
  $("#embed-here").html(embed).fitVids();
});

$("#embed-tweet").on("click", function(e) {
  e.preventDefault();
  var embed = "<blockquote class='twitter-tweet tw-align-center'><p>Creating new website themes for the new iDo in the cloud using Sass + Compass in Codekit.Only way to design websites in my opinion.</p>&mdash; John Lueders (@elmsoftware) <a href='https://twitter.com/elmsoftware/status/270286731255873536' data-datetime='2012-11-18T22:05:53+00:00'>November 18, 2012</a></blockquote><script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>";
  $("#embed-here").html(embed);
});