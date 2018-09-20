!function(t){var e={};function s(n){if(e[n])return e[n].exports;var i=e[n]={i:n,l:!1,exports:{}};return t[n].call(i.exports,i,i.exports,s),i.l=!0,i.exports}s.m=t,s.c=e,s.d=function(t,e,n){s.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},s.r=function(t){Object.defineProperty(t,"__esModule",{value:!0})},s.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="",s(s.s=0)}([function(t,e,s){"use strict";function n(t,e=!1){switch(e||(e=document),function(t){return/[^a-zA-Z0-9\-_]/.test(t.substr(1))?"query":"#"===t.charAt(0)?"id":"."===t.charAt(0)?"class":"query"}(t)){case"id":const s=document.getElementById(t.substr(1));return s?[s]:[];case"class":return e.getElementsByClassName(t.substr(1));default:return e.querySelectorAll(t)}}s.r(e);class i{constructor(t){this.nodes=t}empty(){return this.html(""),this}get(t){const e=n(t,this.nodes[0]);return e.length?new i(e):null}prepend(t){const e=this.nodes[0].childNodes[0];return t.forEach(t=>{t instanceof i?this.nodes[0].insertBefore(t.nodes[0],e):this.nodes[0].insertBefore(t,e)}),this}append(t){if(t.constructor===Array)t.forEach(t=>{t instanceof i?this.nodes[0].appendChild(t.nodes[0]):this.nodes[0].appendChild(t)});else{const e=t;e instanceof i?this.nodes[0].appendChild(e.nodes[0]):this.nodes[0].appendChild(e)}return this}appendTo(t){return t instanceof i?this.each(e=>t.nodes[0].appendChild(e.dom())):this.each(e=>t.appendChild(e.dom())),this}text(t=!1){if(!t){if(1==this.nodes.length)return this.nodes[0].textContent;{const t=[];for(let e=0;e<this.nodes.length;e++)t.push(this.nodes[e].textContent);return t}}for(let e=0;e<this.nodes.length;e++)this.nodes[e].textContent=t;return this}html(t=!1){if(!t){if(1==this.nodes.length)return this.nodes[0].innerHTML;{const t=[];for(let e=0;e<this.nodes.length;e++)t.push(this.nodes[e].innerHTML);return t}}for(let e=0;e<this.nodes.length;e++)this.nodes[e].innerHTML=t;return this}value(t=!1){if(!t){if(1==this.nodes.length)return this.nodes[0].value;{const t=[];for(let e=0;e<this.nodes.length;e++)t.push(this.nodes[e].value);return t}}for(let e=0;e<this.nodes.length;e++)this.nodes[e].value=t;return this}dom(){return 1===this.nodes.length?this.nodes[0]:this.nodes}hide(){return this.each(t=>{t.addClass("hidden"),t.css({display:"none"})}),this}show(){return this.each(t=>{t.removeClass("hidden"),t.css({display:null})}),this}hasClass(t){return this.nodes[0].classList.contains(t)}addClass(t){for(let e=0;e<this.nodes.length;e++)this.nodes[e].classList.add(t);return this}removeClass(t){for(let e=0;e<this.nodes.length;e++)this.nodes[e].classList.remove(t);return this}toggleClass(t){for(let e=0;e<this.nodes.length;e++)this.nodes[e].classList.contains(t)?this.nodes[e].classList.remove(t):this.nodes[e].classList.add(t);return this}die(){this.each(t=>{const e=t.dom();e.parentNode.removeChild(e)})}remove(t){this.each(e=>{t instanceof i?t.each(t=>{e.dom().removeChild(t.dom())}):e.dom().removeChild(t)})}each(t){if(1===this.nodes.length)t(this,0);else for(let e=0;e<this.nodes.length;e++)t(new i([this.nodes[e]]),e);return this}css(t){return this.each(e=>{for(let s in t)e.dom().style[s]=t[s]}),this}attr(t,e=!1){if(!e){if(1==this.nodes.length)return this.nodes[0].getAttribute(t);{const e=[];return this.each(s=>e.push(s.dom().getAttribute(t))),e}}return this.each(s=>s.dom().setAttribute(t,e)),this}on(t,e,s=0){return this.each(n=>{let i;n.dom().addEventListener(t,t=>{s?(clearTimeout(i),i=setTimeout(()=>e(n,t),s)):e(n,t)})}),this}slideDown(){return this.each(t=>{t.dom().style.maxHeight=t.dom().scrollHeight+"px"}),this}toggleSlide(){return this.each(t=>{t.dom().style.maxHeight?t.dom().style.maxHeight=null:t.dom().style.maxHeight=t.dom().scrollHeight+"px"}),this}slideUp(){return this.each(t=>{t.dom().style.maxHeight=null}),this}}class o{constructor(t,e,s,n=!0){this.xhttp=new XMLHttpRequest,this.protocol=window.location.protocol+"//",this.host=window.location.host+"/",this.isLocal=!1,this.url=this.makeURL(t),this.method=e,this.parseToJSON=n,this.query=s}execute(){return new Promise((t,e)=>{this.xhttp.onreadystatechange=(()=>{if(4==this.xhttp.readyState)if(this.parseToJSON){let e="PARSE_ERROR";try{e=JSON.parse(this.xhttp.responseText)}catch(t){console.error("Response could not be parsed to JSON: ",this.xhttp.responseText)}t(e,this.xhttp.status)}else t(this.xhttp.responseText,this.xhttp.status)}),this.sendRequest()})}sendRequest(){"GET"===this.method?(this.query?this.open("GET",this.url+"?"+this.makeQuery()):this.open("GET",this.url),this.send()):(this.xhttp.open("POST",this.url),this.xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded"),this.xhttp.send(this.makeQuery()))}makeURL(t){return t.startsWith("http://")||t.startsWith("https://")?t:(this.isLocal=!0,t.startsWith("/")?this.protocol+this.host+t.substring(1):this.protocol+this.host+t)}makeQuery(){const t=$('head>meta[name="csrf"]');t&&this.isLocal&&"POST"===this.method&&(this.query?this.query._csrf=t.attr("value"):this.query={_csrf:t.attr("value")});let e=[];for(let t in this.query)e.push(encodeURIComponent(t)+"="+encodeURIComponent(this.query[t]));return e.join("&")}}window.make=function(t,e=""){return new i([function(t,e){const s=t.split(".");let n=!1;s[0].includes("#")?(s[0]=s[0].split("#"),n=s[0][1],t=s[0][0]):t=s[0];const i=document.createElement(t);i.innerText=e,n&&i.setAttribute("id",n);for(let t=1;t<s.length;t++)i.classList.add(s[t]);return i}(t,e)])},window.csrf=function(){return $('meta[name="csrf"]').attr("value")},window._get=function(t,e=!1,s=!0){return new o(t,"GET",e,s).execute()},window._post=function(t,e=!1,s=!0){return new o(t,"POST",e,s).execute()},window._put=function(t,e=!1,s=!0){return e?e._method="PUT":e={_method:"PUT"},new o(t,"POST",e,s).execute()},window._delete=function(t,e=!1,s=!0){return e?e._method="DELETE":e={_method:"DELETE"},new o(t,"POST",e,s).execute()},window.$=function(t){const e=n(t);return e.length?new i(e):null}}]);