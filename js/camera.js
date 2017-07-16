(function() {

  var streaming = false,
      video        = document.querySelector('#video'),
      cover        = document.querySelector('#cover'),
      canvas       = document.querySelector('#canvas'),
      photo        = document.querySelector('#photo'),
      startbutton  = document.querySelector('#capture_button'),
      width = 720,
      height = 0;

  navigator.getMedia = ( navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia ||
                         navigator.msGetUserMedia);

  navigator.getMedia(
    {
      video: true,
      audio: false
    },
    function(stream) {
      if (navigator.mozGetUserMedia) {
        video.mozSrcObject = stream;
      } else {
        var vendorURL = window.URL || window.webkitURL;
        video.src = vendorURL.createObjectURL(stream);
      }
      video.play();
    },
    function(err) {
      console.log("An error occured! " + err);
    }
  );

	video.addEventListener('canplay', function(ev){
	if (!streaming)
	{
		height = video.videoHeight / (video.videoWidth/width);
//		video.setAttribute('width', width);
//		video.setAttribute('height', height);
//		canvas.setAttribute('width', width);
//		canvas.setAttribute('height', height);
		video.setAttribute('width', "80%");
		video.setAttribute('height', "80%");
		canvas.setAttribute('width', "80%");
		canvas.setAttribute('height', "80%");
		streaming = true;
	}
  }, false);

  function takepicture() {
    canvas.width = width;
    canvas.height = height;
    canvas.getContext('2d').drawImage(video, 0, 0, width, height);
    var data = canvas.toDataURL('image/png');
    photo.setAttribute('src', data);
	var galerie = document.querySelector('#galerie');
//	if (galerie.hasChildNodes())
//		galerie.innerText = "";
//	var nimg = document.createElement("img");
//	nimg.setAttribute('src', data);
//	galerie.insertBefore(nimg, galerie.firstChild);
	galerie.insertBefore(galerie_element(data), galerie.firstChild);
//	galerie.appendChild(nimg);

  }

  startbutton.addEventListener('click', function(ev){
      takepicture();
    ev.preventDefault();
  }, false);

  video.addEventListener('click', function(ev){
  	takepicture();
    ev.preventDefault();
  }, false);


})();
