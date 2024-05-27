<!DOCTYPE html>

<?php
	include ("configure.php");
?>

<?php
			// 建立與MySQL資料庫的連線
			$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8mb4', $username, $password);

			// 用SQL語法呼叫exec()
			$query = "SELECT * FROM news";
			$result = $link->query($query);
            /*
			foreach ($result as $row)							// 同 while ($row = $result->fetch())
			{
				// 在此例中，$row中有$row["Time"]與$row["Description"]兩欄位的值。
				echo "		".$row['title']."<br>";
			}
            */
		?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>張皓承的中繼站</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles2.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">張皓承的中繼站</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                </button>
                
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">歡迎來到張皓承的中繼站</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">在這邊有的沒的我都會放在這</p>
            </div>
            
        </header>
        
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">新增資訊</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <form method="GET" action="insert.php" >
                    <div class="form-group">
                        <label for="inputText" class="custom-font-size">輸入ID(僅數字)</label>
                        <input type="text" class="form-control form-control-lg" id="inputText" name = 'ID' placeholder="輸入您的內容">
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="custom-font-size">標題</label>
                        <input type="text" class="form-control form-control-lg" id="inputText" name = 'title' placeholder="輸入您的內容">
                    </div>
                    <div class="form-group">
                        <label for="inputText" class="custom-font-size">連結</label>
                        <input type="text" class="form-control form-control-lg" id="inputText" name = 'link' placeholder="輸入您的內容">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputText" class="custom-font-size">輸入日期(yyyy-mm-dd)</label>
                        <input type="text" class="form-control form-control-lg" id="inputText" name = 'date' placeholder="輸入您的內容">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">提交</button>
                    </div>
                </form>
                <div class="card table-card">
                    <div class="row d-flex justify-content-center align-items-center text-center custom-font-size">
                        <div class="col-2">
                            ID
                        </div>
                        <div class="col-6">
                            最新消息
                        </div>
                        <div class="col-3">
                            日期
                        </div>
                    </div>
                    <?php 
                        foreach ($result as $row) {
                            echo '<div class="row d-flex justify-content-center align-items-center text-center custom-font-size">';
                            echo '<div class="col-2">';
                            echo $row['ID'];
                            echo '</div>';
                            echo '<div class="col-6">';
                            echo "<a href='".$row['link']."'>".$row['title']."</a>";
                            echo '</div>';
                            echo '<div class="col-3">';
                            echo $row['date'];
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">聯絡資訊</h4>
                        <p class="lead mb-0">
                            112214102@ntunhs.edu.tw
                            <br />
                            112214102@office365.ntunhs.edu.tw
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">贊助我</h4>
                        <a class="btn btn-primary" href="assets/img2/linepay.jpg">Line Pay</a>
                        <a class="btn btn-primary" href="assets/img2/easywallet.jpg">Easy Wallet</a>
                        <a class="btn btn-primary" href="assets/img2/twpay.jpg">Taiwan Pay</i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">模板來源</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><a href="news.php"><small>新增資訊</small></a></div>
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
            <div class="container"><small>Copyright &copy; Ntunhs_php_FinalProject</small></div>
        </div>
        