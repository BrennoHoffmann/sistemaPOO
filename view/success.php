<?php

    if($_REQUEST){
        $person = $_REQUEST['person'];
        // var_dump($_REQUEST);
    }else{
        header("Location:index.php?People");
    }


?>

<h1>Hello <?php echo $person->getName(); ?> !!! </h1>