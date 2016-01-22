  		if(window.location.href=="http://www.legoland.de/")	{
		
    var userLang = navigator.language || navigator.userLanguage;
    if (userLang == "en") {
        window.location.href = "http://www.legoland.de/en/";
    }
    else if(userLang == "cs"){
       window.location.href = "http://www.legoland.de/cs/";
    }
    else if(userLang == "fr"){
       window.location.href = "http://www.legoland.de/fr/";
    }
    else if(userLang == "it"){
       window.location.href = "http://www.legoland.de/it/";
    }
    }
var endDate = "June 3, 2015 12:00:00";












(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write

		if (arguments.length > 1 && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setTime(+t + days * 864e+5);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));


var wort = "/en/";
var wort2 = "/fr/";
var wort3 = "/it/";
var url1=document.URL;
	if (url1.indexOf(wort) != -1 ) {
		var lang="en";
	}	else if (url1.indexOf(wort2) != -1 ) {
		var lang="fr";	
	}	else if (url1.indexOf(wort3) != -1 ) {
		var lang="it";	
	} else {
		var lang="de";	
	}

//START OF SEASON INSERT
if(lang=="djjje" || lang=="ejjjjn") {






if($.cookie('cookiestor')!= "nogo") {
	if(lang=="de") {
		var rumble5="<div id=\"cookieding\" style=\"height:9px; background:#a7dff6; font-size:8px; width:100%; text-align:center;\">Um Ihnen bestmöglichen Service zu garantieren verwendet unsere Webseite Cookies. Klicken Sie <a href=\"\/Ueber-LEGOLAND\/Cookies\/\">hier</a> um mehr zu erfahren. <a href=\"#\" onClick=\"javascript:istok();\">x<\/a><\/div>";
	} else {
	var rumble5="<div id=\"cookieding\" style=\"height:9px; background:#a7dff6; font-size:8px; width:100%; text-align:center;\">Our website uses cookies to help us provide you with a good experience and allow us to improve the website. Find out <a href=\"\/en\/About-LEGOLAND\/Cookies\/\">more.<\/a> <a href=\"#\" onClick=\"javascript:istok();\">x<\/a><\/div>";
	}	
	
function istok() {
	$('#cookieding').hide();
}	
	     
$( "#background-center" ).replaceWith(rumble5);
$.cookie('cookiestor', "nogo", { path: '/' });
}






if ($(".box-green")[0]){
	if(lang=="de") {
	var rumble="<div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:50px;\">&nbsp;</div>    <a href=\"\/de\/Besuch-planen\/Preise-und-Tickets\/\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdownstartseite\']);\"   id=\"himage\" style=\" width:890px; \"><img src=\"http://lldgit.github.io/scrolldown_883x115_familien-ticket_pfingsten_052015_de_paypal.jpg\" style=\"border:none; border-radius:5px; margin-bottom:10px; width:890px; \"><\/a><\/div>";
	}else if(lang=="fr") {
	var rumble="<div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:50px;\">&nbsp;</div>    <a href=\"\/fr\/Planifier-votre-visite\/Prix-et-Billets\/\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdownstartseite_fr\']);\"   id=\"himage\" style=\" width:890px; \"><img src=\"http://lldgit.github.io/winter/scrolldown_883x115_ticket_fr.jpg\" style=\"border:none; border-radius:5px; margin-bottom:10px; width:890px; \"><\/a><\/div>";
	} else if(lang=="it") {
	var rumble="<div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:50px;\">&nbsp;</div>    <a href=\"\/it\/Piano-di-visita\/Prezzi-Biglietti\/\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdownstartseite_it\']);\"   id=\"himage\" style=\" width:890px; \"><img src=\"http://lldgit.github.io/winter/scrolldown_883x115_ticket_it.jpg\" style=\"border:none; border-radius:5px; margin-bottom:10px; width:890px; \"><\/a><\/div>";
	}
	
	 else {
	var rumble="<div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:50px;\">&nbsp;</div>    <a href=\"\/en\/Plan\/Prices-and-Tickets\/\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdownstartseite_en\']);\"   id=\"himage\" style=\" width:890px; \"><img src=\"http://lldgit.github.io/scrolldown_883x115_familien-ticket_pfingsten_052015_en_paypal.jpg\" style=\"border:none; border-radius:5px; margin-bottom:10px; width:890px; \"><\/a><\/div>";
	}
	
	$( ".box-green" ).replaceWith(rumble);
		 

		if(lang=="de") {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>Tage</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>Std.</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>Min.</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>Sek.</span></div>");
          }
        });
	} else if(lang=="fr") {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>jour</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>heur.</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
          }
        });		
	} else if(lang=="it") {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
          }
        });	
	}
	
	else {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
          }
        });
	}

}


