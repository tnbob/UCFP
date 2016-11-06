
function helloJS()
{
	document.write("<h3> Hello World! </h4>");	
}

function isPrime(val)
{
	for(var i=2; i<=val/2; ++i)
	{
		if(val%i==0) return false;	
	}	
	return true;
}

function Shape (dims) {
	var dims = dims;

	function infoInner() {
		return "Shape dimension: " + dims;
	}

	this.info = function () {
		return infoInner();
	}
}


function Rectangle (length, width) {
	
	Shape.call(4);	
	this.length = length;
	this.width = width;
	//var legth = length;
	//var width = width;
	
	this.getArea = function() {
		return length*width;
	}

}

function Cache () {
	var key;
	var value;

	function doSetValue(k, v) {
		key = k;
		value = v;
	}	

	function doGetValue(k) {
		var val = null;
		if(key === k) {
			val = value;
		}
		return val;
	}

	this.setValue = function(k, v) {
		doSetValue(k, v);	
	}

	this.getValue = function(k) {
		return doGetValue(k);
	}
}

CacheHolder = new function () {
	this.x = "dharm";	
	this.cache = null;
}

function iterateObj(obj, log) {
	var i=0;	
	log.innerHTML += "<br/>";
	for(var v in obj) {	
		//document.write(i++);	
		log.innerHTML += v +"</br>";
	}
}

function prefetch(httpRequest, log) {

		this.httpRequest = httpRequest;
		this.log = log;
		this.callBackFunc = function() {
		
				if (httpRequest.readyState === 4) {
				   // everything is good, the response is received
					log.innerHTML += "page fetch complete:";
					if (httpRequest.status === 200) {
						sessionStorage.setItem('domev', httpRequest.responseText);
						log.innerHTML += "success! <br/>";
						log.innerHTML += "response type: " + httpRequest.responseType + "<br/>";
						log.innerHTML += "<xmp>" + httpRequest.responseText + "</xmp>";
						//log.innerHTML += "<pre> " + httpRequest.responseXML.scripts.item(1).text + "</pre>";
						//window.open('data:text/html,' + httpRequest.responseXML.textContent);
						//window.document = httpRequest.responseXML;
						//content.document = httpRequest.responseXML;
						//content.document.documentElement = httpRequest.responseXML;
						//log.innerHTML += "<pre> " + JSON.stringify(httpRequest.responseXML) + "</pre>";
						//log.innerHTML += "<pre> " + httpRequest.responseXML + "</pre>";
						//log.innerHTML += "<pre> " + window.document + "</pre>";
						//log.innerHTML += "<pre> " + content.document + "</pre>";
						//log.innerHTML += "<pre> " + content.document.documentElement + "</pre>";

						//document.replaceChild(document.importNode(httpRequest.responseXML.documentElement, true), document.documentElement);
						//log.innerHTML += "<xmp> " + httpRequest.responseXML.documentElement.innerHTML + "</xmp>";
						//log.innerHTML += "<xmp> " + httpRequest.responseXML.body.innerHTML + "</xmp>";
						//window.document.body.innerHTML =  httpRequest.responseXML.body.innerHTML;
						//window.history.pushState("", "storage", "storage.html");
						//document.documentElement.outerHTML = httpRequest.responseXML.documentElement.outerHTML;
						//log.innerHTML =  httpRequest.responseXML.documentElement.outerHTML;
						//log.innerHTML =  httpRequest.responseXML.body.innerHTML;
						//execJS(httpRequest.responseXML.body);
						//log.textContent =  httpRequest.responseXML.body.innerHTML;
						//replaceContent(httpRequest.responseXML.documentElement.outerHTML);
						//window.document.write(httpRequest.responseXML.documentElement.outerHTML);
					}
					else {
						log.innerHTML += "failure!", httpRequest.status, "<br/>";
					}
				} else {
					// still not ready
					log.innerHTML += "fetching page ... <br/>";
				}
		}	
}

function execJS(domelement) {
	
	var scripts = [];
    ret = domelement.childNodes;
    for ( var i = 0; ret[i]; i++ ) {
      if ( scripts && nodeName( ret[i], "script" ) && (!ret[i].type || ret[i].type.toLowerCase() === "text/javascript") ) {
            scripts.push( ret[i].parentNode ? ret[i].parentNode.removeChild( ret[i] ) : ret[i] );
        }
    }

    for(script in scripts)
    {
      evalScript(scripts[script]);
    }
}


function nodeName( elem, name ) {
	return elem.nodeName && elem.nodeName.toUpperCase() === name.toUpperCase();
}

function evalScript( elem ) {
		data = ( elem.text || elem.textContent || elem.innerHTML || "" );

		var head = document.getElementsByTagName("head")[0] || document.documentElement,
		script = document.createElement("script");
		script.type = "text/javascript";
		script.appendChild( document.createTextNode( data ) );
		head.insertBefore( script, head.firstChild );
		head.removeChild( script );

		if ( elem.parentNode ) {
		elem.parentNode.removeChild( elem );
		}
}

function catchNavigation(event) {
	event.preventDefault();
	replaceContent();
}

function replaceContent(content) {
	var encodedContent = encodeURIComponent(content)
	document.location.href = "javascript:(function(){document.open();document.write('"+encodedContent +"');document.close();})();";
}



function addEvent(log, obj, evt, fn)
{
  log.innerHTML += "<br/>addEvent called : ";
  if ('undefined' != typeof obj.addEventListener )
  {
    log.innerHTML += "addEventListener <br/>";
    obj.addEventListener(evt, fn, false);
  }
  else if ( 'undefined' != typeof obj.attachEvent )
  {
    log.innerHTML += "attachEvent <br/>";
    obj.attachEvent("on" + evt, fn);
  }
}
