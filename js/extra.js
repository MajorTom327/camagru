function fadeIn(element)
{
	element.style.display = "block";
	element.style.opacity = 0.05;
	var it_in = setInterval(function (){
		element.style.opacity = Number(element.style.opacity) + 0.05;
		if (element.style.opacity > 1.0)
		{
			element.style.opacity = 1.0;
			clearInterval(it_in);
		}
	}, 5);
}

function fadeOut(element)
{
	element.style.display = "block";
	element.style.opacity = 1.0;
	var it_out = setInterval(function (){

		element.style.opacity -= 0.05;
		if (element.style.opacity < 0.01)
		{
			element.style.opacity = 0.0;
			element.style.display = "none";
			clearInterval(it_out);
		}
	}, 10);
}

function switch_screen(old_el, new_el)
{
	var delay = 25
	var leveling = 0.05;
	old_el.style.display = "block";
	old_el.style.opacity = 1.0;
	var it_out = setInterval(function (){

		old_el.style.opacity -= leveling;
		if (old_el.style.opacity < 0.01)
		{
			old_el.style.opacity = 0.0;
			old_el.style.display = "none";
			clearInterval(it_out);
			new_el.style.display = "block";
			new_el.style.opacity = leveling;
			var it_in = setInterval(function (){
				new_el.style.opacity = Number(new_el.style.opacity) + leveling;
				if (new_el.style.opacity > 1.0)
				{
					new_el.style.opacity = 1.0;
					clearInterval(it_in);
				}
			}, delay);
		}
	}, delay);
}
