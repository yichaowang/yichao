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
        this.setSlider();
    },
    setSlider: function(){
        $('#blink-slider').slider({animate: true});
        $('#blink-slider-activator').bind({
            mouseover: function(){
                $(this).children().stop(true).animate({'height':'16px'},300);
                $(this).children().find('.ui-slider-handle').stop(true).animate({'height':'16px'},300);
            },
            mouseleave: function(){
                $(document).bind('mousemove',function(e){ 
                    if (e.pageY > 550 || e.pageY < 400 ){
                        $('#blink-slider-activator').children().stop(true).animate({'height':'3px'},300);
                        $('#blink-slider-activator').children().find('.ui-slider-handle').stop(true).animate({'height':'3px'},300);
                        $(document).unbind('mousemove');
                    }
                });
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
