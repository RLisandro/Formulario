<?php  
$cursos = [ 'PHP','HTML', 'CSS', 'JavaScript', 'Jquery',
'Python', 'SQL', 'Bootstrap', 'Java', 'C++', 'Fluter']; 
if (isset($_POST['busca'])) {
    $valorbusca = $_POST['busca'];
    if (in_array($valorbusca, $cursos)) {
      print_r('<br>'.'<br>'.'<br>'.'<br>'.'<center> <h2> Temos o curso que  busca, ' . mb_strtoupper( $valorbusca) . ' .</h2> <center>');
    } else {
      print_r('<br>'.'<br>'.'<center><h2> O curso que busca, ' . mb_strtoupper($valorbusca ). ' não existe na lista.<p>Confira sua digitação!</p> </h2><center>');
      print_r('<br>'.'<br>'.'<center><h2> Sugerimos os cursos: <p>' . implode(' - ', $cursos) . '</p> </h2><center>');
    }
}