var index;
var stopp = 0;
var stopwort=["bus","firmen","presse","preise","tickets","advent","wien","cmt","free","ibo","bozen"];
for(index = 0; index < stopwort.length; index++) {
    var wort = stopwort[index].toLowerCase();
    var url1=document.URL.toLowerCase();
	if (url1.indexOf(wort) != -1 ) {
		var stopp=1;
	}	
}




var url1=document.URL;
if (stopp==0 && url1.length > 26) {

//var rumble="<ul class=\"langselect\"><\/ul><div id=\"nllayer\" style=\"position:absolute; display:none; background:blue; height:550px; z-index:100; display:hidden; margin-top:-40px; width:600px; margin-left:150px;\"><\/div>";
//$( ".langselect" ).replaceWith(rumble);



	

if($.cookie('lldbig2') === undefined || $.cookie('lldbig2') === null) {
	var anzahl=0;
} else {
	var anzahl=$.cookie('lldbig2');
}
	if(anzahl < 5 && $.cookie('keinlayer')!="1") {
	
	if(lang=="de") {
	//$('#sidebar').delay(900).animate({ marginTop: '120px'}, 1000);
	//$('#maincontent').delay(900).animate({ marginTop: '120px'}, 1000);
	
	}
		if(lang=="en") {
	//$('#sidebar').delay(900).animate({ marginTop: '120px'}, 1000);
	//$('#maincontent').delay(900).animate({ marginTop: '120px'}, 1000);
	
	}
	
	
		if(lang=="de") {
	//var rumble="<div id=\"funbox\"><a href=\"#\" id=\"keinlayer\" onClick=\"javascript:keinlayer();\" style=\"position:absolute; margin-top:77px; text-decoration:none; border:none; border-radius:20px; padding:3px; padding-left:8px; padding-right:8px; margin-left:67px; z-index:100; font-weight:bold; font-size:17px; background:white;\" >x<\/a></div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:205px; opacity:0;\">&nbsp;</div>    <a href=\"https:\/\/secure.legoland.de\/webapp\/wcs\/stores\/servlet\/CategoryDisplay?langId=-3&storeId=10663&catalogId=24051&top=Y&categoryId=40601&isautoAddComment=\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdown\']);\"   id=\"himage\" style=\"position:absolute; margin-top:150px; opacity:0; width:890px; \"><img src=\"http://lldgit.github.io/scrolldown_883x115_ticketangebot_ostern_de_30032015.jpg\" style=\"border:none; border-radius:5px;  width:890px; \"><\/a>";
	} else {
	
	//var rumble="<div id=\"funbox\"><a href=\"#\" id=\"keinlayer\" onClick=\"javascript:keinlayer();\" style=\"position:absolute; margin-top:77px; text-decoration:none; border:none; border-radius:20px; padding:3px; padding-left:8px; padding-right:8px; margin-left:67px; z-index:100; font-weight:bold; font-size:17px; background:white;\" >x<\/a></div><div class=\"countdown styled\" style=\"position:absolute; z-index:999; margin-left:570px; margin-top:205px; opacity:0;\">&nbsp;</div>    <a href=\"https:\/\/secure.legoland.de\/webapp\/wcs\/stores\/servlet\/CategoryDisplay?langId=-1&storeId=10663&catalogId=24051&top=Y&categoryId=40601&isautoAddComment=\"  onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'ContentBig\', \'ticketcountdown_en\']);\"   id=\"himage\" style=\"position:absolute; margin-top:150px; opacity:0; width:890px; \"><img src=\"http://lldgit.github.io/scrolldown_883x115_ticketangebot_ostern_en_30032015.jpg\" style=\"border:none; border-radius:5px;  width:890px; \"><\/a>";
	}
	if(lang=="de") {
		$( "#funbox" ).delay(900).replaceWith(rumble);
		$('#himage').delay(900).animate({ opacity: 1}, 1500);
		$('.countdown').delay(1100).animate({ opacity: 1}, 1500);
		$.removeCookie('lldbig2', { path: '/' });	
	 }
	if(lang=="en") {
		$( "#funbox" ).delay(900).replaceWith(rumble);
		$('#himage').delay(900).animate({ opacity: 1}, 1500);
		$('.countdown').delay(1100).animate({ opacity: 1}, 1500);
		$.removeCookie('lldbig2', { path: '/' });	
	 }	 
	 
		if(lang=="de") {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
          //  $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>Tage</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>Std.</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>Min.</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>Sek.</span></div>");
          }
        });
	} else {
	 $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
          //  $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
          }
        });
	}

	$.cookie('lldbig2', parseInt(anzahl)+parseInt(1), { path: '/' });
	
	} else {
		var biglayer=1;
	}
	
