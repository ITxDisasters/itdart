// IE9 console.log bug support
if (!window.console) {
  window.console = { log: function (msg) {} };
}

// UA judge
var ua = navigator.userAgent.toLowerCase();
var isIOS = /(iphone|ipod|ipad)/.test(ua);
var isTablet = /(ipad)/.test(ua);
var isWP = /(windows phone)/.test(ua);
var isAndroid = /(android)/.test(ua);
var isMobile = (isIOS || isAndroid || isWP);

// Add classes
if (isTablet) {
    document.body.classList.add("is_tablet");
} else if (isMobile) {
    document.body.classList.add("is_mobile");
} else {
    document.body.classList.add("is_pc");
}

// jQuery ready
jQuery(function ($) {
    
    
});