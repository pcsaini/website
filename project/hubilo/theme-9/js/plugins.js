/*!
    SlickNav Responsive Mobile Menu v1.0.2
    (c) 2015 Josh Cope
    licensed under MIT
*/
!function(n,e){function t(e,t){this.element=e,this.settings=n.extend({},a,t),this._defaults=a,this._name=i,this.init()}var a={label:"MENU",duplicate:!0,duration:200,easingOpen:"swing",easingClose:"swing",closedSymbol:"&#9658;",openedSymbol:"&#9660;",prependTo:"body",parentTag:"a",closeOnClick:!1,allowParentLinks:!1,nestedParentLinks:!0,showChildren:!1,brand:"",init:function(){},open:function(){},close:function(){}},i="slicknav",s="slicknav";t.prototype.init=function(){var t,a,i=this,l=n(this.element),o=this.settings;if(o.duplicate?(i.mobileNav=l.clone(),i.mobileNav.removeAttr("id"),i.mobileNav.find("*").each(function(e,t){n(t).removeAttr("id")})):i.mobileNav=l,t=s+"_icon",""===o.label&&(t+=" "+s+"_no-text"),"a"==o.parentTag&&(o.parentTag='a href="#"'),i.mobileNav.attr("class",s+"_nav"),a=n('<div class="'+s+'_menu"></div>'),""!==o.brand){var r=n('<div class="'+s+'_brand">'+o.brand+"</div>");n(a).append(r)}i.btn=n(["<"+o.parentTag+' aria-haspopup="true" tabindex="0" class="'+s+"_btn "+s+'_collapsed">','<span class="'+s+'_menutxt">'+o.label+"</span>",'<span class="'+t+'">','<span class="'+s+'_icon-bar"></span>','<span class="'+s+'_icon-bar"></span>','<span class="'+s+'_icon-bar"></span>',"</span>","</"+o.parentTag+">"].join("")),n(a).append(i.btn),n(o.prependTo).prepend(a),a.append(i.mobileNav);var d=i.mobileNav.find("li");n(d).each(function(){var e=n(this),t={};if(t.children=e.children("ul").attr("role","menu"),e.data("menu",t),t.children.length>0){var a=e.contents(),l=!1;nodes=[],n(a).each(function(){return n(this).is("ul")?!1:(nodes.push(this),void(n(this).is("a")&&(l=!0)))});var r=n("<"+o.parentTag+' role="menuitem" aria-haspopup="true" tabindex="-1" class="'+s+'_item"/>');if(o.allowParentLinks&&!o.nestedParentLinks&&l)n(nodes).wrapAll('<span class="'+s+"_parent-link "+s+'_row"/>').parent();else{var d=n(nodes).wrapAll(r).parent();d.addClass(s+"_row")}e.addClass(s+"_collapsed"),e.addClass(s+"_parent");var c=n('<span class="'+s+'_arrow">'+o.closedSymbol+"</span>");o.allowParentLinks&&!o.nestedParentLinks&&l&&(c=c.wrap(r).parent()),n(nodes).last().after(c)}else 0===e.children().length&&e.addClass(s+"_txtnode");e.children("a").attr("role","menuitem").click(function(e){o.closeOnClick&&!n(e.target).parent().closest("li").hasClass(s+"_parent")&&n(i.btn).click()}),o.closeOnClick&&o.allowParentLinks&&(e.children("a").children("a").click(function(){n(i.btn).click()}),e.find("."+s+"_parent-link a:not(."+s+"_item)").click(function(){n(i.btn).click()}))}),n(d).each(function(){var e=n(this).data("menu");o.showChildren||i._visibilityToggle(e.children,null,!1,null,!0)}),i._visibilityToggle(i.mobileNav,null,!1,"init",!0),i.mobileNav.attr("role","menu"),n(e).mousedown(function(){i._outlines(!1)}),n(e).keyup(function(){i._outlines(!0)}),n(i.btn).click(function(n){n.preventDefault(),i._menuToggle()}),i.mobileNav.on("click","."+s+"_item",function(e){e.preventDefault(),i._itemClick(n(this))}),n(i.btn).keydown(function(n){var e=n||event;13==e.keyCode&&(n.preventDefault(),i._menuToggle())}),i.mobileNav.on("keydown","."+s+"_item",function(e){var t=e||event;13==t.keyCode&&(e.preventDefault(),i._itemClick(n(e.target)))}),o.allowParentLinks&&o.nestedParentLinks&&n("."+s+"_item a").click(function(n){n.stopImmediatePropagation()})},t.prototype._menuToggle=function(){var n=this,e=n.btn,t=n.mobileNav;e.hasClass(s+"_collapsed")?(e.removeClass(s+"_collapsed"),e.addClass(s+"_open")):(e.removeClass(s+"_open"),e.addClass(s+"_collapsed")),e.addClass(s+"_animating"),n._visibilityToggle(t,e.parent(),!0,e)},t.prototype._itemClick=function(n){var e=this,t=e.settings,a=n.data("menu");a||(a={},a.arrow=n.children("."+s+"_arrow"),a.ul=n.next("ul"),a.parent=n.parent(),a.parent.hasClass(s+"_parent-link")&&(a.parent=n.parent().parent(),a.ul=n.parent().next("ul")),n.data("menu",a)),a.parent.hasClass(s+"_collapsed")?(a.arrow.html(t.openedSymbol),a.parent.removeClass(s+"_collapsed"),a.parent.addClass(s+"_open"),a.parent.addClass(s+"_animating"),e._visibilityToggle(a.ul,a.parent,!0,n)):(a.arrow.html(t.closedSymbol),a.parent.addClass(s+"_collapsed"),a.parent.removeClass(s+"_open"),a.parent.addClass(s+"_animating"),e._visibilityToggle(a.ul,a.parent,!0,n))},t.prototype._visibilityToggle=function(e,t,a,i,l){var o=this,r=o.settings,d=o._getActionItems(e),c=0;a&&(c=r.duration),e.hasClass(s+"_hidden")?(e.removeClass(s+"_hidden"),e.slideDown(c,r.easingOpen,function(){n(i).removeClass(s+"_animating"),n(t).removeClass(s+"_animating"),l||r.open(i)}),e.attr("aria-hidden","false"),d.attr("tabindex","0"),o._setVisAttr(e,!1)):(e.addClass(s+"_hidden"),e.slideUp(c,this.settings.easingClose,function(){e.attr("aria-hidden","true"),d.attr("tabindex","-1"),o._setVisAttr(e,!0),e.hide(),n(i).removeClass(s+"_animating"),n(t).removeClass(s+"_animating"),l?"init"==i&&r.init():r.close(i)}))},t.prototype._setVisAttr=function(e,t){var a=this,i=e.children("li").children("ul").not("."+s+"_hidden");i.each(t?function(){var e=n(this);e.attr("aria-hidden","true");var i=a._getActionItems(e);i.attr("tabindex","-1"),a._setVisAttr(e,t)}:function(){var e=n(this);e.attr("aria-hidden","false");var i=a._getActionItems(e);i.attr("tabindex","0"),a._setVisAttr(e,t)})},t.prototype._getActionItems=function(n){var e=n.data("menu");if(!e){e={};var t=n.children("li"),a=t.find("a");e.links=a.add(t.find("."+s+"_item")),n.data("menu",e)}return e.links},t.prototype._outlines=function(e){e?n("."+s+"_item, ."+s+"_btn").css("outline",""):n("."+s+"_item, ."+s+"_btn").css("outline","none")},t.prototype.toggle=function(){var n=this;n._menuToggle()},t.prototype.open=function(){var n=this;n.btn.hasClass(s+"_collapsed")&&n._menuToggle()},t.prototype.close=function(){var n=this;n.btn.hasClass(s+"_open")&&n._menuToggle()},n.fn[i]=function(e){var a=arguments;if(void 0===e||"object"==typeof e)return this.each(function(){n.data(this,"plugin_"+i)||n.data(this,"plugin_"+i,new t(this,e))});if("string"==typeof e&&"_"!==e[0]&&"init"!==e){var s;return this.each(function(){var l=n.data(this,"plugin_"+i);l instanceof t&&"function"==typeof l[e]&&(s=l[e].apply(l,Array.prototype.slice.call(a,1)))}),void 0!==s?s:this}}}(jQuery,document,window);



/*!
	Counter Up	
*/
/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);


/*Waypoint*/
// Generated by CoffeeScript 1.6.2
/*
jQuery Waypoints - v2.0.2
Copyright (c) 2011-2013 Caleb Troughton
Dual licensed under the MIT license and GPL license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/
(function(){var t=[].indexOf||function(t){for(var e=0,n=this.length;e<n;e++){if(e in this&&this[e]===t)return e}return-1},e=[].slice;(function(t,e){if(typeof define==="function"&&define.amd){return define("waypoints",["jquery"],function(n){return e(n,t)})}else{return e(t.jQuery,t)}})(this,function(n,r){var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;i=n(r);c=t.call(r,"ontouchstart")>=0;s={horizontal:{},vertical:{}};f=1;a={};u="waypoints-context-id";p="resize.waypoints";y="scroll.waypoints";v=1;w="waypoints-waypoint-ids";g="waypoint";m="waypoints";o=function(){function t(t){var e=this;this.$element=t;this.element=t[0];this.didResize=false;this.didScroll=false;this.id="context"+f++;this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()};this.waypoints={horizontal:{},vertical:{}};t.data(u,this.id);a[this.id]=this;t.bind(y,function(){var t;if(!(e.didScroll||c)){e.didScroll=true;t=function(){e.doScroll();return e.didScroll=false};return r.setTimeout(t,n[m].settings.scrollThrottle)}});t.bind(p,function(){var t;if(!e.didResize){e.didResize=true;t=function(){n[m]("refresh");return e.didResize=false};return r.setTimeout(t,n[m].settings.resizeThrottle)}})}t.prototype.doScroll=function(){var t,e=this;t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){n[m]("refresh")}n.each(t,function(t,r){var i,o,l;l=[];o=r.newScroll>r.oldScroll;i=o?r.forward:r.backward;n.each(e.waypoints[t],function(t,e){var n,i;if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){return l.push(e)}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){return l.push(e)}});l.sort(function(t,e){return t.offset-e.offset});if(!o){l.reverse()}return n.each(l,function(t,e){if(e.options.continuous||t===l.length-1){return e.trigger([i])}})});return this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}};t.prototype.refresh=function(){var t,e,r,i=this;r=n.isWindow(this.element);e=this.$element.offset();this.doScroll();t={horizontal:{contextOffset:r?0:e.left,contextScroll:r?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:r?0:e.top,contextScroll:r?0:this.oldScroll.y,contextDimension:r?n[m]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};return n.each(t,function(t,e){return n.each(i.waypoints[t],function(t,r){var i,o,l,s,f;i=r.options.offset;l=r.offset;o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];if(n.isFunction(i)){i=i.apply(r.element)}else if(typeof i==="string"){i=parseFloat(i);if(r.options.offset.indexOf("%")>-1){i=Math.ceil(e.contextDimension*i/100)}}r.offset=o-e.contextOffset+e.contextScroll-i;if(r.options.onlyOnScroll&&l!=null||!r.enabled){return}if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){return r.trigger([e.backward])}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){return r.trigger([e.forward])}else if(l===null&&e.oldScroll>=r.offset){return r.trigger([e.forward])}})})};t.prototype.checkEmpty=function(){if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){this.$element.unbind([p,y].join(" "));return delete a[this.id]}};return t}();l=function(){function t(t,e,r){var i,o;r=n.extend({},n.fn[g].defaults,r);if(r.offset==="bottom-in-view"){r.offset=function(){var t;t=n[m]("viewportHeight");if(!n.isWindow(e.element)){t=e.$element.height()}return t-n(this).outerHeight()}}this.$element=t;this.element=t[0];this.axis=r.horizontal?"horizontal":"vertical";this.callback=r.handler;this.context=e;this.enabled=r.enabled;this.id="waypoints"+v++;this.offset=null;this.options=r;e.waypoints[this.axis][this.id]=this;s[this.axis][this.id]=this;i=(o=t.data(w))!=null?o:[];i.push(this.id);t.data(w,i)}t.prototype.trigger=function(t){if(!this.enabled){return}if(this.callback!=null){this.callback.apply(this.element,t)}if(this.options.triggerOnce){return this.destroy()}};t.prototype.disable=function(){return this.enabled=false};t.prototype.enable=function(){this.context.refresh();return this.enabled=true};t.prototype.destroy=function(){delete s[this.axis][this.id];delete this.context.waypoints[this.axis][this.id];return this.context.checkEmpty()};t.getWaypointsByElement=function(t){var e,r;r=n(t).data(w);if(!r){return[]}e=n.extend({},s.horizontal,s.vertical);return n.map(r,function(t){return e[t]})};return t}();d={init:function(t,e){var r;if(e==null){e={}}if((r=e.handler)==null){e.handler=t}this.each(function(){var t,r,i,s;t=n(this);i=(s=e.context)!=null?s:n.fn[g].defaults.context;if(!n.isWindow(i)){i=t.closest(i)}i=n(i);r=a[i.data(u)];if(!r){r=new o(i)}return new l(t,r,e)});n[m]("refresh");return this},disable:function(){return d._invoke(this,"disable")},enable:function(){return d._invoke(this,"enable")},destroy:function(){return d._invoke(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e>0){return t.push(n[e-1])}})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e<n.length-1){return t.push(n[e+1])}})},_traverse:function(t,e,i){var o,l;if(t==null){t="vertical"}if(e==null){e=r}l=h.aggregate(e);o=[];this.each(function(){var e;e=n.inArray(this,l[t]);return i(o,e,l[t])});return this.pushStack(o)},_invoke:function(t,e){t.each(function(){var t;t=l.getWaypointsByElement(this);return n.each(t,function(t,n){n[e]();return true})});return this}};n.fn[g]=function(){var t,r;r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(d[r]){return d[r].apply(this,t)}else if(n.isFunction(r)){return d.init.apply(this,arguments)}else if(n.isPlainObject(r)){return d.init.apply(this,[null,r])}else if(!r){return n.error("jQuery Waypoints needs a callback function or handler option.")}else{return n.error("The "+r+" method does not exist in jQuery Waypoints.")}};n.fn[g].defaults={context:r,continuous:true,enabled:true,horizontal:false,offset:0,triggerOnce:false};h={refresh:function(){return n.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return(t=r.innerHeight)!=null?t:i.height()},aggregate:function(t){var e,r,i;e=s;if(t){e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0}if(!e){return[]}r={horizontal:[],vertical:[]};n.each(r,function(t,i){n.each(e[t],function(t,e){return i.push(e)});i.sort(function(t,e){return t.offset-e.offset});r[t]=n.map(i,function(t){return t.element});return r[t]=n.unique(r[t])});return r},above:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return h._invoke("enable")},disable:function(){return h._invoke("disable")},destroy:function(){return h._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;e=n.extend({},s.vertical,s.horizontal);return n.each(e,function(e,n){n[t]();return true})},_filter:function(t,e,r){var i,o;i=a[n(t).data(u)];if(!i){return[]}o=[];n.each(i.waypoints[e],function(t,e){if(r(i,e)){return o.push(e)}});o.sort(function(t,e){return t.offset-e.offset});return n.map(o,function(t){return t.element})}};n[m]=function(){var t,n;n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(h[n]){return h[n].apply(null,t)}else{return h.aggregate.call(null,n)}};n[m].settings={resizeThrottle:100,scrollThrottle:30};return i.load(function(){return n[m]("refresh")})})}).call(this);



/*

 scrollup v2.1.1
 Author: Mark Goodyear - http://markgoodyear.com
 Git: https://github.com/markgoodyear/scrollup

 Copyright 2013 Mark Goodyear.
 Licensed under the MIT license
 http://www.opensource.org/licenses/mit-license.php

 Twitter: @markgdyr

 */
