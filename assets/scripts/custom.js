
//burger menu:

$(document).ready(function(){
	

	
	
	
	
	  $("nav li").click(function(){
        
        
    console.log($(this).attr('id'));
  
        
    var serviceNumber=$(this).attr('id');
           
        
//        visus paslepia:
    $('.about__text').hide();
        
//parodo pagal atitinkama klase:        
    $('.about__text.'+ serviceNumber).show();
        
//         console.log('.news-text-content .'+mygtukas);    
        
  
               
            
    });
	
																				   

//uzdarymas--->

    }) ; 
    

    

