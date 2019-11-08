<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $op=$_POST["op"];
    $resultat="";

    if(!empty($x) and !empty($y)){
            if($op=="+"){
                $resultat="$x + $y=". ($x+$y);
            }elseif($op=="/"){
                if($y!=0){
                    $resultat="$x / $y=". $x/$y; 
                }else{
                    $resultat="Division avec Zero impossible";
                }
                
            }

     }else{ //$x=="" or $y==""
        $resultat="Les Deux champs sont obligatoires";
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
                <label for="">X</label>  
                <input type="number" name="x" id=""> <br>
                <label for="">Y</label>  
                <input type="number" name="y" id=""> <br>
                <label for="">Operateur</label>  
                <select name="op" id="">
                    <option value="+">+</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="-">-</option>
                    <option value="%">%</option>
                </select> <br>
                <button name="egal" type="submit" value="egal">=</button>
        
        </form>

     <div>
          Resultats:   <?php echo  $resultat; ?> 
     </div>



</body>
</html>