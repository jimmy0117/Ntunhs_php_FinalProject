<?php
	include ("configure.php");
?>


<?php
			// 建立與MySQL資料庫的連線
			$link = new PDO('mysql:host='.$hostname.';dbname='.$database.';charset=utf8mb4', $username, $password);

			// 用SQL語法呼叫exec()
			$query = "INSERT INTO `news`(`ID`, `title`, `link`, `date`, `view`) VALUES (".$_GET['ID'].",'".$_GET['title']."','".$_GET['link']."','".$_GET['date']."',0)";
			echo $query;
            $result = $link->query($query);
            header("Location: index.php");
            
?>