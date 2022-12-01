<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/Index.css">
</head>
<body>
    <div class="glass">
    <center><h2 class="text-info">Todos los usuarios:</h2></center>
    </div>
<nav>
    <div class='conteneur_menu'>
        <div class='rubrique'>
            <a href='#mw999'>Crear usuario</a>
            <div class='sousmenu'><div class='pagesousmenu'>
                <a href='index.php'>Crear usuario</a>
            </div>
        </div>
    </div>
    <div class='rubrique'>
        <a href='#mw999'>ver usuarios</a>
            <div class='sousmenu'>
                <div class='pagesousmenu'>
                    <a href='table.php'>ver usuario</a>
                </div>
            </div>
        </div>
    </div>
</nav>
    <?php include("db.php")?>
    <div class="container">
        <div class="row">
        <div  class="col-md-12">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last name</th>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                </head>
                <tbody>
                   <?php
                   $query = "SELECT * FROM register";
                   $result_user = mysqli_query($conn, $query);

                   while($row = mysqli_fetch_array($result_user)){ ?>
                   <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['last_name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['password']?></td>
                   </tr>
                   <?php }?>
                </body>
            </table>
        </div>
        </div>
    </div>
    <br/>
    </br> 
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,256L26.7,250.7C53.3,245,107,235,160,192C213.3,149,267,75,320,42.7C373.3,11,427,21,480,48C533.3,75,587,117,640,165.3C693.3,213,747,267,800,266.7C853.3,267,907,213,960,197.3C1013.3,181,1067,203,1120,197.3C1173.3,192,1227,160,1280,144C1333.3,128,1387,128,1413,128L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
    </svg>
                
                
</body>
</html>