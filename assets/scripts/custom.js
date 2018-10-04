
//burger menu:

$(document).ready(function(){
	
	$('.services__row a').click(function(){
		
//		console.log($(this).attr('id'));
//		var serviceNumber=$(this).attr('id'); 
//		$('.about__text.'+ serviceNumber).addClass("red");
		
		
	});
		
	
//	services-inside hoveriai
    
		$(".inside__service__list li").hover(function(){
        
        
    console.log($(this).attr('id'));        
// 		var serviceNumber=$(this).attr('id');       
 		var serviceNumber=$(this).attr('id');       
        
				//parodo pagal atitinkama klase:        
    $('.about__text.'+ serviceNumber).toggleClass("show");

   
           
    });
																				   

//uzdarymas--->

    }) ; 
    

    

