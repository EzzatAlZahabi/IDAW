<?php 
    require_once('database.php');
    $query = "SELECT * FROM ALIMENT";
    $resultat = mysqli_query($conn,$query);
    $data = array();
    while($row = mysqli_fetch_assoc($resultat)){
        // $sub_array = array();
        // $sub_array[] = $row['ID_ALIMENT'];
        // $sub_array[] = $row['LIBELLE'];
        // $sub_array[] = $row['DATE'];
        // $sub_array[] = $row['CALORIES'];
        // $sub_array[] = '<a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
        // $data1[] = $sub_array;
        $data[] = $row;
        $data[] = '<a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['ID_ALIMENT'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
    }
    // echo json_encode($data);
    $data_final = array(
        'data' => $data,
    );
    echo json_encode($data_final);
?>