!function(a,b,c){a.fn.scrollUp=function(b){a.data(c.body,"scrollUp")||(a.data(c.body,"scrollUp",!0),a.fn.scrollUp.init(b))},a.fn.scrollUp.init=function(d){var e=a.fn.scrollUp.settings=a.extend({},a.fn.scrollUp.defaults,d),f=e.scrollTitle?e.scrollTitle:e.scrollText,g=a("<a/>",{id:e.scrollName,href:"#top",title:f}).appendTo("body");e.scrollImg||g.html(e.scrollText),g.css({display:"none",position:"fixed",zIndex:e.zIndex}),e.activeOverlay&&a("<div/>",{id:e.scrollName+"-active"}).css({position:"absolute",top:e.scrollDistance+"px",width:"100%",borderTop:"1px dotted"+e.activeOverlay,zIndex:e.zIndex}).appendTo("body"),scrollEvent=a(b).scroll(function(){switch(scrollDis="top"===e.scrollFrom?e.scrollDistance:a(c).height()-a(b).height()-e.scrollDistance,e.animation){case"fade":a(a(b).scrollTop()>scrollDis?g.fadeIn(e.animationInSpeed):g.fadeOut(e.animationOutSpeed));break;case"slide":a(a(b).scrollTop()>scrollDis?g.slideDown(e.animationInSpeed):g.slideUp(e.animationOutSpeed));break;default:a(a(b).scrollTop()>scrollDis?g.show(0):g.hide(0))}}),g.click(function(b){b.preventDefault(),a("html, body").animate({scrollTop:0},e.scrollSpeed,e.easingType)})},a.fn.scrollUp.defaults={scrollName:"scrollUp",scrollDistance:300,scrollFrom:"top",scrollSpeed:300,easingType:"linear",animation:"fade",animationInSpeed:200,animationOutSpeed:200,scrollText:"<i class='scroll-icon fa fa-chevron-up scroll-up'></i>",scrollTitle:!1,scrollImg:!1,activeOverlay:!1,zIndex:2147483647},a.fn.scrollUp.destroy=function(d){a.removeData(c.body,"scrollUp"),a("#"+a.fn.scrollUp.settings.scrollName).remove(),a("#"+a.fn.scrollUp.settings.scrollName+"-active").remove(),a.fn.jquery.split(".")[1]>=7?a(b).off("scroll",d):a(b).unbind("scroll",d)},a.scrollUp=a.fn.scrollUp}(jQuery,window,document);



////////////////////////////////////////////////////////////////////
// Retina
////////////////////////////////////////////////////////////////////
(function(){function n(){}function i(e){return t.retinaImageSuffix+e}function s(e,t){this.path=e||"";if(typeof t!=="undefined"&&t!==null){this.at_2x_path=t;this.perform_check=false}else{if(undefined!==document.createElement){var n=document.createElement("a");n.href=this.path;n.pathname=n.pathname.replace(r,i);this.at_2x_path=n.href}else{var s=this.path.split("?");s[0]=s[0].replace(r,i);this.at_2x_path=s.join("?")}this.perform_check=true}}function o(e){this.el=e;this.path=new s(this.el.getAttribute("src"),this.el.getAttribute("data-at2x"));var t=this;this.path.check_2x_variant(function(e){if(e){t.swap()}})}var e=typeof exports==="undefined"?window:exports;var t={retinaImageSuffix:"@2x",check_mime_type:true,force_original_dimensions:true};e.Retina=n;n.configure=function(e){if(e===null){e={}}for(var n in e){if(e.hasOwnProperty(n)){t[n]=e[n]}}};n.init=function(t){if(t===null){t=e}var n=t.onload||function(){};t.onload=function(){var e=document.getElementsByTagName("img"),t=[],r,i;for(r=0;r<e.length;r+=1){i=e[r];if(!!!i.getAttributeNode("data-no-retina")){t.push(new o(i))}}n()}};n.isRetina=function(){var t="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)";if(e.devicePixelRatio>1){return true}if(e.matchMedia&&e.matchMedia(t).matches){return true}return false};var r=/\.\w+$/;e.RetinaImagePath=s;s.confirmed_paths=[];s.prototype.is_external=function(){return!!(this.path.match(/^https?\:/i)&&!this.path.match("//"+document.domain))};s.prototype.check_2x_variant=function(e){var n,r=this;if(this.is_external()){return e(false)}else if(!this.perform_check&&typeof this.at_2x_path!=="undefined"&&this.at_2x_path!==null){return e(true)}else if(this.at_2x_path in s.confirmed_paths){return e(true)}else{n=new XMLHttpRequest;n.open("HEAD",this.at_2x_path);n.onreadystatechange=function(){if(n.readyState!==4){return e(false)}if(n.status>=200&&n.status<=399){if(t.check_mime_type){var i=n.getResponseHeader("Content-Type");if(i===null||!i.match(/^image/i)){return e(false)}}s.confirmed_paths.push(r.at_2x_path);return e(true)}else{return e(false)}};n.send()}};e.RetinaImage=o;o.prototype.swap=function(e){function r(){if(!n.el.complete){setTimeout(r,5)}else{if(t.force_original_dimensions){n.el.setAttribute("width",n.el.offsetWidth);n.el.setAttribute("height",n.el.offsetHeight)}n.el.setAttribute("src",e)}}if(typeof e==="undefined"){e=this.path.at_2x_path}var n=this;r()};if(n.isRetina()){n.init(e)}})();


////////////////////////////////////////////////////////////////
// Parallax
//////////////////////////////////////////////////////////////
(function(e,t,n,r){function u(t,n){this.element=t;this.$element=e(this.element);this.options=e.extend({},s,n);this._defaults=s;this._name=i;this.init()}var i="scrolly",s={bgParallax:false},o=false;u.prototype.init=function(){var t=this;this.startPosition=this.$element.position().top;this.offsetTop=this.$element.offset().top;this.height=this.$element.outerHeight(true);this.velocity=this.$element.attr("data-velocity");this.bgStart=parseInt(this.$element.attr("data-fit"),10);e(n).scroll(function(){t.didScroll=true});setInterval(function(){if(t.didScroll){t.didScroll=false;t.scrolly()}},10)};u.prototype.scrolly=function(){var n=e(t).scrollTop(),r=e(t).height(),i=this.startPosition;if(this.offsetTop>=n+r){this.$element.addClass("scrolly-invisible")}else{if(this.$element.hasClass("scrolly-invisible")){i=this.startPosition+(n+(r-this.offsetTop))*this.velocity}else{i=this.startPosition+n*this.velocity}}if(this.bgStart){i=i+this.bgStart}if(this.options.bgParallax===true){this.$element.css({backgroundPosition:"50% "+i+"px"})}else{this.$element.css({top:i})}};e.fn[i]=function(t){return this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new u(this,t))}})}})(jQuery,window,document);


////////////////////////////////////////////////////////////////
/*Page 2 Scroll*/
//////////////////////////////////////////////////////////////
(function(f,j,n,g){var d="mPageScroll2id",k="mPS2id",v=".m_PageScroll2id,a[rel~='m_PageScroll2id'],.page-scroll-to-id,a[rel~='page-scroll-to-id']",l={scrollSpeed:1300,autoScrollSpeed:true,scrollEasing:"easeInOutExpo",scrollingEasing:"easeInOutCirc",pageEndSmoothScroll:true,layout:"vertical",offset:0,highlightSelector:false,clickedClass:k+"-clicked",targetClass:k+"-target",highlightClass:k+"-highlight",forceSingleHighlight:false,keepHighlightUntilNext:false,highlightByNextTarget:false,disablePluginBelow:false,clickEvents:true,onStart:function(){},onComplete:function(){},defaultSelector:false,live:true},r,c,i,a,s,h,p,q,o,t,b=0,e,u={init:function(w){var w=f.extend(true,{},l,w);f(n).data(k,w);c=f(n).data(k);r=(!r)?this.selector:r+","+this.selector;if(c.defaultSelector){if(typeof f(r)!=="object"||f(r).length===0){r=v}}if(c.clickEvents){f(n).undelegate("."+k).delegate(r,"click."+k,function(z){if(m._isDisabled.call(null)){m._removeClasses.call(null);return}var y=f(this),x=y.attr("href"),A=y.prop("href");if(x&&x.indexOf("#/")!==-1){return}m._reset.call(null);t=y.data("ps2id-offset")||0;if(m._isValid.call(null,x,A)&&m._findTarget.call(null,x)){z.preventDefault();a="selector";s=y;m._setClasses.call(null,true);m._scrollTo.call(null)}})}f(j).unbind("."+k).bind("scroll."+k+" resize."+k,function(){if(m._isDisabled.call(null)){m._removeClasses.call(null);return}var x=f("._"+k+"-t");x.each(function(z){var y=f(this),B=y.attr("id"),A=m._findHighlight.call(null,B);m._setClasses.call(null,false,y,A);if(z==x.length-1){m._extendClasses.call(null)}})});i=true;m._setup.call(null);m._live.call(null)},scrollTo:function(y,w){if(m._isDisabled.call(null)){m._removeClasses.call(null);return}if(y&&typeof y!=="undefined"){m._isInit.call(null);var x={layout:c.layout,offset:c.offset,clicked:false},w=f.extend(true,{},x,w);m._reset.call(null);q=w.layout;o=w.offset;y=(y.indexOf("#")!==-1)?y:"#"+y;if(m._isValid.call(null,y)&&m._findTarget.call(null,y)){a="scrollTo";s=w.clicked;if(s){m._setClasses.call(null,true)}m._scrollTo.call(null)}}},destroy:function(){f(j).unbind("."+k);f(n).undelegate("."+k).removeData(k);f("._"+k+"-t").removeData(k);m._removeClasses.call(null,true)}},m={_isDisabled:function(){var x=j,w="inner",y=c.disablePluginBelow instanceof Array?[c.disablePluginBelow[0]||0,c.disablePluginBelow[1]||0]:[c.disablePluginBelow||0,0];if(!("innerWidth" in j)){w="client";x=n.documentElement||n.body}return x[w+"Width"]<=y[0]||x[w+"Height"]<=y[1]},_isValid:function(w,z){if(!w){return}z=(!z)?w:z;var y=(z.indexOf("#/")!==-1)?z.split("#/")[0]:z.split("#")[0],x=j.location.toString().split("#")[0];return w!=="#"&&w.indexOf("#")!==-1&&(y===""||y===x)},_setup:function(){var x=m._highlightSelector(),w=1,y=0;return f(x).each(function(){var C=f(this),z=C.attr("href"),E=C.prop("href");if(m._isValid.call(null,z,E)){var D=(z.indexOf("#/")!==-1)?z.split("#/")[1]:z.split("#")[1],A=f("#"+D);if(A.length>0){if(c.highlightByNextTarget){if(A!==y){if(!y){A.data(k,{tn:"0"})}else{y.data(k,{tn:A})}y=A}}if(!A.hasClass("_"+k+"-t")){A.addClass("_"+k+"-t")}A.data(k,{i:w});if(!C.hasClass("_"+k+"-h")){C.addClass("_"+k+"-h")}var B=m._findHighlight.call(null,D);m._setClasses.call(null,false,A,B);b=w;w++;if(w==f(x).length){m._extendClasses.call(null)}}}})},_highlightSelector:function(){return(c.highlightSelector&&c.highlightSelector!=="")?c.highlightSelector:r},_findTarget:function(y){var x=(y.indexOf("#/")!==-1)?y.split("#/")[1]:y.split("#")[1],w=f("#"+x);if(w.length<1||w.css("position")==="fixed"){if(x==="top"){w=f("body")}else{return}}h=w;if(!q){q=c.layout}o=m._setOffset.call(null);p=[(w.offset().top-o[0]).toString(),(w.offset().left-o[1]).toString()];p[0]=(p[0]<0)?0:p[0];p[1]=(p[1]<0)?0:p[1];return p},_setOffset:function(){if(!o){o=(c.offset)?c.offset:0}if(t){o=t}var A,z,B,w;switch(typeof o){case"object":case"string":A=[(o.y)?o.y:o,(o.x)?o.x:o];z=[(A[0] instanceof jQuery)?A[0]:f(A[0]),(A[1] instanceof jQuery)?A[1]:f(A[1])];if(z[0].length>0){B=z[0].height();if(z[0].css("position")==="fixed"){B+=z[0][0].offsetTop}}else{if(!isNaN(parseFloat(A[0]))&&isFinite(A[0])){B=parseInt(A[0])}else{B=0}}if(z[1].length>0){w=z[1].width();if(z[1].css("position")==="fixed"){w+=z[1][0].offsetLeft}}else{if(!isNaN(parseFloat(A[1]))&&isFinite(A[1])){w=parseInt(A[1])}else{w=0}}break;case"function":A=o.call(null);if(A instanceof Array){B=A[0];w=A[1]}else{B=w=A}break;default:B=w=parseInt(o)}return[B,w]},_findHighlight:function(B){var A=j.location.toString().split("#")[0],x=f("._"+k+"-h[href='#"+B+"']"),y=f("._"+k+"-h[href='"+A+"#"+B+"']"),w=f("._"+k+"-h[href='#/"+B+"']"),z=f("._"+k+"-h[href='"+A+"#/"+B+"']");x=(x.length>0)?x:y;w=(w.length>0)?w:z;return(w.length>0)?w:x},_setClasses:function(B,x,y){var A=c.clickedClass,w=c.targetClass,z=c.highlightClass;if(B&&A&&A!==""){f("."+A).removeClass(A);s.addClass(A)}else{if(x&&w&&w!==""&&y&&z&&z!==""){if(m._currentTarget.call(null,x)){x.addClass(w);y.addClass(z)}else{if(!c.keepHighlightUntilNext||f("."+z).length>1){x.removeClass(w);y.removeClass(z)}}}}},_extendClasses:function(){var w=c.targetClass,B=c.highlightClass,D=f("."+w),A=f("."+B),C=w+"-first",z=w+"-last",y=B+"-first",x=B+"-last";f("._"+k+"-t").removeClass(C+" "+z);f("._"+k+"-h").removeClass(y+" "+x);if(!c.forceSingleHighlight){D.slice(0,1).addClass(C).end().slice(-1).addClass(z);A.slice(0,1).addClass(y).end().slice(-1).addClass(x)}else{if(c.keepHighlightUntilNext&&D.length>1){D.slice(0,1).removeClass(w);A.slice(0,1).removeClass(B)}else{D.slice(1).removeClass(w);A.slice(1).removeClass(B)}}},_removeClasses:function(w){f("."+c.clickedClass).removeClass(c.clickedClass);f("."+c.targetClass).removeClass(c.targetClass+" "+c.targetClass+"-first "+c.targetClass+"-last");f("."+c.highlightClass).removeClass(c.highlightClass+" "+c.highlightClass+"-first "+c.highlightClass+"-last");if(w){f("._"+k+"-t").removeClass("_"+k+"-t");f("._"+k+"-h").removeClass("_"+k+"-h")}},_currentTarget:function(M){var P=c["target_"+M.data(k).i],D=M.data("ps2id-target"),A=D?f(D)[0].getBoundingClientRect():M[0].getBoundingClientRect();if(typeof P!=="undefined"){var K=M.offset().top,L=M.offset().left,Q=(P.from)?P.from+K:K,B=(P.to)?P.to+K:K,N=(P.fromX)?P.fromX+L:L,z=(P.toX)?P.toX+L:L;return(A.top>=B&&A.top<=Q&&A.left>=z&&A.left<=N)}else{var I=f(j).height(),T=f(j).width(),G=D?f(D).height():M.height(),S=D?f(D).width():M.width(),F=1+(G/I),O=F,J=(G<I)?F*(I/G):F,w=1+(S/T),E=w,R=(S<T)?w*(T/S):w,U=[A.top<=I/O,A.bottom>=I/J,A.left<=T/E,A.right>=T/R];if(c.highlightByNextTarget){var C=M.data(k).tn;if(C){var H=C[0].getBoundingClientRect();if(c.layout==="vertical"){U=[A.top<=I/2,H.top>I/2,1,1]}else{if(c.layout==="horizontal"){U=[1,1,A.left<=T/2,H.left>T/2]}}}}return(U[0]&&U[1]&&U[2]&&U[3])}},_scrollTo:function(){c.scrollSpeed=parseInt(c.scrollSpeed);p=(c.pageEndSmoothScroll)?m._pageEndSmoothScroll.call(null):p;var x=f("html,body"),z=(c.autoScrollSpeed)?m._autoScrollSpeed.call(null):c.scrollSpeed,B=(x.is(":animated"))?c.scrollingEasing:c.scrollEasing,y=f(j).scrollTop(),w=f(j).scrollLeft();switch(q){case"horizontal":if(w!=p[1]){m._callbacks.call(null,"onStart");x.stop().animate({scrollLeft:p[1]},z,B).promise().then(function(){m._callbacks.call(null,"onComplete")})}break;case"auto":if(y!=p[0]||w!=p[1]){m._callbacks.call(null,"onStart");if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)){var A;x.stop().animate({pageYOffset:p[0],pageXOffset:p[1]},{duration:z,easing:B,step:function(C,D){if(D.prop=="pageXOffset"){A=C}else{if(D.prop=="pageYOffset"){j.scrollTo(A,C)}}}}).promise().then(function(){m._callbacks.call(null,"onComplete")})}else{x.stop().animate({scrollTop:p[0],scrollLeft:p[1]},z,B).promise().then(function(){m._callbacks.call(null,"onComplete")})}}break;default:if(y!=p[0]){m._callbacks.call(null,"onStart");x.stop().animate({scrollTop:p[0]},z,B).promise().then(function(){m._callbacks.call(null,"onComplete")})}}},_pageEndSmoothScroll:function(){var w=f(n).height(),z=f(n).width(),y=f(j).height(),x=f(j).width();return[((w-p[0])<y)?w-y:p[0],((z-p[1])<x)?z-x:p[1]]},_autoScrollSpeed:function(){var y=f(j).scrollTop(),x=f(j).scrollLeft(),z=f(n).height(),w=f(n).width(),A=[c.scrollSpeed+((c.scrollSpeed*(Math.floor((Math.abs(p[0]-y)/z)*100)))/100),c.scrollSpeed+((c.scrollSpeed*(Math.floor((Math.abs(p[1]-x)/w)*100)))/100)];return Math.max.apply(Math,A)},_callbacks:function(w){if(!c){return}this[k]={trigger:a,clicked:s,target:h,scrollTo:{y:p[0],x:p[1]}};switch(w){case"onStart":c.onStart.call(null,this[k]);break;case"onComplete":c.onComplete.call(null,this[k]);break}},_reset:function(){q=o=t=false},_isInit:function(){if(!i){u.init.apply(this)}},_live:function(){e=setTimeout(function(){if(c.live){if(f(m._highlightSelector()).length!==b){m._setup.call(null)}}else{if(e){clearTimeout(e)}}m._live.call(null)},1000)},_easing:function(){f.easing.easeInQuad=f.easing.easeInQuad||function(y,z,w,B,A){return B*(z/=A)*z+w};f.easing.easeOutQuad=f.easing.easeOutQuad||function(y,z,w,B,A){return -B*(z/=A)*(z-2)+w};f.easing.easeInOutQuad=f.easing.easeInOutQuad||function(y,z,w,B,A){if((z/=A/2)<1){return B/2*z*z+w}return -B/2*((--z)*(z-2)-1)+w};f.easing.easeInCubic=f.easing.easeInCubic||function(y,z,w,B,A){return B*(z/=A)*z*z+w};f.easing.easeOutCubic=f.easing.easeOutCubic||function(y,z,w,B,A){return B*((z=z/A-1)*z*z+1)+w};f.easing.easeInOutCubic=f.easing.easeInOutCubic||function(y,z,w,B,A){if((z/=A/2)<1){return B/2*z*z*z+w}return B/2*((z-=2)*z*z+2)+w};f.easing.easeInQuart=f.easing.easeInQuart||function(y,z,w,B,A){return B*(z/=A)*z*z*z+w};f.easing.easeOutQuart=f.easing.easeOutQuart||function(y,z,w,B,A){return -B*((z=z/A-1)*z*z*z-1)+w};f.easing.easeInOutQuart=f.easing.easeInOutQuart||function(y,z,w,B,A){if((z/=A/2)<1){return B/2*z*z*z*z+w}return -B/2*((z-=2)*z*z*z-2)+w};f.easing.easeInQuint=f.easing.easeInQuint||function(y,z,w,B,A){return B*(z/=A)*z*z*z*z+w};f.easing.easeOutQuint=f.easing.easeOutQuint||function(y,z,w,B,A){return B*((z=z/A-1)*z*z*z*z+1)+w};f.easing.easeInOutQuint=f.easing.easeInOutQuint||function(y,z,w,B,A){if((z/=A/2)<1){return B/2*z*z*z*z*z+w}return B/2*((z-=2)*z*z*z*z+2)+w};f.easing.easeInExpo=f.easing.easeInExpo||function(y,z,w,B,A){return(z==0)?w:B*Math.pow(2,10*(z/A-1))+w};f.easing.easeOutExpo=f.easing.easeOutExpo||function(y,z,w,B,A){return(z==A)?w+B:B*(-Math.pow(2,-10*z/A)+1)+w};f.easing.easeInOutExpo=f.easing.easeInOutExpo||function(y,z,w,B,A){if(z==0){return w}if(z==A){return w+B}if((z/=A/2)<1){return B/2*Math.pow(2,10*(z-1))+w}return B/2*(-Math.pow(2,-10*--z)+2)+w};f.easing.easeInSine=f.easing.easeInSine||function(y,z,w,B,A){return -B*Math.cos(z/A*(Math.PI/2))+B+w};f.easing.easeOutSine=f.easing.easeOutSine||function(y,z,w,B,A){return B*Math.sin(z/A*(Math.PI/2))+w};f.easing.easeInOutSine=f.easing.easeInOutSine||function(y,z,w,B,A){return -B/2*(Math.cos(Math.PI*z/A)-1)+w};f.easing.easeInCirc=f.easing.easeInCirc||function(y,z,w,B,A){return -B*(Math.sqrt(1-(z/=A)*z)-1)+w};f.easing.easeOutCirc=f.easing.easeOutCirc||function(y,z,w,B,A){return B*Math.sqrt(1-(z=z/A-1)*z)+w};f.easing.easeInOutCirc=f.easing.easeInOutCirc||function(y,z,w,B,A){if((z/=A/2)<1){return -B/2*(Math.sqrt(1-z*z)-1)+w}return B/2*(Math.sqrt(1-(z-=2)*z)+1)+w};f.easing.easeInElastic=f.easing.easeInElastic||function(y,A,w,E,D){var B=1.70158;var C=0;var z=E;if(A==0){return w}if((A/=D)==1){return w+E}if(!C){C=D*0.3}if(z<Math.abs(E)){z=E;var B=C/4}else{var B=C/(2*Math.PI)*Math.asin(E/z)}return -(z*Math.pow(2,10*(A-=1))*Math.sin((A*D-B)*(2*Math.PI)/C))+w};f.easing.easeOutElastic=f.easing.easeOutElastic||function(y,A,w,E,D){var B=1.70158;var C=0;var z=E;if(A==0){return w}if((A/=D)==1){return w+E}if(!C){C=D*0.3}if(z<Math.abs(E)){z=E;var B=C/4}else{var B=C/(2*Math.PI)*Math.asin(E/z)}return z*Math.pow(2,-10*A)*Math.sin((A*D-B)*(2*Math.PI)/C)+E+w};f.easing.easeInOutElastic=f.easing.easeInOutElastic||function(y,A,w,E,D){var B=1.70158;var C=0;var z=E;if(A==0){return w}if((A/=D/2)==2){return w+E}if(!C){C=D*(0.3*1.5)}if(z<Math.abs(E)){z=E;var B=C/4}else{var B=C/(2*Math.PI)*Math.asin(E/z)}if(A<1){return -0.5*(z*Math.pow(2,10*(A-=1))*Math.sin((A*D-B)*(2*Math.PI)/C))+w}return z*Math.pow(2,-10*(A-=1))*Math.sin((A*D-B)*(2*Math.PI)/C)*0.5+E+w};f.easing.easeInBack=f.easing.easeInBack||function(y,z,w,C,B,A){if(A==g){A=1.70158}return C*(z/=B)*z*((A+1)*z-A)+w};f.easing.easeOutBack=f.easing.easeOutBack||function(y,z,w,C,B,A){if(A==g){A=1.70158}return C*((z=z/B-1)*z*((A+1)*z+A)+1)+w};f.easing.easeInOutBack=f.easing.easeInOutBack||function(y,z,w,C,B,A){if(A==g){A=1.70158}if((z/=B/2)<1){return C/2*(z*z*(((A*=(1.525))+1)*z-A))+w}return C/2*((z-=2)*z*(((A*=(1.525))+1)*z+A)+2)+w};f.easing.easeInBounce=f.easing.easeInBounce||function(y,z,w,B,A){return B-f.easing.easeOutBounce(y,A-z,0,B,A)+w};f.easing.easeOutBounce=f.easing.easeOutBounce||function(y,z,w,B,A){if((z/=A)<(1/2.75)){return B*(7.5625*z*z)+w}else{if(z<(2/2.75)){return B*(7.5625*(z-=(1.5/2.75))*z+0.75)+w}else{if(z<(2.5/2.75)){return B*(7.5625*(z-=(2.25/2.75))*z+0.9375)+w}else{return B*(7.5625*(z-=(2.625/2.75))*z+0.984375)+w}}}};f.easing.easeInOutBounce=f.easing.easeInOutBounce||function(y,z,w,B,A){if(z<A/2){return f.easing.easeInBounce(y,z*2,0,B,A)*0.5+w}return f.easing.easeOutBounce(y,z*2-A,0,B,A)*0.5+B*0.5+w}}};m._easing.call();f.fn[d]=function(w){if(u[w]){return u[w].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof w==="object"||!w){return u.init.apply(this,arguments)}else{f.error("Method "+w+" does not exist")}}};f[d]=function(w){if(u[w]){return u[w].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof w==="object"||!w){return u.init.apply(this,arguments)}else{f.error("Method "+w+" does not exist")}}};f[d].defaults=l})(jQuery,window,document);


