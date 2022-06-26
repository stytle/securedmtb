
function getPageAlertHtml(){
	return "<div class='alert-banner-item _scripted' data-expire='[[TIMEEXPIRE]]'> <div class='alert-banner-item-text' tabindex='0'><p>[[ALERTTEXT]]</p></div> <button class='alert-banner-item-close' aria-label='Alert Banner Close Button'> <svg class='alert-banner-icon -mobile'> <use xlink:href='#icon-close-thin'></use> </svg> <svg class='alert-banner-icon -desktop'> <use xlink:href='#icon-close'></use> </svg> </button> </div>";
}

function getLoginAlertHtml(){
	return "<div class='login-alerts-item _scripted' data-alert-index='0' data-expire='[[TIMEEXPIRE]]'>  <div class='login-alert-text'><p>[[LOGINALERTCOPY]]</p></div>  <button class='icon-close' aria-label='Close Alert'> <svg class='icon-close'> <use xlink:href='#icon-close'></use> </svg> </button></div> ";
}

function ShowPageAlert(a){		
	try {
		if(/true/gi.test(a.showpagealert) && (a.startdate == undefined ? true : CheckAlertActiveTime(a)) && hompages["forthispg"](a) ){			
			var makeAlert = function(){
				if( document.querySelectorAll(".component.alert-banner").length == 0 ){
					var alertDiv = document.createElement("div");
					alertDiv.setAttribute("class","component -no-standard-margin alert-banner");
					var hdr = document.querySelectorAll(".header")[0];
					hdr.insertBefore(alertDiv,hdr.children[0]);		
				}	
				var alerParent = document.querySelector(".component.alert-banner");	
				alerParent.innerHTML += String(getPageAlertHtml()).replace("[[ALERTTEXT]]",a.alertcopy);
			}
			makeAlert(),DownSlider(".alert-banner");
		}
	} catch(err){
		
	}
}

var hompages = {
	"personal":["personal","personal-customer","personal-mortgage","customer","homebuying","home-page"],
	"business":["business","BusinessCustomer","businesscustomer"],
	"commercial":["commercial"],
	"directurls":[],
	"forthispg":function(a){
		var curpg = window.location.pathname.split("/").pop().replace(".html","");
		var pgkey = "";
		var forpg = false;
		
		if( hompages[curpg] != undefined ){
			pgkey = curpg;
		} else if((/\.com.+[a-z0-9]+/gi.test(window.location.href) == false) && a.showonpersonalhp){ //this is for the homepage
			curpg = "home-page";
			pgkey = "personal";
		} else if( (a.directurls.length > 0) && (a.directurls.indexOf(curpg) > -1) ){
			hompages["directurls"] = a.directurls;
			pgkey = "directurls";
		} else if(/true/gi.test(a.showonpersonalhp)){
			pgkey = "personal";
		} else if(/true/gi.test(a.showonbusinesshp)){
			pgkey = "business";
		} else if(/true/gi.test(a.showoncommercialhp)){
			pgkey = "commercial";
		}
				
		if(pgkey != "" ){
			if(hompages[pgkey].indexOf(curpg) > -1){
				forpg = true;	
			}
		}	
		return forpg;
	}
}


function showScheduledAlerts(){
	try {
		var allSchedAlerts = alertobj.scheduled;
		for(var x in allSchedAlerts){
			var a = allSchedAlerts[x];
			ShowPageAlert(a);
			ShowLoginAlert(a);
		}	
	} catch(err){}
}

function CheckAlertActiveTime(a){
	var isActiveTime = false;
	var curpg = "";
	
	try {
		if(a.showpagealert || a.showloginealert){
			var today = new Date();
			//today.setHours(0,0,0,0);
			var startDate = new Date(a.startdate);
			var endDate = new Date(a.enddate);
			
			var hasStartDate = !isNaN(startDate.getDate());
			var hasEndDate = !isNaN(startDate.getDate());
			
			if( !hasStartDate && !hasEndDate ){ //show alert with no start or end time
				isActiveTime = true;
			} else {
				if(hasStartDate && !hasEndDate && (startDate <= today)){
					isActiveTime = true;
				} else if(!hasStartDate && hasEndDate && (today < endDate)){
					isActiveTime = true;
				} else if (hasStartDate && hasEndDate && (startDate <= today && today < endDate) ) {
					isActiveTime = true;
				}
			}
		}
	} catch(err){}	
	return isActiveTime;
}

