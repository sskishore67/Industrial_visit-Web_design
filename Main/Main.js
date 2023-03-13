/* Footer Form */
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll >500) {
        $(".navbar").css("background" , "#333"); 
	  }
	  else{
		   
          $(".navbar").css("background" , "none");	
	  }
  })
})
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 500) {
          $(".logo,.nav-link").css("color" , "white"); 
        }
        if(scroll<500)
        {
          $(".logo").css("color" , "Black"); 
        }
        else{
             
            $(".logo").css("background" , "none");	
        }
    })
  })
function Booking()
{
  alert("Please Sign In to continue Booking")
}
