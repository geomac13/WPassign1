
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Computing Science and IT Conference(UHI)</title>

  <style media="screen">

    
    body {
	  background: LightSkyBlue;
      font-family: 'Proxima Nova','proxima-nova-1','proxima-nova-2', 'Helvetica Neue', Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    section, header {
      display: block;
    }

    #container {
      position: relative;
      width: 1000px;
	  height: 540px;
      margin: 10px auto;
	  background: LightSkyBlue;
    }
	
	#container h1 {
      font-size: 45px;
      font-weight: 600;
      line-height: 50px;
	  margin-left: 20px;
    }

    section {
      width: 1000px;
      height: 540px;
      margin-bottom: 80px;
      position: relative;
	  z-index: 1;
	  
    }

   

    h1, h2, p {
      margin: 0 0 5px;
    }

    section header {
      padding: 0 10px;
    }

    section h2 {
      font-size: 28px;
      line-height: 30px;
    }

    p {
      background: hsla( 0, 0%, 0%, 0.3 );
      height: 15px;
    }

    .w2, .w3, .w6, .w4, .w7, .w8 { 
      position: absolute;
      margin: 0 10px;
      padding-top: 15px;
    }
    .w2 { width: 180px; }
    .w2.box { width: 150px; }
    .w3 { width: 280px; }
    .w3.box { width: 250px; }
    .w4.box { width: 350px; }
	.w6 { width: 580px; }
    .w6.box { width: 550px; }
    .w4.box { width: 350px; }
	.w7 { width: 680px; }
	.w7.box {width: 650px; }
    .w8 {width: 780px; }
    .w8.box { width: 750px; }
	.w10 {width: 980px; }
    .h2.box { height: 90px; }
    .h2.box .img { line-height: 90px; }
    .h3.box { height: 150px; }
    .h3.box .img { line-height: 150px; }
    .h4.box { height: 210px; }
    .h5.box { height: 270px; }
    .h6.box { height: 330px; }
    .h6.box .img { line-height: 330px; }
	.h7.box { height: 390px; }	
	.h8.box { height: 450px; }
	.h9.box {height: 510px;}
	.h10.box { height: 570px; }

    
	
    .x2 { left: 200px; }
    .x3 { left: 300px; }
    .x4 { left: 400px; }
    .x6 { left: 600px; }
    .x7 { left: 700px; }
    .x8 { left: 800px; }

    .y1 { top: 60px; }
    .y2 { top: 120px; }
    .y3 { top: 180px; }
	.y5 { top: 300px; }
    .y6 { top: 360px; }
	.y7 { top: 420px; }
    .y8 { top: 480px; }

    .box {
      padding-top: 0;
      border: 2px solid;
      padding: 10px;
    }

    .img {
      background: hsla( 210, 50%, 88%, 0.7 );
      color: white;
      text-align: center;
	  font-size: 100px;
	}

    /* nav */

    #nav {
      padding: 20px;
      margin: 25px auto 10px;
      overflow: auto;
      width: 1000px;
      position: relative;
      z-index: 100;
    }

    #nav li {
      list-style: none;
      float: left;
      font-weight: bold;
    }

    #nav li a {
      text-decoration: none;
      display: block;
      background: #EEF;
      background: hsla( 0, 0%, 90%, 0.85 );
      color: blue;
      padding: 8px 15px;
    }

    #nav li a:hover {
      background: blue;
      color: white;
    }
    


    /* Section-specific layout */
	
	#UHIcsit {
	  z-index: 1;
	 background:url(/images/highlands2.jpg);
	  background-size:100% 100%;
      background-repeat:no-repeat;
	}
	#news {
	background: hsla( 210, 50%, 88%, 0.7 );
	overflow:hidden;
	text-align:justify;
	text-overflow:ellipsis;
	}
	
	#perth, #perthmiddle, #perthbottom {
	position: absolute;
	
	overflow: hidden;
	z-index: 30;	
	}
		
	#inverness, #invernessmiddle, #invernessbottom {
	position: absolute;
	
	overflow: hidden;
	z-index: 20;
	}
	
	
	
	#moray, #moraymiddle, #moraybottom {
	position: absolute;
	
	overflow: hidden;
	z-index: 10;
	}
	
	#left {
	background: hsla( 210, 50%, 88%, 0.7 );
	color: black;
	}
	
	#bott {
	background: hsla( 210, 50%, 88%, 0.7 );
	}

    #leftbox {
	background: hsla( 210, 50%, 88%, 0.7 );
    text-align: justify;
    text-overflow:ellipsis;      
    }
   
   #perthmiddle leftbox {
	background: hsla( 210, 50%, 88%, 0.7 );
    text-align: justify;
    text-overflow:ellipsis;      
    }
   
	#rightbox {
	background: hsla( 210, 50%, 88%, 0.7 );
    max-width: 100%;
    max-height: 100%;
	}
	
	.pic {
	max-width: 100%;
    max-height: 100%;
	}
	
	#bottombox {
	background: hsla( 210, 50%, 88%, 0.7 );
	}
	
    #UHIcsit h1 {
      font-size: 100px;
      font-weight: 600;
      line-height: 105px;
    }
	
    #perth header,
    #inverness header,
    #moray header { 
	padding-top: 0;
	padding: 0;
	}

    #perth h1,
	#inverness h1,
	#moray h1
	{
      line-height: 55px;
      font-size: 45px;
    }

     

    /* Section colors */

    /*#UHIcsit { color: hsl( 0, 90%, 45% ); }*/
    /*#UHIcsit p, #UHIcsit .img { background: hsla( 0, 90%, 45%, 0.3 ); }*/

    #perth { color: blue; }
    #perth { background: LightSkyBlue; }
    #perth p, #front-end .img { background: hsla( 72, 90%, 40%, 0.3 ); }

    #inverness { color: hsl( 144, 90%, 45% ); }
	#inverness { background: yellow; }
    #inverness p, #css .img { background: hsla( 144, 90%, 45%, 0.3 ); }

    #moray { color: hsl( 216, 90%, 45% ); }
	#moray { background: orange; }
    #moray p, #css3 .img { background: hsla( 216, 90%, 45%, 0.3 ); }

    



    
    /* step 2 */

    .csstransforms #content {
      position: relative;
      width: 1000px;
      height: 540px;
    }

    .csstransforms section {
      position: absolute;
	
    }

    .csstransforms #perth {
	  
      -webkit-transform: translate(-200px,-120px) scale(0.2);	  
          -moz-transform:translate(-200px,-120px) scale(0.2);
		   -ms-transform:translate(-200px,-120px) scale(0.2);
            -o-transform:translate(-200px,-120px) scale(0.2);
               transform:translate(-200px,-120px) scale(0.2);
    }
	
	.csstransforms #perthmiddle {
	  -webkit-transform:translate(-200px,-120px) scale(0.066);	  
         -moz-transform:translate(-200px,-120px) scale(0.066);
		  -ms-transform:translate(-200px,-120px) scale(0.066);
           -o-transform:translate(-200px,-120px) scale(0.066);
              transform:translate(-200px,-120px) scale(0.066);
    }
	
	.csstransforms #perthbottom {
	  -webkit-transform:translate(-200px,-120px) scale(0.0222);	 
         -moz-transform:translate(-200px,-120px) scale(0.0222);
		  -ms-transform:translate(-200px,-120px) scale(0.0222);
           -o-transform:translate(-200px,-120px) scale(0.0222);
              transform:translate(-200px,-120px) scale(0.0222);
    }
	
	.csstransforms #inverness {
      -webkit-transform:translate(0px,-120px) scale(0.2);
         -moz-transform:translate(0px,-120px) scale(0.2);
		  -ms-transform:translate(0px,-120px) scale(0.2);
           -o-transform:translate(0px,-120px) scale(0.2);
              transform:translate(0px,-120px) scale(0.2);
    }
	
	.csstransforms #invernessmiddle {
      -webkit-transform:translate(0px,-120px) scale(0.066);
         -moz-transform:translate(0px,-120px) scale(0.066);
		  -ms-transform:translate(0px,-120px) scale(0.066);
           -o-transform:translate(0px,-120px) scale(0.066);
              transform:translate(0px,-120px) scale(0.066);
    }
	
	.csstransforms #invernessbottom {
      -webkit-transform:translate(0px,-120px) scale(0.0222);
         -moz-transform:translate(0px,-120px) scale(0.0222);
		  -ms-transform:translate(0px,-120px) scale(0.0222);
           -o-transform:translate(0px,-120px) scale(0.0222);
              transform:translate(0px,-120px) scale(0.0222);
    }
	
	.csstransforms #moray {
      -webkit-transform:translate(200px,-120px) scale(0.2);
         -moz-transform:translate(200px,-120px) scale(0.2);
		  -ms-transform:translate(200px,-120px) scale(0.2);
           -o-transform:translate(200px,-120px) scale(0.2);
              transform:translate(200px,-120px) scale(0.2);
    }
	
	.csstransforms #moraymiddle {
      -webkit-transform:translate(200px,-120px) scale(0.066);
         -moz-transform:translate(200px,-120px) scale(0.066);
		  -ms-transform:translate(200px,-120px) scale(0.066);
           -o-transform:translate(200px,-120px) scale(0.066);
              transform:translate(200px,-120px) scale(0.066);
    }
	
	.csstransforms #moraybottom {
      -webkit-transform:translate(200px,-120px) scale(0.0222);
         -moz-transform:translate(200px,-120px) scale(0.0222);
		  -ms-transform:translate(200px,-120px) scale(0.0222);
           -o-transform:translate(200px,-120px) scale(0.0222);
              transform:translate(200px,-120px) scale(0.0222);
    }
    
  </style>
  
  
  <script>
    

    /* Modernizr custom build of 1.7: csstransforms | csstransitions | iepp */
    window.Modernizr=function(a,b,c){function G(){}function F(a,b){var c=a.charAt(0).toUpperCase()+a.substr(1),d=(a+" "+p.join(c+" ")+c).split(" ");return!!E(d,b)}function E(a,b){for(var d in a)if(k[a[d]]!==c&&(!b||b(a[d],j)))return!0}function D(a,b){return(""+a).indexOf(b)!==-1}function C(a,b){return typeof a===b}function B(a,b){return A(o.join(a+";")+(b||""))}function A(a){k.cssText=a}var d="1.7",e={},f=!0,g=b.documentElement,h=b.head||b.getElementsByTagName("head")[0],i="modernizr",j=b.createElement(i),k=j.style,l=b.createElement("input"),m=":)",n=Object.prototype.toString,o=" -webkit- -moz- -o- -ms- -khtml- ".split(" "),p="Webkit Moz O ms Khtml".split(" "),q={svg:"http://www.w3.org/2000/svg"},r={},s={},t={},u=[],v,w=function(a){var c=b.createElement("style"),d=b.createElement("div"),e;c.textContent=a+"{#modernizr{height:3px}}",h.appendChild(c),d.id="modernizr",g.appendChild(d),e=d.offsetHeight===3,c.parentNode.removeChild(c),d.parentNode.removeChild(d);return!!e},x=function(){function d(d,e){e=e||b.createElement(a[d]||"div");var f=(d="on"+d)in e;f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=C(e[d],"function"),C(e[d],c)||(e[d]=c),e.removeAttribute(d))),e=null;return f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),y=({}).hasOwnProperty,z;C(y,c)||C(y.call,c)?z=function(a,b){return b in a&&C(a.constructor.prototype[b],c)}:z=function(a,b){return y.call(a,b)},r.csstransforms=function(){return!!E(["transformProperty","WebkitTransform","MozTransform","OTransform","msTransform"])},r.csstransitions=function(){return F("transitionProperty")};for(var H in r)z(r,H)&&(v=H.toLowerCase(),e[v]=r[H](),u.push((e[v]?"":"no-")+v));e.input||G(),e.crosswindowmessaging=e.postmessage,e.historymanagement=e.history,e.addTest=function(a,b){a=a.toLowerCase();if(!e[a]){b=!!b(),g.className+=" "+(b?"":"no-")+a,e[a]=b;return e}},A(""),j=l=null,f&&a.attachEvent&&function(){var a=b.createElement("div");a.innerHTML="<elem></elem>";return a.childNodes.length!==1}()&&function(a,b){function p(a,b){var c=-1,d=a.length,e,f=[];while(++c<d)e=a[c],(b=e.media||b)!="screen"&&f.push(p(e.imports,b),e.cssText);return f.join("")}function o(a){var b=-1;while(++b<e)a.createElement(d[b])}var c="abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",d=c.split("|"),e=d.length,f=new RegExp("(^|\\s)("+c+")","gi"),g=new RegExp("<(/*)("+c+")","gi"),h=new RegExp("(^|[^\\n]*?\\s)("+c+")([^\\n]*)({[\\n\\w\\W]*?})","gi"),i=b.createDocumentFragment(),j=b.documentElement,k=j.firstChild,l=b.createElement("body"),m=b.createElement("style"),n;o(b),o(i),k.insertBefore(m,k.firstChild),m.media="print",a.attachEvent("onbeforeprint",function(){var a=-1,c=p(b.styleSheets,"all"),k=[],o;n=n||b.body;while((o=h.exec(c))!=null)k.push((o[1]+o[2]+o[3]).replace(f,"$1.iepp_$2")+o[4]);m.styleSheet.cssText=k.join("\n");while(++a<e){var q=b.getElementsByTagName(d[a]),r=q.length,s=-1;while(++s<r)q[s].className.indexOf("iepp_")<0&&(q[s].className+=" iepp_"+d[a])}i.appendChild(n),j.appendChild(l),l.className=n.className,l.innerHTML=n.innerHTML.replace(g,"<$1font")}),a.attachEvent("onafterprint",function(){l.innerHTML="",j.removeChild(l),j.appendChild(n),m.styleSheet.cssText=""})}(a,b),e._enableHTML5=f,e._version=d,g.className=g.className.replace(/\bno-js\b/,"")+" js "+u.join(" ");return e}(this,this.document);
