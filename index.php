<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!--vue-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--my link to my css-->
    <link rel="stylesheet" href="styles/style.css">
    <title>PHP Dischi Json</title>
</head>
<body>
    <div id="app">
        
        <header>

        </header>
        <main>
            <div class="container">
                <div class="cards-container">
                    <div class="card" v-for="(disk, index) in disks" :key="index">
                        <article class="card-content text-center">
                            <img :src="disk.poster" alt="">
                            <h1>
                                {{disk.title}}
                            </h1>
                            <p class="author">
                                {{disk.author}}
                            </p>
                            <p class="year">
                                <strong>
                                    {{disk.year}}
                                </strong>
                            </p>
                        </article>
                    </div>


                </div>
                
            </div>
        </main> 



    </div>
    <script src="./script/script.js"></script>
</body>
</html>