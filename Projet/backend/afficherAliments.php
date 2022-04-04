<?php 
    require_once('database.php');
    $query = "SELECT * FROM ALIMENT";
    $resultat = mysqli_query($conn,$query);
    $data = array();
    $compteur = 0;
    while($row = mysqli_fetch_assoc($resultat)){
        $data[] = $row;
        $data[$compteur]['operations'] = '<button type="button" class="btn btn-info btn-sm">Modifier</button> <button type="button" class="btn btn-danger btn-sm">Supprimer</button>';
        // $data[$compteur]['operations'] = '<a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-info btn-sm editbtn" >Modifier</a>  <a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-danger btn-sm deleteBtn" >Supprimer</a>';
        $compteur += 1 ;
    }
    $data_final = array(
        'data' => $data,
    );
    echo json_encode($data_final);
?>