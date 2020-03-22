<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id='abc'></p>
<script type="text/javascript" src="jsondata.js"></script>
<script type="text/javascript">
  var txt="";
  var p = prompt("Please enter your name:", "keyword");

  if (p == null || p == "") {
    document.getElementById("abc").innerHTML = "window.close() does'nt work in all browser due to security reason please try in internet explorel";
    window.close();
  } else {
    txt = p;
  var str = "";
  for(i=0;i<data.length;i++)
  {
	  	title = data[i]["title"]; // z algorithm to match keyword from title
	  	var temp = title;
	  	title = txt + "$"+ title;
	  	var l = 0;
	  	var r = 0;
	  	var counter = 0;
	  	var z = new Array(title.length).fill(0);
	  	for(j=1;j<title.length;j++)
	  	{ 
	        if (j > r) 
	        { 
	            l = j;
	            r = j; 
	  			while (r<title.length && title[r-l] == title[r]) 
	                r++; 
	            z[j] = r-l; 
	            r--; 
	        } 
	        else
	        { 
	            k = j-l;  
	            if (z[k] < r-j+1) 
	                z[j] = z[k];  
	            else
	            { 
	                l = j; 
	                while (r<title.length && title[r-l] == title[r]) 
	                    r++; 
	                z[j] = r-l; 
	                r--; 
	            } 
	        } 
	    } 
	    for (k = 0; k < z.length; k++) 
    	{ 
        	if (z[k] == txt.length)
            	counter++;
   		}

   		//body
   		body = data[i]["body"]; // z algorithm to match keyword from body
	  	body = txt + "$"+ body;
	  	var l = 0;
	  	var r = 0;
	  	z.fill(0);
	  	for(j=1;j<body.length;j++)
	  	{ 
	        if (j > r) 
	        { 
	            l = j;
	            r = j; 
	  			while (r<body.length && body[r-l] == body[r]) 
	                r++; 
	            z[j] = r-l; 
	            r--; 
	        } 
	        else
	        { 
	            k = j-l;  
	            if (z[k] < r-j+1) 
	                z[j] = z[k];  
	            else
	            { 
	                l = j; 
	                while (r<body.length && body[r-l] == body[r]) 
	                    r++; 
	                z[j] = r-l; 
	                r--; 
	            } 
	        } 
	    } 
	    for (k = 0; k < z.length; k++) 
    	{ 
        	if (z[k] == txt.length )
            	counter++;
   		} 
   		if(counter != 0)
   		{
			str += data[i]["userId"]+"  "+data[i]["id"]+"  "+counter+"<br>";
			console.log(str);
   		}
	} 
  	
	document.getElementById('abc').innerHTML = str;
  }
</script>
</body>
</html>
