searchtext = "Search..."
function inputblur(input)
{
	if(input.value.trim() == "")
	{
	input.value = searchtext;
	input.style.color = "grey";
	}
}
function inputfocus(input)
{
	if(input.value.trim() == searchtext)
	{
		input.value='';
		input.style.color='black'
	}
}
function textinput()
{
	inputtext = document.getElementById("textinput")
	if(inputtext.value = searchtext)
		inputtext.style.color ="grey";
}