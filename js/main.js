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
	}
}
