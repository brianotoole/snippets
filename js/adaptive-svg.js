// If SVGs have a viewbox, set their height based on current calculated width.
// Fixes issues w/100% width / auto height SVGs in IE10, FF, and others.
$('svg').each(function() {

  var dims = $(this)[0].getAttribute('viewBox').split(' '),
      width = (dims ? dims[2] : false),
      height = (dims ? dims[3] : false),
      ratio = (width && height ? height / width : false),
      actualwidth = $(this).width();

  if (ratio && actualwidth) {
      if (!$(this).css('max-width') || $(this).css('max-width') == 'none') {
          $(this).css('height', actualwidth * ratio);
      }
  }

});