<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$Saat       =   11;
if(($Saat==0) and ($Saat==1) and ($Saat==2) and($Saat==3) and($Saat==4) and($Saat==5) and($Saat==6)){
    echo "İyi Geceler.";
}elseif(($Saat==7) and ($Saat==8) and ($Saat==9)){
    echo "Günaydın.";

}elseif(($Saat==10) and ($Saat==11) and ($Saat==12) and($Saat==13) and($Saat==14) and($Saat==15) and($Saat==16) and($Saat==17)){
echo "İyi Günler.";

}elseif(($Saat==10) and ($Saat==11) and ($Saat==12) and($Saat==13) and($Saat==14) and($Saat==15) and($Saat==16) and($Saat==17)){
   echo "İyi Günler";
} elseif(($Saat==18) and ($Saat==19) and ($Saat==20) and($Saat==21) and($Saat==22) and($Saat==23)){
      echo"İyi Akşamlar";
}else{
    echo "Belirtilen değer ( {$Saat} ) bir saat dilimi değildir";

}

?>
</body>
</html>