/*!
 * jQuery Accordion 0.0.1
 * (c) 2014 Victor Fernandez <victor@vctrfrnndz.com>
 * MIT Licensed.
 */

;(function ( $, window, document, undefined ) {

    var pluginName = 'accordion',
        defaults = {
            transitionSpeed: 300,
            transitionEasing: 'ease',
            controlElement: '[data-control]',
            contentElement: '[data-content]',
            groupElement: '[data-accordion-group]',
            singleOpen: true
        };

    function Accordion(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Accordion.prototype.init = function () {
        var self = this,
            opts = self.options;

        var $accordion = $(self.element),
            $controls = $accordion.find('> ' + opts.controlElement),
            $content =  $accordion.find('> ' + opts.contentElement);

        var accordionParentsQty = $accordion.parents('[data-accordion]').length,
            accordionHasParent = accordionParentsQty > 0;

        var closedCSS = { 'max-height': 0, 'overflow': 'hidden' };

        var CSStransitions = supportsTransitions();

        function debounce(func, threshold, execAsap) {
            var timeout;

            return function debounced() {
                var obj = this,
                    args = arguments;

                function delayed() {
                    if (!execAsap) func.apply(obj, args);
                    timeout = null;
                };

                if (timeout) clearTimeout(timeout);
                else if (execAsap) func.apply(obj, args);

                timeout = setTimeout(delayed, threshold || 100);
            };
        }

        function supportsTransitions() {
            var b = document.body || document.documentElement,
                s = b.style,
                p = 'transition';

            if (typeof s[p] == 'string') {
                return true;
            }

            var v = ['Moz', 'webkit', 'Webkit', 'Khtml', 'O', 'ms'];

            p = 'Transition';

            for (var i=0; i<v.length; i++) {
                if (typeof s[v[i] + p] == 'string') {
                    return true;
                }
            }

            return false;
        }

        function requestAnimFrame(cb) {
            if(window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame) {
                return  requestAnimationFrame(cb) ||
                        webkitRequestAnimationFrame(cb) ||
                        mozRequestAnimationFrame(cb);
            } else {
                return setTimeout(cb, 1000 / 60);
            }
        }

        function toggleTransition($el, remove) {
            if(!remove) {
                $content.css({
                    '-webkit-transition': 'max-height ' + opts.transitionSpeed + 'ms ' + opts.transitionEasing,
                    'transition': 'max-height ' + opts.transitionSpeed + 'ms ' + opts.transitionEasing
                });
            } else {
                $content.css({
                    '-webkit-transition': '',
                    'transition': ''
                });
            }
        }

        function calculateHeight($el) {
            var height = 0;

            $el.children().each(function() {
                height = height + $(this).outerHeight(true);
            });

            $el.data('oHeight', height);
        }

        function updateParentHeight($parentAccordion, $currentAccordion, qty, operation) {
            var $content = $parentAccordion.filter('.open').find('> [data-content]'),
                $childs = $content.find('[data-accordion].open > [data-content]'),
                $matched;

            if(!opts.singleOpen) {
                $childs = $childs.not($currentAccordion.siblings('[data-accordion].open').find('> [data-content]'));
            }

            $matched = $content.add($childs);

            if($parentAccordion.hasClass('open')) {
                $matched.each(function() {
                    var currentHeight = $(this).data('oHeight');

                    switch (operation) {
                        case '+':
                            $(this).data('oHeight', currentHeight + qty);
                            break;
                        case '-':
                            $(this).data('oHeight', currentHeight - qty);
                            break;
                        default:
                            throw 'updateParentHeight method needs an operation';
                    }

                    $(this).css('max-height', $(this).data('oHeight'));
                });
            }
        }

        function refreshHeight($accordion) {
            if($accordion.hasClass('open')) {
                var $content = $accordion.find('> [data-content]'),
                    $childs = $content.find('[data-accordion].open > [data-content]'),
                    $matched = $content.add($childs);

                calculateHeight($matched);

                $matched.css('max-height', $matched.data('oHeight'));
            }
        }

        function closeAccordion($accordion, $content) {
            $accordion.trigger('accordion.close');
            
            if(CSStransitions) {
                if(accordionHasParent) {
                    var $parentAccordions = $accordion.parents('[data-accordion]');

                    updateParentHeight($parentAccordions, $accordion, $content.data('oHeight'), '-');
                }

                $content.css(closedCSS);

                $accordion.removeClass('open');
            } else {
                $content.css('max-height', $content.data('oHeight'));

                $content.animate(closedCSS, opts.transitionSpeed);

                $accordion.removeClass('open');
            }
        }

        function openAccordion($accordion, $content) {
            $accordion.trigger('accordion.open');
            if(CSStransitions) {
                toggleTransition($content);

                if(accordionHasParent) {
                    var $parentAccordions = $accordion.parents('[data-accordion]');

                    updateParentHeight($parentAccordions, $accordion, $content.data('oHeight'), '+');
                }

                requestAnimFrame(function() {
                    $content.css('max-height', $content.data('oHeight'));
                });

                $accordion.addClass('open');
            } else {
                $content.animate({
                    'max-height': $content.data('oHeight')
                }, opts.transitionSpeed, function() {
                    $content.css({'max-height': 'none'});
                });

                $accordion.addClass('open');
            }
        }

        function closeSiblingAccordions($accordion) {
            var $accordionGroup = $accordion.closest(opts.groupElement);

            var $siblings = $accordion.siblings('[data-accordion]').filter('.open'),
                $siblingsChildren = $siblings.find('[data-accordion]').filter('.open');

            var $otherAccordions = $siblings.add($siblingsChildren);

            $otherAccordions.each(function() {
                var $accordion = $(this),
                    $content = $accordion.find(opts.contentElement);

                closeAccordion($accordion, $content);
            });

            $otherAccordions.removeClass('open');
        }

        function toggleAccordion() {
            var isAccordionGroup = (opts.singleOpen) ? $accordion.parents(opts.groupElement).length > 0 : false;

            calculateHeight($content);

            if(isAccordionGroup) {
                closeSiblingAccordions($accordion);
            }

            if($accordion.hasClass('open')) {
                closeAccordion($accordion, $content);
            } else {
                openAccordion($accordion, $content);
            }
        }

        function addEventListeners() {
            $controls.on('click', toggleAccordion);
            
            $controls.on('accordion.toggle', function() {
                if(opts.singleOpen && $controls.length > 1) {
                    return false;
                }
                
                toggleAccordion();
            });

            $(window).on('resize', debounce(function() {
                refreshHeight($accordion);
            }));
        }

        function setup() {
            $content.each(function() {
                var $curr = $(this);

                if($curr.css('max-height') != 0) {
                    if(!$curr.closest('[data-accordion]').hasClass('open')) {
                        $curr.css({ 'max-height': 0, 'overflow': 'hidden' });
                    } else {
                        toggleTransition($curr);
                        calculateHeight($curr);

                        $curr.css('max-height', $curr.data('oHeight'));
                    }
                }
            });


            if(!$accordion.attr('data-accordion')) {
                $accordion.attr('data-accordion', '');
                $accordion.find(opts.controlElement).attr('data-control', '');
                $accordion.find(opts.contentElement).attr('data-content', '');
            }
        }

        setup();
        addEventListeners();
    };

    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                new Accordion( this, options ));
            }
        });
    }

})( jQuery, window, document );


/*
    Version 1.5.0
    The MIT License (MIT)

    Copyright (c) 2014 Dirk Groenen

    Permission is hereby granted, free of charge, to any person obtaining a copy of
    this software and associated documentation files (the "Software"), to deal in
    the Software without restriction, including without limitation the rights to
    use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
    the Software, and to permit persons to whom the Software is furnished to do so,
    subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all
    copies or substantial portions of the Software.
*/

