$(document).ready(function(){
/*    $("#register_form").submit(function(){
        if($("#password").val() != $("#check_password").val()){
        //    $("#register_form").addClass('needs-validation');
            $("#password").addClass('is-invalid');
            $("#check_password").addClass('is-invalid');
        //    $("#invalid-feedback").addClass('invalid-feedback');
            alert("請確認您輸入的密碼相同");
            return false;
            
        }
        
    }); */

    $('.nav-menu li ul').mouseenter(function(){
        if($(this).css("display") == "none"){
            $(this).show();
        }
    });


    $('#heart').click(function(){

    });



    //使用者滑鼠移到圖片上時，顯示愛心數
    $('ul#gallery li .wrapper').mouseenter(function(){
		var pic = $(this).parent('li').data('heartpic');
        var num = $(this).parent('li').data('heartnum');
        var more = $(this).parent('li').data('lookmore');
        //當mouseenter沒有div字串則新增
        if(!$(this).children("div").length){
			$(this).append('<div class="overlay"></div>');
		}
        //取得div，加入HTML，並用特效顯示
		var overlay = $(this).children('.overlay');
		overlay.html('<h3>'+pic+" "+num+'</h3><br><p>'+more+'</p>');
		overlay.slideDown(150);
	});

    //使用者滑鼠移出圖片時
	$('ul#gallery li .wrapper').mouseleave(function(){
		//取的div，移除特效
		var overlay = $(this).children('.overlay');
		overlay.slideUp(150);
	});


});

new WOW().init();