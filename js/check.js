function checkPassword(el, feedback)
{
	const regex = /^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/;
	const str = el.value;
	let m;

	update_feedback(el, false);
	if ((m = regex.exec(str)) !== null)
	{
		m.forEach((match, groupIndex) => {
			update_feedback(el, true)
		});
	}
}

function checkUsername(el)
{
	const regex = /^\w[\w\d]{6,}$/;
	const str = el.value;
	let m;

	update_feedback(el, false);
	if ((m = regex.exec(str)) !== null)
	{
		m.forEach((match, groupIndex) => {
			update_feedback(el, true)
		});
	}
}

function checkMail(el)
{
	const regex = /^([a-z0-9]+(?:[._-][a-z0-9]+)*)@([a-z0-9]+(?:[.-][a-z0-9]+)*\.[a-z]{2,})$/i;
	const str = el.value;
	let m;

	update_feedback(el, false);
	if ((m = regex.exec(str)) !== null)
	{
		m.forEach((match, groupIndex) => {
			update_feedback(el, true)
		});
	}
}

function update_feedback(el, state)
{
	var feedback;

	var tmp = el.parentNode.childNodes;
	var fb;

	for (var i = 0; i < tmp.length; ++i) {
		var item = tmp[i];  // Calling myNodeList.item(i) isn't necessary in JavaScript
		if (item.nodeName == "SPAN")
		{
			if (item.classList.contains("input-addon"))
				fb = item;
		}
	}
	fb.classList.remove("success");
	fb.classList.remove("error");

	if (state == true)
	{
		fb.classList.add("success");
		fb.innerHTML = "&#10004;";
	}
	else
	{
		fb.classList.add("error");
		fb.innerHTML = "&#10008;";
	}

}
