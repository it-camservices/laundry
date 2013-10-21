$(function() {

  $(".numbers-row").append('<a href="#" class="ui-icon-alt" data-role="button" data-icon="plus" data-iconpos="notext" data-inline="true">Plus</a><a href="#" class="ui-icon-alt" data-role="button" data-icon="minus" data-iconpos="notext" data-inline="true">Minus</a');

  $(".button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
  	  var newVal = parseFloat(oldValue) + 1;
  	} else {
	   // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
	    } else {
        newVal = 0;
      }
	  }

    $button.parent().find("input").val(newVal);

  });

});