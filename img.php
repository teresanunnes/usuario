<?php
function upload(){
	if(isset($_FILES['foto'])){
		$extensao= strtolower(substr($_FILES['foto']['name'], -4));
		$nome=md5(time()).$extensao;
		$diretorio= "uploads/";
		$url_host=substr(
			$_SERVER['HTTP_REFERER'],
			0,
			strripos($_SERVER['HTTP_REFERER'],"/")+1
			);
		move_uploaded_file($_FILES["foto"]["tmp_name"], $diretorio.$nome);
		return $url_host.$diretorio.$nome;
	}
}
?>