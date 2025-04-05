<?php
    $wr_5 = "$ext5_00|$ext5_01|$ext5_02|$ext5_03|$ext5_04|$ext5_05|$ext5_06|$ext5_07|$ext5_08|$ext5_09|$ext5_10|$ext5_11|$ext5_12|$ext5_13|$ext5_14|$ext5_15|$ext5_16|$ext5_17|$ext5_18|$ext5_19|$ext5_20|$ext5_21|$ext5_22|$ext5_23|$ext5_24|$ext5_25|$ext5_26|$ext5_27|$ext5_28|$ext5_29|$ext5_30|$ext5_31|$ext5_32|$ext5_33|$ext5_34|$ext5_35|$ext5_36|$ext5_37|$ext5_38|$ext5_39|$ext5_40|$ext5_41|$ext5_42|$ext5_43|$ext5_44|$ext5_45";
    $sql5 = " update $write_table set wr_5 = '$wr_5' where wr_id = '$wr_id' ";
    sql_query($sql5);

    $wr_2 = "$ext2_00|$ext2_01|$ext2_02|$ext2_03|$ext2_04|$ext2_05|$ext2_06|$ext2_07|$ext2_08|$ext2_09|$ext2_10|$ext2_11|$ext2_12|$ext2_13|$ext2_14|$ext2_15|$ext2_16|$ext2_17|$ext2_18|$ext2_19|$ext2_20|$ext2_21|$ext2_22|$ext2_23|$ext2_24|$ext2_25|$ext2_26|$ext2_27|$ext2_28|$ext2_29|$ext2_30|$ext2_31|$ext2_32|$ext2_33|$ext2_34|$ext2_35|$ext2_36|$ext2_37|$ext2_38|$ext2_39|$ext2_40|$ext2_41|$ext2_42|$ext2_43|$ext2_44|$ext2_45";
    $sql2 = " update $write_table set wr_2 = '$wr_2' where wr_id = '$wr_id' ";
    sql_query($sql2);

if($wr_3 > 0){
        // wr_3 노출기간
        $date = date('Ymd', strtotime("now"));
        $dayadd = $wr_3;
        $cdate = date("Ymd", strtotime("$dayadd day", strtotime($date)));
        $wr_7 = $cdate;
        $sql7 = " update $write_table set wr_7 = '$wr_7' where wr_id = '$wr_id' ";
        sql_query($sql7);
        }
        
        $sql = " update $write_table set wr_datetime = '".G5_TIME_YMDHIS."' 
               $sql_password 
        where wr_id = '$wr[wr_id]' "; 
        sql_query($sql); 
?>