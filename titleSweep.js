var msg  = document.title;
var speed = 200;
var endChar = " | ";
var pos = 0;

async function moveTitle() {
	var ml = msg.length;
	
	title = msg.substr(pos,ml) + endChar + msg.substr(0,pos);
	document.title = title;
	
	if (pos == ml) {pos=0;}
	else {
		if (pos == 0) {await sleep(5000);}
		pos++;
	}
	
	window.setTimeout("moveTitle()",speed);
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

moveTitle();