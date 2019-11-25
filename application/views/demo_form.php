<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>
	<form action="http://164.77.122.66:85/ProductsAPIv2/index.php/API/v1/Products/updateStatus?productCodeBar=<?php echo $_POST['productCodeBar']?>&status=<?php echo $_POST['status']?>" method="post">
		<input type="hidden" id="productCodeBar" name="productCodeBar" value="200000002006536">
		<input type="hidden" id="status" name="status" value="1">
		<input type="submit" name="submit">
	</form>

</body>
</html>