function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}
addEvent(window,"load",function(e) {
    addEvent(document, "mouseout", function(e) {
        e = e ? e : window.event;
        var from = e.relatedTarget || e.toElement;
        if (!from || from.nodeName == "HTML") {
            if ( $( "#nllayer" ).is( ":hidden" ) ) {
    //$( "#nllayer" ).slideDown( "slow" );
  } else {
   
  }
        }
    });
});




}





var biglayer=5;



if(biglayer==1) {
	
$.getScript('http://resortinteraction.com/dyn/dyn.js', function(e) {
		
	if(rain==1) {
		$('#sidebar').css("margin-top", "145px");
	var rumble="<div id=\"funbox\"></div><a href=\"\/Entdeckt-LEGOLAND\/Indoor\/\" style=\"position:absolute; width:157px; border:none; border-radius:5px; margin-top:150px; \"><img src=\"http://lldgit.github.io/wetter.png\" style=\" border:none; border-radius:5px; \" id=\"himage\" ><\/a>";
	$( "#funbox" ).replaceWith(rumble);

	}	
    });
	
}













function keinlayer() {
	$.cookie('keinlayer', "1", { path: '/' });
	$('#sidebar').animate({ marginTop: '0px'}, 1000);
	$('#maincontent').animate({ marginTop: '0px'}, 1000);
	var rumble="<div id=\"funbox\"></div>";
	$( "#funbox" ).replaceWith(rumble);
	$('#himage').animate({ opacity: 0}, 800);
	$('#keinlayer').animate({ opacity: 0}, 800);
	$('.countdown').animate({ opacity: 0}, 200);
}


if(test==100) {	
	var rumble="<div id=\"funbox\"></div><a href=\"/Jetzt-Tickets-sichern/\" id=\"rumblebumble\" style=\"background-color:#da291c;\" onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'Navi\', \'Online-Tickets\']);\">Online-Tickets</a>";
	$( "#funbox" ).replaceWith(rumble);
    for (var i = 0; i < 3; i++ ) {
        $("#rumblebumble")
        		.delay(300).animate( { marginTop: '300px'}, 100 )
        		.animate( { marginTop: '315px'}, 100 )
        		.animate( { marginTop: '300px'}, 100 )
        		.animate( { marginTop: '315px'}, 500 )
       		 .animate( { backgroundColor: "#fe0c0c"}, 500 )
            .animate( { backgroundColor: "#da291c" }, 800 );
            
    }

}
if(test==100) {
     var rumble2="<a href=\"/Jetzt-Tickets-sichern/\" class=\"topstoerer\" onClick=\"_gaq.push([\'_trackEvent\', \'Stoerer\', \'Content\', \'FamilienticketsHalloween\']);\">Für kurze Zeit: Tageskarte nur 25 &euro; und gruselige Halloween-Wochen erleben &raquo;</a><div class=\"c\"></div>";
$( ".c:first" ).replaceWith(rumble2);
}

if(lang=="de") {

var rumble15='<div id="footer-top"></div><div id="ouibounce-modal">'+
   '   <div class="underlay"></div>'+
   '   <div class="modal">'+
   '     <div class="modal-title">'+
    '      <h3>Achtung! Nie wieder so günstig im Vorverkauf!</h3>'+
    '    </div>'+
    '    <div class="modal-body">'+
     '     <p>Den aktuellen Preis können wir dir nur nur noch eine sehr begrenzte Zeit anbieten. Danach werden die Preise garantiert steigen.</p>'+
      '    <p><br><br><a href="/Besuch-planen/Preise-und-Tickets/">Jetzt gleich informieren &raquo;</a></p>'+
      '    </div'+
      '  <div class="modal-footer">'+
      '    <p>nein, danke</p>'+
       ' </div>'+
      '</div>'+
    '</div>';
//$( "#footer-top" ).replaceWith(rumble15);
var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() { console.log('ouibounce fired!'); }
      });

      $('body').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .modal-footer').on('click', function() {
        $('#ouibounce-modal').hide();
      });

      $('#ouibounce-modal .modal').on('click', function(e) {
        e.stopPropagation();
      });
}
























//END OF SEASON INSERT
}
