$(".contactBtn").click(function(e) {
e.preventDefault();
$('html, body').animate({ scrollTop: $('.contactMe').offset().top }, 'slow');
});