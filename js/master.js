var YC = YC || {};  

YC = {
    blink:{},
    navi:{},
	home:{
		swapbox:{},
		gallery:{}
	},
	utility:{},
	arrow:{},
	footer:{}
};

YC.blink = {
    init: function(){
        this._self = $('#blink-slider');
        this.content = $('#main-mask');
        this.content_width = $('#main-mask').width();
        this.setSlider();
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
            max:(this.content_width - 960),
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
    }
}

YC.navi = {
    init: function(){
        this._self = $('header#navi');
        this.content = $('#main-mask');
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
                $(this).stop(1).animate({'color':'#303030', 'background-color':'#fff'},700)
            },
            
            click: function(){
                var target = $(this).text().toLowerCase()
                YC.navi._setActive('nav_'+target);
                if (target == 'home'){
                    YC.blink._self.slider('value',0)
                } else if (target == 'portfolio'){
                    YC.blink._self.slider('value',960)
                } else if (target == 'about'){
                    YC.blink._self.slider('value',2880)
                }
            }
        });
    },
    
    refreshActive: function(pos){
        var end_pos = pos || $('#main-mask').css('left');
        var content_pos = Math.round(parseInt(end_pos)*(-1)/960)+1;
        if (content_pos == 1 ){
            this._setActive('nav_home');
        } else if (content_pos >= 2 && content_pos <= 3 ){
            this._setActive('nav_portfolio');
        } else if (content_pos >= 4 && content_pos <= 4){
            this._setActive('nav_about');
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
    }
}  

YC.arrow = {
    init: function(){
        var arrow = $('#site-intro img.arrow'),
            timer_id = setInterval(function(){YC.arrow.flashing(arrow,2000)},1000),
            timer_id2;    
           
        $('a.to_portfolio').bind({
            click: function(){
                YC.blink._self.slider('value',960)
            },
            mouseenter: function(){
                clearInterval(timer_id);
                timer_id = setInterval(function(){YC.arrow.flashing(arrow,200)},100);
                $(this).animate({'color':'#fff', 'background-color':'#08c'},100)
            },
            mouseleave: function(){
                clearInterval(timer_id);
                arrow.stop(1).css('opacity','0.01').animate({'opacity':'1'},1000);
                timer_id = setInterval(function(){YC.arrow.flashing(arrow,2000)},1000);
                $(this).animate({'color':'#08c', 'background-color':'#fff'},100)
            }
        });
        arrow.bind({
            click: function(){ $('a.to_portfolio').click()},
            mouseenter: function(){ $('a.to_portfolio').mouseenter()},
            mouseleave: function(){ $('a.to_portfolio').mouseleave()},
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

YC.footer = {
    init: function(){
        YC.footer._self = $('footer');
        YC.footer.setHeight();
        YC.footer.heightListener();
    },
    
    setHeight: function(){
        var footer_height = (-140) + ($(window).height()^2)*0.3;
        YC.footer._self.height(footer_height);
    },
     
    heightListener: function(){
        $(window).resize(function(){
            YC.footer.setHeight();
        })
    }
}

$(document).ready(function() {
    YC.blink.init();
    YC.navi.init();
    YC.arrow.init();
    YC.footer.init();
})  
