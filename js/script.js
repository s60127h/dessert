$(document).ready(function(){
    $("#register_form").submit(function(){
        if($("#password").val() != $("#check_password").val()){
        //    $("#register_form").addClass('needs-validation');
            $("#password").addClass('is-invalid');
            $("#check_password").addClass('is-invalid');
        //    $("#invalid-feedback").addClass('invalid-feedback');
            alert("請確認您輸入的密碼相同");
            return false;
            
        }
        
    });
});

new WOW().init();