<?php
	class webController{
		function dbConnect(){
			$user = 'root';
			$password = 'root';
			$db = 'diditalk';
			$host = 'localhost:8888';
			$conn = mysqli_connect($host,$user,$password,$db);
			return $conn;
		}

		function articleData($sql){
			$conn = $this->dbConnect();
			$result = $conn->query($sql);
			$size = $result->num_rows;
			if($size > 5){
				$size = 5;
			}
			for($i=1;$i<=$size;$i++){
				$row = $result->fetch_assoc();
				if(empty($row)){
					continue;
				}
				$createDate = new DateTime($row['createDate']);
				$strip = $createDate->format("Y年m月d日");
				$arrHtml[] = '<li style="width:972px;height:176"><h3><a href="javascript:void(0)" onclick="articleContentFunction(\''.$row["id"].'\')">'.$row['title'].'</a></h3><p>'.$row['description'].'</p><p class="date">'.$strip.'<!-- 2023年4月18日 --></p></li>';
			}
			return $arrHtml;
		}

		function indexArticleNews(){
			$sql = "SELECT * FROM `article` ORDER BY createDate DESC LIMIT 3";
			$arrHtml = $this->articleData($sql);
			echo json_encode($arrHtml);
		}

		function articleListSql(){
			$sql = "SELECT * FROM `article` ORDER BY createDate DESC";
			$arrHtml = $this->articleData($sql);
			echo json_encode($arrHtml);
		}

		function articleContent(){
			$id = $_POST['articleId'];
			$conn = $this->dbConnect();
			$sql = "SELECT title, author, createDate, content FROM article WHERE id=".$id;
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$createDate = new DateTime($row['createDate']);
			$strip = $createDate->format("Y年m月d日");
			$arrHtml[] = '<br><center><h1 class="article-title">'.$row['title'].'</h1><p class="article-meta">作者：'.$row['author'].' | 發布時間：'.$strip.'</p></center><p class="article-content">'.$row['content'].'</p>';
			echo json_encode($arrHtml);
		}

		function searchArticle(){
			$q = $_POST['q'];
			$sql = "SELECT * FROM article WHERE title LIKE '%".$q."%' OR content LIKE '%".$q."%'";
			$arrHtml = $this->articleData($sql);
			if($size < 1){
				$arrHtml[] = "<center><strong>查無資料</strong></center>";
			}
			echo json_encode($arrHtml);
		}

		function registerSignUp(){
			$arrReturn = array(
				"MSG" => 1,
				"ERR_MSG" => "",
				"column" => "",
				"DATA" => ""
			);
			$arr = $_POST['arr'];
			$conn = $this->dbConnect();
			foreach($arr as $k=>$v){
				if($v == ''){
					$arrReturn['MSG'] = 0;
					$arrReturn['ERR_MSG'] = "欄位不可為空";
					$arrReturn['column'] = $k;
					break; 
				}
				if($k == "confirmPassword"){
					$checkPassword = $arr["password"] == $arr["confirmPassword"]?1:0;
					if(!$checkPassword){
						$arrReturn['MSG'] = 0;
						$arrReturn['ERR_MSG'] = "密碼不一致";
						$arrReturn['column'] = $k;
						break; 		
					}
				}
				//$sql = "INSERT INTO member()VALUES()";
			}
			echo json_encode($arrReturn);
		}
	}


	if(empty($_POST['functionName'])){
		die("404 Not Found");
	}
	$functionName = $_POST['functionName'];
	// $functionName = "indexArticleNews";
	$class = new webController();
	$class->$functionName();

?>