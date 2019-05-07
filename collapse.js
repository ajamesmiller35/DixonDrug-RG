
var width = $("body").width();

if(width <= 1050){

$(document).on('click', '.collapse-me', function (event) {
    event.preventDefault();
    document.getElementById('toggle-button').click();
    console.log('click');
  });
}