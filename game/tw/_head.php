<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
include_once("$g4[path]/head_index.php");

// 유니크로 아이디가 있으면 unicro_id 쿠키를 삭제한다
if ($member["unicro_id"])
  set_cookie("unicro_id", "", 0)
?>
