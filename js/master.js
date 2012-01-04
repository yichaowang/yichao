var YC = YC || {};  

YC = {
    blink:{},
    navi:{},
    yscroll:{},
    arrow:{},
    tooltip:{},
    zoom:{},
    footer:{}
};

YC.blink = {
    init: function(){
        this._self = $('#blink-slider');
        this.content = $('#main-mask');
        this.content_width = $('#main-mask').width();
        this.setSlider();
        this.setIntroHeight();
        
        // this.goToPage(2,1);
    },   
                                  
    setSlider: function(){
        $('#blink-slider-activator').bind({
            mouseover: function(){
                $(this).find('#blink-slider').stop(true).animate({'height':'12px'},300);
                $(this).find('.ui-slider-handle').stop(true).animate({'height':'12px'},300);
            },
            mouseleave: function(){
                $(document).bind('mousemove',function(e){ 
                    if (e.pageY > 550 || e.pageY < 400 ){
                        $('#blink-slider-activator').find('#blink-slider').stop(true).animate({'height':'3px'},300);
                        $('#blink-slider-activator').find('.ui-slider-handle').stop(true).animate({'height':'3px'},300);
                        $(document).unbind('mousemove');
                    }
                });
            }
        });
        
        this._self.slider({
            animate: true,
            min:0,
            max:(this.content_width - 960*3),
            slide: function(event, ui){
                YC.blink.content.stop(1).animate({"left": (-1)*ui.value},300);
                YC.navi.refreshActive((-1)*ui.value+"px");
            },
            stop: function(event, ui){
                YC.blink._self.slider('value', Math.round(ui.value/960)*960); 
                YC.blink.content.stop(1).animate( {"left":(-1)*YC.blink._self.slider('value')},1500,'easeOutExpo');
                YC.navi.refreshActive((-1)*YC.blink._self.slider('value')+"px");
            },
            change: function(event, ui){
                YC.blink.content.stop(1).animate( {"left":(-1)*YC.blink._self.slider('value')},1000,'easeOutExpo');
                YC.navi.refreshActive((-1)*YC.blink._self.slider('value')+"px"); 
            }
        });
    },
    
    refreshSliderPosition: function(){
        var bottom = parseInt($('footer').outerHeight());  
        $('div#blink-slider-activator').animate({'bottom': bottom},200)
    }, 
    
    setIntroHeight: function(){
        var browser_height = $(window).innerHeight();
       
        $('article section.intro').css({
            'height':(browser_height-200)
        }); 
        YC.blink.refreshViewportHeight(0);
    },            
    
    refreshViewportHeight: function(pos){
        this.active_height = $('#main-mask article').eq(pos).outerHeight();
        $('div#main').stop(1).animate({'height':this.active_height},1500,'easeOutExpo');
    },
    
    goToPage: function(y,x){
        $('div#main-mask').animate({
            'left': (-1)*(y-1)*960
        },function(){
            YC.navi.refreshActive();
            setTimeout(function(){$(window).scrollTop(x*525);
            },1300)
        });
    }
}

