<html lang="en">
    <head>
        <meta name="description" content="Online Book Store" />
        <meta name="keywords" content="book, store, shop, books, novels, book store" />
        <meta charset="utf-8" />
        <title>Online Book Store</title>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="shortcut icon" >
    </head>
    
    <body>
         <?php require ('php/nav.php'); ?>
        
        <aside>
            <h3>Orders</h3>
            
            <select id="open" name="open" class="filter">
        
            <option value="">----------------Open-----------------</option>
            <option value="02282017">02/28/2017</option>
            <option value="02262017">02/26/2017</option>
            
        
            </select>
            
            <select id="genre" name="genre" class="filter">
        
            <option value="">-------------Completed----------------</option>
            <option value="01202017">01/20/2017</option>
            <option value="12312016">12/31/2016</option>
            <option value="10222016">10/22/2016</option>
            <option value="06182016">06/18/2016</option>
            <option value="05052016">05/05/2016</option>
        
        </select>
            
            <select id="price" name="price" class="filter">
        
            <option value="">---------------Recent----------------</option>
            <option value="02282017">02/28/2017</option>
            <option value="02262017">02/26/2017</option>
            <option value="01202017">01/20/2017</option>
            <option value="12312016">12/31/2016</option>
            <option value="10222016">10/22/2016</option>
            <option value="06182016">06/18/2016</option>
            <option value="05052016">05/05/2016</option>
        
        </select>
            
        </aside>
        
        <main>
            <h2>Order Details</h2>
            <h4>10/22/2016</h4>
            <p>
                Status: Completed <br/>
                Shipping Date: 10/24/2016 <br/>
                Delivery Date: 10/28/2016
            </p>
            
            <div class="book">
            <table class="orderDetail">
            
                <tr>
                    <td class="coverImage"><img src="img/bookcovers/theshack.jpg" class="bookCover"></td>
                    <td colspan="3" class="description">
                        <h4>The Shack: Where Tragedy Confronts Eternity</h4>
                        <h5>William Paul Young</h5>
                        </td>
                    
                </tr>
                <tr class="info">
                    
                    <td colspan="4" class="genre">Qty: 1</td>
                    
                  
                </tr>
                <tr class="buy">
                <td colspan="3" class="price"> $9.17</td>
                
                
                </tr>
                </table>
                </div>
            
            <hr>
            
            <div class="book">
            <table class="orderDetail">
            
                <tr>
                    <td class="coverImage"><img src="img/bookcovers/expectingtodie.jpg" class="bookCover"></td>
                    <td colspan="3" class="description">
                        <h4>Expecting to Die</h4>
                        <h5>Lisa Jackson</h5>
                        </td>
                    
                </tr>
                <tr class="info">
                
                    <td colspan="4" class="genre">Qty: 2</td>
                    
                  
                </tr>
                <tr class="buy">
                <td colspan="3" class="price"> $19.98</td>
                
                
                </tr>
                </table>
                </div>
            
            <hr>
            
            <p class="total">
            
            Subtotal: $29.15 <br/>
            Tax: $2.40 <br/>
            Shipping: $3.99 <br/>
            
            </p>
            <p class="total bold">
            Total: $35.54
            </p>
            
               
                   
        </main>
        
        
    </body>
</html>