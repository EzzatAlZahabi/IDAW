<?php
    function databaseConnexion(){
        $servername = 'localhost';
        $username = 'root';
        $mdp = 'root';
        $dbname = 'idaw';
        $conn = mysqli_connect($servername, $username, $mdp, $dbname);
        if(!$conn){
            die('Erreur : ' .mysqli_connect_error());
        }
        return $conn;
    }

    function getAllUsers(){
        $conn = databaseConnexion();
        $query = "SELECT * FROM UTILISATEUR";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
        return $rows;
    }

    function readUser($id){
        $conn = databaseConnexion();
        $query = "SELECT * FROM UTILISATEUR WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0){
            return $rows;
        }
    }

    function createUser($nom, $prenom, $login, $password, $age, $sexe, $besoin){
        $conn = databaseConnexion();
        $query = "INSERT INTO UTILISATEUR (NOM, PRENOM, LOGIN, PASSWORD, AGE, SEXE, BESOIN_ENERGITIQUE) VALUES ('$nom', '$prenom', '$login', '$password', '$age', '$sexe', '$besoin')";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }

    function updateUser($id, $nom, $prenom, $login, $password, $age, $sexe, $besoin){
        $conn = databaseConnexion();
        $query = "UPDATE UTILISATEUR set
                NOM = $nom,
                PRENOM = $prenom,
                LOGIN = $login,
                PASSWORD = $password,
                AGE = $age,
                SEXE = $sexe,
                BESOIN_ENERGITIQUE = $besoin
                WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }

    function deleteUser($id){
        $conn = databaseConnexion();
        $query = "DELETE FROM UTILISATEUR WHERE ID_UTILISATEUR = '$id'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
    }

    function createTable(){
        ?>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
?>