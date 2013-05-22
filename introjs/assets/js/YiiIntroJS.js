var YiiIntroJS = (function(){
    return {
        start:function(selectorID,event){
            $("#"+selectorID).attr(event,"javascript:introJs().start();");
        },
        set:function(selectorID,step,intro,position){
            $("#"+selectorID).attr('data-step', step);
            $("#"+selectorID).attr('data-intro', intro);  
            if (position == 'right' || position == 'left'  || position == 'top' || position == 'bottom')
                $("#"+selectorID).attr('data-position', position);  
        },
        exit: function(selectorID,event){
            $("#"+selectorID).attr(event, "introJs().exit();");  
        }
    }
}());