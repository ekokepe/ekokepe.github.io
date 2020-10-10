
var getStyle = function(element, property) {
    return window.getComputedStyle ? window.getComputedStyle(element, null).getPropertyValue(property) : element.style[property.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase(); })];
};

function getcurrentSlideNum (a) {
	var i=0, j=-1;
	var x = document.getElementsByClassName("ph"+a+"_pic");
	
	while (i<x.length && j==-1) {
		if (parseFloat(getStyle(x[i], "left").replace("px",""))==0) {j=i;}
		else {i++}
	}
	
	return j+1;
}

function changeSlide (a,n) {
	var i, j=0;
	var x = document.getElementsByClassName("ph"+a+"_pic");
	var m = getcurrentSlideNum(a); //current slide num
	var dur=400; //in ms
	var parts=50; //how many parts will be moved in one animation

	if (m!=n && m!=0) {
		var y = document.getElementsByClassName("ph"+a+"_desc");
		var z = document.getElementsByClassName("nav"+a);
		var leb0 = Math.round(parseFloat(getStyle(x[0], "width").replace("px",""))*1000)/1000

		//calculate movement direction and amount, in slide unit
		var mov = m-n;
		if (Math.abs(m-n)>x.length/2) {
			mov = x.length-Math.abs(m-n);
			if (m>n) {mov*=-1;}
		}

		//calibrate n
		if (n<1) {n+=x.length;}
		if (n>x.length) {n-=x.length;}

		//update active slide indicator
		for (i=0; i<x.length; i++) {
			if (i==n-1) {
				z[i].className = z[i].className.replace(" pasnav", " actnav");
			} else {
				z[i].className = z[i].className.replace(" actnav", " pasnav");
			}
		}		

		//re-position current slide to 0

		//re-order slides
		var curpos=parseFloat(getStyle(x[m-1], "left").replace("px",""));
		for (i=0; i<x.length; i++) {
			var thispos=parseFloat(getStyle(x[i], "left").replace("px",""));
			if (mov>0 && thispos>curpos) { //to left
				x[i].style.left=(parseFloat(getStyle(x[i], "left").replace("px","")) - leb0*x.length) + "px";
				y[i].style.left=x[i].style.left;
			} else if (mov<0 && thispos<curpos) { //mov<0, to right
				x[i].style.left=(parseFloat(getStyle(x[i], "left").replace("px","")) + leb0*x.length) + "px";
				y[i].style.left=x[i].style.left;
			}
		}

		//move slides
		var leb = leb0*mov;
		var fac = leb/parts;
		var id = setInterval(frame, dur/parts);
		function frame() {
			if (j==parts && parseFloat(getStyle(x[n-1], "left").replace("px",""))==0) { //stop moving
				clearInterval(id);
			} else if (j==parts && parseFloat(getStyle(x[n-1], "left").replace("px",""))!=0) { //calibrate current slide left position to 0
				var calib=parseFloat(getStyle(x[n-1], "left").replace("px",""));
				for (i=0; i<x.length; i++) {
					x[i].style.left=(parseFloat(getStyle(x[i], "left").replace("px","")) - calib) + "px";
					y[i].style.left=x[i].style.left;
				}	
			} else { //move the slides
				j++; 
				for (i=0; i<x.length; i++) {
					x[i].style.left=(parseFloat(getStyle(x[i], "left").replace("px","")) + fac) + "px";
					y[i].style.left=x[i].style.left;
				}	
			}
		}
	} else {
		//if current slide's left is not 0
		//re-position current slide to 0
	}
}

function repositionSlide(a) {
	var x = document.getElementsByClassName("ph"+a+"_pic");
	
	if (x.length>1) {
		//re-position slides
		var y = document.getElementsByClassName("ph"+a+"_desc");
		var n = getcurrentSlideNum(a);
		var wid = Math.round(parseFloat(getStyle(x[n-1], "width").replace("px",""))*1000)/1000;
		
		for (i=0; i<x.length; i++) {
			x[i].style.left=((i-n+1) * wid) + "px";
			y[i].style.left=x[i].style.left;
		}
	}
}

window.onresize =  function(){repositionSlide(1); repositionSlide(2);}