$(document).ready(function(){
    
 
ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } ); 
    
    
 
    
    
}); 


$(document).ready(function(){
    
 $('#selectAllBoxes').click(function(event){
                           
                  if(this.checked) {
                      
                 $('.checkBoxes').each(function(){
                    
                     
                     this.checked=true;
                     
                     
                     
                 });     
                      
                      
                      
                  }else
                      
     {
         
          $('.checkBoxes').each(function(){
                     
                     this.checked=false;
                     
                     
         
         
     }); 
     }
    
    
    
     });
    
    
    
  var div_box ="<div id='load-screen'><div id='loading'></div></div>";
    
    $("body").prepend(div_box);
    
    $('#load-screen').delay(700).fadeOut(600,function(){
        $(this).remove();
    });
    
    function loadusersonline()
    {
        
        $.get("functions.php?onlineusers=result",function(data){
            
          $(".usersonline").text(data);  
            
            
        });
        
        
    }
    setInterval(function(){
        
     loadusersonline();    
       
        
    },500);
    

    
    
    
    
    
    
    
    
    
    
    
    });