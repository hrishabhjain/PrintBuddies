var geb = function(id){
	return document.getElementById(id);
}
var Validation = {
	area :function(){
		var area = document.getElementById('txtArea');
		var areaPos = document.getElementById('txtAreaPos');
		if(area.value == '') {
			return showError('Please enter areaname');
		}
		else if(areaPos.value == '') {
			return showError('Please enter coordinates of the area or enter areaname in validation to get suggestions');
		}
		else{
			return true;
		}
	},
	road:function(){
		 var road = document.getElementById('txtRoad');
		 var orientation = document.getElementById('ddlOrientation');
		 var landmark1 = document.getElementById('txtLandmark1');
		 var landmark2 = document.getElementById('txtLandmark2');
		 var classification = document.getElementById('ddlClassification');
		if(road.value == '') {
			return showError('Please enter road name');
		}
		else if(orientation.options[orientation.selectedIndex].text.toLowerCase().indexOf('select')>-1) {
			return showError('Please select road Orientation');
		}
		else if(landmark1.value == '') {
			lmField = document.getElementById('spLM1').innerHTML;
			return showError('Please enter ' + lmField);
		}
		else if(landmark2.value == '') {
			lmField = document.getElementById('spLM2').innerHTML;
			return showError('Please enter ' + lmField);
		}
		else if(classification.options[classification.selectedIndex].text.toLowerCase().indexOf('select')>-1) {
			return showError('Please select road classification');
		}
		else{
			clearErr();
			return true;
		}
	},
	roadArea:function(){
		
		ddlArea = document.getElementById('ddlArea');
		ddlRoad = document.getElementById('ddlRoad');
		
		if (ddlRoad.options[ddlRoad.selectedIndex].text.toLowerCase().indexOf('select')> 0) {
			showError('Please select road from the list');
			return false;
		} else if (ddlArea.options[ddlArea.selectedIndex].text.toLowerCase().indexOf('select')> 0) {
			showError('Please select area from the list');
			return false;
		} else {
			clearErr();
			return true;
		}
	},
	geobox:function(){
		 var ret;
		//txtBox = geb('txtBoxNo');
		txtBoxDis = geb('txtBoxDistance');
		if(txtBoxDis.value == '') {
			showError('Please enter Box Distance first','txtBoxDistance');
			ret = false;
		}
		else {
			ret = true;
		}
		return ret;
	}
	
}

//Validation.prototype.area = function(){
//}

//Validation.prototype.road = function(){
//}

//Validation.prototype.roadArea = 
errControlStack = [];
function showError(message,cntrl){
	document.getElementById('err-msg').innerHTML = "* "+ message;
	if(cntrl) {
		cnt = document.getElementById(cntrl).style.border = '1px solid red';
		errControlStack.push(cnt);
	}
}

function clearErr(){
	document.getElementById('err-msg').innerHTML = '';
	for(var i = 0; i<errControlStack.length; i++) {
		document.getElementById(cntrl).style.border = '1px solid blue';
	}
	errControlStack = [];
}



function myXHR(url, options){
	var request;
	var response;
	var callback;
	var method;
	//console.log(options);
	
	if (typeof options.callback == 'function') {
		callback = options.callback;
	}
	method = options.method;
	if (method == 'undefined' || method == null || method == '') {
		method = "GET";
	}
	request = createCORSRequest(method,url,options.async);
	function stateChange(){
		if (request.readyState==4) {
			if (request.status===200||request.status===0)
				callback(request.responseText, options.data);
		}
	};
	if (options.async) {
		request.onreadystatechange=stateChange;
		try{
			if (method=='GET') {
				request.send(null);
			} else if (method == 'POST') {
				request.send(options.postData);
			}
		}catch (ex){
		}
	} else {
		setTimeout(request.abort, 15000);
		request.send(null);
		stateChange();
	}
}

function createCORSRequest(method, url, async){
	var xhr;
	if (window.XMLHttpRequest) {
		xhr=new XMLHttpRequest();
	} else try {
		xhr=new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try{xhr=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){xhr=null;}
	}
	try
	{
		if (method == 'undefined') {
			method = 'GET';
		}
		xhr.open(method, url, async);
		if (method.toUpperCase()=="POST") {
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		}
	} catch (e)
	{
		e.message;
	}
	return xhr;
}

String.prototype.trim = function() {
	return this.replace(/^\s+|\s+$/g, '');
}
