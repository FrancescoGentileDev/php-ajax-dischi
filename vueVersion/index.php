<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--#region FONTAWESOME-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!--#endregion FONTAWESOME-->

    <!--#region BOOTSTRAP ICON-->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->
    <!--#endregion BOOTSTRAP ICON-->

    <!--#region BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--#endregion BOOTSTRAP-->

    <!--#region MY UTILS-->
    <!-- <link rel="stylesheet" href="css/utils.css"> -->
    <!--#endregion MY UTILS-->

    <!--#region VUE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.10/vue.min.js"
        integrity="sha512-H8u5mlZT1FD7MRlnUsODppkKyk+VEiCmncej8yZW1k/wUT90OQon0F9DSf/2Qh+7L/5UHd+xTLrMszjHEZc2BA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--#endregion VUE-->

    <!--#region BOOTSTRAP SCRIPT-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous" defer></script> -->
    <!--#endregion BOOTSTRAP SCRIPT-->
    <!--#region AXIOS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--#endregion AXIOS-->


    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
    <div class="container mt-5">
       
        <input class="m-5 form-label form-text" type="text" name="genre" id="genre" v-model="textInput" placeholder="insert genre">
        <button @click="send">send</button>
        <ul class="disks-wrapper">
    
               <li class="disk-container" v-for="(disk, index) in disks" :key="index">
                    <div class="posterDisk" >
                        <img :src="disk.poster" alt="" srcset="">
                    </div>
                    <p class="titleDisk">{{disk.title}}</p>
                    <p class="authorDisk">{{disk.author}}</p>
                    <p class="releaseDisk">{{disk.year}}</p>
               </li>

        </ul>
    </div>

    </div>
    <script type="module" src="script.js"></script>

</body>

</html>