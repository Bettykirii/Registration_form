<html>
	<head>
	   <title>Students Registration Details</title>
	   <link rel="stylesheet" href="w3.css"></link>
	   <style>
	   	th,td,tr
	   	{
	   		border: 1px solid black;
	   		margin: 5px;
	   		padding: 10px;
	   		border-spacing: 1px;
	   	}
	   </style>
	   <script src="jquery-3.3.1.min.js"></script>
	   <script>
	   	function check(id)
	   	{
	   		var value=id;
	   		alert(value);
	   	}
	   	function dotest(element,event)
	   	{
	   		var name=element.getAttribute("name");
	   		var id=element.getAttribute("id");
	   		var cont=element.textContent;
	   		if(!isNaN(cont))
	   		{
	   			cont=parseFloat(cont);
	   		}
	   		cont=cont.split(">").pop();
	   		//window.location.href="edit.php?id="+id+"&&column="+name+"&&content="+cont;
	   		$.post("edit.php",
			    {
				    column:name,
	             id:id,
	             content:cont,
			    },
			    function(data,status)
			    {})
			}
	   </script>
   </head>
   <body style="background:brown;">
		<div id="header"class="w3-container w3-black" style="margin-top:5px;width:70%;margin-left:15%;border-radius:10px;">
			<p style="text-align:center;margin-top:25px;">STUDENT DATA ENTRIES</p>
		</div>    		
      <div id="body" class="w3-container w3-orange" style="width:70%;border-radius:15px;margin-left:15%;margin-top:15px;">
			<a href="entry.html" class="w3-button w3-teal" style="margin-top:2%;border-radius:10px;">NEW</a>
			<table style="width:80%;margin-left:10%;margin-top:2%;margin-bottom:7.5%;border-spacing:1px;">
				<tr>
			    <th>ID</th>
			    <th>Name</th>
			    <th>ID Number</th> 
			    <th>Email Address</th>
			    <th>Gender</th>
			    <th>Options</th>
			  </
			  tr>
				<?php
				include('conn.php');
				$query="SELECT * FROM `students`";
				$result=mysqli_query($conn,$query);
				if($result)
				{
				    while($row=$result->fetch_assoc())
		      	 {
						//echo "".$row[0],$row[1],$row[2],$row[3],$row[4]."</br>";
						echo "<tr><td id='collect' name='id'>".$row['id']."</td><td id=".$row['id']." name='name' onkeyup='javascript:dotest(this,event);' contenteditable='true'>>".$row['name']."</td><td id=".$row['id']." name='id_number' onkeyup='javascript:dotest(this,event);' contenteditable='true'>>".$row['id_number']."</td><td id=".$row['id']." name='email_addr' onkeyup='javascript:dotest(this,event);' contenteditable='true'>>".$row['email_addr']."</td><td id=".$row['id']." name='gender' onkeyup='javascript:dotest(this,event);' contenteditable='true'>>".$row['gender']."</td><td><a href='delete.php?id=".$row['id']."' class='w3-button w3-teal'>DELETE</a></td></tr>";
  			       }
		   	}else
				{
					echo "failed to load";
				}
			?>
			</table>
      </div>
	</body>
</html>

