<!DOCTYPE html>
<html lang="trTR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>php_ödev</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        </style>
        <script type ="text/javascript" language="javascript">
            function Deneme(){
                document.getElemenetById("IslemAlani").innerHTML = "php ödev";
            }
            
            </script>
</head>

<body>
    <?php
        echo "İlayda Meşe<br />";
        ?>
<input type="button" onClick="Deneme();" value="İşlem yap"><br /><br />
<div id="IslemAlani"></div>     
</body>
</html>