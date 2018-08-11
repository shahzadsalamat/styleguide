const transWrapper = $('.articles');
const profile = $('.gb-right-navbar');
$('.nav-avatar').click(()=>{
  transWrapper.addClass('translated-left');
  profile.addClass('translated-left');
})

$('.close-right-navbar').click(()=>{
  transWrapper.removeClass('translated-left');
  profile.removeClass('translated-left');
})