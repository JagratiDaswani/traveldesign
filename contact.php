<!doctype html>
<head>
    <title>contact  us</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contactus">
        
    </div>
    <br>
    <br>
    <br>
    
    <div class="contactcontainer">
        <form method="POST" target="_blank">
        <div class="row">
            <div class="column1">
                <label>Name:</label></div>
                <div class="column2">
                <input type="text"  name="name">
            </div>

            </div>

        
        <div class="row">
            <div class="column1">
                <label>Age:</label></div>
                <div class="column2">
                <input type="number" value="age" name="age" min=5 max=105 size=50 >

            </div>

        </div>
        <div class="row">
            <div class="column1">
                <label>E-mail:</label></div>
                <div class="column2">
                <input type="email"  name="email">
            </div>
            </div>

        
        <div class="row">
            <div class="column1">
                <label>Enter your queries:</label></div>
                <div class="column2">
                <textarea rows=8 cols=10>
                    </textarea>

            </div>

        </div>
        <div class="row">
        <div class="column2">
        <input type="submit" value="SUBMIT" style='width:100px;margin:0 50%;position:absolute;left:-50px;bottom:8px;'></div>
    </div>
        
    </form></div>
    <?php include'footer.php'; ?>
    