function ShowLoginAlert(a){
	try {
		if(/true/gi.test(a.showloginealert) && (a.startdate == undefined ? true : CheckAlertActiveTime(a)) && hompages["forthispg"](a)){
			if( document.querySelectorAll(".alert-login-messages").length == 0 ){
				var alertDiv = document.createElement("div");
				alertDiv.setAttribute("class","alert-login-messages");
			} else {
				var alertDiv = document.querySelector(".alert-login-messages");
			}
			
			if( document.querySelectorAll(".login-alerts").length == 0 ){
				var alertDivInner = document.createElement("div");
				alertDivInner.setAttribute("class","login-alerts");
				alertDiv.insertBefore(alertDivInner,alertDiv.children[0]);		
						
				var hdr = document.querySelectorAll(".login-scroll")[0];
				hdr.insertBefore(alertDiv,hdr.children[0]);		
			}
			
			var alerParent = document.querySelector(".login-alerts");	
			alerParent.innerHTML += String(getLoginAlertHtml()).replace("[[LOGINALERTCOPY]]",a.alertcopy);	
		}
	} catch(err){
		
	}
}

var nowAlertTemplate = function(){
	return {
		"alerttype": "",
		"alertcopy": "",
		"showpagealert": "false",
		"showloginealert": "false",
		"showonpersonalhp": "false",
		"showonbusinesshp": "false",
		"showoncommercialhp": "false",
		"directurls": [],
		"status": "red"
	}
}

function showNowAlert(){
	var nowAlert = nowAlertTemplate();
	alertobj["nowAlert"] = nowAlert;
	
	[].forEach.call(nowAlert["directurls"],function(a,b){
		var rgx = new RegExp(a,"gi");
		if(rgx.test(window.location.href)){
			nowAlert.showpagealert = true;
		}
	});
	
	
	if(  /true/gi.test(nowAlert.showpagealert) ){
		ShowPageAlert(nowAlert);	
	}
	
	if(  /true/gi.test(nowAlert.showpagealert) ){
		ShowLoginAlert(nowAlert) 
	}
}

function DownSlider(p,k){ //p = parentSelector, k = kid selector
	try {
		var sliderParents = document.querySelectorAll(p);		
		[].forEach.call(sliderParents,function(sliderParent,i){			
			var sliderKids =  k != undefined ? document.querySelectorAll(k) : sliderParent.children;
			var allKidsHeight = 0;			
			
			var setMarginIni = function(){			
				[].forEach.call(sliderKids,function(a,b){
					allKidsHeight += Number(a.offsetHeight);
					if((b == sliderKids.length-1)  ){
						sliderParent.setAttribute("data-height",allKidsHeight+"px");
						sliderParent.style.marginTop = "-"+sliderParent.attributes["data-height"].value;
					}
				});		
			}
			
			var setOpenMargin = function(){		
				setTimeout(function(){ 
					sliderParent.style.marginTop = "0%";
					sliderParent.style.position = "relative";
					sliderParent.style.opacity = "1";						
				}, 1000);
			};
			
			setMarginIni(),setOpenMargin();	
		});
	} catch(err){}	
}

function removeLoginAlert(){
	[].forEach.call(document.querySelectorAll(".login-alerts-item"),function(a,b){
		if(/browser cache/gi.test(a.textContent)){
			a.remove();
		}
	})
}


window.addEventListener("DOMContentLoaded",function(){
	var moveAlertBanner = function(){
		try {
			if(document.querySelectorAll(".alert-banner")[0]){
				document.querySelectorAll(".header")[0].append(document.querySelectorAll(".alert-banner")[0]);
			}			
		} catch(err){
			
		}
	}	
	showScheduledAlerts(),
	showNowAlert(),
	moveAlertBanner();
	removeLoginAlert();
})