YC.navi = {
    init: function(){
        this._self = $('header#navi');
        this.content = $('#main-mask');
        this.h_location = 1;
        this.portfolio_pos = 2;
        this.setAppearance();
        this.refreshActive();
        this.landingFlash();
    },                      
    
    setAppearance: function(){
        this._self.find('li a').bind({
            mouseenter:function(){
                if ($(this).attr('class')=='active') return false;  
                $(this).stop(1).animate({'color':'#fff', 'background-color':'#0cf'},700)
            },  
            
            mouseleave:function(){
                if ($(this).attr('class')=='active') return false;
                if ($('header#navi').hasClass('slideshow')){
                    $(this).stop(1).animate({'color':'#303030', 'background-color':'#fff'},700)
                } else {
                    $(this).stop(1).animate({'color':'#fff', 'background-color':'#303030'},700)
                }  
            },
            
            click: function(){
                var target = $(this).text().toLowerCase()
                if (target == 'home'){
                    YC.blink._self.slider('value',0)
                } else if (target == 'portfolio'){
                    YC.blink._self.slider('value',960*(YC.navi.portfolio_pos-1));
                    $('#blink-slider-activator').css('z-index','100').animate({
                        opacity:1
                    },200);
                } else if (target == 'resume'){
                    YC.blink.content.stop(1).animate({"left": (-1)*3840},1500,'easeOutExpo');
                    $('#blink-slider-activator').css('z-index','-1').animate({
                        opacity:0.01
                    },200);
                    YC.navi.refreshActive((-1)*3840+"px");
                } else if (target == 'about'){   
                    YC.blink.content.stop(1).animate({"left": (-1)*4800},1500,'easeOutExpo');
                    $('#blink-slider-activator').css('z-index','-1').animate({
                        opacity:0.01
                    },200);
                    YC.navi.refreshActive((-1)*4800+"px");
                } 
                $(window).scrollTop(0);
            }
        });
    },
    
    refreshActive: function(pos){
        var end_pos = pos || $('#main-mask').css('left');
        var content_pos = Math.round(parseInt(end_pos)*(-1)/960)+1; 
         
        if (YC.navi.h_location!=content_pos){  
            if (content_pos == 1 ){
                this._setActive('nav_home');
            } else if (content_pos >= 2 && content_pos <= 4 ){
                this._setActive('nav_portfolio');
                this.portfolio_pos = content_pos;
            } else if (content_pos >= 5 && content_pos <= 5){
                this._setActive('nav_resume');
            } else if (content_pos >= 6 && content_pos <= 6){
                this._setActive('nav_about');
            }  
            
            YC.blink.refreshViewportHeight((content_pos-1));
            YC.navi.h_location = content_pos; 
        }
    },
    
    _setActive: function(nav_ele){
        $('header#navi a.active').stop(1).animate({'color':'#030303', 'background-color':'#fff'},500).removeClass('active');
        $('#'+nav_ele+' a').stop(1).animate({'color':'#fff', 'background-color':'#08f'},500).addClass('active');
    },
    
    landingFlash: function(){
        setTimeout(function(){
            YC.navi._self.find('li a').each(function(i){
                var ele = this;
                setTimeout(function(){
                    $(ele).mouseenter();
                },i*50);
            });
        },1000); 
        
        setTimeout(function(){
            YC.navi._self.find('li a').each(function(i){
                var ele = this;
                setTimeout(function(){
                    $(ele).mouseleave();
                },i*50);
            });
        },1200);
    }, 
     
    transform: function(status){
        if (!$('header#navi').hasClass(status)){
            if (status=='reader'){
                YC.navi.transToReader();
            } else if (status=='slideshow'){
                YC.navi.transToSlideshow();
            } 
        }
    },
    
    transToReader: function(){ 
        $('header#navi').removeClass('slideshow').addClass('reader').animate({
            'height':'37px',
            'padding-top':'0px',
            'padding-bottom':'0px',
            'background-color':'#303030'
        },500);
        
        $('header#navi h1').animate({
            'font-size':'18px',
            'color':'#fff',
            'left':'0px',
            'top' :'10px'
        },200);
        
        $('header#navi h2').animate({
            'font-size':'11px',
            'left':'120px',
            'top':'18px'
        },200);
        
        $('header#navi li a').css({
            'font-family': '"Museo300", sans-serif',
            'font-size':'12px'
        });
        
        $('header#navi li a').not('.active').animate({
            'color':'#fff',
            'background-color':'#303030'
        },500);
        
        $('#blink-slider-activator').css('z-index','-1').animate({
            opacity:0.01
        },200); 
        
        $('article section.intro').animate({
            'height':'420'
        },500,'easeOutExpo', function(){
            YC.blink.refreshViewportHeight(YC.navi.h_location-1);
        })

        $('footer').animate({
            'height':'20px',
            'padding-top':'7px'
        })
    },
    
    transToSlideshow: function(){
        $('header#navi').removeClass('reader').addClass('slideshow').animate({
            'height':'55px',
            'padding-top':'10px',
            'padding-bottom':'10px',
            'background-color': '#fff'
        },500);
        
        $('header#navi h1').animate({
            'font-size':'30px',
            'color':'#303030',
            'left':'0px',
            'top' :'0px'
        },200);
        
        $('header#navi h2').animate({
            'font-size':'13px',
            'left':'0px',
            'top' :'39px'
        },200);
        
        $('header#navi li a').css({
            'font-family': '"Museo500", sans-serif',
            'font-size':'14px'
        })
        
        $('header#navi li a').not('.active').animate({
            'color':'#303030',
            'background-color':'#fff'
        },200);
        
        $('article section.intro').animate({
            'height': $(window).innerHeight()-200
        },200);
        
        // $('article section.intro img.divider').animate({
        //             'opacity':0.01
        //         },200, function(){
        //             
        //         });
        
        $('#blink-slider-activator').css('z-index','100').animate({
            opacity:1
        },200); 
        
        YC.footer.setHeight();
    } 
} 

