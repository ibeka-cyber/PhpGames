<?php
$ace = "https://i.pinimg.com/736x/a2/64/d5/a264d5cb87d0abebf1bd7f45edb66621.jpg";
$queen = "https://i.pinimg.com/736x/ae/46/bb/ae46bbcd9499c391c0a768ffdbcad87a.jpg";
$back= "https://i.pinimg.com/736x/91/65/97/916597ebd0599ad0bc6161ac7ccf1acd.jpg";

$imagee1=$back; 
$imagee2=$back;
$imagee3=$back;
$imagee4=$back;

$cardno=0;
if(isset($_GET["cardno"])){
  
  $cardno=$_GET["cardno"];
  $randSelect = rand(1,5);

  if($cardno==0){
    $imagee1= $back;
    $imagee2= $back;
    $imagee3= $back;
  }
  else{
    if($cardno==1){ if($cardno==$randSelect){$imagee1=$ace; $imagee2 = $queen;$imagee3 = $queen; $imagee4 = $queen; }else{$imagee1=$queen;
      if($randSelect == 2){$imagee2=$ace;$imagee3 = $queen;$imagee4 = $queen;}
      if($randSelect == 3){$imagee3=$ace;$imagee2 = $queen;$imagee4 = $queen;}
      else{$imagee4=$ace;$imagee2=$queen;$imagee3=$queen;}}
      }
    if($cardno==2){ if($cardno==$randSelect){$imagee2=$ace; $imagee1 = $queen;$imagee3 = $queen; $imagee4 = $queen; }else{$imagee2=$queen;
        if($randSelect == 1){$imagee1=$ace;$imagee3 = $queen;$imagee4 = $queen;}
        if($randSelect == 3){$imagee3=$ace;$imagee1 = $queen;$imagee4 = $queen;}
        else{$imagee4=$ace;$imagee1=$queen;$imagee3=$queen;}}
      }
      
    if($cardno==3){ if($cardno==$randSelect){$imagee3=$ace; $imagee2 = $queen;$imagee1 = $queen; $imagee4 = $queen; }else{$imagee3=$queen;
          if($randSelect == 2){$imagee2=$ace;$imagee1 = $queen;$imagee4 = $queen;}
          if($randSelect == 1){$imagee1=$ace;$imagee2 = $queen;$imagee4 = $queen;}
          else{$imagee4=$ace;$imagee2=$queen;$imagee1=$queen;}}
    }
        

    if($cardno==4){ if($cardno==$randSelect){$imagee4=$ace; $imagee2 = $queen;$imagee3 = $queen; $imagee1 = $queen; }else{$imagee4=$queen;
            if($randSelect == 2){$imagee2=$ace;$imagee3 = $queen;$imagee1 = $queen;}
            if($randSelect == 3){$imagee3=$ace;$imagee2 = $queen;$imagee1 = $queen;}
            else{$imagee1=$ace;$imagee2=$queen;$imagee3=$queen;}}}

  }
  
}
?>

<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
  
</head>

<body>
<h1> As'ı bulabilir misin ? </h1>
<div class="maindiv">
      <a href="main.php?cardno=1">
        <div class="card"><img src="<?php echo $imagee1; ?>"></div>
      </a>

      <a href="main.php?cardno=2">
        <div class="card"><img src="<?php echo $imagee2; ?>"></div>
      </a>

      <a href="main.php?cardno=3">
        <div class="card"><img src="<?php echo $imagee3; ?>"></div>
    </a>
    <a href="main.php?cardno=4">
        <div class="card"><img src="<?php echo $imagee4; ?>"></div>
    </a>
</div>
<br>
<a href="main.php?cardno=0">
  <button class="raise">TEKRAR OYNA</button>
</a>

</body>
</html>
