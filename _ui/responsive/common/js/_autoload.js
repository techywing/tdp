function _autoload(){
	$.each(ACC,function(section,obj){
		if($.isArray(obj._autoload)){
			$.each(obj._autoload,function(key,value){
				if($.isArray(value)){
					if(value[1]){
						ACC[section][value[0]]();
					}else{
						if(value[2]){
							ACC[section][value[2]]()
						}
					}
				}else{
					ACC[section][value]();
				}
			})
		}
	})
}

$(function(){
	_autoload();
});

	$('li.nav-item a').each(function(){
	  var url = window.location.pathname,
      urlRegExp = new RegExp(url.replace(/\/$/,''));    
			if(urlRegExp.test(this.href)){
				$(this).addClass("active");
			}
});