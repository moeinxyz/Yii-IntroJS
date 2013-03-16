var YiiIntroJS = (function(){
    return {
        start:function(selectorID){
            $("#"+selectorID).attr('onclick',"javascript:introJs().start();");
        },
        set:function(selectorID,step,intro){
            $("#"+selectorID).attr('data-step', step);
            $("#"+selectorID).attr('data-intro', intro);            
        }
    }
}());