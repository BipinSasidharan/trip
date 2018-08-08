<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            body {
                font-size: 120%;
                background: #F8F8FF;
            }

            .header {
                width: 30%;
                margin: 50px auto 0px;
                color: white;
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
            }
            form, .content {
                width: 30%;
                margin: 0px auto;
                padding: 20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }
            .input-group {
                margin: 10px 0px 10px 0px;
            }
            .input-group label {
                display: block;
                text-align: left;
                margin: 3px;
            }
            .input-group input {
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid gray;
            }
            .btn {
                padding: 10px;
                font-size: 15px;
                color: white;
                background: #5F9EA0;
                border: none;
                border-radius: 5px;
            }
            .error {
                width: 92%; 
                margin: 0px auto; 
                padding: 10px; 
                border: 1px solid #a94442; 
                color: #a94442; 
                background: #f2dede; 
                border-radius: 5px; 
                text-align: left;
            }
            .success {
                color: #3c763d; 
                background: #dff0d8; 
                border: 1px solid #3c763d;
                margin-bottom: 20px;
            }
</style>
         
    </head>
    <body>
         <div class="header">
  	<h2>Expense</h2>
  </div>
        <form  action="expense.php" method="post">

        
        <div class="input-group">
                <label>Expense Name</label>
                <input type="text" name="EName" required>
            </div>

        <div class="input-group">
                <label>Expense Amount</label>
                <input type="text" name="EAmount" required>
            </div>


            <div class="input-group">
                <label>Expense Date</label>
                <input type="Date" name="EDate" required>
            </div>
            
             <div class="dropdown">
                <label>Category Name</label>
                <input type="text" name="Cname" required>
            </div>
            
            
        
        
        <div class="input-group">
                <button type="submit" class="btn" name="Expense" >Button</button>
            </div>
        
        </form>
        </body>
</html>
