function loadFile()
{
	var textFile = new XMLHttpRequest();
	textFile.open("GET", "file://files/data/a1.txt", false);
	textFile.onreadystatechanged = function()
	{
		if(textFile.readyState === 4)
		{
			if(textFile.status === 200 || textFile.status == 0)
			{
				var content = textFile.responseText;
				alert(content);
			}
		}
	};
	textFile.send(null);
}