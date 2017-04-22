<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="js/jquery-3.1.1.min.js"></script>
	    <script src="js/validate.js"></script>
        <script>
         
            </script>
    </head>
    
    <body>
        <?php require ('php/nav.php'); ?>
        <div id="wrapper">
        <div id="updateForm">
        <form id="form" method="post" >
            <label>New Subgenre</label><br/>
            <input type="text"      name="name"           placeholder="Subgenre Name"           class="long"          id="name"> 
            <input type="text" name="id" placeholder="ID" class="short" id="id"><br/>
            <input type="submit"    name="submit" value="Submit"                        class="submit btn"          id="submit" >  
            <input type="button"    name="clear"    value="Clear"                           class="clear btn"           id ="clear" > 
        
        </form>
        </div>
        </div>
        <?php include("php/footer.php");?>
        <script type="text/javascript">
                var el = document.getElementById('bd');
                el.onchange = function() {
                    if (el.value === '') {
                        el.classList.add("empty");
                    } else {
                        el.classList.remove("empty");
                    }
                }
        </script>
    </body>
</html>