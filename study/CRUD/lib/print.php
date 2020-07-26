<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  }
  else {
    echo 'Welcome';
  }
}

function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents('data/'.$basename));
  }
}

function print_list(){
  $list = scandir('./data');

  $i = 2;
  while($i < count($list)){
    $title = htmlspecialchars($list[i]);
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
    $i = $i + 1;
  }
}
?>
