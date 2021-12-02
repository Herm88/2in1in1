<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "style.css">
<title>2 in 1 in 1</title>
</head>
<body>
<div>
	<table style = "width:100%" >
		<tr>
			<th> <a href = "main_2in1.html" ><h3>Home</h3></a></th>
			<th> <a href = "Update.html" ><h3>Update</h3></a></th>
			<th> <a href = "Contact.html" ><h3>Contact</h3></a></th>
		</tr>	
	</table>
	
	<h4 text-align: "center">Update and Delete</h4>
	
	<table style = "width:100%" >
		<tr>
			<th><br>
			<form action="du.php" method="POST">
                                        
                                        
                                            Owners Id to update<br> <input type="name" name="id" required=""> <br><br>

                                            Products Name eg.(CAR,AIRCON,ETC)<br> <input type="text" name="product"placeholder = "Update you bought" required=""> <br><br>

                                            Quantity((CAR(1)), (AIRCON(2)))<br> <input type="text" name="quantity"placeholder = "Update number of products" required=""><br><br>

                                            Total Price ((CAR(1) 1000,000),(AIRCON(2)100,000),(TOTAL PRICE))<br><input type="text" name="price" placeholder="Update price" required=""> <br><br>

                                            <button type="submit" name="update" value="update" value="refresh Page " onclick="refresh">Update</button>
                                    </form>
	</th></tr>	
	</table><br>
	<table align="center" border="1px" style="width: 1000px; line-height: 50px;background-color: #3e5e5b;color: white">
                                   <tr>
                                       <th colspan="5" align="center">Costumer's Products</th>
                                       <form action="delete.php" method="POST">
                                       <th  align="center">Put id number to delete<br><input type="text" name="idnumber" size="20px"></th>
                                       
                                   </tr>

                                   <t>
                                        <th align="center">Id</th>
                                        <th align="center">Owners Name</th>
                                        <th align="center">Products</th>
                                        <th align="center">Quantity</th>
                                        <th align="center"> Total Price</th>
                                        
                                        <th align="center"><button type="submit" name="update" value="update" value="refresh Page " onclick="refresh" >Click me to delete</button></th>
                                   </t>
                                        </form>
                                   <?php
                                   

                                        while($rows=mysqli_fetch_assoc($result))
                                        {
                                    ?>   

                                           
                                            <tr>
                                                <td align="center"><?php echo $rows['id'] ?></td>
                                                <td align="center"><?php echo $rows['name'] ?></td>
                                                <td align="center"><?php echo $rows['products'] ?></td>
                                                <td align="center"><?php echo $rows['quantity'] ?></td>
                                                <td align="center"><?php echo $rows['total'] ?></td>
                                                
                                            </tr>     
                                     <?php       
                                        }
                                    ?>
                               </table>
	<img src="companyLogo.jpg" width="100%" height="190" style="margin-top:5px; margin-bottom: 0px"  style="border-radius: 60px" style="display: flex;">

</div>
</body>
</html>