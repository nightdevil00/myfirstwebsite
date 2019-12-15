<?php

///////////$camera = $_POST['camera'];

$camera = array( 
            "camera_1" => array (
               "pret" => 600,
               "rata" => 200,	
               "numar_rate" => 3
            ),
            
            "camera_2" => array (
               "pret" => 1000,
               "maths" => 200,
               "numar_rate" => 5
            ),
            
            "camera_3" => array (
               "pret" => 1200,
               "rata" => 200,
               "numar_rate" => 6 )
         );
         
       
         
		 // se vor executa instructiunile de pe ramura care
// corespunde valorii variabilei $camera
switch( $camera ) {
case "camera['camera_1']":
		echo ' Ai ales camera 1';
		echo "Pretul pentru camera unu este : " ;
         echo $camera['camera_1']['pret'] . "<br />"; 
		 
		 echo "Rata pentru camera unu este : " ;
		 echo $camera['camera_1']['rata'] . "<br />"; 
		 echo "Numarul ratelor pentru camera unu este  : " ;
		 echo $camera['camera_1']['numar_rate'] . "<br />"; 
		

case "camera_2['camera_2']":
		echo ' Ai ales camera 2';
		echo "Pretul pentru camera doi este : " ;
         echo $camera['camera_2']['pret'] . "<br />"; 
		 
		 echo "Rata pentru camera doi este : " ;
		 echo $camera['camera_2']['rata'] . "<br />"; 
		 echo "Numarul ratelor pentru camera unu este  : " ;
		 echo $camera['camera_2']['numar_rate'] . "<br />"; 
		

case "camera_3['camera_3']":
		echo ' Ai ales camera 3';
		echo "Pretul pentru camera trei este : " ;
         echo $camera['camera_3']['pret'] . "<br />"; 
		 
		 echo "Rata pentru camera trei este : " ;
		 echo $camera['camera_3']['rata'] . "<br />"; 
		 echo "Numarul ratelor pentru camera trei este  : " ;
		 echo $camera['camera_3']['numar_rate'] . "<br />"; 
		break;
	
}
 
echo "\n", 'Nu avem alte camere!';




?>
      