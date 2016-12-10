var dataURL = '#';
var url = '';

function save() {
	document.getElementById("canvasimg").style.border = "2px solid";
    dataURL = canvas.toDataURL();
    url = document.getElementById("canvasimg").src.replace(/^data:image\/[^;]/, dataURL);
    document.getElementById("sgn-form").submit();
	// window.open(url);
 //    alert(dataURL);
    // alert(dataURL);
    // document.getElementById("canvasimg").src = dataURL;
    // document.getElementById("canvasimg").download = 'ceva.png';
}

function returnData() {

	// alert(dataURL);
	alert(dataURL);
	return dataURL;
}