YC.yscroll = {
    init: function(){
        this.yListener();
    },   
    
    yListener: function(){
        $(window).bind({
            scroll: function(){
                if ($(window).scrollTop()>30){
                    YC.navi.transform('reader');
                } else if ($(window).scrollTop()<31){
                    YC.navi.transform('slideshow');
                }
            }
        })
    }
} 

YC.arrow = {
    init: function(){
        var arrow = $('img.arrow'),
            timer_id = setInterval(function(){YC.arrow.flashing(arrow.filter('.mcontent'),2000)},1000),
            timer_id_detail = setInterval(function(){YC.arrow.flashing(arrow.filter('.detail'),4000)},2000);    
           
        $('a.to_portfolio').bind({
            click: function(){
                YC.blink._self.slider('value',960)
            },
            mouseenter: function(){
                clearInterval(timer_id);
                arrow.filter('.mcontent').stop(1).css('opacity','0.01').animate({'opacity':'1'},100);
                timer_id = setInterval(function(){YC.arrow.flashing(arrow.filter('.mcontent'),200)},100);
                $(this).animate({'color':'#fff', 'background-color':'#08c'},100)
            },
            mouseleave: function(){
                clearInterval(timer_id);
                arrow.filter('.mcontent').stop(1).css('opacity','0.01').animate({'opacity':'1'},1000);
                timer_id = setInterval(function(){YC.arrow.flashing(arrow.filter('.mcontent'),2000)},1000);
                $(this).animate({'color':'#08c', 'background-color':'#fff'},100)
            }
        });
        
        arrow.filter('.mcontent').bind({
            click: function(){ $('a.to_portfolio').click()},
            mouseenter: function(){ $('a.to_portfolio').mouseenter()},
            mouseleave: function(){ $('a.to_portfolio').mouseleave()}
        });
    },
    
    flashing: function(ele, interval){
        if(ele.css('opacity')>0.95){
            ele.stop(1).animate({'opacity':0.01},parseInt(interval)/2); 
        } else {
            ele.stop(1).animate({'opacity':1},parseInt(interval)/2);
        }
    }
}

YC.tooltip = {
    init: function(){
        this._self = $('div#blink-tooltip');
        this._self.bind({
            click: function(){
                YC.tooltip._self.fadeOut(200);
            }
        })
        this._self.hide();
        setTimeout(function(){
            YC.tooltip._self.show('clip',200)
        },1500);
    },
    
    fade: function(){
        var tip = this._self;
        if (tip.css('display')!='none'){
            console.log("the tooltip is displayed");
        }
    }
}   

YC.zoom = {
    init: function(){
        $('a.zoom').fancyZoom({scaleImg: true, closeOnClick: true});
    }
}

YC.footer = {
    init: function(){
        YC.footer._self = $('footer');
        YC.footer.setHeight();
        YC.footer.heightListener();               
    },
    
    setHeight: function(){
        YC.footer._height = (-140) + ($(window).innerHeight()^2)*0.3;
        
        $('footer').stop(1).animate({
            'height':YC.footer._height,
            'padding-top':'10px'
        },500,function(){
            YC.blink.refreshSliderPosition();
        })
        
    },
     
    heightListener: function(){
        $(window).resize(function(){
            if($('header#navi').hasClass('slideshow')){
                YC.footer.setHeight();
            }
        })
    }
}

$(document).ready(function() {
    YC.blink.init();
    YC.navi.init();
    YC.yscroll.init();
    YC.arrow.init();
    YC.tooltip.init();
    YC.zoom.init();
    YC.footer.init();
})  