(function($){
    $.fn.viewportChecker = function(useroptions){
        // Define options and extend with user
        var options = {
            classToAdd: 'visible',
            offset: 100,
            repeat: false,
            callbackFunction: function(elem, action){},
			scrollHorizontal: false
        };
        $.extend(options, useroptions);

        // Cache the given element and height of the browser
        var $elem = this,
            windowSize = (!options.scrollHorizontal) ? $(window).height() : $(window).width(),
            scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');

        this.checkElements = function(){
        
            // Set some vars to check with
			if(!options.scrollHorizontal){
				var viewportTop = $(scrollElem).scrollTop(),
					viewportBottom = (viewportTop + windowSize);
			}
			else{
				var viewportTop = $(scrollElem).scrollLeft(),
					viewportBottom = (viewportTop + windowSize);
			}
            

            $elem.each(function(){
                var $obj = $(this),
                    objOptions = {},
                    attrOptions = {};

                //  Get any individual attribution data
                if ($obj.data('add'))
                    attrOptions.classToAdd = $obj.data('add');
                if ($obj.data('offset'))
                    attrOptions.offset = $obj.data('offset');
                if ($obj.data('repeat'))
                    attrOptions.repeat = $obj.data('repeat');
                if ($obj.data('scrollHorizontal'))
                    attrOptions.scrollHorizontal = $obj.data('scrollHorizontal');

                $.extend(objOptions, options);
                $.extend(objOptions, attrOptions);

                // If class already exists; quit
                if ($obj.hasClass(objOptions.classToAdd) && !objOptions.repeat){
                    return;
                }

                // define the top position of the element and include the offset which makes is appear earlier or later
                var elemTop = (!objOptions.scrollHorizontal) ? Math.round( $obj.offset().top ) + objOptions.offset : Math.round( $obj.offset().left ) + objOptions.offset,
                    elemBottom = elemTop + ($obj.height());

                // Add class if in viewport
                if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
                    $obj.addClass(objOptions.classToAdd);

                    // Do the callback function. Callback wil send the jQuery object as parameter
                    objOptions.callbackFunction($obj, "add");
                    
                // Remove class if not in viewport and repeat is true
                } else if ($obj.hasClass(objOptions.classToAdd) && (objOptions.repeat)){
                    $obj.removeClass(objOptions.classToAdd);

                    // Do the callback function.
                    objOptions.callbackFunction($obj, "remove");
                }
            });
        
        };

        // Run checkelements on load and scroll
        $(window).bind("load scroll touchmove", this.checkElements);

        // On resize change the height var
        $(window).resize(function(e){
            windowSize = (!options.scrollHorizontal) ? e.currentTarget.innerHeight : e.currentTarget.innerWidth;
        });
        
        // trigger inital check if elements already visible
        this.checkElements();
        
        return this;
    };
})(jQuery);


// Easy Responsive Tabs Plugin
// Author: Samson.Onna <Email : samson3d@gmail.com> 
(function ($) {
    $.fn.extend({
        easyResponsiveTabs: function (options) {
            //Set the default values, use comma to separate the settings, example:
            var defaults = {
                type: 'default', //default, vertical, accordion;
                width: 'auto',
                fit: true,
                closed: false,
                tabidentify: '',
                activetab_bg: '',
                inactive_bg: '',
                active_border_color: '',
                active_content_border_color: '',
                activate: function () {
                }
            }
            //Variables
            var options = $.extend(defaults, options);
            var opt = options, jtype = opt.type, jfit = opt.fit, jwidth = opt.width, vtabs = 'vertical', accord = 'accordion';
            var hash = window.location.hash;
            var historyApi = !!(window.history && history.replaceState);

            //Events
            $(this).bind('tabactivate', function (e, currentTab) {
                if (typeof options.activate === 'function') {
                    options.activate.call(currentTab, e)
                }
            });

            //Main function
            this.each(function () {
                var $respTabs = $(this);
                var $respTabsList = $respTabs.find('ul.resp-tabs-list.' + options.tabidentify);
                var respTabsId = $respTabs.attr('id');
                $respTabs.find('ul.resp-tabs-list.' + options.tabidentify + ' li').addClass('resp-tab-item').addClass(options.tabidentify);
                $respTabs.css({
                    'display': 'block',
                    'width': jwidth
                });

                if (options.type == 'vertical')
                    $respTabsList.css('margin-top', '3px');

                $respTabs.find('.resp-tabs-container.' + options.tabidentify).css('border-color', options.active_content_border_color);
                $respTabs.find('.resp-tabs-container.' + options.tabidentify + ' > div').addClass('resp-tab-content').addClass(options.tabidentify);
                jtab_options();
                //Properties Function
                function jtab_options() {
                    if (jtype == vtabs) {
                        $respTabs.addClass('resp-vtabs').addClass(options.tabidentify);
                    }
                    if (jfit == true) {
                        $respTabs.css({ width: '100%', margin: '0px' });
                    }
                    if (jtype == accord) {
                        $respTabs.addClass('resp-easy-accordion').addClass(options.tabidentify);
                        $respTabs.find('.resp-tabs-list').css('display', 'none');
                    }
                }

                //Assigning the h2 markup to accordion title
                var $tabItemh2;
                $respTabs.find('.resp-tab-content.' + options.tabidentify).before("<h2 class='resp-accordion " + options.tabidentify + "' role='tab'><span class='resp-arrow'></span></h2>");

                $respTabs.find('.resp-tab-content.' + options.tabidentify).prev("h2").css({
                    'background-color': options.inactive_bg,
                    'border-color': options.active_border_color
                });

                var itemCount = 0;
                $respTabs.find('.resp-accordion').each(function () {
                    $tabItemh2 = $(this);
                    var $tabItem = $respTabs.find('.resp-tab-item:eq(' + itemCount + ')');
                    var $accItem = $respTabs.find('.resp-accordion:eq(' + itemCount + ')');
                    $accItem.append($tabItem.html());
                    $accItem.data($tabItem.data());
                    $tabItemh2.attr('aria-controls', options.tabidentify + '_tab_item-' + (itemCount));
                    itemCount++;
                });

                //Assigning the 'aria-controls' to Tab items
                var count = 0,
                    $tabContent;
                $respTabs.find('.resp-tab-item').each(function () {
                    $tabItem = $(this);
                    $tabItem.attr('aria-controls', options.tabidentify + '_tab_item-' + (count));
                    $tabItem.attr('role', 'tab');
                    $tabItem.css({
                        'background-color': options.inactive_bg,
                        'border-color': 'none'
                    });

                    //Assigning the 'aria-labelledby' attr to tab-content
                    var tabcount = 0;
                    $respTabs.find('.resp-tab-content.' + options.tabidentify).each(function () {
                        $tabContent = $(this);
                        $tabContent.attr('aria-labelledby', options.tabidentify + '_tab_item-' + (tabcount)).css({
                            'border-color': options.active_border_color
                        });
                        tabcount++;
                    });
                    count++;
                });

                // Show correct content area
                var tabNum = 0;
                if (hash != '') {
                    var matches = hash.match(new RegExp(respTabsId + "([0-9]+)"));
                    if (matches !== null && matches.length === 2) {
                        tabNum = parseInt(matches[1], 10) - 1;
                        if (tabNum > count) {
                            tabNum = 0;
                        }
                    }
                }

                //Active correct tab
                $($respTabs.find('.resp-tab-item.' + options.tabidentify)[tabNum]).addClass('resp-tab-active').css({
                    'background-color': options.activetab_bg,
                    'border-color': options.active_border_color
                });

                //keep closed if option = 'closed' or option is 'accordion' and the element is in accordion mode
                if (options.closed !== true && !(options.closed === 'accordion' && !$respTabsList.is(':visible')) && !(options.closed === 'tabs' && $respTabsList.is(':visible'))) {
                    $($respTabs.find('.resp-accordion.' + options.tabidentify)[tabNum]).addClass('resp-tab-active').css({
                        'background-color': options.activetab_bg + ' !important',
                        'border-color': options.active_border_color,
                        'background': 'none'
                    });

                    $($respTabs.find('.resp-tab-content.' + options.tabidentify)[tabNum]).addClass('resp-tab-content-active').addClass(options.tabidentify).attr('style', 'display:block');
                }
                //assign proper classes for when tabs mode is activated before making a selection in accordion mode
                else {
                   // $($respTabs.find('.resp-tab-content.' + options.tabidentify)[tabNum]).addClass('resp-accordion-closed'); //removed resp-tab-content-active
                }

                //Tab Click action function
                $respTabs.find("[role=tab]").each(function () {

                    var $currentTab = $(this);
                    $currentTab.click(function () {

                        var $currentTab = $(this);
                        var $tabAria = $currentTab.attr('aria-controls');

                        if ($currentTab.hasClass('resp-accordion') && $currentTab.hasClass('resp-tab-active')) {
                            $respTabs.find('.resp-tab-content-active.' + options.tabidentify).slideUp('', function () {
                                $(this).addClass('resp-accordion-closed');
                            });
                            $currentTab.removeClass('resp-tab-active').css({
                                'background-color': options.inactive_bg,
                                'border-color': 'none'
                            });
                            return false;
                        }
                        if (!$currentTab.hasClass('resp-tab-active') && $currentTab.hasClass('resp-accordion')) {
                            $respTabs.find('.resp-tab-active.' + options.tabidentify).removeClass('resp-tab-active').css({
                                'background-color': options.inactive_bg,
                                'border-color': 'none'
                            });
                            $respTabs.find('.resp-tab-content-active.' + options.tabidentify).slideUp().removeClass('resp-tab-content-active resp-accordion-closed');
                            $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active').css({
                                'background-color': options.activetab_bg,
                                'border-color': options.active_border_color
                            });

                            $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + '].' + options.tabidentify).slideDown().addClass('resp-tab-content-active');
                        } else {
                            console.log('here');
                            $respTabs.find('.resp-tab-active.' + options.tabidentify).removeClass('resp-tab-active').css({
                                'background-color': options.inactive_bg,
                                'border-color': 'none'
                            });

                            $respTabs.find('.resp-tab-content-active.' + options.tabidentify).removeAttr('style').removeClass('resp-tab-content-active').removeClass('resp-accordion-closed');

                            $respTabs.find("[aria-controls=" + $tabAria + "]").addClass('resp-tab-active').css({
                                'background-color': options.activetab_bg,
                                'border-color': options.active_border_color
                            });

                            $respTabs.find('.resp-tab-content[aria-labelledby = ' + $tabAria + '].' + options.tabidentify).addClass('resp-tab-content-active').attr('style', 'display:block');
                        }
                        //Trigger tab activation event
                        $currentTab.trigger('tabactivate', $currentTab);

                        //Update Browser History
                        if (historyApi) {
                            var currentHash = window.location.hash;
                            var tabAriaParts = $tabAria.split('tab_item-');
                            // var newHash = respTabsId + (parseInt($tabAria.substring(9), 10) + 1).toString();
                            var newHash = respTabsId + (parseInt(tabAriaParts[1], 10) + 1).toString();
                            if (currentHash != "") {
                                var re = new RegExp(respTabsId + "[0-9]+");
                                if (currentHash.match(re) != null) {
                                    newHash = currentHash.replace(re, newHash);
                                }
                                else {
                                    newHash = currentHash + "|" + newHash;
                                }
                            }
                            else {
                                newHash = '#' + newHash;
                            }

                            history.replaceState(null, null, newHash);
                        }
                    });

                });

                //Window resize function                   
                $(window).resize(function () {
                    $respTabs.find('.resp-accordion-closed').removeAttr('style');
                });
            });
        }
    });
})(jQuery);


/* After Resize Plugin */

( function( $ ) {
	"use strict";
	
	// Define default settings
	var defaults = {
		action: function() {},
		runOnLoad: false,
		duration: 500
	};
	
	// Define global variables
	var settings = defaults,
		running = false,
		start;
	
	var methods = {};
	
	// Initial plugin configuration
	methods.init = function() {
		
		// Allocate passed arguments to settings based on type
		for( var i = 0; i <= arguments.length; i++ ) {
			var arg = arguments[i];
			switch ( typeof arg ) {
				case "function":
					settings.action = arg;
					break;
				case "boolean":
					settings.runOnLoad = arg;
					break;
				case "number":
					settings.duration = arg;
					break;
			}
		}
	
		// Process each matching jQuery object
		return this.each(function() {
		
			if( settings.runOnLoad ) { settings.action(); }
			
			$(this).resize( function() {
				
				methods.timedAction.call( this );
				
			} );
		
		} );
	};
	
	methods.timedAction = function( code, millisec ) {
		
		var doAction = function() {
			var remaining = settings.duration;
			
			if( running ) {
				var elapse = new Date() - start;
				remaining = settings.duration - elapse;
				if( remaining <= 0 ) {
					// Clear timeout and reset running variable
					clearTimeout(running);
					running = false;
					// Perform user defined function
					settings.action();
				
					return;
				}
			}
			wait( remaining );
		};
		
		var wait = function( time ) {
			running = setTimeout( doAction, time );
		};
		
		// Define new action starting time
		start = new Date();
		
		// Define runtime settings if function is run directly
		if( typeof millisec === 'number' ) { settings.duration = millisec; }
		if( typeof code === 'function' ) { settings.action = code; }
		
		// Only run timed loop if not already running
		if( !running ) { doAction(); }
		
	};

	
	$.fn.afterResize = function( method ) {
		
		if( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ) );
		} else {
			return methods.init.apply( this, arguments );
		}
		
	};
	
})(jQuery);

/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD (Register as an anonymous module)
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// Node/CommonJS
		module.exports = factory(require('jquery'));
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
				t.setMilliseconds(t.getMilliseconds() + days * 864e+5);
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

		var result = key ? undefined : {},
			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling $.cookie().
			cookies = document.cookie ? document.cookie.split('; ') : [],
			i = 0,
			l = cookies.length;

		for (; i < l; i++) {
			var parts = cookies[i].split('='),
				name = decode(parts.shift()),
				cookie = parts.join('=');

			if (key === name) {
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
		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));


/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );



/**
 * sidebarEffects.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
 var SidebarMenuEffects = (function() {

 	function hasParentClass( e, classname ) {
		if(e === document) return false;
		if( classie.has( e, classname ) ) {
			return true;
		}
		return e.parentNode && hasParentClass( e.parentNode, classname );
	}

	// http://coveroverflow.com/a/11381730/989439
	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}

	function init() {

		var container = document.getElementById( 'st-container' ),
			buttons = Array.prototype.slice.call( document.querySelectorAll( '#st-trigger-effects > button' ) ),
			// event type (if mobile use touch events)
			eventtype = mobilecheck() ? 'touchstart' : 'click',
			resetMenu = function() {
				classie.remove( container, 'st-menu-open' );
			},
			bodyClickFn = function(evt) {
				if( !hasParentClass( evt.target, 'st-menu' ) ) {
					resetMenu();
					document.removeEventListener( eventtype, bodyClickFn );
				}
			};

		buttons.forEach( function( el, i ) {
			var effect = el.getAttribute( 'data-effect' );

			el.addEventListener( eventtype, function( ev ) {
				ev.stopPropagation();
				ev.preventDefault();
				container.className = 'st-container'; // clear
				classie.add( container, effect );
				setTimeout( function() {
					classie.add( container, 'st-menu-open' );
				}, 25 );
				document.addEventListener( eventtype, bodyClickFn );
			});
		} );

	}

	init();

})();

/**
 * tiltfx.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2015, Codrops
 * http://www.codrops.com
 */
