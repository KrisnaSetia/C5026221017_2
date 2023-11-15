<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;500;600;700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
        <title>Latihan Layout CSS & Bootstrap</title>
        <style>
        body{
            background-color: #F5F5F5;
            background-image: url("tugas02/Polygon1.png");
            background-size: 55.461979166vw 99.87314814814816vh;
            background-repeat: no-repeat;
            background-position:right -10px top 10px;
            background-attachment:fixed ;
            font-family: 'Nunito';
            color: #4F4F4F;
        }
        .icon-krisna{
            width: 115px;
            height: auto;
            justify-content: center;
            align-items: center;
            margin-top: 2.6rem;
            margin-left: 68rem;
        }
        .margin1-krisna{
            margin-left: 2.6rem;
        }
        .margin2-krisna{
            margin-top: 40px;
            margin-bottom: 1rem;
        }
        .margin3-krisna{
            margin-top: 40px;
            margin-left: -16px;
        }
        .header-krisna{
            font-size: 40px;
            margin-top: 0.8rem;
            font-weight: 730;
        }
        .sub-header-krisna{
            font-size: 27px;
            font-weight: 700;
            margin-left: -13px;
        }
        .content-krisna{
            margin-top: 1rem;
            font-size: 20px;
            text-align: left;
            margin-left: -10px;
            font-weight: 400;
        }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <img class="icon-krisna" src="tugas02/Dark.png">
                </div>
            </div>
            <div class="row">
                <div class="col-7 margin1-krisna">
                    <div class="row">
                        <h1 class="header-krisna">The Competition</h1>
                    </div>
                    <div class="row">
                        <div class="col-5 margin2-krisna">
                            <h5 class="sub-header-krisna">Company1</h2>
                            <h6 class="content-krisna">Their reviews average 3.5, whereas we average 5 stars</h6>
                        </div>
                        <div class="col-5 margin3-krisna">
                            <h5 class="sub-header-krisna">Company2</h2>
                            <h6 class="content-krisna">Their reviews average 3.5, whereas we average 5 stars</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 margin2-krisna">
                            <h5 class="sub-header-krisna">Company3</h2>
                            <h6 class="content-krisna">Their reviews average 3.5, whereas we average 5 stars</h6>
                        </div>
                        <div class="col-5 margin3-krisna">
                            <h5 class="sub-header-krisna">Company4</h2>
                            <h6 class="content-krisna">Their reviews average 3.5, whereas we average 5 stars</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
