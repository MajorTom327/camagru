function galerie_element(data)
{
	var e_ban;
	var b_save;
	var b_del;

	var el_padre = document.createElement("div");
	nimg = document.createElement("img");
	nimg.setAttribute('src', data);
	//nimg.style.backgroundImage = "url(data:image/png;base64," + data + ")";

	e_ban = document.createElement("div");
		b_save = document.createElement("button");
			b_save.innerHTML = "·";
		b_del = document.createElement("button");
			b_del.innerHTML = "×";
		e_ban.appendChild(b_save);
		e_ban.appendChild(b_del);
		b_del.addEventListener("click", function(){
				el_padre.remove();
				//this.parentNode.parentNode.removeChild(this.parentNode.parentNode);
		}, false);
		e_ban.setAttribute("class", "img-ban");
//		e_ban.style.width = "100%";
//		e_ban.style.position = "relative";

	el_padre.appendChild(e_ban);
	el_padre.appendChild(nimg);
//	nimg.appendChild(e_ban);
	nimg.setAttribute("class", "gallery-img");
	el_padre.setAttribute("class", "gallery-img");
	return (el_padre);
//	return (nimg);
}
