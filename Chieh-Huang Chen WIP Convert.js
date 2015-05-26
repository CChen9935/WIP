var NONE = -1;
function convertdataintoactual(data)
{
	while(data.indexOf("%40") != NONE)
		data = data.replace("%40","@");
	while(data.indexOf("+")!= NONE)
		data = data.replace("+"," ");
	return data;
}
function checkiftherecom(data)
{
	while(data.indexOf(".")==NONE)
		data = data.concat(".com");
	return data;
}