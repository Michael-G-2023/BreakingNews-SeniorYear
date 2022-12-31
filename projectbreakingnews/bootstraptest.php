<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel = "stylesheet" href = "bootstrapcss.css">
    
    <title>The Breaking News</title>


</head>
<body>
    
    
    <?php

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://google-news.p.rapidapi.com/v1/top_headlines?lang=en&country=US",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: google-news.p.rapidapi.com",
                "X-RapidAPI-Key: ba276d0798msh6d930a79c422019p1b2617jsnf2624f43ba5d"
            ],
        ]);
        //Disable CURLOPT_SSL_VERIFYHOST and CURLOPT_SSL_VERIFYPEER by
        //setting them to false.
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    ?>

    <!--Nav Bar-->
    <nav class = "navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href = "#" class = "navbar-brand" > 
                News
            </a>

            <button class="navbar-toggler" type = "button" data-bs-toggle="collapse" data-bs-target = "#navmenu"> 
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id = "navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#international" class="nav-link">
                            International
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#local" class="nav-link">
                            Local
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            About
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>


    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>
                        Breaking <span class="text-warning">News</span> 
                    </h1>
                    <p class ="lead my-4 d-none d-sm-block">
                        We aggregate the important news and let you know right away!
                    </p>
                    <button class="btn btn-primary btn-lg" id = "headbutton">
                        Subscribe To Our News 
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="logo.svg">
            </div>
        </div>
    </section>

    <!--NewsLetter-->

    <section class="bg-primary text-light p-5 mb-5" id = "news">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">
                    Sign up for our Newsletter
                </h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter email">
                    <button class="btn btn-dark btn-lg" type="button" id="button-addon2">Subscribe</button>
                  </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!--BitCoin-->

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 m-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>
                        <span class="text-warning">Bitcoin</span> 
                    </h1>
                    <p class ="lead my-4">
                        El Salvador Bought $21 Million of Bitcoin as it Becomes First Country To Make It a Legal Currency
                    </p>

                    <p class ="lead my-4 d-none d-sm-block">
                        El Salvador bought roughly $20.9 million worth of bitcoin, one day before it formally adopts the world's most popular cryptocurrency as legal tender. 
                    </p>

                    <a href = "https://www.cnbc.com/2021/09/07/el-salvador-buys-400-bitcoin-ahead-of-law-making-it-legal-currency.html">
                        <button class="btn btn-primary btn-md mb-3" id = "headbutton">
                            Read More
                        </button>
                    </a>
                        
                </div>
                <img class="img-fluid w-50 p-3" src="bitcoin.png">


            </div>
        </div>
    </section>

    <!--Microchip-->

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 m-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>
                        <span class="text-warning">Mircochip</span> 
                    </h1>
                    <p class ="lead my-4">
                        Led by Tesla, EVs Drive Chip Industry's Shift Beyond Silicon
                    </p>

                    <p class ="lead my-4 d-none d-sm-block">
                        Abundant, easily processed silicon has been the material of choice for decades in the semiconductor industry, but electric vehicles are helping chip away at its dominance in the pursuit of energy efficiency. 
                    </p>

                    <a href = "https://asia.nikkei.com/Business/Tech/Semiconductors/Led-by-Tesla-EVs-drive-chip-industry-s-shift-beyond-silicon">
                        <button class="btn btn-primary btn-md mb-3" id = "headbutton">
                            Read More
                        </button>
                    </a>
                        
                </div>
                <img class="img-fluid w-50 p-3" src="chip-shortage.png">
            </div>
        </div>
    </section>


    <!--Pollution-->

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 m-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>
                        <span class="text-warning">Pollution</span> 
                    </h1>
                    <p class ="lead my-4">
                        Poorly devised regulation lets firms pollute with abandon
                    </p>

                    <p class ="lead my-4 d-none d-sm-block">
                        A recent study finds that firms at risk of punishment cut their exhaust by 7% when the government is watching. 
                    </p>

                    <a href = "https://www.economist.com/graphic-detail/2021/09/04/poorly-devised-regulation-lets-firms-pollute-with-abandon">
                        <button class="btn btn-primary btn-md mb-3" id = "headbutton">
                            Read More
                        </button>
                    </a>
                        
                </div>
                <img class="img-fluid w-50 p-3" src="pollution.png">
            </div>
        </div>
    </section>
  
    <!--More News-->
    <nav class = "navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href = "#" class = "navbar-brand" > 
                Explore Breaking News
            </a>

            <button class="navbar-toggler" type = "button" data-bs-toggle="collapse" data-bs-target = "#navmenu"> 
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id = "navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#international" class="nav-link">
                            Advertise With Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#local" class="nav-link">
                            Terms Of Use
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            Privacy Policy
                        </a>
                    </li>

                </ul>
            </div>
            <img class="img-fluid w-50 p-3" src="icon.png">
        </div>
    </nav>
</body>
</html>