/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-flexboxlegacy-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-applicationcache-canvas-canvastext-draganddrop-hashchange-history-audio-video-indexeddb-input-inputtypes-localstorage-postmessage-sessionstorage-websockets-websqldatabase-geolocation-touch-shiv-mq-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function C(a){j.cssText=a}function D(a,b){return C(n.join(a+";")+(b||""))}function E(a,b){return typeof a===b}function F(a,b){return!!~(""+a).indexOf(b)}function G(a,b){for(var d in a){var e=a[d];if(!F(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function H(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:E(f,"function")?f.bind(d||b):f}return!1}function I(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return E(b,"string")||E(b,"undefined")?G(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),H(e,b,c))}function J(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)t[c[d]]=c[d]in k;return t.list&&(t.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),t}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),s[a[d]]=!!e;return s}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={},s={},t={},u=[],v=u.slice,w,x=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},y=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b).matches;var d;return x("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},z=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=E(e[d],"function"),E(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),A={}.hasOwnProperty,B;!E(A,"undefined")&&!E(A.call,"undefined")?B=function(a,b){return A.call(a,b)}:B=function(a,b){return b in a&&E(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=v.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(v.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(v.call(arguments)))};return e}),r.flexbox=function(){return I("flexWrap")},r.flexboxlegacy=function(){return I("boxDirection")},r.canvas=function(){var a=b.createElement("canvas");return!!a.getContext&&!!a.getContext("2d")},r.canvastext=function(){return!!e.canvas&&!!E(b.createElement("canvas").getContext("2d").fillText,"function")},r.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:x(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},r.geolocation=function(){return"geolocation"in navigator},r.postmessage=function(){return!!a.postMessage},r.websqldatabase=function(){return!!a.openDatabase},r.indexedDB=function(){return!!I("indexedDB",a)},r.hashchange=function(){return z("hashchange",a)&&(b.documentMode===c||b.documentMode>7)},r.history=function(){return!!a.history&&!!history.pushState},r.draganddrop=function(){var a=b.createElement("div");return"draggable"in a||"ondragstart"in a&&"ondrop"in a},r.websockets=function(){return"WebSocket"in a||"MozWebSocket"in a},r.rgba=function(){return C("background-color:rgba(150,255,150,.5)"),F(j.backgroundColor,"rgba")},r.hsla=function(){return C("background-color:hsla(120,40%,100%,.5)"),F(j.backgroundColor,"rgba")||F(j.backgroundColor,"hsla")},r.multiplebgs=function(){return C("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},r.backgroundsize=function(){return I("backgroundSize")},r.borderimage=function(){return I("borderImage")},r.borderradius=function(){return I("borderRadius")},r.boxshadow=function(){return I("boxShadow")},r.textshadow=function(){return b.createElement("div").style.textShadow===""},r.opacity=function(){return D("opacity:.55"),/^0.55$/.test(j.opacity)},r.cssanimations=function(){return I("animationName")},r.csscolumns=function(){return I("columnCount")},r.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return C((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),F(j.backgroundImage,"gradient")},r.cssreflections=function(){return I("boxReflect")},r.csstransforms=function(){return!!I("transform")},r.csstransforms3d=function(){var a=!!I("perspective");return a&&"webkitPerspective"in g.style&&x("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},r.csstransitions=function(){return I("transition")},r.fontface=function(){var a;return x('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},r.generatedcontent=function(){var a;return x(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},r.video=function(){var a=b.createElement("video"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),c.h264=a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),c.webm=a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")}catch(d){}return c},r.audio=function(){var a=b.createElement("audio"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),c.mp3=a.canPlayType("audio/mpeg;").replace(/^no$/,""),c.wav=a.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),c.m4a=(a.canPlayType("audio/x-m4a;")||a.canPlayType("audio/aac;")).replace(/^no$/,"")}catch(d){}return c},r.localstorage=function(){try{return localStorage.setItem(h,h),localStorage.removeItem(h),!0}catch(a){return!1}},r.sessionstorage=function(){try{return sessionStorage.setItem(h,h),sessionStorage.removeItem(h),!0}catch(a){return!1}},r.applicationcache=function(){return!!a.applicationCache};for(var K in r)B(r,K)&&(w=K.toLowerCase(),e[w]=r[K](),u.push((e[w]?"":"no-")+w));return e.input||J(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)B(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},C(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.mq=y,e.hasEvent=z,e.testProp=function(a){return G([a])},e.testAllProps=I,e.testStyles=x,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+u.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

var deviceAgent = navigator.userAgent.toLowerCase();
var isTouchDevice = Modernizr.touch || 
(deviceAgent.match(/(iphone|ipod|ipad)/) ||
deviceAgent.match(/(android)/)  || 
deviceAgent.match(/(iemobile)/) || 
deviceAgent.match(/iphone/i) || 
deviceAgent.match(/ipad/i) || 
deviceAgent.match(/ipod/i) || 
deviceAgent.match(/blackberry/i) || 
deviceAgent.match(/bada/i));

if (isTouchDevice) {
        window.location.replace('http://mobile.baybleites.com');
    }
  </script>

</head>

<body>

  <div id="wrap">
    
    <div id="container">
      <h1>Computing Science and IT Conference (*UHI)</h1>
      <ul id="nav">
        <li><a href="#csit">CSIT Home</a></li>
		<li><pre>           </pre></li>
        <li><a href="#pth">Perth Campus</a></li>
		<li><pre>     </pre></li>
        <li><a href="#inv">Inverness Campus</a></li>
		<li><pre>     </pre></li>
        <li><a href="#mry">Moray Campus</a></li>
        
      </ul>
      
      <div id="content">
        
       

        <section id="UHIcsit">         

            <div id="news" class="box w2 h9" id="left">
                <h2>News</h2>           
            </div>

			<div class="box w8 h4 x2 y5" id="bott">
				<h2>UHI Facebook Wall Posts</h2>				
			</div>

            <div class="box w2 h2 x8">
                <div class="img">
			        <img src="/images/Logo_of_the_University_of_the_Highlands_and_Islands.jpg" class="pic" alt="UHI Logo"></img>
				</div>
            </div>

        </section>
		<section id="perth"> <a href='#perthtop'>
		    <?php include 'College_Section.php'; ?>
        </a> </section>
		
		<section id="perthmiddle" ><a href='#perthmid'>
		    <?php include 'College_Section.php'; ?>
        </a></section>
		
		<section id="perthbottom" ><a href='#perthbot'>
		    <?php include 'College_Section.php'; ?>
        </a></section>

		<section id="inverness" ><a href='#invernesstop'>
            <?php include 'College_Section.php'; ?>			
		</a></section>
		
		<section id="invernessmiddle" ><a href='#invernessmid'>
            <?php include 'College_Section.php'; ?>			
		</a></section>
		
		<section id="invernessbottom" ><a href='#invernessbot'>
            <?php include 'College_Section.php'; ?>			
		</a></section>

		<section id="moray" ><a href='#moraytop'>
			<?php include 'College_Section.php'; ?>
		</a></section>
		
		<section id="moraymiddle" ><a href='#moraymid'>
			<?php include 'College_Section.php'; ?>
		</a></section>
		
		<section id="moraybottom" ><a href='#moraybot'>
			<?php include 'College_Section.php'; ?>
		</a></section>

        
        
      </div> <!-- #content -->
      
    </div> <!-- #container -->
    
  </div> <!-- #wrap -->
  
  <div id="scroller"></div>

<script>
/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-shiv-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function A(a){j.cssText=a}function B(a,b){return A(n.join(a+";")+(b||""))}function C(a,b){return typeof a===b}function D(a,b){return!!~(""+a).indexOf(b)}function E(a,b){for(var d in a){var e=a[d];if(!D(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function F(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:C(f,"function")?f.bind(d||b):f}return!1}function G(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return C(b,"string")||C(b,"undefined")?E(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),F(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={},s={},t={},u=[],v=u.slice,w,x=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},y={}.hasOwnProperty,z;!C(y,"undefined")&&!C(y.call,"undefined")?z=function(a,b){return y.call(a,b)}:z=function(a,b){return b in a&&C(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=v.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(v.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(v.call(arguments)))};return e}),r.cssanimations=function(){return G("animationName")},r.csscolumns=function(){return G("columnCount")},r.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return A((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),D(j.backgroundImage,"gradient")},r.cssreflections=function(){return G("boxReflect")},r.csstransforms=function(){return!!G("transform")},r.csstransforms3d=function(){var a=!!G("perspective");return a&&"webkitPerspective"in g.style&&x("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},r.csstransitions=function(){return G("transition")},r.generatedcontent=function(){var a;return x(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a};for(var H in r)z(r,H)&&(w=H.toLowerCase(),e[w]=r[H](),u.push((e[w]?"":"no-")+w));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)z(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},A(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.testProp=function(a){return E([a])},e.testAllProps=G,e.testStyles=x,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+u.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
</script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript" src="UHI_get_JSON.js"></script>
<script>

$('#perth h1,#perthmiddle h1,#perthbottom h1').append('CSIT Conference(UHI)Perth Campus');
$('#inverness h1,#invernessmiddle h1,#invernessbottom h1').append('CSIT Conference(UHI)Inverness Campus');
$('#moray h1,#moraymiddle h1,#moraybottom h1').append('CSIT Conference(UHI)Moray Campus');
$('#perth #rightbox').append('<div class="img"><img src="/images/PerthCollegeUHILogo.jpg" class="pic" alt="Perth College Logo"></img></div>');
$('#inverness #rightbox').append('<div class="img"><img src="/images/Inverness_College_UHI_logo.png" class="pic" alt="Inverness College Logo"></img></div>');
$('#moray #rightbox').append('<div class="img"><img src="/images/Moray_College_UHI_logo.png" class="pic" alt="Perth College Logo"></img></div>');

//$('#perth #bottombox').append('college');

var UHIscale;
var Perthscale;
var Inverness_scale;
var Morayscale;
var CollegeMiddlescale;
var CollegeBottomscale;
var timescale = 900;
var perth_translate_x;
var perth_translate_y;
var perth_translate_z;
var inverness_translate_x;
var inverness_translate_y;
var inverness_translate_z;
var moray_translate_x;
var moray_translate_y;
var moray_translate_z;

	$('a').click(function() {
		if ($(this).attr('href') == '#csit') {
			UHIscale = 1;
			Perthscale = 0.2;
			PerthMiddlescale = 0.066;
			PerthBottomscale = 0.022;
			Inverness_scale = 0.2;
			InvernessMiddlescale = 0.066;
			InvernessBottomscale = 0.022;
			Morayscale = 0.2;
			MorayMiddlescale = 0.066;
			MorayBottomscale = 0.022;
			perth_translate_x = '-200px';
			perth_translate_y = '-120px';
            inverness_translate_x = '0px';
            inverness_translate_y = '-120px';
			moray_translate_x = '200px';
            moray_translate_y = '-120px';
		}
		
		if ($(this).attr('href') == '#perthtop'){
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11;
			perth_translate_x = '0px';
            perth_translate_y = '-120px';
			inverness_translate_x = '1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '2000px';
			moray_translate_y = '-120px';
                        
		}	
		
		if ($(this).attr('href') == '#pth'){
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11;
			perth_translate_x = '0px';
            perth_translate_y = '-120px';
			inverness_translate_x = '1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '2000px';
			moray_translate_y = '-120px';
            
		}

		if ($(this).attr('href') == '#perthmid'){
			UHIscale = 25;
			Perthscale = 5;
			PerthMiddlescale = 1;
			PerthBottomscale = 0.33;
			Inverness_scale = 5;
			InvernessMiddlescale = 1;
			InvernessBottomscale = 0.33;
			Morayscale = 5;
			MorayMiddlescale = 1;
			MorayBottomscale = 0.33;
			perth_translate_x = '0px';
            perth_translate_y = '-120px';
			inverness_translate_x = '1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '2000px';
			moray_translate_y = '-120px';
            
		}	
		
		if ($(this).attr('href') == '#perthbot'){
			UHIscale = 125;
			Perthscale = 25;
			PerthMiddlescale = 5;
			PerthBottomscale = 1;
			Inverness_scale = 25;
			InvernessMiddlescale = 5;
			InvernessBottomscale = 1;
			Morayscale = 25;
			MorayMiddlescale = 5;
			MorayBottomscale = 1;
			perth_translate_x = '0px';
            perth_translate_y = '-120px';
			inverness_translate_x = '1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '2000px';
			moray_translate_y = '-120px';
            
		}	
		if ($(this).attr('href') == '#inv') {
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11;
			perth_translate_x = '-1000px';
            perth_translate_y = '-120px';
			inverness_translate_x = '0px';
            inverness_translate_y = '-120px';
			moray_translate_x = '200px';
			moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#invernesstop') {
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11;
			perth_translate_x = '-1000px';
            perth_translate_y = '-120px';
			inverness_translate_x = '0px';
            inverness_translate_y = '-120px';
			moray_translate_x = '200px';
			moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#invernessmid') {
			UHIscale = 25;
			Perthscale = 5;
			PerthMiddlescale = 1;
			PerthBottomscale = 0.33;
			Inverness_scale = 5;
			InvernessMiddlescale = 1;
			InvernessBottomscale = 0.33;
			Morayscale = 5;
			MorayMiddlescale = 1;
			MorayBottomscale = 0.33;
			perth_translate_x = '-5000px';
            perth_translate_y = '-120px';
			inverness_translate_x = '0px';
            inverness_translate_y = '-120px';
			moray_translate_x = '200px';
			moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#invernessbot') {
			UHIscale = 125;
			Perthscale = 25;
			PerthMiddlescale = 5;
			PerthBottomscale = 1;
			Inverness_scale = 25;
			InvernessMiddlescale = 5;
			InvernessBottomscale = 1;
			Morayscale = 25;
			MorayMiddlescale = 5;
			MorayBottomscale = 1;
			perth_translate_x = '-25000px';
            perth_translate_y = '-120px';
			inverness_translate_x = '0px';
            inverness_translate_y = '-120px';
			moray_translate_x = '200px';
			moray_translate_y = '-120px';
        }		
		
		if ($(this).attr('href') == '#mry') {
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11; 
			perth_translate_x = '-2000px';
			perth_translate_y = '-120px';
			inverness_translate_x = '-1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '0px';
            moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#moraytop') {
			UHIscale = 5;
			Perthscale = 1;
			PerthMiddlescale = 0.33;
			PerthBottomscale = 0.11;
			Inverness_scale = 1;
			InvernessMiddlescale = 0.33;
			InvernessBottomscale = 0.11;
			Morayscale = 1;
			MorayMiddlescale = 0.33;
			MorayBottomscale = 0.11; 
			perth_translate_x = '-2000px';
			perth_translate_y = '-120px';
			inverness_translate_x = '-1000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '0px';
            moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#moraymid') {
			UHIscale = 25;
			Perthscale = 5;
			PerthMiddlescale = 1;
			PerthBottomscale = 0.33;
			Inverness_scale = 5;
			InvernessMiddlescale = 1;
			InvernessBottomscale = 0.33;
			Morayscale = 5;
			MorayMiddlescale = 1;
			MorayBottomscale = 0.33; 
			perth_translate_x = '-10000px';
			perth_translate_y = '-120px';
			inverness_translate_x = '-5000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '0px';
            moray_translate_y = '-120px';
        }
		
		if ($(this).attr('href') == '#moraybot') {
			UHIscale = 125;
			Perthscale = 25;
			PerthMiddlescale = 5;
			PerthBottomscale = 1;
			Inverness_scale =25;
			InvernessMiddlescale = 5;
			InvernessBottomscale = 1;
			Morayscale = 25;
			MorayMiddlescale = 5;
			MorayBottomscale = 1; 
			perth_translate_x = '-50000px';
			perth_translate_y = '-120px';
			inverness_translate_x = '-25000px';
            inverness_translate_y = '-120px';
			moray_translate_x = '0px';
            moray_translate_y = '-120px';
        }
		
		$('#UHIcsit').css({
					'-webkit-transform':'scale(' +UHIscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'scale(' +UHIscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'scale(' +UHIscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'scale(' +UHIscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'scale(' +UHIscale+ ')',					
					'transition': timescale + 'ms all'
					
		});
		$('#perth').css({					
					'-webkit-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +Perthscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +Perthscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +Perthscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +Perthscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +Perthscale+ ')',					
					'transition': timescale + 'ms all'
		});
		
		$('#perthmiddle').css({
					'-webkit-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthMiddlescale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
		            '-ms-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthMiddlescale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
		            '-moz-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthMiddlescale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthMiddlescale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthMiddlescale+ ')',					
					'transition': timescale + 'ms all'
		});
		$('#perthbottom').css({
					'-webkit-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthBottomscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
		            '-ms-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthBottomscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthBottomscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthBottomscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +perth_translate_x+ ',' +perth_translate_y+ ')scale(' +PerthBottomscale+ ')',					
					'transition': timescale + 'ms all'
		
		});
		
		$('#inverness').css({
					'-webkit-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +Inverness_scale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
		            '-ms-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +Inverness_scale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +Inverness_scale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +Inverness_scale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +Inverness_scale+ ')',								
					'transition': timescale + 'ms all'
		
		});
		
		$('#invernessmiddle').css({
					'-webkit-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessMiddlescale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessMiddlescale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessMiddlescale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessMiddlescale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessMiddlescale+ ')',					
					'transition': timescale + 'ms all'
		});
		
		$('#invernessbottom').css({
					'-webkit-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessBottomscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessBottomscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessBottomscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessBottomscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +inverness_translate_x+ ',' +inverness_translate_y+ ')scale(' +InvernessBottomscale+ ')',					
					'transition': timescale + 'ms all'
		});
		$('#moray').css({
					'-webkit-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +Morayscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +Morayscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +Morayscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +Morayscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +Morayscale+ ')',					
					'transition': timescale + 'ms all'
		});
		
		$('#moraymiddle').css({
					'-webkit-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayMiddlescale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayMiddlescale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayMiddlescale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayMiddlescale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayMiddlescale+ ')',					
					'transition': timescale + 'ms all'
		});
		
		$('#moraybottom').css({
					'-webkit-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayBottomscale+ ')',					
					'-webkit-transition': timescale + 'ms all',
					
					'-ms-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayBottomscale+ ')',					
					'-ms-transition': timescale + 'ms all',
					
					'-moz-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayBottomscale+ ')',					
					'-moz-transition': timescale + 'ms all',
					
					'-o-transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayBottomscale+ ')',					
					'-o-transition': timescale + 'ms all',
					
					'transform':'translate(' +moray_translate_x+ ',' +moray_translate_y+ ')scale(' +MorayBottomscale+ ')',					
					'transition': timescale + 'ms all'
		});
		
	});
	



	function get_cllg_Facebook_about_where(fb_url,cllgID) {
		$.getJSON(fb_url,cllgID, function(fbk_data){
			console.log(fbk_data);
			var about = fbk_data ["about"];
			var street = fbk_data ["location"]["street"];
			var city = fbk_data ["location"]["city"];
			var zip = fbk_data ["location"]["zip"];
			 $(cllgID+ " #leftbox ").append(about+"<br>");
			 $(cllgID+ " #leftbox ").append("<h3>Where<h3>");
			 $(cllgID+ " #leftbox ").append(street+"<br>");
			 $(cllgID+ " #leftbox ").append(city+"<br>");
			 $(cllgID+ " #leftbox ").append(zip);
		});	
	}
	
	function get_data() {
		$.getJSON('data.php').done(function(response) {
		console.log(response);
		$("#perthmiddle #leftbox").html(response['Time'][2] + ('\n') + response['Title'][2] + ('\n') + response['Presenter'][2]).wrap('<pre />');
		$("#invernessmiddle #leftbox").append(response['Time'][1]);
		$("#moraymiddle #leftbox").append(response['Time'][0]);
		//here's your response
	});
}
	
	
	get_data();
	
	var fb_url = "http://graph.facebook.com/PerthCollegeUHI?callback=?"
    var cllgID = "#perth"
	get_cllg_Facebook_about_where(fb_url,cllgID);
	
	var fb_url = "http://graph.facebook.com/InvernessCollegeUHI?callback=?"
    var cllgID = "#inverness"
	get_cllg_Facebook_about_where(fb_url,cllgID);
	
	var fb_url = "http://graph.facebook.com/MorayCollegeUHI?callback=?"
    var cllgID = "#moray"
	get_cllg_Facebook_about_where(fb_url,cllgID);
	
	
	
/*});*/

</script>
</body>
</html>