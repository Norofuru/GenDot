<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/logo2.ico" />
    <meta name="keywords" content="一鄉人, GenDot, Gendot, gendot" />
    <title>一鄉人GenDot</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
</head>

<body>
    <!-- 導覽頁 -->
    <nav class="navbar navbar-expand-lg navbar-light custom" style="background-color: #f8f3e0;">
    <div class="container-fluid justify-content-lg-between">
        <!-- logo -->
        <a class="navbar-brand ms-lg-5" href="index.php">
            <img src="assets/img/logo1.png" alt="logo" height="70">
        </a>
        <!-- 切換元素 -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- mb = margin-bottom、ms 向左推、me 向右推 -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-3">
            <li class="nav-item">
                <a class="nav-link nav-word ms-2" href="about.php">關於我們</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-word ms-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    優良文章
                </a>
                <ul class="dropdown-menu ms-2" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item nav-item-word" href="#">訪談紀錄</a></li>
                    <li><a class="dropdown-item nav-item-word" href="#">所有活動</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item nav-item-word" href="#">其他</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle nav-word ms-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    合作夥伴
                </a>
                <ul class="dropdown-menu ms-2" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item nav-item-word" href="#">講師</a></li>
                    <li><a class="dropdown-item nav-item-word" href="#">企業</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item nav-item-word" href="#">國際組織</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-word ms-2" href="login.php">登入</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    
    <!-- 大圖 -->
    <div class="imgBG" style="background-image: url(assets/img/indexImg.jpg); ">
    </div>

    <!-- 內容 -->
    <div class="container-lg pt-3">
        <div class="mx-4">
            <h2>我是標題</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, esse nulla, expedita tenetur eveniet dolore aliquam, molestiae qui assumenda consequatur cum. Sapiente aliquid aliquam nulla deserunt labore amet porro quis velit quos? Quibusdam nulla impedit distinctio labore eaque. Voluptatibus libero culpa obcaecati assumenda perspiciatis aspernatur perferendis sequi odit ipsa incidunt aperiam qui nostrum quia fuga laboriosam quae sit, omnis consequatur delectus aliquid praesentium, minus maxime? Doloribus ullam quisquam cumque distinctio cupiditate sequi odio explicabo, eveniet commodi fugiat nam perspiciatis, vel blanditiis officiis nostrum a sint accusantium illum. Tempora quas quam tempore nesciunt, veniam quisquam iusto atque corporis! Consequatur, voluptatum fugit?</p>
            <hr>
            <h2>我是標題</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, esse nulla, expedita tenetur eveniet dolore aliquam, molestiae qui assumenda consequatur cum. Sapiente aliquid aliquam nulla deserunt labore amet porro quis velit quos? Quibusdam nulla impedit distinctio labore eaque. Voluptatibus libero culpa obcaecati assumenda perspiciatis aspernatur perferendis sequi odit ipsa incidunt aperiam qui nostrum quia fuga laboriosam quae sit, omnis consequatur delectus aliquid praesentium, minus maxime? Doloribus ullam quisquam cumque distinctio cupiditate sequi odio explicabo, eveniet commodi fugiat nam perspiciatis, vel blanditiis officiis nostrum a sint accusantium illum. Tempora quas quam tempore nesciunt, veniam quisquam iusto atque corporis! Consequatur, voluptatum fugit?</p>
            <hr>
        </div>
    </div>


    <!-- 頁尾 -->
    <footer class="footer">
        <div class="container-lg pt-3">
            <div class="justify-content-between d-flex align-middle">
                <ul class="url d-lg-flex mb-0 ps-0">
                    <li class="my-1"><a href="index.php" class="down-nav-word py-1 px-1">首頁</a></li>
                    <li class="my-1"><a href="about.php" class="down-nav-word py-1 px-1">關於我們</a></li>
                    <li class="my-1"><a href="" class="down-nav-word py-1 px-1">優良文章</a></li>
                    <li class="my-1"><a href="" class="down-nav-word py-1 px-1">合作夥伴</a></li>
                    <li class="my-1"><a href="" class="down-nav-word py-1 px-1">登入</a></li>
                </ul>
                <ul class="url d-flex mb-0 ps-0">
                    <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/img/facebookIcon.png" alt="" class="icon px-2"></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagramIcon.png" alt="" class="icon px-2"></a></li>
                </ul>
            </div>
            <div class="justify-content-between d-flex">
                <div class="d-flex align-middle">
                    <img src="assets/img/mail.png" alt="" class="icon">
                    <p class="word m-auto ms-2 fw-bold">a@mail.com</p>
                </div>
            </div>
            <hr>
            Copyright © 2024 GenDot All right reserved.
        </div>
    </footer>  
    <!-- TOP按鈕 -->
    <div class="">
        <a href="#"><img src="assets/img/top.png" alt="" class="top"></a>
    </div>    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>