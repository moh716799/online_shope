<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineStore</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        
        <div class="maine">
            <form action="insert.php"  method="post">
                <h2>My Shope</h2>
                <img src="White Typography Initial BH Logo.png" alt="logo" width="60%" height="100%">
                <br>
                <input type="text" name="name">
                <br>
                <input type="text" name="pirce">
                <br>
                <input type="file" id="file" name="image" style="display:none">
                <label for="file">إرفع صوره المنتج</label>
                <button name="upload">رفع المنتج</button>
                <br><br>
                <a href="products.php">تصفح جميع المنتجات</a>
            </form>
            
        </div>
        <p> Developer By Mohammed </p>
    </center>
</body>
</html>