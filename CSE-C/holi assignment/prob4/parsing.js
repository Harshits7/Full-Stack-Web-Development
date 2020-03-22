var jsondata = [];
fetch("./parse.json").then(function(data) {
	return data.json();
}).then(function(data){jsondata = data.body});
