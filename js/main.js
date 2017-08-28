var current_screen = 1;

document.getElementById("left-switch").addEventListener("click", function (){
	var old = current_screen;
	if (current_screen > 0)
		current_screen--;
	change_screen(old);
});

document.getElementById("right-switch").addEventListener("click", function (){
	var old = current_screen;
	if (current_screen < 2)
		current_screen++;
	change_screen(old);
});

document.onkeydown = function (e) {
	var t;
	if (window.event)
		t = window.event.keyCode;
	else
		t = e.keyCode;
	console.log(t);
	if (t == 37)
		ch_scr_to(current_screen - 1);
	else if (t == 39)
		ch_scr_to(current_screen + 1);
	else if (t >= 49 && t <= 51)// 1 - 2 - 3
		ch_scr_to(t - 49);
	else if (t >= 97 && t <= 99)//1 - 2 - 3 numpad
		ch_scr_to(t - 97);

};

function ch_scr_to(n_screen)
{
	var old = current_screen;
	if (n_screen < 0)
		n_screen = 2;
	if (n_screen > 2)
		n_screen = 0;
	//console.log(n_screen);
	current_screen = n_screen;
	change_screen(old);
}

function change_screen(old)
{
	if (current_screen != old)
	{
		switch (old) {
			case 0:
				old_el = document.getElementById("galerie");
				break;
			case 1:
				old_el = document.getElementById("view")
				break;
			case 2:
				old_el = document.getElementById("filtres")
				break;
		}
		switch (current_screen)
		{
			case 0:
				new_el = document.getElementById("galerie");
				break;
			case 1:
				new_el = document.getElementById("view");
				break;
			case 2:
				new_el = document.getElementById("filtres");
				break;
		}
		switch_screen(old_el, new_el);
		var v_car = document.getElementById("carousel").children;
		for (i = 0; i < v_car.length; i++)
		{
			if (i == old)
				v_car[i].classList.remove("selected");
			if (i == current_screen)
				v_car[i].classList.add("selected");
		}
	}
}
