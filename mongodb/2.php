<?php

if(isset($_GET['submit'])){
	
    $u=$_GET['username'];
	$p=$_GET['password'];

    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $data = array(
        'username'=>$u,
        'password'=>$p
        );
 
    echo var_dump($data);
    echo '<hr>';

    $options = [
        'projection' => ['_id' => 0]
    ];

    $query = new MongoDB\Driver\Query($data, $options);
    $cursor = $manager->executeQuery('test.user', $query);

    foreach ($cursor as $document) {
        echo var_dump($document);
    }
    
    echo '<hr>';
    
    $c = count($cursor);

    print "$c<hr>";
    if($c > 0)
    {
        echo "Yes";
    }
    else
    {
        echo "no";
    }
}
?>
