
var newH2 = $('<h2>About us<h2/>');
var newTxt = $('<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>').addClass('generic-text');
var emptyContainer = $('<div></div>').addClass('container-fluid height-100');

$('main').addClass('container position-relative');
$('main').prepend(newTxt);
$('main').prepend(newH2);

$('main').append(emptyContainer);
