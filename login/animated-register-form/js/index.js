var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Loading');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('Successfully created signature!');
    setTimeout(function() {
      $state.html('Create Signature');
      $this.removeClass('ok loading');
      working = false;
    }, 4000);
  }, 3000);
});