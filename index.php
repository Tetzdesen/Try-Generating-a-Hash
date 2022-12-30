<html>

<head>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Spray+Paint&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300&family=Rubik+Spray+Paint&family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Saira Stencil One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1> Try Generating a Hash </h1>
    </header>
   
    <div class="main">
     
        <form  method="POST" action="process.php" id="form" class="form">
           
            <div class="div-text">
                
                <p id="p1" name="p"> Select the hash algorithm  </p>
                
                <select id="select" name="select">
                    <option value="none" selected>NONE</option>
                    <option value="md4">MD4</option>
                    <option value="md5">MD5</option>
                    <option value="sha1">SHA-1</option>
                    <option value="sha256" >SHA-256</option>
            
                </select>

            </div>
       
            <div class="div-text">
                <p id="message"> Message </p>
                <input type="text" id="message" name="message" > 
                <button> Generate </button>

            
            </div>
     
        </form>

     
            <div class="div-text2">

    
            <p> Hash   
        
        <?php
            session_start();
            $algoritmo = "";
            $_SESSION['algoritmo'] = $_GET['algoritmo'];
                if($_SESSION['algoritmo']){
                    $algoritmo = $_SESSION['algoritmo'];
                    $algoritmo = strtoupper($algoritmo);
                    echo "$algoritmo";
        
                    unset ($_SESSION['algoritmo']);
                    session_destroy();
                }
        ?> 
        </p>
            <?php
            session_start();
            $msg = "";
            $_SESSION['msg'] = $_GET['msg'];
                if($_SESSION['msg']){
                    $msg = $_SESSION['msg'];
                 
                    echo "<p id='hash'> $msg </p>";
        
                    unset ($_SESSION['msg']);
                    session_destroy();
                }
            ?>
        </div>
    </div>
   

</body>

</html>