<?php
// $img_path = "Image/1.jpg"; // 원본 이미지 절대경로
// $watermark_text = "Watermark Text. . . HURON의 이미지입니다"; // 워터마크 텍스트
// $watermark_font = "/BM-JUA.ttf"; // 폰트 파일도 절대경로로 지정해야함 (url이 아닌 path)
 
// // 워터마크 텍스트 삽입
// add_watermark_text($img_path, $watermark_text, $watermark_font);
 
// function add_watermark_text($image_path, $text, $font) {
    
//     // $image_path는 반드시 절대경로로 지정해야함 (url이 아닌 path)
    
//     $array_img_chk = array("jpg", "jpeg", "png", "gif", "bmp");
    
//     // 이미지 확장자
//     $img_ext = explode(".", strrev($image_path));
//     $img_ext = strrev($img_ext[0]);
//     $img_ext = strtolower($img_ext);
    
//     // 이미지 파일인 경우에만 진행
//     if(in_array($img_ext, $array_img_chk)) {
 
//         if($img_ext == 'jpg' || $img_ext == 'jpeg')
//             $create_img = imagecreatefromjpeg($image_path);
 
//         if($img_ext == 'png')
//             $create_img = imagecreatefrompng($image_path);
 
//         if($img_ext == 'gif')
//             $create_img = imagecreatefromgif($image_path);
 
//         if($img_ext == 'bmp')
//             $create_img = imagecreatefromwbmp($image_path);
 
//         if($create_img) {
 
//             imagealphablending($create_img, true);
            
//             // 워터마크 폰트 색상 (RGB 값)
//             $color = imagecolorallocate($create_img, 0, 0, 0);
            
//             imagettftext($create_img, 20, 0, 2, 20, $color, $font, $text);
 
//             /* imagettftext 설명 */
//             // 원본 이미지 리소스 : $create_img
//             // 폰트 크기 : 20
//             // 폰트 각도 : 0
//             // 폰트 위치 x : 2
//             // 폰트 위치 y : 20
//             // 텍스트 색상 : $watermark_color (rgb값)
//             // 텍스트 폰트 : $font
//             // 텍스트 내용 : $text
 
//             //header("Content-type: image/jpeg");
//             imagejpeg($create_img, $image_path);
 
//             imagedestroy($create_img);
//         }
//     }
// }
?>


