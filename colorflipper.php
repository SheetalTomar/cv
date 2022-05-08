<!DOCTYPE html>
<html>
<head>
	<title>Color Flipper</title>
</head>
<body>
	<h1>Color Flipper</h1>
	<button id="btn">Click Me</button>
	<script>
		let hex=[0,1,2,3,4,5,6,7,8,9,"A","B","C","D","E","F"];
		var btn=document.getElementById("btn");
        
        function random()
        {
        	return Math.floor(Math.random()* hex.length)};
        





     btn.addEventListener ("click",function(){

         	var hexcolor='#';
         	var i=0;
         	for(i=0;i<6;i++)
         	{
                hexcolor += hex[random()];

         	}
         
         document.body.style.backgroundColor = hexcolor;


     });        
         
         

	</script>

</body>
</html>