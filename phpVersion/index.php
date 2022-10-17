<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <!--#region BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--#endregion BOOTSTRAP-->

    <title>php dischi</title>
</head>

<body>
    <header>

    </header>
    <div class="container mt-5">
        <ul class="disks-wrapper">
    
            <?php
            include_once __DIR__ . '/data.php';
            foreach ($disks as $disk) {
               ?>
               <li class="disk-container">
                    <div class="posterDisk" >
                        <img src="<?=$disk["poster"] ?>" alt="" srcset="">
                    </div>
                    <p class="titleDisk"><?=$disk["title"] ?></p>
                    <p class="authorDisk"><?=$disk["author"] ?></p>
                    <p class="releaseDisk"><?=$disk["year"] ?></p>
               </li>
               <?php
            }
            ?>
        </ul>
    </div>


</body>

</html>