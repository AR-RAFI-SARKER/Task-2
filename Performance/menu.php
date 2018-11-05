<html>
  <head>
       <title> Menu </title>
	   
  </head>
  
  
  
      <body>
	     
		 
		 
		 
		  <?php
		  
		  if(isset($_REQUEST['submit']))
			  
			  {
				 $xml= new DOMDocument("1.0","UTF-8");
				 $xml->load("Menu.xml");
				 
				 
				 //$rootTag= $xml->getElementsByTagName["document"]->item(0);
				 $dataTag = $xml->createElement("data");
				 
				 $menuTag = $xml->createElement("menu",$_POST['menu']);
				 $itemTag = $xml->createElement("item",$_POST['item']);
				 $priceTag = $xml->createElement("Price",$_POST['price']);
				 
				 $dataTag->appendchild($menuTag);
				 $dataTag->appendchild($itemTag);
				 $dataTag->appendchild($priceTag);
				 
				 $xml->documentElement->appendchild($dataTag);
				 
				 $xml->save("Menu.xml");
				 
			  }
		  ?>
		 <form action="menu.php" method="post">
		 MENU:
		 <input type="text" name="menu"> <br>
		 <br>
		 ITEM:
		 <input type="text" name="item"> <br>
		 <br>  PRICE:
		 <input type="text" name="price"> <br>
		 
		 <br><input type="submit" name="submit" value="add"/> 
		 
	    
	  
	  
	  
	  </body>
</html>
