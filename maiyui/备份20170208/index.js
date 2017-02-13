$(function() {
//        $('#page').fullpage({
//            navigation: true,
//            keyboardScrolling: true,
//            
//        });
//    
    
    
    
    
	function index_gd() {
		var $window = $(window);

		var $windowWidth = function() {
			return $window.width();
		};
		var $windowHeight = function() {
			return $window.height();
		};
               
		$window.fssResize(function() {
			var width = $windowWidth();
			var height = $windowHeight() ;

			$('.section1 .slider').each(function() {
				$this = $(this);
				$this.height(height).width(width);
				$this.triggerHandler("configuration", {
					height: height,
					width: width,
					items: {
						width: width
					}
				});
				$this.triggerHandler("updateSizes");
			});

		});

		$('.section1 .sliderele').each(function() {
			$(this).fullscreenstage({
				'width': 1920,
				'height': 1080
			});
		});

		$(window).fssResize();
		$('.slider').carouFredSel({
			'responsive': true,
			items: {
				visible: 1
			},
			'scroll': {
				'duration': 1000,
				'items': 1,
                                'event':'hover',
                                'pauseOnHover':true
			},
			'auto': {'duration': 800},
			
			'pagination': '.banner-pagination'
		});

		$(window).fssResize();
                $("body").css({"visibility":"visible"});
               

	};

	index_gd();

	var sq01 = function() {
		var canvas = document.getElementById('myCanvas');
                if(canvas.getContext){
                   var ctx=canvas.getContext("2d");
               
                
		
                    var step, startAngle, endAngle, add = Math.PI * 2 / 100;
                    ctx.shadowOffsetX = 0; 
                    ctx.shadowOffsetY = 0; 
                    ctx.shadowBlur = 0; 
                    ctx.lineWidth = 1.0;
                    counterClockwise = false;
                    var x;
                    var y;
                    var radius;
                    var animation_interval = 20,
                            n = 25;
                    var varName;

                    function actiondo() {
                            step = 1;
                            startAngle = 550;
                            ctx.strokeStyle = '#ffffff';             
                            x = 86;
                            y =87;
                            radius = 86;
                            varName = setInterval(animation, animation_interval);
                    }
                    var animation = function() {
                            if(step <= n) {
                                    endAngle = startAngle + add;
                                    drawArc(startAngle, endAngle);
                                    startAngle = endAngle;
                                    step++;
                            } else {
                                    clearInterval(varName);
                            }

                    };

                    function drawArc(s, e) {
                            ctx.beginPath();
                            ctx.arc(x, y, radius, s, e, counterClockwise);

                            ctx.lineWidth = 2.0;
                            ctx.stroke();
                    };
                    actiondo();
//                    resizeCanvas(canvas,ctx);
                }else{
                    return;
                }
                
	};
	var sq02 = function() {
		var canvas = document.getElementById('myCanvas2');
		 if(canvas.getContext){
                    var ctx=canvas.getContext("2d");
                
                    var step, startAngle, endAngle, add = Math.PI * 2 / 100;
                    ctx.shadowOffsetX = 0; // 璁剧疆姘村钩浣嶇Щ
                    ctx.shadowOffsetY = 0; // 璁剧疆鍨傜洿浣嶇Щ
                    ctx.shadowBlur = 0; // 璁剧疆妯＄硦搴�
                    ctx.lineWidth = 1.0;
                    counterClockwise = false;
                    var x;
                    var y;
                    var radius;
                    var animation_interval = 20,
                            n = 70;
                    var varName;

                    function actiondo() {
                            step = 1;
                            startAngle = 550;
                            ctx.strokeStyle = '#ffffff'; //鍦嗗湀棰滆壊                
                            x = 86;
                            y =87;
                            radius = 86;
                            varName = setInterval(animation, animation_interval);
                    }
                    var animation = function() {
                            if(step <= n) {
                                    endAngle = startAngle + add;
                                    drawArc(startAngle, endAngle);
                                    startAngle = endAngle;
                                    step++;
                            } else {
                                    clearInterval(varName);
                            }

                    };
                    function drawArc(s, e) {
                            ctx.beginPath();
                            ctx.arc(x, y, radius, s, e, counterClockwise);

                            ctx.lineWidth = 2.0;
                            ctx.stroke();
                    };
                    
                    actiondo();
//                    resizeCanvas(canvas,ctx);
                }else{
                    return;
                }
               
	};
	var sq03 = function() {
		var canvas = document.getElementById('myCanvas3');
		 if(canvas.getContext){
                   var ctx=canvas.getContext("2d");
                   var step, startAngle, endAngle, add = Math.PI * 2 / 100;
                    ctx.shadowOffsetX = 0; // 璁剧疆姘村钩浣嶇Щ
                    ctx.shadowOffsetY = 0; // 璁剧疆鍨傜洿浣嶇Щ
                    ctx.shadowBlur = 0; // 璁剧疆妯＄硦搴�
                    ctx.lineWidth = 1.0;
                    counterClockwise = false;
                    var x;
                    var y;
                    var radius;
                    var animation_interval = 20,
                            n = 90;
                    var varName;

                    function actiondo() {
                            step = 1;
                            startAngle = 550;
                            ctx.strokeStyle = '#ffffff'; //鍦嗗湀棰滆壊                
                            x = 86;
                            y =87;
                            radius = 86;
                            varName = setInterval(animation, animation_interval);
                    }
                    var animation = function() {
                            if(step <= n) {
                                    endAngle = startAngle + add;
                                    drawArc(startAngle, endAngle);
                                    startAngle = endAngle;
                                    step++;
                            } else {
                                    clearInterval(varName);
                            }

                    };

                    function drawArc(s, e) {
                            ctx.beginPath();
                            ctx.arc(x, y, radius, s, e, counterClockwise);
                            ctx.lineWidth = 2.0;
                            ctx.stroke();
                    };
                    actiondo();
//                    resizeCanvas(canvas,ctx) ;
                }else{
                    return;
                }
                
              
		
	};


	sq01();  
	sq02();
	sq03();
//	function resizeCanvas(canvas,ctx) {
//            var W=$(".yuan").width();
//            $(".yuan").height(W)
//            w = canvas.width = $(".yuan").width();
//            h = canvas.height = $(".yuan").height();
//            ctx.strokeStyle = '#ffffff'; 
//            drawArc(x,y,s, e)
//        }
//	function drawArc(s, e) {
//                ctx.beginPath();
//                ctx.arc(x, y, radius, s, e, counterClockwise);
//                ctx.lineWidth = 2.0;
//                ctx.stroke();
//        };
//	
	
	
	
	
    paddingLeft()
function paddingLeft(){
   
    var lengroup=$(".elegroup").length;
    for(var i=0;i<lengroup;i++){
		$(".elegroup").eq(i).children().eq(0).addClass("paddingLeft");
       $(".elegroup").eq(i).children().eq(7).addClass("paddingLeft");

    }
}


$('.section2_wrap').carouFredSel({
			responsive: true,
			items: {
				visible: 1
			},
			scroll: {
				duration: 1000, items: 1,
                               
                                'pauseOnHover':true
			}, 
//			'auto': {'duration': 800},
                        'auto':false,
			prev: '.left',  
                        next:'.right'
		});
    
    
$("body").on("mouseover",".slider2 .ele_pomp img",function(){

     var _url="/site/popup/"+$(this).attr("data");
     $(".d_employeeimg").load(_url,function(data){
         console.log(data)
         $("body").unbind("mousewheel");
         porShow();
          $("#home_pomp").show();
          
         
          
     })
   
})	
  function porShow() {

        $("body").on("click", "#home_pomp .d_mask", function(e) {
            e.stopPropagation();
            $.srSmoothscroll({
                    step: 150,
                    speed: 600,
                });
            $("#home_pomp").css({'display': 'none'});

        });
        $("body").on("click", "#home_pomp .close", function(e) {
            e.stopPropagation();
            $.srSmoothscroll({
                    step: 150,
                    speed: 600,
                });
            $("#home_pomp").css({'display': 'none'});
        });

    };	
	
        
        
        
	
function index_gd2(eleWrap,ele,wid,hei){
        var $window = $(eleWrap);

        var $windowWidth = function() {
            return $window.width();
        };
        var $windowHeight = function() {
            return $window.height();
        };
        $window.fssResize(function() {
            var width = $windowWidth();
            var height = $windowHeight();

		$(ele).each(function() {
                $this = $(this);
                $this.height(height).width(width);
                $this.triggerHandler("configuration", {height: height, width: width, items: {width: width}});
                $this.triggerHandler("updateSizes");
            });
            
            
           
            
            
        });

		$(ele).each(function() {
            $(this).fullscreenstage({'width': wid, 'height':hei});
        });
        
        $(window).fssResize();

       	$(window).fssResize(); 

};

        index_gd2(".section3 .contLeft",".section3 .contLeft .imgBgimg",960,1080);	
    index_gd2(".section3 .contLeft",".section3 .video01Wrap",815,460);
    
	index_gd2(".section3 .r_top",".section3 .r_top .imgBg .imgBgimg",960,540);	
    index_gd2(".section3 .r_top",".section3 .r_top .video02Wrap", 815,460);
	index_gd2(".section3 .r_b_l",".section3 .r_b_l .imgBg .imgBgimg",480,540);
    index_gd2(".section3 .r_b_l",".section3 .r_b_l .video03wrap",815,460);
	index_gd2(".section3 .r_b_r",".section3 .r_b_r .imgBg .imgBgimg",480,540);
    index_gd2(".section3 .r_b_r",".section3 .r_b_r .video04wrap",815,460);



	index_gd2(".section5 .block01",".section5 .block01 .imgBg img",500,500);	
	index_gd2(".section5 .block02",".section5 .block02 .imgBg img",500,500);
	index_gd2(".section5 .block03",".section5 .block03 .imgBg img",500,500);	
	index_gd2(".section5 .block04",".section5 .block04 .imgBg img",500,500);	
	index_gd2(".section5 .block05",".section5 .block05 .imgBg img",500,500);	
	index_gd2(".section5 .block06",".section5 .block06 .imgBg img",500,500);
	index_gd2(".section5 .block07",".section5 .block07 .imgBg img",500,500);
	index_gd2(".section5 .block08",".section5 .block08 .imgBg img",500,500);
	index_gd2(".section5 .block09",".section5 .block09 .imgBg img",500,500);
	index_gd2(".section5 .block10",".section5 .block10 .imgBg img",500,500);
	index_gd2(".section5 .block11",".section5 .block11 .imgBg img",500,500);
	index_gd2(".section5 .block12",".section5 .block12 .imgBg img",500,500);
	
	
	
	sectionEffe();
	function sectionEffe(){
		$(".section5 .block").mouseover(function(){
			$(".section5 .block").find(".hoverEffe").stop().animate({opacity:"0"},function(){
				
			})
			$(this).find(".hoverEffe").stop().animate({opacity:"1"},function(){
				
			})
		})
	}
	noIe8();
        function noIe8(){
            var browser=navigator.appName 
            var b_version=navigator.appVersion 
            var version=b_version.split(";"); 
            var trim_Version=version[1].replace(/[ ]/g,"");
            if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0") 
            { 
            
            } else{
                 $(window).resize(function() {
                    if($(window).width()<=640){
                        $(".content_mobile").children().detach();
                          $(".content_mobile").append("<img src='/themes/basic/skin/images/home_section2_mobile.png' />");
                    }

               }); 
                  if($(window).width()<=640){
                        $(".content_mobile").children().detach();
                          $(".content_mobile").append("<img src='/themes/basic/skin/images/home_section2_mobile.png' />");
                    }
                     }
        }
        
        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	
})