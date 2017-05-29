jQuery(document).ready(function(){

  var box = jQuery('.container #cube');
  var showPanelButtons = jQuery('#show-buttons button');
  var panelClassName = 'show-front';

  onButtonClick = function( event ){
    box.removeClass( panelClassName );
    panelClassName = event.target.className;
    box.addClass( panelClassName );
  };

  for (var i=0, len = showPanelButtons.length; i < len; i++) {
    showPanelButtons[i].addEventListener( 'click', onButtonClick, false);
  }

  /*var w = jQuery(window).width();
  var h = jQuery(window).height(); 
  console.log('w : '+w);
  console.log('h : '+h);
  jQuery('#box .front, #box .back, #box .container, #box .right, .box .left').css('width',w);
  jQuery('#box .front, #box .back, .container, #box .right, .box .left').css('height',h);
  */

});