;(function(window) {
	
	'use strict';

	/**
	 * **************************************************************************
	 * utils
	 * **************************************************************************
	 */
	
	// from https://gist.github.com/desandro/1866474
	var lastTime = 0;
	var prefixes = 'webkit moz ms o'.split(' ');
	// get unprefixed rAF and cAF, if present
	var requestAnimationFrame = window.requestAnimationFrame;
	var cancelAnimationFrame = window.cancelAnimationFrame;
	// loop through vendor prefixes and get prefixed rAF and cAF
	var prefix;
	for( var i = 0; i < prefixes.length; i++ ) {
		if ( requestAnimationFrame && cancelAnimationFrame ) {
			break;
		}
		prefix = prefixes[i];
		requestAnimationFrame = requestAnimationFrame || window[ prefix + 'RequestAnimationFrame' ];
		cancelAnimationFrame  = cancelAnimationFrame  || window[ prefix + 'CancelAnimationFrame' ] ||
		window[ prefix + 'CancelRequestAnimationFrame' ];
	}

	// fallback to setTimeout and clearTimeout if either request/cancel is not supported
	if ( !requestAnimationFrame || !cancelAnimationFrame ) {
		requestAnimationFrame = function( callback, element ) {
			var currTime = new Date().getTime();
			var timeToCall = Math.max( 0, 16 - ( currTime - lastTime ) );
			var id = window.setTimeout( function() {
				callback( currTime + timeToCall );
			}, timeToCall );
			lastTime = currTime + timeToCall;
			return id;
		};

		cancelAnimationFrame = function( id ) {
			window.clearTimeout( id );
		};
	}

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	// from http://www.quirksmode.org/js/events_properties.html#position
	function getMousePos(e) {
		var posx = 0;
		var posy = 0;
		if (!e) var e = window.event;
		if (e.pageX || e.pageY) 	{
			posx = e.pageX;
			posy = e.pageY;
		}
		else if (e.clientX || e.clientY) 	{
			posx = e.clientX + document.body.scrollLeft
				+ document.documentElement.scrollLeft;
			posy = e.clientY + document.body.scrollTop
				+ document.documentElement.scrollTop;
		}
		return {
			x : posx,
			y : posy
		}
	}

	// from http://www.sberry.me/articles/javascript-event-throttling-debouncing
	function throttle(fn, delay) {
		var allowSample = true;

		return function(e) {
			if (allowSample) {
				allowSample = false;
				setTimeout(function() { allowSample = true; }, delay);
				fn(e);
			}
		};
	}

	/***************************************************************************/

	/**
	 * TiltFx fn
	 */
	function TiltFx(el, options) {
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );
		this._init();
		this._initEvents();
	}

	/**
	 * TiltFx options.
	 */
	TiltFx.prototype.options = {
		// number of extra image elements (div with background-image) to add to the DOM - min:1, max:5 (for a higher number, it's recommended to remove the transitions of .tilt__front in the stylesheet.
		extraImgs : 2,
		// the opacity value for all the image elements.
		opacity : 0.7,
		// by default the first layer does not move.
		bgfixed : true,
		// image element's movement configuration
		movement : {
			perspective : 1000, // perspective value
			translateX : -10, // a relative movement of -10px to 10px on the x-axis (setting a negative value reverses the direction)
			translateY : -10, // a relative movement of -10px to 10px on the y-axis 
			translateZ : 20, // a relative movement of -20px to 20px on the z-axis (perspective value must be set). Also, this specific translation is done when the mouse moves vertically.
			rotateX : 2, // a relative rotation of -2deg to 2deg on the x-axis (perspective value must be set)
			rotateY : 2, // a relative rotation of -2deg to 2deg on the y-axis (perspective value must be set)
			rotateZ : 0 // z-axis rotation; by default there's no rotation on the z-axis (perspective value must be set)
		}
	}

	/**
	 * Initialize: build the necessary structure for the image elements and replace it with the HTML img element.
	 */
	TiltFx.prototype._init = function() {
		this.tiltWrapper = document.createElement('div');
		this.tiltWrapper.className = 'tilt';

		// main image element.
		this.tiltImgBack = document.createElement('div');
		this.tiltImgBack.className = 'tilt__back';
		this.tiltImgBack.style.backgroundImage = 'url(' + this.el.src + ')';
		this.tiltWrapper.appendChild(this.tiltImgBack);

		// image elements limit.
		if( this.options.extraImgs < 1 ) {
			this.options.extraImgs = 1;
		}
		else if( this.options.extraImgs > 5 ) {
			this.options.extraImgs = 5;
		}

		if( !this.options.movement.perspective ) {
			this.options.movement.perspective = 0;
		}

		// add the extra image elements.
		this.imgElems = [];
		for(var i = 0; i < this.options.extraImgs; ++i) {
			var el = document.createElement('div');
			el.className = 'tilt__front';
			el.style.backgroundImage = 'url(' + this.el.src + ')';
			el.style.opacity = this.options.opacity;
			this.tiltWrapper.appendChild(el);
			this.imgElems.push(el);
		}

		if( !this.options.bgfixed ) {
			this.imgElems.push(this.tiltImgBack);
			++this.options.extraImgs;
		}

		// add it to the DOM and remove original img element.
		this.el.parentNode.insertBefore(this.tiltWrapper, this.el);
		this.el.parentNode.removeChild(this.el);

		// tiltWrapper properties: width/height/left/top
		this.view = { width : this.tiltWrapper.offsetWidth, height : this.tiltWrapper.offsetHeight };
	};

	/**
	 * Initialize the events on the main wrapper.
	 */
	TiltFx.prototype._initEvents = function() {
		var self = this,
			moveOpts = self.options.movement;

		// mousemove event..
		this.tiltWrapper.addEventListener('mousemove', function(ev) {
			requestAnimationFrame(function() {
					// mouse position relative to the document.
				var mousepos = getMousePos(ev),
					// document scrolls.
					docScrolls = {left : document.body.scrollLeft + document.documentElement.scrollLeft, top : document.body.scrollTop + document.documentElement.scrollTop},
					bounds = self.tiltWrapper.getBoundingClientRect(),
					// mouse position relative to the main element (tiltWrapper).
					relmousepos = {
						x : mousepos.x - bounds.left - docScrolls.left,
						y : mousepos.y - bounds.top - docScrolls.top
					};

				// configure the movement for each image element.
				for(var i = 0, len = self.imgElems.length; i < len; ++i) {
					var el = self.imgElems[i],
						rotX = moveOpts.rotateX ? 2 * ((i+1)*moveOpts.rotateX/self.options.extraImgs) / self.view.height * relmousepos.y - ((i+1)*moveOpts.rotateX/self.options.extraImgs) : 0,
						rotY = moveOpts.rotateY ? 2 * ((i+1)*moveOpts.rotateY/self.options.extraImgs) / self.view.width * relmousepos.x - ((i+1)*moveOpts.rotateY/self.options.extraImgs) : 0,
						rotZ = moveOpts.rotateZ ? 2 * ((i+1)*moveOpts.rotateZ/self.options.extraImgs) / self.view.width * relmousepos.x - ((i+1)*moveOpts.rotateZ/self.options.extraImgs) : 0,
						transX = moveOpts.translateX ? 2 * ((i+1)*moveOpts.translateX/self.options.extraImgs) / self.view.width * relmousepos.x - ((i+1)*moveOpts.translateX/self.options.extraImgs) : 0,
						transY = moveOpts.translateY ? 2 * ((i+1)*moveOpts.translateY/self.options.extraImgs) / self.view.height * relmousepos.y - ((i+1)*moveOpts.translateY/self.options.extraImgs) : 0,
						transZ = moveOpts.translateZ ? 2 * ((i+1)*moveOpts.translateZ/self.options.extraImgs) / self.view.height * relmousepos.y - ((i+1)*moveOpts.translateZ/self.options.extraImgs) : 0;

					el.style.WebkitTransform = 'perspective(' + moveOpts.perspective + 'px) translate3d(' + transX + 'px,' + transY + 'px,' + transZ + 'px) rotate3d(1,0,0,' + rotX + 'deg) rotate3d(0,1,0,' + rotY + 'deg) rotate3d(0,0,1,' + rotZ + 'deg)';
					el.style.transform = 'perspective(' + moveOpts.perspective + 'px) translate3d(' + transX + 'px,' + transY + 'px,' + transZ + 'px) rotate3d(1,0,0,' + rotX + 'deg) rotate3d(0,1,0,' + rotY + 'deg) rotate3d(0,0,1,' + rotZ + 'deg)';
				}
			});
		});

		// reset all when mouse leaves the main wrapper.
		this.tiltWrapper.addEventListener('mouseleave', function(ev) {
			setTimeout(function() {
			for(var i = 0, len = self.imgElems.length; i < len; ++i) {
				var el = self.imgElems[i];
				el.style.WebkitTransform = 'perspective(' + moveOpts.perspective + 'px) translate3d(0,0,0) rotate3d(1,1,1,0deg)';
				el.style.transform = 'perspective(' + moveOpts.perspective + 'px) translate3d(0,0,0) rotate3d(1,1,1,0deg)';
			}	
			}, 60);
			
		});

		// window resize
		window.addEventListener('resize', throttle(function(ev) {
			// recalculate tiltWrapper properties: width/height/left/top
			self.view = { width : self.tiltWrapper.offsetWidth, height : self.tiltWrapper.offsetHeight };
		}, 50));
	};

	function init() {
		// search for imgs with the class "tilt-effect"
		[].slice.call(document.querySelectorAll('img.tilt-effect')).forEach(function(img) {
			new TiltFx(img, JSON.parse(img.getAttribute('data-tilt-options')));
		});
	}

	init();

	window.TiltFx = TiltFx;

})(window);


/*! jQuery slabtext plugin v2.3.1 MIT/GPL2 @freqdec */
(function($){$.fn.slabText=function(options){var settings={fontRatio:0.78,forceNewCharCount:true,wrapAmpersand:true,headerBreakpoint:null,viewportBreakpoint:null,noResizeEvent:false,resizeThrottleTime:300,maxFontSize:999,postTweak:true,precision:3,minCharsPerLine:0};$("body").addClass("slabtexted");return this.each(function(){if(options){$.extend(settings,options)}var $this=$(this),keepSpans=$("span.slabtext",$this).length,words=keepSpans?[]:String($.trim($this.text())).replace(/\s{2,}/g," ").split(" "),origFontSize=null,idealCharPerLine=null,fontRatio=settings.fontRatio,forceNewCharCount=settings.forceNewCharCount,headerBreakpoint=settings.headerBreakpoint,viewportBreakpoint=settings.viewportBreakpoint,postTweak=settings.postTweak,precision=settings.precision,resizeThrottleTime=settings.resizeThrottleTime,minCharsPerLine=settings.minCharsPerLine,resizeThrottle=null,viewportWidth=$(window).width(),headLink=$this.find("a:first").attr("href")||$this.attr("href"),linkTitle=headLink?$this.find("a:first").attr("title"):"";if(!keepSpans&&minCharsPerLine&&words.join(" ").length<minCharsPerLine){return}var grabPixelFontSize=function(){var dummy=jQuery('<div style="display:none;font-size:1em;margin:0;padding:0;height:auto;line-height:1;border:0;">&nbsp;</div>').appendTo($this),emH=dummy.height();dummy.remove();return emH};var resizeSlabs=function resizeSlabs(){var parentWidth=$this.width(),fs;if(parentWidth===0){return}$this.removeClass("slabtextdone slabtextinactive");if(viewportBreakpoint&&viewportBreakpoint>viewportWidth||headerBreakpoint&&headerBreakpoint>parentWidth){$this.addClass("slabtextinactive");return}fs=grabPixelFontSize();if(!keepSpans&&(forceNewCharCount||fs!=origFontSize)){origFontSize=fs;var newCharPerLine=Math.min(60,Math.floor(parentWidth/(origFontSize*fontRatio))),wordIndex=0,lineText=[],counter=0,preText="",postText="",finalText="",slice,preDiff,postDiff;if(newCharPerLine!=0&&newCharPerLine!=idealCharPerLine){idealCharPerLine=newCharPerLine;while(wordIndex<words.length){postText="";while(postText.length<idealCharPerLine){preText=postText;postText+=words[wordIndex]+" ";if(++wordIndex>=words.length){break}}if(minCharsPerLine){slice=words.slice(wordIndex).join(" ");if(slice.length<minCharsPerLine){postText+=slice;preText=postText;wordIndex=words.length+2}}preDiff=idealCharPerLine-preText.length;postDiff=postText.length-idealCharPerLine;if((preDiff<postDiff)&&(preText.length>=(minCharsPerLine||2))){finalText=preText;wordIndex--}else{finalText=postText}finalText=$("<div/>").text(finalText).html();if(settings.wrapAmpersand){finalText=finalText.replace(/&amp;/g,'<span class="amp">&amp;</span>')}finalText=$.trim(finalText);lineText.push('<span class="slabtext">'+finalText+"</span>")}$this.html(lineText.join(" "));if(headLink){$this.wrapInner('<a href="'+headLink+'" '+(linkTitle?'title="'+linkTitle+'" ':"")+"/>")}}}else{origFontSize=fs}$("span.slabtext",$this).each(function(){var $span=$(this),innerText=$span.text(),wordSpacing=innerText.split(" ").length>1,diff,ratio,fontSize;if(postTweak){$span.css({"word-spacing":0,"letter-spacing":0})}ratio=parentWidth/$span.width();fontSize=parseFloat(this.style.fontSize)||origFontSize;$span.css("font-size",Math.min((fontSize*ratio).toFixed(precision),settings.maxFontSize)+"px");diff=!!postTweak?parentWidth-$span.width():false;if(diff){$span.css((wordSpacing?"word":"letter")+"-spacing",(diff/(wordSpacing?innerText.split(" ").length-1:innerText.length)).toFixed(precision)+"px")}});$this.addClass("slabtextdone")};resizeSlabs();if(!settings.noResizeEvent){$(window).resize(function(){if($(window).width()==viewportWidth){return}viewportWidth=$(window).width();clearTimeout(resizeThrottle);resizeThrottle=setTimeout(resizeSlabs,resizeThrottleTime)})}})}})(jQuery);



/* Circular Counter */
"use strict";

(function ($) {

    $.fn.circliful = function (options, callback) {

        var settings = $.extend({
            // These are the defaults.
            startdegree: 0,
            fgcolor: "#556b2f",
            bgcolor: "#eee",
            fill: false,
            width: 15,
            dimension: 200,
            fontsize: 15,
            percent: 50,
            animationstep: 1.0,
            iconsize: '20px',
            iconcolor: '#999',
            border: 'default',
            complete: null,
            bordersize: 10
        }, options);

        return this.each(function () {

            var customSettings = ["fgcolor", "bgcolor", "fill", "width", "dimension", "fontsize", "animationstep", "endPercent", "icon", "iconcolor", "iconsize", "border", "startdegree", "bordersize"];

            var customSettingsObj = {};
            var icon = '';
            var percent;
            var endPercent = 0;
            var obj = $(this);
            var fill = false;
            var text, info;

            obj.addClass('circliful');

            checkDataAttributes(obj);

            if (obj.data('text') != undefined) {
                text = obj.data('text');

                if (obj.data('icon') != undefined) {
                    icon = $('<i></i>')
                        .addClass('fa ' + $(this).data('icon'))
                        .css({
                            'color': customSettingsObj.iconcolor,
                            'font-size': customSettingsObj.iconsize
                        });
                }

                if (obj.data('type') != undefined) {
                    type = $(this).data('type');

                    if (type == 'half') {
                        addCircleText(obj, 'circle-text-half', (customSettingsObj.dimension / 1.45));
                    } else {
                        addCircleText(obj, 'circle-text', customSettingsObj.dimension);
                    }
                } else {
                    addCircleText(obj, 'circle-text', customSettingsObj.dimension);
                }
            }

            if ($(this).data("total") != undefined && $(this).data("part") != undefined) {
                var total = $(this).data("total") / 100;

                percent = (($(this).data("part") / total) / 100).toFixed(3);
                endPercent = ($(this).data("part") / total).toFixed(3);
            } else {
                if ($(this).data("percent") != undefined) {
                    percent = $(this).data("percent") / 100;
                    endPercent = $(this).data("percent");
                } else {
                    percent = settings.percent / 100;
                }
            }

            if ($(this).data('info') != undefined) {
                info = $(this).data('info');

                if ($(this).data('type') != undefined) {
                    type = $(this).data('type');

                    if (type == 'half') {
                        addInfoText(obj, 0.9);
                    } else {
                        addInfoText(obj, 1.25);
                    }
                } else {
                    addInfoText(obj, 1.25);
                }
            }

            $(this).width(customSettingsObj.dimension + 'px');

            var size = customSettingsObj.dimension,
                canvas = $('<canvas></canvas>').attr({
                    width: size,
                    height: size
                }).appendTo($(this)).get(0);

            var context = canvas.getContext('2d');

            var dpr = window.devicePixelRatio;
            if ( dpr ) {
                var $canvas = $(canvas);
                $canvas.css('width', size);
                $canvas.css('height', size);
                $canvas.attr('width', size * dpr);
                $canvas.attr('height', size * dpr);

                context.scale(dpr, dpr);
            }

            var container = $(canvas).parent();
            var x = size / 2;
            var y = size / 2;
            var degrees = customSettingsObj.percent * 360.0;
            var radians = degrees * (Math.PI / 180);
            var radius = size / 2.5;
            var startAngle = 2.3 * Math.PI;
            var endAngle = 0;
            var counterClockwise = false;
            var curPerc = customSettingsObj.animationstep === 0.0 ? endPercent : 0.0;
            var curStep = Math.max(customSettingsObj.animationstep, 0.0);
            var circ = Math.PI * 2;
            var quart = Math.PI / 2;
            var type = '';
            var fireCallback = true;
            var additionalAngelPI = (customSettingsObj.startdegree / 180) * Math.PI;

            if ($(this).data('type') != undefined) {
                type = $(this).data('type');

                if (type == 'half') {
                    startAngle = 2.0 * Math.PI;
                    endAngle = 3.13;
                    circ = Math.PI;
                    quart = Math.PI / 0.996;
                }
            }
            
            if ($(this).data('type') != undefined) {
                type = $(this).data('type');

                if (type == 'angle') {
                    startAngle = 2.25 * Math.PI;
                    endAngle = 2.4;
                    circ = 1.53 + Math.PI;
                    quart = 0.73 + Math.PI / 0.996;
                }
            }

            /**
             * adds text to circle
             *
             * @param obj
             * @param cssClass
             * @param lineHeight
             */
            function addCircleText(obj, cssClass, lineHeight) {
                $("<span></span>")
                    .appendTo(obj)
                    .addClass(cssClass)
                    .html(text)
                    .prepend(icon)
                    .css({
                        'line-height': lineHeight + 'px',
                        'font-size': customSettingsObj.fontsize + 'px'
                    });
            }

            /**
             * adds info text to circle
             *
             * @param obj
             * @param factor
             */
            function addInfoText(obj, factor) {
                $('<span></span>')
                    .appendTo(obj)
                    .addClass('circle-info-half')
                    .css(
                        'line-height', (customSettingsObj.dimension * factor) + 'px'
                    )
                    .text(info);
            }

            /**
             * checks which data attributes are defined
             * @param obj
             */
            function checkDataAttributes(obj) {
                $.each(customSettings, function (index, attribute) {
                    if (obj.data(attribute) != undefined) {
                        customSettingsObj[attribute] = obj.data(attribute);
                    } else {
                        customSettingsObj[attribute] = $(settings).attr(attribute);
                    }

                    if (attribute == 'fill' && obj.data('fill') != undefined) {
                        fill = true;
                    }
                });
            }

            /**
             * animate foreground circle
             * @param current
             */
            function animate(current) {

                context.clearRect(0, 0, canvas.width, canvas.height);

                context.beginPath();
                context.arc(x, y, radius, endAngle, startAngle, false);

                context.lineWidth = customSettingsObj.width + 1;

                context.strokeStyle = customSettingsObj.bgcolor;
                context.stroke();

                if (fill) {
                    context.fillStyle = customSettingsObj.fill;
                    context.fill();
                }

                context.beginPath();
                context.arc(x, y, radius, -(quart) + additionalAngelPI, ((circ) * current) - quart + additionalAngelPI, false);

                if (customSettingsObj.border == 'outline') {
                    context.lineWidth = customSettingsObj.width + customSettingsObj.bordersize;
                } else if (customSettingsObj.border == 'inline') {
                    context.lineWidth = customSettingsObj.width - customSettingsObj.bordersize;
                }

                context.strokeStyle = customSettingsObj.fgcolor;
                context.stroke();

                if (curPerc < endPercent) {
                    curPerc += curStep;
                    requestAnimationFrame(function () {
                        animate(Math.min(curPerc, endPercent) / 100);
                    }, obj);
                }

                if (curPerc == endPercent && fireCallback && typeof(options) != "undefined") {
                    if ($.isFunction(options.complete)) {
                        options.complete();

                        fireCallback = false;
                    }
                }
            }

            animate(curPerc / 100);

        });
    };
}(jQuery));


