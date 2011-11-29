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
