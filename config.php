<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

 $conn = new MySQLi(HOST,USER,PASS,BASE);

 /*
if($conn->connect_errno)
{
    echo "Erro";
}
else 
{
    echo "Conexão efetuada com sucesso";
}
*/

?> 