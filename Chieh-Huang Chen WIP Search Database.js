var NONE = -1;
function byName(text,dbase)
{
	var result = new Array();
	text = text.split(" ");
	
	for(var i=0;i<dbase.length;i++)
	{
		for(var k=0;i<text.length;i++)
		{
			if(dbase[i].name.indexOf(text[k])!=NONE)
				result.push(dbase[i]);
			else
				continue;
		}
	}
	result.sort(function(a.name,b.name){return a.name-b.name});
	return result;
}
function byType(text,dbase)
{
	var result = new Array();
	text = text.split(" ");
	
	for(var i=0;i<dbase.length;i++)
	{
		for(var k=0;i<text.length;i++)
		{
			if(dbase[i].itemtype.indexOf(text[k])!=NONE)
				result.push(dbase[i]);
			else
				continue;
		}
	}
	
	result.sort(function(a.itemtype,b.itemtype){return a.itemtype-b.itemtype});
	return result;
}
function bySeller(text,dbase)
{
	var result = new Array();
	text = text.split(" ");
	
	for(var i=0;i<dbase.length;i++)
	{
		for(var k=0;i<text.length;i++)
		{
			if(dbase[i].sellername.indexOf(text[k])!=NONE)
				result.push(dbase[i]);
			else
				continue;
		}
	}
	result.sort(function(a.sellername,b.sellername){return a.sellername-b.sellername});
	return result;
}
function sortByPrice(rawresult,price)
{
}