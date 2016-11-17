<?php
function ToFa($numfa , $typefa) {
if ($typefa == '0'){
return str_replace(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0), array('۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰'), $numfa );
}
else if ($typefa == '1') {
return str_replace(array('one' , 'two' , 'three' , 'four' , 'five' , 'six' , 'seven' , 'eight' , 'nine' , 'ten' , 'zero') , array('یک' , 'دو' , 'سه' , 'چهار' , 'پنج' , 'شش' , 'هفت' , 'هشت' , 'ته' , 'ده' , 'صفر') , $numfa);
}
else if($typefa == '2') {
return str_replace(array('واحد' , 'اثنان' , 'ثلاثة' , 'أربعة' , 'خمسة' , 'ستّة' , 'سبعة' , 'ثمانیة' , 'تسعة' , 'عشرة' , 'صفر') , array('یک' , 'دو' , 'سه' , 'چهار' , 'پنج' , 'شش' , 'هفت' , 'هشت' , 'نه' , 'ده' , 'صفر') ,  $numab );
}
else if($typefa == '3') {
return str_replace(array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠') , array('۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰') ,  $numab );
}
}
function ToEn($numen , $typeen) {
if ($typeen == '0') {
return str_replace( array('۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰') , array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0'), $numen );
}
else if ($typeen == '1') {
return str_replace( array('یک' , 'دو' , 'سه' , 'چهار' , 'پنج' , 'شش' , 'هفت' , 'هشت' , 'ته' , 'ده' , 'صفر') ,array('one' , 'two' , 'three' , 'four' , 'five' , 'six' , 'seven' , 'eight' , 'nine' , 'ten' , 'zero') , $numen);
}
else if ($typeen == '2') {
return str_replace( array('واحد' , 'اثنان' , 'ثلاثة' , 'أربعة' , 'خمسة' , 'ستّة' , 'سبعة' , 'ثمانیة' , 'تسعة' , 'عشرة' , 'صفر') , array('one' , 'two' , 'three' , 'four' , 'five' , 'six' , 'seven' , 'eight' , 'nine' , 'ten' , 'zero') , $numab );
}
else if ($typeen == '3') {
return str_replace(  array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠') ,  array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0'), $numab );
}
}
function ToAb($numab , $typeab) {
if ($typeab== '0') {
return str_replace(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0), array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠'), $numab );
}
else if ($typeab== '1') {
return str_replace(array('one' , 'two' , 'three' , 'four' , 'five' , 'six' , 'seven' , 'eight' , 'nine' , 'ten' , 'zero') , array('واحد' , 'اثنان' , 'ثلاثة' , 'أربعة' , 'خمسة' , 'ستّة' , 'سبعة' , 'ثمانیة' , 'تسعة' , 'عشرة' , 'صفر') , $numab );
}
else if ($typeab== '2' ) {
return str_replace(array('یک' , 'دو' , 'سه' , 'چهار' , 'پنج' , 'شش' , 'هفت' , 'هشت' , 'نه' , 'ده' , 'صفر') , array('واحد' , 'اثنان' , 'ثلاثة' , 'أربعة' , 'خمسة' , 'ستّة' , 'سبعة' , 'ثمانیة' , 'تسعة' , 'عشرة' , 'صفر') , $numab );
}
else if ($typeab== '3' ) {
return str_replace(array('۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰') , array('١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠'), $numab );
}
}
?>