/*! noUiSlider - 7.0.10 - 2014-12-27 14:50:47 */

!function(){"use strict";function a(a){return a.split("").reverse().join("")}function b(a,b){return a.substring(0,b.length)===b}function c(a,b){return a.slice(-1*b.length)===b}function d(a,b,c){if((a[b]||a[c])&&a[b]===a[c])throw new Error(b)}function e(a){return"number"==typeof a&&isFinite(a)}function f(a,b){var c=Math.pow(10,b);return(Math.round(a*c)/c).toFixed(b)}function g(b,c,d,g,h,i,j,k,l,m,n,o){var p,q,r,s=o,t="",u="";return i&&(o=i(o)),e(o)?(b!==!1&&0===parseFloat(o.toFixed(b))&&(o=0),0>o&&(p=!0,o=Math.abs(o)),b!==!1&&(o=f(o,b)),o=o.toString(),-1!==o.indexOf(".")?(q=o.split("."),r=q[0],d&&(t=d+q[1])):r=o,c&&(r=a(r).match(/.{1,3}/g),r=a(r.join(a(c)))),p&&k&&(u+=k),g&&(u+=g),p&&l&&(u+=l),u+=r,u+=t,h&&(u+=h),m&&(u=m(u,s)),u):!1}function h(a,d,f,g,h,i,j,k,l,m,n,o){var p,q="";return n&&(o=n(o)),o&&"string"==typeof o?(k&&b(o,k)&&(o=o.replace(k,""),p=!0),g&&b(o,g)&&(o=o.replace(g,"")),l&&b(o,l)&&(o=o.replace(l,""),p=!0),h&&c(o,h)&&(o=o.slice(0,-1*h.length)),d&&(o=o.split(d).join("")),f&&(o=o.replace(f,".")),p&&(q+="-"),q+=o,q=q.replace(/[^0-9\.\-.]/g,""),""===q?!1:(q=Number(q),j&&(q=j(q)),e(q)?q:!1)):!1}function i(a){var b,c,e,f={};for(b=0;b<l.length;b+=1)if(c=l[b],e=a[c],void 0===e)f[c]="negative"!==c||f.negativeBefore?"mark"===c&&"."!==f.thousand?".":!1:"-";else if("decimals"===c){if(!(e>=0&&8>e))throw new Error(c);f[c]=e}else if("encoder"===c||"decoder"===c||"edit"===c||"undo"===c){if("function"!=typeof e)throw new Error(c);f[c]=e}else{if("string"!=typeof e)throw new Error(c);f[c]=e}return d(f,"mark","thousand"),d(f,"prefix","negative"),d(f,"prefix","negativeBefore"),f}function j(a,b,c){var d,e=[];for(d=0;d<l.length;d+=1)e.push(a[l[d]]);return e.push(c),b.apply("",e)}function k(a){return this instanceof k?void("object"==typeof a&&(a=i(a),this.to=function(b){return j(a,g,b)},this.from=function(b){return j(a,h,b)})):new k(a)}var l=["decimals","thousand","mark","prefix","postfix","encoder","decoder","negativeBefore","negative","edit","undo"];window.wNumb=k}(),function(a){"use strict";function b(b){return b instanceof a||a.zepto&&a.zepto.isZ(b)}function c(b,c){return"string"==typeof b&&0===b.indexOf("-inline-")?(this.method=c||"html",this.target=this.el=a(b.replace("-inline-","")||"<div/>"),!0):void 0}function d(b){if("string"==typeof b&&0!==b.indexOf("-")){this.method="val";var c=document.createElement("input");return c.name=b,c.type="hidden",this.target=this.el=a(c),!0}}function e(a){return"function"==typeof a?(this.target=!1,this.method=a,!0):void 0}function f(a,c){return b(a)&&!c?(a.is("input, select, textarea")?(this.method="val",this.target=a.on("change.liblink",this.changeHandler)):(this.target=a,this.method="html"),!0):void 0}function g(a,c){return b(a)&&("function"==typeof c||"string"==typeof c&&a[c])?(this.method=c,this.target=a,!0):void 0}function h(b,c,d){var e=this,f=!1;if(this.changeHandler=function(b){var c=e.formatInstance.from(a(this).val());return c===!1||isNaN(c)?(a(this).val(e.lastSetValue),!1):void e.changeHandlerMethod.call("",b,c)},this.el=!1,this.formatInstance=d,a.each(k,function(a,d){return f=d.call(e,b,c),!f}),!f)throw new RangeError("(Link) Invalid Link.")}function i(a){this.items=[],this.elements=[],this.origin=a}function j(b,c,d,e){0===b&&(b=this.LinkDefaultFlag),this.linkAPI||(this.linkAPI={}),this.linkAPI[b]||(this.linkAPI[b]=new i(this));var f=new h(c,d,e||this.LinkDefaultFormatter);f.target||(f.target=a(this)),f.changeHandlerMethod=this.LinkConfirm(b,f.el),this.linkAPI[b].push(f,f.el),this.LinkUpdate(b)}var k=[c,d,e,f,g];h.prototype.set=function(a){var b=Array.prototype.slice.call(arguments),c=b.slice(1);this.lastSetValue=this.formatInstance.to(a),c.unshift(this.lastSetValue),("function"==typeof this.method?this.method:this.target[this.method]).apply(this.target,c)},i.prototype.push=function(a,b){this.items.push(a),b&&this.elements.push(b)},i.prototype.reconfirm=function(a){var b;for(b=0;b<this.elements.length;b+=1)this.origin.LinkConfirm(a,this.elements[b])},i.prototype.remove=function(){var a;for(a=0;a<this.items.length;a+=1)this.items[a].target.off(".liblink");for(a=0;a<this.elements.length;a+=1)this.elements[a].remove()},i.prototype.change=function(a){if(this.origin.LinkIsEmitting)return!1;this.origin.LinkIsEmitting=!0;var b,c=Array.prototype.slice.call(arguments,1);for(c.unshift(a),b=0;b<this.items.length;b+=1)this.items[b].set.apply(this.items[b],c);this.origin.LinkIsEmitting=!1},a.fn.Link=function(b){var c=this;if(b===!1)return c.each(function(){this.linkAPI&&(a.map(this.linkAPI,function(a){a.remove()}),delete this.linkAPI)});if(void 0===b)b=0;else if("string"!=typeof b)throw new Error("Flag must be string.");return{to:function(a,d,e){return c.each(function(){j.call(this,b,a,d,e)})}}}}(window.jQuery||window.Zepto),function(a){"use strict";function b(b){return a.grep(b,function(c,d){return d===a.inArray(c,b)})}function c(a,b){return Math.round(a/b)*b}function d(a){return"number"==typeof a&&!isNaN(a)&&isFinite(a)}function e(a){var b=Math.pow(10,7);return Number((Math.round(a*b)/b).toFixed(7))}function f(a,b,c){a.addClass(b),setTimeout(function(){a.removeClass(b)},c)}function g(a){return Math.max(Math.min(a,100),0)}function h(b){return a.isArray(b)?b:[b]}function i(a){var b=a.split(".");return b.length>1?b[1].length:0}function j(a,b){return 100/(b-a)}function k(a,b){return 100*b/(a[1]-a[0])}function l(a,b){return k(a,a[0]<0?b+Math.abs(a[0]):b-a[0])}function m(a,b){return b*(a[1]-a[0])/100+a[0]}function n(a,b){for(var c=1;a>=b[c];)c+=1;return c}function o(a,b,c){if(c>=a.slice(-1)[0])return 100;var d,e,f,g,h=n(c,a);return d=a[h-1],e=a[h],f=b[h-1],g=b[h],f+l([d,e],c)/j(f,g)}function p(a,b,c){if(c>=100)return a.slice(-1)[0];var d,e,f,g,h=n(c,b);return d=a[h-1],e=a[h],f=b[h-1],g=b[h],m([d,e],(c-f)*j(f,g))}function q(a,b,d,e){if(100===e)return e;var f,g,h=n(e,a);return d?(f=a[h-1],g=a[h],e-f>(g-f)/2?g:f):b[h-1]?a[h-1]+c(e-a[h-1],b[h-1]):e}function r(a,b,c){var e;if("number"==typeof b&&(b=[b]),"[object Array]"!==Object.prototype.toString.call(b))throw new Error("noUiSlider: 'range' contains invalid value.");if(e="min"===a?0:"max"===a?100:parseFloat(a),!d(e)||!d(b[0]))throw new Error("noUiSlider: 'range' value isn't numeric.");c.xPct.push(e),c.xVal.push(b[0]),e?c.xSteps.push(isNaN(b[1])?!1:b[1]):isNaN(b[1])||(c.xSteps[0]=b[1])}function s(a,b,c){return b?void(c.xSteps[a]=k([c.xVal[a],c.xVal[a+1]],b)/j(c.xPct[a],c.xPct[a+1])):!0}function t(a,b,c,d){this.xPct=[],this.xVal=[],this.xSteps=[d||!1],this.xNumSteps=[!1],this.snap=b,this.direction=c;var e,f=[];for(e in a)a.hasOwnProperty(e)&&f.push([a[e],e]);for(f.sort(function(a,b){return a[0]-b[0]}),e=0;e<f.length;e++)r(f[e][1],f[e][0],this);for(this.xNumSteps=this.xSteps.slice(0),e=0;e<this.xNumSteps.length;e++)s(e,this.xNumSteps[e],this)}function u(a,b){if(!d(b))throw new Error("noUiSlider: 'step' is not numeric.");a.singleStep=b}function v(b,c){if("object"!=typeof c||a.isArray(c))throw new Error("noUiSlider: 'range' is not an object.");if(void 0===c.min||void 0===c.max)throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");b.spectrum=new t(c,b.snap,b.dir,b.singleStep)}function w(b,c){if(c=h(c),!a.isArray(c)||!c.length||c.length>2)throw new Error("noUiSlider: 'start' option is incorrect.");b.handles=c.length,b.start=c}function x(a,b){if(a.snap=b,"boolean"!=typeof b)throw new Error("noUiSlider: 'snap' option must be a boolean.")}function y(a,b){if(a.animate=b,"boolean"!=typeof b)throw new Error("noUiSlider: 'animate' option must be a boolean.")}function z(a,b){if("lower"===b&&1===a.handles)a.connect=1;else if("upper"===b&&1===a.handles)a.connect=2;else if(b===!0&&2===a.handles)a.connect=3;else{if(b!==!1)throw new Error("noUiSlider: 'connect' option doesn't match handle count.");a.connect=0}}function A(a,b){switch(b){case"horizontal":a.ort=0;break;case"vertical":a.ort=1;break;default:throw new Error("noUiSlider: 'orientation' option is invalid.")}}function B(a,b){if(!d(b))throw new Error("noUiSlider: 'margin' option must be numeric.");if(a.margin=a.spectrum.getMargin(b),!a.margin)throw new Error("noUiSlider: 'margin' option is only supported on linear sliders.")}function C(a,b){if(!d(b))throw new Error("noUiSlider: 'limit' option must be numeric.");if(a.limit=a.spectrum.getMargin(b),!a.limit)throw new Error("noUiSlider: 'limit' option is only supported on linear sliders.")}function D(a,b){switch(b){case"ltr":a.dir=0;break;case"rtl":a.dir=1,a.connect=[0,2,1,3][a.connect];break;default:throw new Error("noUiSlider: 'direction' option was not recognized.")}}function E(a,b){if("string"!=typeof b)throw new Error("noUiSlider: 'behaviour' must be a string containing options.");var c=b.indexOf("tap")>=0,d=b.indexOf("drag")>=0,e=b.indexOf("fixed")>=0,f=b.indexOf("snap")>=0;a.events={tap:c||f,drag:d,fixed:e,snap:f}}function F(a,b){if(a.format=b,"function"==typeof b.to&&"function"==typeof b.from)return!0;throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.")}function G(b){var c,d={margin:0,limit:0,animate:!0,format:Z};return c={step:{r:!1,t:u},start:{r:!0,t:w},connect:{r:!0,t:z},direction:{r:!0,t:D},snap:{r:!1,t:x},animate:{r:!1,t:y},range:{r:!0,t:v},orientation:{r:!1,t:A},margin:{r:!1,t:B},limit:{r:!1,t:C},behaviour:{r:!0,t:E},format:{r:!1,t:F}},b=a.extend({connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal"},b),a.each(c,function(a,c){if(void 0===b[a]){if(c.r)throw new Error("noUiSlider: '"+a+"' is required.");return!0}c.t(d,b[a])}),d.style=d.ort?"top":"left",d}function H(a,b,c){var d=a+b[0],e=a+b[1];return c?(0>d&&(e+=Math.abs(d)),e>100&&(d-=e-100),[g(d),g(e)]):[d,e]}function I(a){a.preventDefault();var b,c,d=0===a.type.indexOf("touch"),e=0===a.type.indexOf("mouse"),f=0===a.type.indexOf("pointer"),g=a;return 0===a.type.indexOf("MSPointer")&&(f=!0),a.originalEvent&&(a=a.originalEvent),d&&(b=a.changedTouches[0].pageX,c=a.changedTouches[0].pageY),(e||f)&&(f||void 0!==window.pageXOffset||(window.pageXOffset=document.documentElement.scrollLeft,window.pageYOffset=document.documentElement.scrollTop),b=a.clientX+window.pageXOffset,c=a.clientY+window.pageYOffset),g.points=[b,c],g.cursor=e,g}function J(b,c){var d=a("<div><div/></div>").addClass(Y[2]),e=["-lower","-upper"];return b&&e.reverse(),d.children().addClass(Y[3]+" "+Y[3]+e[c]),d}function K(a,b,c){switch(a){case 1:b.addClass(Y[7]),c[0].addClass(Y[6]);break;case 3:c[1].addClass(Y[6]);case 2:c[0].addClass(Y[7]);case 0:b.addClass(Y[6])}}function L(a,b,c){var d,e=[];for(d=0;a>d;d+=1)e.push(J(b,d).appendTo(c));return e}function M(b,c,d){return d.addClass([Y[0],Y[8+b],Y[4+c]].join(" ")),a("<div/>").appendTo(d).addClass(Y[1])}function N(b,c,d){function e(){return C[["width","height"][c.ort]]()}function j(a){var b,c=[E.val()];for(b=0;b<a.length;b+=1)E.trigger(a[b],c)}function k(a){return 1===a.length?a[0]:c.dir?a.reverse():a}function l(a){return function(b,c){E.val([a?null:c,a?c:null],!0)}}function m(b){var c=a.inArray(b,N);E[0].linkAPI&&E[0].linkAPI[b]&&E[0].linkAPI[b].change(J[c],D[c].children(),E)}function n(b,d){var e=a.inArray(b,N);return d&&d.appendTo(D[e].children()),c.dir&&c.handles>1&&(e=1===e?0:1),l(e)}function o(){var a,b;for(a=0;a<N.length;a+=1)this.linkAPI&&this.linkAPI[b=N[a]]&&this.linkAPI[b].reconfirm(b)}function p(a,b,d,e){return a=a.replace(/\s/g,W+" ")+W,b.on(a,function(a){return E.attr("disabled")?!1:E.hasClass(Y[14])?!1:(a=I(a),a.calcPoint=a.points[c.ort],void d(a,e))})}function q(a,b){var c,d=b.handles||D,f=!1,g=100*(a.calcPoint-b.start)/e(),h=d[0][0]!==D[0][0]?1:0;c=H(g,b.positions,d.length>1),f=v(d[0],c[h],1===d.length),d.length>1&&(f=v(d[1],c[h?0:1],!1)||f),f&&j(["slide"])}function r(b){a("."+Y[15]).removeClass(Y[15]),b.cursor&&a("body").css("cursor","").off(W),U.off(W),E.removeClass(Y[12]),j(["set","change"])}function s(b,c){1===c.handles.length&&c.handles[0].children().addClass(Y[15]),b.stopPropagation(),p(X.move,U,q,{start:b.calcPoint,handles:c.handles,positions:[F[0],F[D.length-1]]}),p(X.end,U,r,null),b.cursor&&(a("body").css("cursor",a(b.target).css("cursor")),D.length>1&&E.addClass(Y[12]),a("body").on("selectstart"+W,!1))}function t(b){var d,g=b.calcPoint,h=0;b.stopPropagation(),a.each(D,function(){h+=this.offset()[c.style]}),h=h/2>g||1===D.length?0:1,g-=C.offset()[c.style],d=100*g/e(),c.events.snap||f(E,Y[14],300),v(D[h],d),j(["slide","set","change"]),c.events.snap&&s(b,{handles:[D[h]]})}function u(a){var b,c;if(!a.fixed)for(b=0;b<D.length;b+=1)p(X.start,D[b].children(),s,{handles:[D[b]]});a.tap&&p(X.start,C,t,{handles:D}),a.drag&&(c=C.find("."+Y[7]).addClass(Y[10]),a.fixed&&(c=c.add(C.children().not(c).children())),p(X.start,c,s,{handles:D}))}function v(a,b,d){var e=a[0]!==D[0][0]?1:0,f=F[0]+c.margin,h=F[1]-c.margin,i=F[0]+c.limit,j=F[1]-c.limit;return D.length>1&&(b=e?Math.max(b,f):Math.min(b,h)),d!==!1&&c.limit&&D.length>1&&(b=e?Math.min(b,i):Math.max(b,j)),b=G.getStep(b),b=g(parseFloat(b.toFixed(7))),b===F[e]?!1:(a.css(c.style,b+"%"),a.is(":first-child")&&a.toggleClass(Y[17],b>50),F[e]=b,J[e]=G.fromStepping(b),m(N[e]),!0)}function w(a,b){var d,e,f;for(c.limit&&(a+=1),d=0;a>d;d+=1)e=d%2,f=b[e],null!==f&&f!==!1&&("number"==typeof f&&(f=String(f)),f=c.format.from(f),(f===!1||isNaN(f)||v(D[e],G.toStepping(f),d===3-c.dir)===!1)&&m(N[e]))}function x(a){if(E[0].LinkIsEmitting)return this;var b,d=h(a);return c.dir&&c.handles>1&&d.reverse(),c.animate&&-1!==F[0]&&f(E,Y[14],300),b=D.length>1?3:1,1===d.length&&(b=1),w(b,d),j(["set"]),this}function y(){var a,b=[];for(a=0;a<c.handles;a+=1)b[a]=c.format.to(J[a]);return k(b)}function z(){return a(this).off(W).removeClass(Y.join(" ")).empty(),delete this.LinkUpdate,delete this.LinkConfirm,delete this.LinkDefaultFormatter,delete this.LinkDefaultFlag,delete this.reappend,delete this.vGet,delete this.vSet,delete this.getCurrentStep,delete this.getInfo,delete this.destroy,d}function A(){var b=a.map(F,function(a,b){var c=G.getApplicableStep(a),d=i(String(c[2])),e=J[b],f=100===a?null:c[2],g=Number((e-c[2]).toFixed(d)),h=0===a?null:g>=c[1]?c[2]:c[0]||!1;return[[h,f]]});return k(b)}function B(){return d}var C,D,E=a(b),F=[-1,-1],G=c.spectrum,J=[],N=["lower","upper"].slice(0,c.handles);if(c.dir&&N.reverse(),b.LinkUpdate=m,b.LinkConfirm=n,b.LinkDefaultFormatter=c.format,b.LinkDefaultFlag="lower",b.reappend=o,E.hasClass(Y[0]))throw new Error("Slider was already initialized.");C=M(c.dir,c.ort,E),D=L(c.handles,c.dir,C),K(c.connect,E,D),u(c.events),b.vSet=x,b.vGet=y,b.destroy=z,b.getCurrentStep=A,b.getOriginalOptions=B,b.getInfo=function(){return[G,c.style,c.ort]},E.val(c.start)}function O(a){var b=G(a,this);return this.each(function(){N(this,b,a)})}function P(b){return this.each(function(){if(!this.destroy)return void a(this).noUiSlider(b);var c=a(this).val(),d=this.destroy(),e=a.extend({},d,b);a(this).noUiSlider(e),this.reappend(),d.start===e.start&&a(this).val(c)})}function Q(){return this[0][arguments.length?"vSet":"vGet"].apply(this[0],arguments)}function R(b,c,d,e){if("range"===c||"steps"===c)return b.xVal;if("count"===c){var f,g=100/(d-1),h=0;for(d=[];(f=h++*g)<=100;)d.push(f);c="positions"}return"positions"===c?a.map(d,function(a){return b.fromStepping(e?b.getStep(a):a)}):"values"===c?e?a.map(d,function(a){return b.fromStepping(b.getStep(b.toStepping(a)))}):d:void 0}function S(c,d,e,f){var g=c.direction,h={},i=c.xVal[0],j=c.xVal[c.xVal.length-1],k=!1,l=!1,m=0;return c.direction=0,f=b(f.slice().sort(function(a,b){return a-b})),f[0]!==i&&(f.unshift(i),k=!0),f[f.length-1]!==j&&(f.push(j),l=!0),a.each(f,function(b){var g,i,j,n,o,p,q,r,s,t,u=f[b],v=f[b+1];if("steps"===e&&(g=c.xNumSteps[b]),g||(g=v-u),u!==!1&&void 0!==v)for(i=u;v>=i;i+=g){for(n=c.toStepping(i),o=n-m,r=o/d,s=Math.round(r),t=o/s,j=1;s>=j;j+=1)p=m+j*t,h[p.toFixed(5)]=["x",0];q=a.inArray(i,f)>-1?1:"steps"===e?2:0,!b&&k&&(q=0),i===v&&l||(h[n.toFixed(5)]=[i,q]),m=n}}),c.direction=g,h}function T(b,c,d,e,f,g){function h(a){return["-normal","-large","-sub"][a]}function i(a,c,d){return'class="'+c+" "+c+"-"+k+" "+c+h(d[1],d[0])+'" style="'+b+": "+a+'%"'}function j(a,b){d&&(a=100-a),b[1]=b[1]&&f?f(b[0],b[1]):b[1],l.append("<div "+i(a,"noUi-marker",b)+"></div>"),b[1]&&l.append("<div "+i(a,"noUi-value",b)+">"+g.to(b[0])+"</div>")}var k=["horizontal","vertical"][c],l=a("<div/>");return l.addClass("noUi-pips noUi-pips-"+k),a.each(e,j),l}var U=a(document),V=a.fn.val,W=".nui",X=window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"},Y=["noUi-target","noUi-base","noUi-origin","noUi-handle","noUi-horizontal","noUi-vertical","noUi-background","noUi-connect","noUi-ltr","noUi-rtl","noUi-dragable","","noUi-state-drag","","noUi-state-tap","noUi-active","","noUi-stacking"];t.prototype.getMargin=function(a){return 2===this.xPct.length?k(this.xVal,a):!1},t.prototype.toStepping=function(a){return a=o(this.xVal,this.xPct,a),this.direction&&(a=100-a),a},t.prototype.fromStepping=function(a){return this.direction&&(a=100-a),e(p(this.xVal,this.xPct,a))},t.prototype.getStep=function(a){return this.direction&&(a=100-a),a=q(this.xPct,this.xSteps,this.snap,a),this.direction&&(a=100-a),a},t.prototype.getApplicableStep=function(a){var b=n(a,this.xPct),c=100===a?2:1;return[this.xNumSteps[b-2],this.xVal[b-c],this.xNumSteps[b-c]]},t.prototype.convert=function(a){return this.getStep(this.toStepping(a))};var Z={to:function(a){return a.toFixed(2)},from:Number};a.fn.val=function(b){function c(a){return a.hasClass(Y[0])?Q:V}if(!arguments.length){var d=a(this[0]);return c(d).call(d)}var e=a.isFunction(b);return this.each(function(d){var f=b,g=a(this);e&&(f=b.call(this,d,g.val())),c(g).call(g,f)})},a.fn.noUiSlider=function(a,b){switch(a){case"step":return this[0].getCurrentStep();case"options":return this[0].getOriginalOptions()}return(b?P:O).call(this,a)},a.fn.noUiSlider_pips=function(b){var c=b.mode,d=b.density||1,e=b.filter||!1,f=b.values||!1,g=b.format||{to:Math.round},h=b.stepped||!1;return this.each(function(){var b=this.getInfo(),i=R(b[0],c,f,h),j=S(b[0],d,c,i);return a(this).append(T(b[1],b[2],b[0].direction,j,e,g))})}}(window.jQuery||window.Zepto);


/* Custom Select Box */
/*
 * jQuery Selectbox plugin 0.2
 *
 * Copyright 2011-2012, Dimitar Ivanov (http://www.bulgaria-web-developers.com/projects/javascript/selectbox/)
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
 * 
 * Date: Tue Jul 17 19:58:36 2012 +0300
 */
(function($,undefined){var PROP_NAME="selectbox",FALSE=false,TRUE=true;function Selectbox(){this._state=[];this._defaults={classHolder:"sbHolder",classHolderDisabled:"sbHolderDisabled",classSelector:"sbSelector",classOptions:"sbOptions",classGroup:"sbGroup",classSub:"sbSub",classDisabled:"sbDisabled",classToggleOpen:"sbToggleOpen",classToggle:"sbToggle",classFocus:"sbFocus",speed:200,effect:"slide",onChange:null,onOpen:null,onClose:null}}$.extend(Selectbox.prototype,{_isOpenSelectbox:function(target){if(!target){return FALSE}var inst=this._getInst(target);return inst.isOpen},_isDisabledSelectbox:function(target){if(!target){return FALSE}var inst=this._getInst(target);return inst.isDisabled},_attachSelectbox:function(target,settings){if(this._getInst(target)){return FALSE}var $target=$(target),self=this,inst=self._newInst($target),sbHolder,sbSelector,sbToggle,sbOptions,s=FALSE,optGroup=$target.find("optgroup"),opts=$target.find("option"),olen=opts.length;$target.attr("sb",inst.uid);$.extend(inst.settings,self._defaults,settings);self._state[inst.uid]=FALSE;$target.hide();function closeOthers(){var key,sel,uid=this.attr("id").split("_")[1];for(key in self._state){if(key!==uid){if(self._state.hasOwnProperty(key)){sel=$("select[sb='"+key+"']")[0];if(sel){self._closeSelectbox(sel)}}}}}sbHolder=$("<div>",{id:"sbHolder_"+inst.uid,"class":inst.settings.classHolder,tabindex:$target.attr("tabindex")});sbSelector=$("<a>",{id:"sbSelector_"+inst.uid,href:"#","class":inst.settings.classSelector,click:function(e){e.preventDefault();closeOthers.apply($(this),[]);var uid=$(this).attr("id").split("_")[1];if(self._state[uid]){self._closeSelectbox(target)}else{self._openSelectbox(target)}}});sbToggle=$("<a>",{id:"sbToggle_"+inst.uid,href:"#","class":inst.settings.classToggle,click:function(e){e.preventDefault();closeOthers.apply($(this),[]);var uid=$(this).attr("id").split("_")[1];if(self._state[uid]){self._closeSelectbox(target)}else{self._openSelectbox(target)}}});sbToggle.appendTo(sbHolder);sbOptions=$("<ul>",{id:"sbOptions_"+inst.uid,"class":inst.settings.classOptions,css:{display:"none"}});$target.children().each(function(i){var that=$(this),li,config={};if(that.is("option")){getOptions(that)}else{if(that.is("optgroup")){li=$("<li>");$("<span>",{text:that.attr("label")}).addClass(inst.settings.classGroup).appendTo(li);li.appendTo(sbOptions);if(that.is(":disabled")){config.disabled=true}config.sub=true;getOptions(that.find("option"),config)}}});function getOptions(){var sub=arguments[1]&&arguments[1].sub?true:false,disabled=arguments[1]&&arguments[1].disabled?true:false;arguments[0].each(function(i){var that=$(this),li=$("<li>"),child;if(that.is(":selected")){sbSelector.text(that.text());s=TRUE}if(i===olen-1){li.addClass("last")}if(!that.is(":disabled")&&!disabled){child=$("<a>",{href:"#"+that.val(),rel:that.val()}).text(that.text()).bind("click.sb",function(e){if(e&&e.preventDefault){e.preventDefault()}var t=sbToggle,$this=$(this),uid=t.attr("id").split("_")[1];self._changeSelectbox(target,$this.attr("rel"),$this.text());self._closeSelectbox(target)}).bind("mouseover.sb",function(){var $this=$(this);$this.parent().siblings().find("a").removeClass(inst.settings.classFocus);$this.addClass(inst.settings.classFocus)}).bind("mouseout.sb",function(){$(this).removeClass(inst.settings.classFocus)});if(sub){child.addClass(inst.settings.classSub)}if(that.is(":selected")){child.addClass(inst.settings.classFocus)}child.appendTo(li)}else{child=$("<span>",{text:that.text()}).addClass(inst.settings.classDisabled);if(sub){child.addClass(inst.settings.classSub)}child.appendTo(li)}li.appendTo(sbOptions)})}if(!s){sbSelector.text(opts.first().text())}$.data(target,PROP_NAME,inst);sbHolder.data("uid",inst.uid).bind("keydown.sb",function(e){var key=e.charCode?e.charCode:e.keyCode?e.keyCode:0,$this=$(this),uid=$this.data("uid"),inst=$this.siblings("select[sb='"+uid+"']").data(PROP_NAME),trgt=$this.siblings(["select[sb='",uid,"']"].join("")).get(0),$f=$this.find("ul").find("a."+inst.settings.classFocus);switch(key){case 37:case 38:if($f.length>0){var $next;$("a",$this).removeClass(inst.settings.classFocus);$next=$f.parent().prevAll("li:has(a)").eq(0).find("a");if($next.length>0){$next.addClass(inst.settings.classFocus).focus();$("#sbSelector_"+uid).text($next.text())}}break;case 39:case 40:var $next;$("a",$this).removeClass(inst.settings.classFocus);if($f.length>0){$next=$f.parent().nextAll("li:has(a)").eq(0).find("a")}else{$next=$this.find("ul").find("a").eq(0)}if($next.length>0){$next.addClass(inst.settings.classFocus).focus();$("#sbSelector_"+uid).text($next.text())}break;case 13:if($f.length>0){self._changeSelectbox(trgt,$f.attr("rel"),$f.text())}self._closeSelectbox(trgt);break;case 9:if(trgt){var inst=self._getInst(trgt);if(inst){if($f.length>0){self._changeSelectbox(trgt,$f.attr("rel"),$f.text())}self._closeSelectbox(trgt)}}var i=parseInt($this.attr("tabindex"),10);if(!e.shiftKey){i++}else{i--}$("*[tabindex='"+i+"']").focus();break;case 27:self._closeSelectbox(trgt);break}e.stopPropagation();return false}).delegate("a","mouseover",function(e){$(this).addClass(inst.settings.classFocus)}).delegate("a","mouseout",function(e){$(this).removeClass(inst.settings.classFocus)});sbSelector.appendTo(sbHolder);sbOptions.appendTo(sbHolder);sbHolder.insertAfter($target);$("html").on("mousedown",function(e){e.stopPropagation();$("select").selectbox("close")});$([".",inst.settings.classHolder,", .",inst.settings.classSelector].join("")).mousedown(function(e){e.stopPropagation()})},_detachSelectbox:function(target){var inst=this._getInst(target);if(!inst){return FALSE}$("#sbHolder_"+inst.uid).remove();$.data(target,PROP_NAME,null);$(target).show()},_changeSelectbox:function(target,value,text){var onChange,inst=this._getInst(target);if(inst){onChange=this._get(inst,"onChange");$("#sbSelector_"+inst.uid).text(text)}value=value.replace(/\'/g,"\\'");$(target).find("option[value='"+value+"']").attr("selected",TRUE);if(inst&&onChange){onChange.apply((inst.input?inst.input[0]:null),[value,inst])}else{if(inst&&inst.input){inst.input.trigger("change")}}},_enableSelectbox:function(target){var inst=this._getInst(target);if(!inst||!inst.isDisabled){return FALSE}$("#sbHolder_"+inst.uid).removeClass(inst.settings.classHolderDisabled);inst.isDisabled=FALSE;$.data(target,PROP_NAME,inst)},_disableSelectbox:function(target){var inst=this._getInst(target);if(!inst||inst.isDisabled){return FALSE}$("#sbHolder_"+inst.uid).addClass(inst.settings.classHolderDisabled);inst.isDisabled=TRUE;$.data(target,PROP_NAME,inst)},_optionSelectbox:function(target,name,value){var inst=this._getInst(target);if(!inst){return FALSE}inst[name]=value;$.data(target,PROP_NAME,inst)},_openSelectbox:function(target){var inst=this._getInst(target);if(!inst||inst.isOpen||inst.isDisabled){return }var el=$("#sbOptions_"+inst.uid),viewportHeight=parseInt($(window).height(),10),offset=$("#sbHolder_"+inst.uid).offset(),scrollTop=$(window).scrollTop(),height=el.prev().height(),diff=viewportHeight-(offset.top-scrollTop)-height/2,onOpen=this._get(inst,"onOpen");el.css({top:height+"px",maxHeight:(diff-height)+"px"});inst.settings.effect==="fade"?el.fadeIn(inst.settings.speed):el.slideDown(inst.settings.speed);$("#sbToggle_"+inst.uid).addClass(inst.settings.classToggleOpen);this._state[inst.uid]=TRUE;inst.isOpen=TRUE;if(onOpen){onOpen.apply((inst.input?inst.input[0]:null),[inst])}$.data(target,PROP_NAME,inst)},_closeSelectbox:function(target){var inst=this._getInst(target);if(!inst||!inst.isOpen){return }var onClose=this._get(inst,"onClose");inst.settings.effect==="fade"?$("#sbOptions_"+inst.uid).fadeOut(inst.settings.speed):$("#sbOptions_"+inst.uid).slideUp(inst.settings.speed);$("#sbToggle_"+inst.uid).removeClass(inst.settings.classToggleOpen);this._state[inst.uid]=FALSE;inst.isOpen=FALSE;if(onClose){onClose.apply((inst.input?inst.input[0]:null),[inst])}$.data(target,PROP_NAME,inst)},_newInst:function(target){var id=target[0].id.replace(/([^A-Za-z0-9_-])/g,"\\\\$1");return{id:id,input:target,uid:Math.floor(Math.random()*99999999),isOpen:FALSE,isDisabled:FALSE,settings:{}}},_getInst:function(target){try{return $.data(target,PROP_NAME)}catch(err){throw"Missing instance data for this selectbox"}},_get:function(inst,name){return inst.settings[name]!==undefined?inst.settings[name]:this._defaults[name]}});$.fn.selectbox=function(options){var otherArgs=Array.prototype.slice.call(arguments,1);if(typeof options=="string"&&options=="isDisabled"){return $.selectbox["_"+options+"Selectbox"].apply($.selectbox,[this[0]].concat(otherArgs))}if(options=="option"&&arguments.length==2&&typeof arguments[1]=="string"){return $.selectbox["_"+options+"Selectbox"].apply($.selectbox,[this[0]].concat(otherArgs))}return this.each(function(){typeof options=="string"?$.selectbox["_"+options+"Selectbox"].apply($.selectbox,[this].concat(otherArgs)):$.selectbox._attachSelectbox(this,options)})};$.selectbox=new Selectbox();$.selectbox.version="0.2"})(jQuery);


/**********************************
* jCounter Script v0.1.4 (beta)
* Author: Catalin Berta
* Official page and documentation: http://devingredients.com/jcounter
* Licensed under the MIT license
**********************************/
;(function($,document,window,undefined) {
	//once upon a time...
	$.fn.jCounter = function(options,callback) {
		var jCounterDirection = 'down'; // points out whether it should count down or up | handled via customRange setting
		
		var customRangeDownCount; //if true, it will tell countdown_proc() it's a down count and not an up count
		var days,hours,minutes,seconds;
		var endCounter = false; //stops jCounter if true
		var eventDate; //time target (holds a number of seconds)
		var pausedTime; //stores the time (in seconds) when pausing
		var thisEl = this; //custom 'this' selector
		var thisLength = this.length; //number of multiple elements per selector

		var pluralLabels = new Array('DAYS','HOURS','MINUTES','SECONDS'); //plural labels - used for localization
		var singularLabels = new Array('DAY','HOUR','MINUTE','SECOND');	//singular labels - used for localization

		this.options = options; //stores jCounter's options parameter to verify against specified methods
		this.version = '0.1.4';

		//default settings
		var settings = {
			animation: null,
			callback: null,
			customDuration: null,
			customRange: null,
			date: null,
			debugLog: false,
			serverDateSource: 'dateandtime.php', //path to dateandtime.php file (i.e. http://my-domain.com/dateandtime.php)
			format: 'dd:hh:mm:ss',
			timezone: 'Europe/London',
			twoDigits: 'on'
		};

		//merge the settings with the options values
		if (typeof options === 'object') {
			$.extend(settings,options);
			thisEl.data("userOptions", settings); //push the settings to applied elements (they're used by methods)
		}

		if(thisEl.data('userOptions').debugLog == true &&  window['console'] !== undefined ) {
			var consoleLog = true;	//shows debug messages via console.log() if true
		}

		//METHODS
		var jC_methods = {
			//initialize
			init : function() {
				thisEl.each(function(i,el) {
					initCounter(el);
				});
			},
			//pause method: $.jCounter('pause')
			pause : function() {
				if(consoleLog) { console.log("(jC) Activity: Counter paused."); }
				endCounter = true;
				return thisEl.each(function(i,el) {
					clearInterval($(el).data("jC_interval"));
				});
			},
			//stop method: $.jCounter('stop')
			stop : function() {
				if(consoleLog) { console.log("(jC) Activity: Counter stopped."); }
				endCounter = true;
				return thisEl.each(function(i,el) {
					clearInterval($(el).data("jC_interval"));
					$(el).removeData("jC_pausedTime");
					resetHTMLCounter(el);
				});
			},
			//reset method: $.jCounter('reset')
			reset : function() {
				if(consoleLog) { console.log("(jC) Activity: Counter reset."); }
				return thisEl.each(function(i,el) {
					clearInterval($(el).data("jC_interval"));
					resetHTMLCounter(el);
					initCounter(el);
				});
			},
			//start method: $.jCounter('start')
			
			start : function() {
				if(consoleLog) { console.log("(jC) Activity: Counter started."); }
				return thisEl.each(function(i,el) {
					pausedTime = $(el).data("jC_pausedTime");
					endCounter = false;
					clearInterval($(el).data("jC_interval"));
					initCounter(el);
				});
			}
		}
		
		//checks whether customDuration is used
		if(thisEl.data("userOptions").customDuration) {
			if(!isNaN(thisEl.data("userOptions").customDuration)) {
				var customDuration = true;
			} else {
				var customDuration = false;
				if(consoleLog) { console.log("(jC) Error: The customDuration value is not a number! NOTE: 'customDuration' accepts a number of seconds."); }
			}
		}
		
		//checks whether customRange is used
		if(thisEl.data("userOptions").customRange) {	
			var customRangeValues = thisEl.data("userOptions").customRange.split(":");
			var rangeVal0 = parseInt(customRangeValues[0]);
			var rangeVal1 = parseInt(customRangeValues[1]);
			if(!isNaN(rangeVal0) && !isNaN(rangeVal1)) {
				var customRange = true;
				if(rangeVal0 > rangeVal1) {
					var customRangeDownCount = true;
				} else {
					var customRangeDownCount = false;
					jCounterDirection = 'up';
				}
			} else {
				var customRange = false;
				if(consoleLog) { console.log("(jC) Error: The customRange value is not a valid range! Example: customRange: '0:30' or '30:0'"); }
			}
		}

		//checks whether animation is set to slide
		if(thisEl.data("userOptions").animation == 'slide') {	
			thisEl.data("jCanimation","slide");
		}

		//FUNCTIONS
		
		//jCounter initializer
		function initCounter(el) {
			if(customDuration) {
				if (pausedTime) {
					if (!isNaN(pausedTime)) {
						eventDate = Math.round(pausedTime);
					}
				} else {
					eventDate = Math.round($(el).data("userOptions").customDuration);
				}
				currentTime = 0;
				countdown_proc(currentTime,el);
				$(el).data("jC_interval", setInterval(function(){
					if(endCounter == false) {
						currentTime = parseInt(currentTime) + 1;
						countdown_proc(currentTime,el)
					}				
				},1000));
			} else if(customRange) {
				eventDate = Math.round(customRangeValues[1]);
				if (pausedTime) {
					if (!isNaN(pausedTime)) {
						var currentTime = eventDate - pausedTime;
					}
				} else {
					var currentTime = Math.round(customRangeValues[0]);
				}
				countdown_proc(currentTime,el);
				$(el).data("jC_interval", setInterval(function(){
					if(endCounter == false) {
						var ifRangeDownCount = (customRangeDownCount) ? currentTime = parseInt(currentTime) - 1 : currentTime = parseInt(currentTime) + 1;
						countdown_proc(currentTime,el);
					}				
				},1000));
			} else {
				eventDate = Date.parse($(el).data("userOptions").date) / 1000;
				dateSource = thisEl.data("userOptions").serverDateSource + '?timezone=' + thisEl.data("userOptions").timezone + '&callback=?';
				$.ajax({
                	url: dateSource,
	                dataType : 'json',
	                data : {},
	                success : function(data, textStatus){
						var currentDate = Date.parse(data.currentDate) / 1000;
						startCounter(currentDate,el);
	                },
	                error : function(){
						if(consoleLog) { console.log("(jC) Error: Couldn't find dateandtime.php from serverDateSource: " + thisEl.data('userOptions').serverDateSource + "\n(jC) - Make sure the path is correct! \n(jC) - Now using the client-side time (not recommended).") }
						var currentDate = Math.floor($.now() / 1000);
						startCounter(currentDate,el);
	                }
            	});
			}
		}

		function startCounter(currentDate,el) {
			countdown_proc(currentDate,el);
			if (eventDate > currentDate) {
				$(el).data("jC_interval", setInterval(function(){
					if(endCounter == false) {
						currentDate = parseInt(currentDate) + 1;
						countdown_proc(currentDate,el)
					}				
				},1000));
			} else {
				resetHTMLCounter(el)
			}
		}

		//jCslider - adds the slide effect layer
		//Note: this requires a jCounter slide-ready theme! (i.e. iOS dark or iOS light)
		function jCslider(el,unitClass,timeUnit,eventDate,duration) {
			$(el).find(unitClass + " u").each(function(i,el) {
				var twoDigits = (thisEl.data("userOptions").twoDigits == 'on') ? '0' : '';
				var newIndex = (jCounterDirection == 'up') ? newIndex = -i : newIndex = i;		
				currNo = parseInt(timeUnit,10) + (newIndex);
				if (String(parseInt(timeUnit,10)).length >= 2) { 
					$(el).text(parseInt(timeUnit,10) + (newIndex))
				} else if(String(parseInt(timeUnit,10)).length == 1 && currNo == 10) {
					$(el).text(parseInt(timeUnit,10) + (newIndex))
				} else {
					$(el).text(twoDigits + (parseInt(timeUnit,10) + (newIndex)));
				}
			})
			$(el).find(unitClass).animate({
				top: '0.15em'
			},200, function() {
				$(el).find(unitClass + " u:eq(1)").remove();
				$(el).find(unitClass).prepend('<u></u>');
				$(el).find(unitClass).css({'top':'-1.24em'})					
			});
		}

		//resets jCounter's HTML values to 0 or 00, based on the twoDigits setting
		function resetHTMLCounter(el) {
			if(thisEl.data("userOptions").twoDigits == 'on') {
				$(el).find(".days,.hours,.minutes,.seconds").text('00');
			} else if(thisEl.data("userOptions").twoDigits == 'off') {
				$(el).find(".days,.hours,.minutes,.seconds").text('0');
			}
			if(thisEl.data("jCanimation") == 'slide') {
				$(el).find(".daysSlider u,.hoursSlider u,.minutesSlider u,.secondsSlider u").text('00');
			}
		}

		//main jCounter processor
		function countdown_proc(duration,el) {
			//check if the counter needs to count down or up
			if(customRangeDownCount) {
				if(eventDate >= duration) {
					clearInterval($(el).data("jC_interval"));
					if(thisEl.data("userOptions").callback) {
						thisEl.data("userOptions").callback.call(this);
					}
				}

			} else {
				if(eventDate <= duration) {
					clearInterval($(el).data("jC_interval"));
					if(thisEl.data("userOptions").callback) {
						thisEl.data("userOptions").callback.call(this);
					}
				}
			}
			
			//if customRange is used, update the seconds variable
			var seconds = (customRange) ? duration : eventDate - duration;

			var thisInstanceFormat = thisEl.data("userOptions").format;
			
			//calculate seconds into days,hours,minutes,seconds
			//if dd (days) is specified in the format setting (i.e. format: 'dd:hh:mm:ss')
			if(thisInstanceFormat.indexOf('dd') != -1)  {
				var days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
				seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed
			}
			//if hh (hours) is specified
			if(thisInstanceFormat.indexOf('hh') != -1)  {
				var hours = Math.floor(seconds / (60 * 60));
				seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed
			}
			//if mm (minutes) is specified
			if(thisInstanceFormat.indexOf('mm') != -1)  {
				var minutes = Math.floor(seconds / 60);
				seconds -= minutes * 60; //update the seconds variable with no. of minutes removed
			}
			//if ss (seconds) is specified
			if(thisInstanceFormat.indexOf('ss') == -1)  {
				seconds -= seconds; //if ss is unspecified in format, update the seconds variable to 0;
			}

			//conditional Ss
			//updates the plural and singular labels accordingly
			if (days == 1) { $(el).find(".textDays").text(singularLabels[0]); } else { $(el).find(".textDays").text(pluralLabels[0]); }
			if (hours == 1) { $(el).find(".textHours").text(singularLabels[1]); } else { $(el).find(".textHours").text(pluralLabels[1]); }
			if (minutes == 1) { $(el).find(".textMinutes").text(singularLabels[2]); } else { $(el).find(".textMinutes").text(pluralLabels[2]); }
			if (seconds == 1) { $(el).find(".textSeconds").text(singularLabels[3]); } else { $(el).find(".textSeconds").text(pluralLabels[3]); }
			
			//twoDigits ON setting
			//if the twoDigits setting is set to ON, jCounter will always diplay a minimum number of 2 digits
			if(thisEl.data("userOptions").twoDigits == 'on') {
				days = (String(days).length >= 2) ? days : "0" + days;
				hours = (String(hours).length >= 2) ? hours : "0" + hours;
				minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
				seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
			}

			//updates the jCounter's html values
			if(!isNaN(eventDate)) {
				$(el).find(".days").text(days);
				$(el).find(".hours").text(hours);
				$(el).find(".minutes").text(minutes);
				$(el).find(".seconds").text(seconds);

				if(thisEl.data("jCanimation") == 'slide') {
					$(el).find(".daysSlider u:eq(1)").text(days);
					$(el).find(".hoursSlider u:eq(1)").text(hours);
					$(el).find(".minutesSlider u:eq(1)").text(minutes);
					$(el).find(".secondsSlider u:eq(1)").text(seconds);
					jCslider(el,'.secondsSlider',seconds,eventDate,duration); 
					if(parseInt(seconds,10) == 59) { 
						jCslider(el,'.minutesSlider',minutes,eventDate,duration) 
						if(parseInt(minutes,10) == 59) { 
							jCslider(el,'.hoursSlider',hours,eventDate,duration) 
							if(parseInt(hours,10) == 23) { 
								jCslider(el,'.daysSlider',days,eventDate,duration) 
							}
						}
					}	
				}
			} else { 
				if(consoleLog) { console.log("(jC) Error: Invalid date! Here's an example: 01 January 1970 12:00:00"); }
				clearInterval($(el).data("jC_interval"));
			}
			//stores the remaining time when pausing jCounter
			$(el).data("jC_pausedTime", eventDate-duration);
		}
		
		
		
		//method calling logic
		if ( jC_methods[this.options] ) {
			return jC_methods[ this.options ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof this.options === 'object' || ! this.options ) {
			return jC_methods.init.apply( this, arguments );
		} else {
			console.log('(jC) Error: Method >>> ' +  this.options + ' <<< does not exist.' );
		} 

	}
	//the end;
}) (jQuery,document,window);