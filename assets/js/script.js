(function(){function e(){}function t(e,t){for(var n=e.length;n--;)if(e[n].listener===t)return n;return-1}function n(e){return function(){return this[e].apply(this,arguments)}}var i=e.prototype,r=this,o=r.EventEmitter;i.getListeners=function(e){var t,n,i=this._getEvents();if("object"==typeof e){t={};for(n in i)i.hasOwnProperty(n)&&e.test(n)&&(t[n]=i[n])}else t=i[e]||(i[e]=[]);return t},i.flattenListeners=function(e){var t,n=[];for(t=0;e.length>t;t+=1)n.push(e[t].listener);return n},i.getListenersAsObject=function(e){var t,n=this.getListeners(e);return n instanceof Array&&(t={},t[e]=n),t||n},i.addListener=function(e,n){var i,r=this.getListenersAsObject(e),o="object"==typeof n;for(i in r)r.hasOwnProperty(i)&&-1===t(r[i],n)&&r[i].push(o?n:{listener:n,once:!1});return this},i.on=n("addListener"),i.addOnceListener=function(e,t){return this.addListener(e,{listener:t,once:!0})},i.once=n("addOnceListener"),i.defineEvent=function(e){return this.getListeners(e),this},i.defineEvents=function(e){for(var t=0;e.length>t;t+=1)this.defineEvent(e[t]);return this},i.removeListener=function(e,n){var i,r,o=this.getListenersAsObject(e);for(r in o)o.hasOwnProperty(r)&&(i=t(o[r],n),-1!==i&&o[r].splice(i,1));return this},i.off=n("removeListener"),i.addListeners=function(e,t){return this.manipulateListeners(!1,e,t)},i.removeListeners=function(e,t){return this.manipulateListeners(!0,e,t)},i.manipulateListeners=function(e,t,n){var i,r,o=e?this.removeListener:this.addListener,s=e?this.removeListeners:this.addListeners;if("object"!=typeof t||t instanceof RegExp)for(i=n.length;i--;)o.call(this,t,n[i]);else for(i in t)t.hasOwnProperty(i)&&(r=t[i])&&("function"==typeof r?o.call(this,i,r):s.call(this,i,r));return this},i.removeEvent=function(e){var t,n=typeof e,i=this._getEvents();if("string"===n)delete i[e];else if("object"===n)for(t in i)i.hasOwnProperty(t)&&e.test(t)&&delete i[t];else delete this._events;return this},i.removeAllListeners=n("removeEvent"),i.emitEvent=function(e,t){var n,i,r,o,s=this.getListenersAsObject(e);for(r in s)if(s.hasOwnProperty(r))for(i=s[r].length;i--;)n=s[r][i],n.once===!0&&this.removeListener(e,n.listener),o=n.listener.apply(this,t||[]),o===this._getOnceReturnValue()&&this.removeListener(e,n.listener);return this},i.trigger=n("emitEvent"),i.emit=function(e){var t=Array.prototype.slice.call(arguments,1);return this.emitEvent(e,t)},i.setOnceReturnValue=function(e){return this._onceReturnValue=e,this},i._getOnceReturnValue=function(){return this.hasOwnProperty("_onceReturnValue")?this._onceReturnValue:!0},i._getEvents=function(){return this._events||(this._events={})},e.noConflict=function(){return r.EventEmitter=o,e},"function"==typeof define&&define.amd?define("eventEmitter/EventEmitter",[],function(){return e}):"object"==typeof module&&module.exports?module.exports=e:this.EventEmitter=e}).call(this),function(e){function t(t){var n=e.event;return n.target=n.target||n.srcElement||t,n}var n=document.documentElement,i=function(){};n.addEventListener?i=function(e,t,n){e.addEventListener(t,n,!1)}:n.attachEvent&&(i=function(e,n,i){e[n+i]=i.handleEvent?function(){var n=t(e);i.handleEvent.call(i,n)}:function(){var n=t(e);i.call(e,n)},e.attachEvent("on"+n,e[n+i])});var r=function(){};n.removeEventListener?r=function(e,t,n){e.removeEventListener(t,n,!1)}:n.detachEvent&&(r=function(e,t,n){e.detachEvent("on"+t,e[t+n]);try{delete e[t+n]}catch(i){e[t+n]=void 0}});var o={bind:i,unbind:r};"function"==typeof define&&define.amd?define("eventie/eventie",o):e.eventie=o}(this),function(e,t){"function"==typeof define&&define.amd?define(["eventEmitter/EventEmitter","eventie/eventie"],function(n,i){return t(e,n,i)}):"object"==typeof exports?module.exports=t(e,require("wolfy87-eventemitter"),require("eventie")):e.imagesLoaded=t(e,e.EventEmitter,e.eventie)}(window,function(e,t,n){function i(e,t){for(var n in t)e[n]=t[n];return e}function r(e){return"[object Array]"===d.call(e)}function o(e){var t=[];if(r(e))t=e;else if("number"==typeof e.length)for(var n=0,i=e.length;i>n;n++)t.push(e[n]);else t.push(e);return t}function s(e,t,n){if(!(this instanceof s))return new s(e,t);"string"==typeof e&&(e=document.querySelectorAll(e)),this.elements=o(e),this.options=i({},this.options),"function"==typeof t?n=t:i(this.options,t),n&&this.on("always",n),this.getImages(),a&&(this.jqDeferred=new a.Deferred);var r=this;setTimeout(function(){r.check()})}function f(e){this.img=e}function c(e){this.src=e,v[e]=this}var a=e.jQuery,u=e.console,h=u!==void 0,d=Object.prototype.toString;s.prototype=new t,s.prototype.options={},s.prototype.getImages=function(){this.images=[];for(var e=0,t=this.elements.length;t>e;e++){var n=this.elements[e];"IMG"===n.nodeName&&this.addImage(n);var i=n.nodeType;if(i&&(1===i||9===i||11===i))for(var r=n.querySelectorAll("img"),o=0,s=r.length;s>o;o++){var f=r[o];this.addImage(f)}}},s.prototype.addImage=function(e){var t=new f(e);this.images.push(t)},s.prototype.check=function(){function e(e,r){return t.options.debug&&h&&u.log("confirm",e,r),t.progress(e),n++,n===i&&t.complete(),!0}var t=this,n=0,i=this.images.length;if(this.hasAnyBroken=!1,!i)return this.complete(),void 0;for(var r=0;i>r;r++){var o=this.images[r];o.on("confirm",e),o.check()}},s.prototype.progress=function(e){this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded;var t=this;setTimeout(function(){t.emit("progress",t,e),t.jqDeferred&&t.jqDeferred.notify&&t.jqDeferred.notify(t,e)})},s.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";this.isComplete=!0;var t=this;setTimeout(function(){if(t.emit(e,t),t.emit("always",t),t.jqDeferred){var n=t.hasAnyBroken?"reject":"resolve";t.jqDeferred[n](t)}})},a&&(a.fn.imagesLoaded=function(e,t){var n=new s(this,e,t);return n.jqDeferred.promise(a(this))}),f.prototype=new t,f.prototype.check=function(){var e=v[this.img.src]||new c(this.img.src);if(e.isConfirmed)return this.confirm(e.isLoaded,"cached was confirmed"),void 0;if(this.img.complete&&void 0!==this.img.naturalWidth)return this.confirm(0!==this.img.naturalWidth,"naturalWidth"),void 0;var t=this;e.on("confirm",function(e,n){return t.confirm(e.isLoaded,n),!0}),e.check()},f.prototype.confirm=function(e,t){this.isLoaded=e,this.emit("confirm",this,t)};var v={};return c.prototype=new t,c.prototype.check=function(){if(!this.isChecked){var e=new Image;n.bind(e,"load",this),n.bind(e,"error",this),e.src=this.src,this.isChecked=!0}},c.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},c.prototype.onload=function(e){this.confirm(!0,"onload"),this.unbindProxyEvents(e)},c.prototype.onerror=function(e){this.confirm(!1,"onerror"),this.unbindProxyEvents(e)},c.prototype.confirm=function(e,t){this.isConfirmed=!0,this.isLoaded=e,this.emit("confirm",this,t)},c.prototype.unbindProxyEvents=function(e){n.unbind(e.target,"load",this),n.unbind(e.target,"error",this)},s});(function(window){"use strict";var Waves=Waves||{};var $$=document.querySelectorAll.bind(document);function isWindow(obj){return obj!==null&&obj===obj.window}function getWindow(elem){return isWindow(elem)?elem:elem.nodeType===9&&elem.defaultView}function offset(elem){var docElem,win,box={top:0,left:0},doc=elem&&elem.ownerDocument;docElem=doc.documentElement;if(typeof elem.getBoundingClientRect!==typeof undefined){box=elem.getBoundingClientRect()}win=getWindow(doc);return{top:box.top+win.pageYOffset-docElem.clientTop,left:box.left+win.pageXOffset-docElem.clientLeft}}function convertStyle(obj){var style="";for(var a in obj){if(obj.hasOwnProperty(a)){style+=a+":"+obj[a]+";"}}return style}var Effect={duration:500,show:function(e){if(e.button===2){return false}var el=this;var ripple=document.createElement("div");ripple.className="waves-ripple";el.appendChild(ripple);var pos=offset(el);var relativeY=e.pageY-pos.top;var relativeX=e.pageX-pos.left;var scale="scale("+el.clientWidth/100*2.5+")";if("touches"in e){relativeY=e.touches[0].pageY-pos.top;relativeX=e.touches[0].pageX-pos.left}ripple.setAttribute("data-hold",Date.now());ripple.setAttribute("data-scale",scale);ripple.setAttribute("data-x",relativeX);ripple.setAttribute("data-y",relativeY);var rippleStyle={top:relativeY+"px",left:relativeX+"px"};ripple.className=ripple.className+" waves-notransition";ripple.setAttribute("style",convertStyle(rippleStyle));ripple.className=ripple.className.replace("waves-notransition","");rippleStyle["-webkit-transform"]=scale;rippleStyle["-moz-transform"]=scale;rippleStyle["-ms-transform"]=scale;rippleStyle["-o-transform"]=scale;rippleStyle.transform=scale;rippleStyle.opacity="1";rippleStyle["-webkit-transition-duration"]=Effect.duration+"ms";rippleStyle["-moz-transition-duration"]=Effect.duration+"ms";rippleStyle["-o-transition-duration"]=Effect.duration+"ms";rippleStyle["transition-duration"]=Effect.duration+"ms";ripple.setAttribute("style",convertStyle(rippleStyle))},hide:function(){var el=this;var width=el.clientWidth*1.4;var ripple=null;var childrenLength=el.children.length;for(var a=0;a<childrenLength;a++){if(el.children[a].className.indexOf("waves-ripple")!==-1){ripple=el.children[a];continue}}if(!ripple){return false}var relativeX=ripple.getAttribute("data-x");var relativeY=ripple.getAttribute("data-y");var scale=ripple.getAttribute("data-scale");var diff=Date.now()-Number(ripple.getAttribute("data-hold"));var delay=500-diff;if(delay<0){delay=0}setTimeout(function(){var style={top:relativeY+"px",left:relativeX+"px",opacity:"0","-webkit-transition-duration":Effect.duration+"ms","-moz-transition-duration":Effect.duration+"ms","-o-transition-duration":Effect.duration+"ms","transition-duration":Effect.duration+"ms","-webkit-transform":scale,"-moz-transform":scale,"-ms-transform":scale,"-o-transform":scale,transform:scale};ripple.setAttribute("style",convertStyle(style));setTimeout(function(){try{el.removeChild(ripple)}catch(e){return false}},Effect.duration)},delay)},wrapInput:function(elements){for(var a=0;a<elements.length;a++){var el=elements[a];if(el.tagName.toLowerCase()==="input"){var parent=el.parentNode;if(parent.tagName.toLowerCase()==="i"&&parent.className.indexOf("waves-effect")!==-1){return false}var wrapper=document.createElement("i");wrapper.className=el.className+" waves-input-wrapper";var elementStyle=el.getAttribute("style");if(!elementStyle){elementStyle=""}wrapper.setAttribute("style",elementStyle);el.className="waves-button-input";el.removeAttribute("style");parent.replaceChild(wrapper,el);wrapper.appendChild(el)}}}};Waves.displayEffect=function(options){options=options||{};if("duration"in options){Effect.duration=options.duration}Effect.wrapInput($$(".waves-effect"));Array.prototype.forEach.call($$(".waves-effect"),function(i){if("ontouchstart"in window){i.addEventListener("touchstart",Effect.show,false);i.addEventListener("touchend",Effect.hide,false);i.addEventListener("touchcancel",Effect.hide,false)}else{i.addEventListener("mousedown",Effect.show,false);i.addEventListener("mouseup",Effect.hide,false);i.addEventListener("mouseleave",Effect.hide,false)}})};window.Waves=Waves})(window);(function(){var activateLists,alignChildren,checkResize,elements,getPlatform,init,initFlip,initSlider,initWaves,makeSquare,rows,slide,slideTo;getPlatform=function(){return window.getComputedStyle(document.body,":before").getPropertyValue("content").replace(/'/g,"").replace(/"/g,"")};rows={"mod-row":["card","tile","flip"],"mod-lists .list-item":["pull-left","pull-right"]};alignChildren=function(rows){var children,row,_results;if(rows==null){rows={}}_results=[];for(row in rows){children=rows[row];_results.push($("."+row).each(function(){var child,parent,tallest,_i,_len,_results1;parent=$(this);tallest=false;_results1=[];for(_i=0,_len=children.length;_i<_len;_i++){child=children[_i];parent.find("."+child).each(function(){var height,obj;obj=$(this);obj.css("height","auto");height=obj.outerHeight();if(height>tallest){return tallest=height}});if(tallest){_results1.push(function(){var _j,_len1,_results2;_results2=[];for(_j=0,_len1=children.length;_j<_len1;_j++){child=children[_j];_results2.push(parent.find("."+child).css("height",tallest))}return _results2}())}else{_results1.push(void 0)}}return _results1}))}return _results};elements=["resize","circle"];makeSquare=function(elements,angle){var element,_i,_len,_results;if(elements==null){elements=["resize"]}if(angle==null){angle="height"}_results=[];for(_i=0,_len=elements.length;_i<_len;_i++){element=elements[_i];_results.push($("."+element).each(function(){var obj,reset,value;obj=$(this);if(angle==="height"){value=obj.innerWidth();reset="width"}else{value=obj.outerHeight();reset="height"}return obj.css(angle,value)}))}return _results};checkResize=function(){return $(window).resize(function(){clearTimeout(window.counter);return window.counter=setTimeout(function(){makeSquare(elements);alignChildren(rows);return window.platform=getPlatform()},500)})};activateLists=function(){return $(".minimized li a").on("click",function(){var children,obj,toggle;obj=$(this);if(obj.attr("href")==="#"){children=obj.parent().children("ul");toggle=obj.find(".toggle");if(children.hasClass("opened")){children.removeClass("opened");toggle.removeClass(toggle.attr("data-altclass"));toggle.addClass(toggle.attr("data-class"));children.slideUp("fast")}else{children.addClass("opened");toggle.removeClass(toggle.attr("data-class"));toggle.addClass(toggle.attr("data-altclass"));children.slideDown("fast")}return false}})};initFlip=function(){var flips;flips=$(".flip");flips.each(function(){var events,flip;flip=$(this);events={};if(flip.hasClass("onclick")){events.click=function(){if(!flip.hasClass("toggle")){return flip.addClass("toggle")}else{return flip.removeClass("toggle")}}}else{events.mouseenter=function(){return flip.addClass("toggle")};events.mouseleave=function(){return flip.removeClass("toggle")}}flip.on(events)})};slide=function(obj,nextslide){var marginleft;marginleft=nextslide*100;obj.self.children(".stripe").animate({marginLeft:"-"+marginleft+"%"});obj.nav.find("a").removeClass("active");obj.nav.find("a:eq("+nextslide+")").addClass("active");obj.self.data("currentslide",nextslide);if(nextslide+1===obj.self.find(".slide").length){obj.prevbutton.removeClass("inactive");obj.nextbutton.addClass("inactive");return 0}else{obj.nextbutton.removeClass("inactive");if(nextslide===0){obj.prevbutton.addClass("inactive")}else{obj.prevbutton.removeClass("inactive")}return nextslide}};slideTo=function(direction,slider,interval){var currentslide;if(interval==null){interval=false}if(!interval){clearInterval(slider.self.data("interval"))}currentslide=slider.self.data("currentslide");if(direction==="next"){currentslide++;if(currentslide>=slider.self.find(".stripe.crow .slide").length){currentslide=0}return slide(slider,currentslide)}else if(direction==="prev"){currentslide--;if(currentslide<0){currentslide=slider.self.find(".stripe.crow .slide").length-1}return slide(slider,currentslide)}};initSlider=function(){var sliders;sliders=$(".slider");sliders.each(function(){var hammertime,slider;slider={self:$(this),nav:$(this).find(".slider-nav"),nextbutton:$(this).find(".next"),prevbutton:$(this).find(".prev"),interval:0};if(slider.self.find(".stripe.crow .slide").length>1){if(typeof slider.self.data("currentslide")==="undefined"){slider.self.data("currentslide",0)}if(slider.interval){slider.self.data("interval",setInterval(function(){return slideTo("next",slider,true)},slider.interval))}hammertime=new Hammer(slider.self[0]);hammertime.on("swipeleft",function(ev){return slideTo("next",slider)});hammertime.on("swiperight",function(ev){return slideTo("prev",slider)})}if(slider.nextbutton.length){slider.nextbutton.on("click",function(){slideTo("next",slider);return false})}if(slider.prevbutton.length){slider.prevbutton.on("click",function(){slideTo("prev",slider);return false})}return slider.nav.find("a").on("click",function(){var index;clearInterval(slider.self.data("interval"));index=slider.nav.find("a").index(this);slide(slider,index);return false})})};initWaves=function(){return Waves.displayEffect()};init=function(){imagesLoaded($("body")[0]).on("always",function(){makeSquare(elements);return alignChildren(rows)});checkResize();activateLists();initSlider();initWaves();return initFlip()};init()}).call(this);(function(){var init,placeholderImage;placeholderImage=function(){return $("img").each(function(){if(!$(this).attr("src")){return $(this).attr("src",window.app_url+"assets/image/placeholder/default.jpg")}})};init=function(){return placeholderImage()};init()}).call(this);