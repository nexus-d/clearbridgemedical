
$('document').ready(function(){


function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);







$('#btn-submit-eapps').click(function(){

        var btn=$(this);
        var f=$('#frm-data');
        if(validateRequiredFields(f)){

            var _data=f.serializeArray(); //serialize data in array format
            //console.log(_data);
            $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"../logs/eapps",
                "data":_data,
                "beforeSend" : function(){
                //showSpinningProgress(btn);
                }
            }).done(function(response){
            showNotification(response);
                if(response.stat=="success"){
                clearFields(f); 
            }
            }).always(function(){
            //showSpinningProgress(btn);
            });



        }
});







$('#btn-submit-enq').click(function(){
        var btn=$(this);
        var f=$('#frm-data');
        if(validateRequiredFields(f)){
            var _data=f.serializeArray(); //serialize data in array format
            $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"../logs/enq",
                "data":_data,
                "beforeSend" : function(){
                //showSpinningProgress(btn);
                }
            }).done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                clearFields(f); 
            }
            }).always(function(){
            //showSpinningProgress(btn);
            });



        }
});




var clearFields=function(f){
    $('input,textarea',f).val('');
    $(f).find('input:first').focus();
};




var showNotification=function(obj){
    PNotify.removeAll(); //remove all notifications
    new PNotify({
        title:  obj.title,
        text:  obj.msg,
        type:  obj.stat
    });
};


var showSpinningProgress=function(e){
    $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
};




var validateRequiredFields=function(f){
    var stat=true;

  //  $('div.form-group').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){
        if($(this).is('select')){
            if($(this).select2('val')==0||$(this).select2('val')==null){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
              //  $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        }else{
            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
             //   $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        }

    });

    return stat;
};




$('.custom-iconbox-4').hover(
       function(){ $(this).addClass('hvr-float');/* $(this).find('a').addClass('hvr-icon-forward')*/ },
       function(){ $(this).removeClass('hvr-float') ; /*$(this).find('a').removeClass('hvr-icon-forward')*/ }
)

});