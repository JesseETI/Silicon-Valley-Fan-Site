$(document).ready(function() {

  var home = $(".background");
  var about = $(".about");
  var team = $(".media");
  var contact = $(".contact_overview");

  $("li a").click(function(event) {
      event.preventDefault();

      $("html,body").animate({scrollTop:$(this.hash).offset().top}, "slow");

  });

});
