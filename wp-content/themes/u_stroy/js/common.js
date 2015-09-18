$(document).ready(function() {
	
//tel

 $("input[type='tel']").mask("+7(999) 999-9999",{placeholder:" "});



	//first form
$(window).load(function(){
	 $("#fsbm").removeAttr('disabled')
})



$('#actcount textarea, #actcount input').change(function(){
	if($(this).val()) {
		$(this).parent().next('.chform').find('img').attr('src','/images/ok.png') 
	}
		

	else {
		$(this).parent().next('.chform').find('img').attr('src','/images/worning.png') 
	}
	
	if($(this).hasClass('wpcf7-email')) {
	 var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;	
		if(!pattern.test($(this).val())){
			$(this).parent().next('.chform').find('img').attr('src','/images/worning.png') 
		}
	}
	if($(this).hasClass('wpcf7-acceptance')) {
		if(!$(this).is(':checked')){
			$(this).parent().next('.chform').find('img').attr('src','/images/worning.png') 
		}
	}	
	

})



if($('#fchoose').length)
	{
	$('#fchoose').click(function(){
		$('#finf').click();
		return(false);
	});
	$('#finf').change(function(){
		$('.finfo').html($(this).val());
		$('#checkf2').html('<img src="/images/ok.png">');
	});
}


 // video
$('video').each(function(){
  	
  var controls = {
        video: $(this),
        playpause: $(this)                 
    };
                
    var video = controls.video[0];
               
    controls.playpause.on('click', function(e){
    	e.preventDefault();
        if (video.paused) {
            video.play();
            $(this).addClass("Pause");    
        } else {
            video.pause();
            $(this).addClass("Play");
        }
                
        $(this).toggleClass("paused"); 
    });
})

$("a[href='#hwwork']").click(function(){
	$('#playit').click()
})


// всплывающие окна
$("[class$='popup_wrapper']").click(function(){
	$(this).hide();
})


  $(".link a").click(function(){
    $(".three_popup_wrapper").css({"display": "block"});
  });
  $(".close").click(function(){
    $(".three_popup_wrapper").css("display", "none");
  });
  $(".back").click(function(){
    $(".three_popup_wrapper").css("display", "none");
  });
  
  $(".vislat_raschet").click(function(){
    $(".six_popup_wrapper").css("display", "block");
  });
  $(".form_close").click(function(){
    $(".six_popup_wrapper").css("display", "none");
  });
  
  $(".price_list").click(function(){
    $(".seven_popup_wrapper").css("display", "block");
  });
  $(".close_seven").click(function(){
    $(".seven_popup_wrapper").css("display", "none");
  });
  
  
// скролл кнопкой НАВЕРХ на начало страницы
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $('#scroller').fadeIn();
    } else {
      $('#scroller').fadeOut();
    }
  });
  
  $('#scroller').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 1500);
    return false;
  });
  
//  $("#scroller_page2").click(function () {
//    $('body,html').animate({
//      scrollTop: 0
//    }, 1500);
//    return false;
//  });
  
  
	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});

$(window).load(function() {
  $(".loader_inner").fadeOut();
  $(".loader").delay(400).fadeOut("slow");
});

$(document).ready( function() {
	$('.vislat_raschet').click( function(event){ // ловим клик по ссылки с id="go"
		event.preventDefault(); // выключаем стандартную роль элемента
		if($('.wpcc_mail_1')[0]) {
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предъидущей анимации
				$("html,body").css("overflow","hidden");
				$('.wpcc_mail_1') 
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1, top: '50%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
					
		});
	}
	});
	/* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
	$('.wpcc_submit, #modal_close, #overlay').click( function(){ // ловим клик по крестику или подложке
		$('#overlay').fadeOut(400); // скрываем подложку
		$("html,body").css("overflow","auto");
		if($('.wpcc_mail_1')[0]) {
				$('.wpcc_mail_1').animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
				}
			);
		}else {
		$("html,body").css("overflow","auto");
		}
	});
});

$(document).ready( function() {
	$('#onlescf').click( function(event){ // ловим клик по ссылки с id="go"
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#onlescf').fadeOut(250);
		setTimeout(function () {
		$('.button_2').css({'margin-top': '-50px', 'background': 'rgba(255,255,255,0.5)', 'height': '172px'});
		}, 200);
		setTimeout(function () {
		$('.button_2').html('<a id="hwworkbutt" class="sbb scrdn btred" href="#hwwork">Посмотреть, как это работает</a><a class="sbb scrdn btgreen" href="#sesect">Перейти к оформлению заявки</a>');
		$("a.scrdn").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-100}, 1000);
        return false;
    });
		}, 400);
$('$hwworkbutt').click(function(){
	$('#playit').click()
})
		});
});

$(document).ready(function() {
    $("a.scrdn").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-100}, 1000);
        return false;
    });
});

$(document).ready( function() {
	$('#fclear').click(function(event){
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#fcont').innerHTML = $('#fcont').innerHTML;
		$('.finfo').html('');
		$('#checkf2').html('<img src="/images/worning.png">');
});
});

 // calc fix
$(window).load(function(){
	$('input.wpcc_submit.wpcc_submit_1').click().hide()
})

$('select.wpcc_jq_action.wpcc_jq_action_1.wpcc_select.wpcc_select_1').change(function(){
	$('input.wpcc_submit.wpcc_submit_1').click()
})

$('input.wpcc_jq_action.wpcc_jq_action_2').keypress(function(){
	$('input.wpcc_submit.wpcc_submit_1').click()
})

/*
$('document').ready(function(){
    var $login = $("#finn"),
	$button = $("#fsbm");
	$button.prop("disabled", true);
    var check = function (text) {
        if (text.length > 2) {
			$button.prop("disabled", false);
            $('#checkf3').html('<img src="/images/ok.png">');
        } else {
           $('#checkf3').html('<img src="/images/worning.png">');
		   $button.prop("disabled", true);
        }
    };
    
    $login.on("keyup", function () {
        var val = $(this).prop("value");
        check(val);
    });
});


$('document').ready(function(){
    var $fint = $("#fint"),
	$button = $("#fsbm");
	$button.prop("disabled", true);
    var checkt = function (text) {
        if (text.length > 6) {
			$button.prop("disabled", false);
            $('#checkf4').html('<img src="/images/ok.png">');
        } else {
           $('#checkf4').html('<img src="/images/worning.png">');
		   $button.prop("disabled", true);
        }
    };
    
    $fint.on("keyup", function () {
        var val = $(this).prop("value");
        checkt(val);
    });
});
$('document').ready(function(){
    var $login = $("#fine"),
	$button = $("#fsbm");
	$button.prop("disabled", true);
    var check = function (text) {
        if (text.length > 4) {
			$button.prop("disabled", false);
            $('#checkf5').html('<img src="/images/ok.png">');
        } else {
           $('#checkf5').html('<img src="/images/worning.png">');
		   $button.prop("disabled", true);
        }
    };
    
    $login.on("keyup", function () {
        var val = $(this).prop("value");
        check(val);
    });
});
$('document').ready(function(){
    var $login = $("#finta"),
	$button = $("#fsbm");
	$button.prop("disabled", true);
    var check = function (text) {
        if (text.length > 4) {
			$button.prop("disabled", false);
            $('#checkf1').html('<img src="/images/ok.png">');
        } else {
           $('#checkf1').html('<img src="/images/worning.png">');
		   $button.prop("disabled", true);
        }
    };
    
    $login.on("keyup", function () {
        var val = $(this).prop("value");
        check(val);
    });
});*/