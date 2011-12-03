var YC = YC || {};  

YC = {
    blink:{},
	admin:{
		nav:{},
		program:{},
		gallery:{}
	},
	home:{
		swapbox:{},
		gallery:{}
	},
	utility:{},
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
            },
            stop: function(event, ui){
                YC.blink._self.slider('value', Math.round(ui.value/960)*960); 
                YC.blink.content.stop(1).animate( {"left":(-1)*YC.blink._self.slider('value')},3000,'easeOutExpo')
            }
        });                    
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
    YC.footer.init();
})  
