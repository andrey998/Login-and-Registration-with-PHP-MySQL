(function(){
	var getAid = function(variable){
			var query = window.location.search.substring(1),
			vars = query.split('&'),
	    	i, l = vars.length;
		for(i = 0; i < l; i++) {
			var pair = vars[i].split('=');
			if(pair[0] == variable) { return parseInt(pair[1]); }
		}
		return 0;
	};
	var aid = '', id = '';
	if(window.affiliateId){ aid = parseInt(window.affiliateId); }
	if(!aid){
		if(id = getAid('aid')){ aid = id; }
	}
	if(aid){
	    var d = new Date();
		d.setTime(d.getTime() + (30*24*60*60*1000));
	    document.cookie = 'MyUS_AffiliateID=' + aid + '; expires=' + d.toUTCString() + '; path=/; domain=.myus.com';
	}
})();