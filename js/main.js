
///@description: JS pour le menu deroulant
sfHover = function()
{
	var sfEls = document.getElementById("menu").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++)
	{
		sfEls[i].onmouseover=function(){ this.className+=" sfhover"; }
		sfEls[i].onmouseout=function() { this.className=this.className.replace(new RegExp(" sfhover\\b"), ""); }
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);


function onglet_camera()
{
	document.querySelector('#camera_zone').style.display = "block";
	document.querySelector('#galerie').style.display = "none";
	document.getElementById("ong_cam").className = "active";
	document.getElementById("ong_gal").className = "";
}

function onglet_galerie()
{
	var gal = document.querySelector('#galerie');
	if (gal.hasChildNodes())
	{
		document.querySelector('#camera_zone').style.display = "none";
		document.querySelector('#galerie').style.display = "block";
		document.getElementById("ong_gal").className = "active";
		document.getElementById("ong_cam").className = "";
	}
}
