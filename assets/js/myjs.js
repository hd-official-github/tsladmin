
$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
       
if($('#fun').val()){
   
}else{
    
    if (scroll >= 60) {
        $(".logowhite").hide();
        $(".logoblack").show();

        //logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
    }
    if (scroll <= 60) {
        $(".logowhite").show();

        $(".logoblack").hide();
    } else {
        $(".logoblack").show();
    }
}
		
	});
});


$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$(".mobwhitelogo").hide();
		}
		if (scroll <= 50) {
			$(".mobwhitelogo").show();

			$(".mobblacklogo").hide();
		} else {
			$(".mobblacklogo").show();
		}
	});
});
// $(function () {
// 	$(window).scroll(function () {
// 		var scroll = $(window).scrollTop();
//         if($('#fun').val()){
           
//             return;
//         }else{
//             if (scroll >=10) {
//                 $(".top-panel").css('background','white');
//             }
//             if(scroll<10){
//                 $('.top-panel').css('background','transparent');
//             }
            
//         }
	
// 	});
// });
function drop() {
	$(".ulcls").toggle();
}
function dropwhat() {
	$(".ulclsw").toggle();
}

// function ques1() {
// 	$(".answer1").toggle("slow");
// }
// function ques2() {
// 	$(".answer2").toggle("slow");
// }
// function ques3() {
// 	$(".answer3").toggle("slow");
// }
function getreview() {
	$(".review").slideToggle();
}

function getval(obj)
{
   var a=$(obj).attr('text');
   
    
   $('#keyval').val(a);

}
function getsublocval(obj){
  
     var a = $(obj).attr('value');
     $('#subloc').val(a);
}
function ques1(obj){
	var val = $(obj).attr('value');
	var ans = document.getElementById(val);
	$(ans).toggle('slow');
	
}
