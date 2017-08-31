var els = document.getElementsByClassName("close-modal");
for (i = 0, len = els.length; i < len; i++)
{
	if (els[i].addEventListener)
		els[i].addEventListener("click", closeModal, false);
	else
		console.error("Could not attach event");
}



function closeModal()
{
	console.log("HEY");
	var els = document.getElementsByClassName("modal");
	for (i = 0, len = els.length; i < len; i++)
		els[i].style.display = "none";
	els = document.getElementsByClassName("modal-background");
	for (i = 0, len = els.length; i < len; i++)
		els[i].style.display = "none";
}
