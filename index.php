<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/6
 * Time: 22:38
 */

//导入数据库配置
include ("conn.php");
//启动session
session_start();
?>

<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td bgcolor="#F5F5F5"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="557" height="438" align="center" valign="top" bgcolor="#F5F5F5"><table width="557"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="553" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="10" background="images/line1.gif"></td>
                                            <?php
                                                echo "商品种类";
                                            ?>
                                        </tr>
                                    </table>
                                    <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="555" height="110"><table width="530" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="265">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=1 limit 0,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无电子商品！";
                                                            }
                                                            else{
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="265">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=1 limit 1,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无电子商品！";
                                                            }
                                                            else{
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                        <tr>
                                            <td height="10" background="images/line1.gif"></td>
                                            <?php
                                                echo "电子商品";
                                            ?>
                                        </tr>
                                    </table>
                                    <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">

                                    </table>
                                    <table width="543" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="543" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="265">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=2 limit 0,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无家居商品！";
                                                            }
                                                            else{
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量</font><font color="13589B">
                                                                                <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="265">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=2 limit 1,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无家居商品！";
                                                            }
                                                            else{
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量</font><font color="13589B">
                                                                                <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                        <tr>
                                            <td height="10" background="images/line1.gif"></td>
                                            <?php
                                                echo "家居商品";
                                            ?>
                                        </tr>
                                    </table>
                                    <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">

                                    </table>
                                    <table width="553" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="553" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="275">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=3 limit 0,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无其他商品！";
                                                            }
                                                            else {
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量：</font><font color="13589B">
                                                                                <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="275">
                                                            <?php
                                                            $sql=mysql_query("select * from goods where kind=3 limit 1,1");
                                                            $info=mysql_fetch_array($sql);
                                                            if($info==false){
                                                                echo "暂无其他商品！";
                                                            }
                                                            else {
                                                                ?>
                                                                <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5"><div align="center">
                                                                                <?php
                                                                                if(trim($info[image]=="")){
                                                                                    echo "暂无图片";
                                                                                }
                                                                                else{
                                                                                    ?>
                                                                                    <img src="<?php echo $info[image];?>" width="80" height="80" border="0">
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div></td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="000000">名称：<width="10" height="10"><?php echo $info[name];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">价格：</font><font color="FF6501"><?php echo $info[price];?></font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><font color="#000000">剩余数量：</font><font color="13589B">
                                                                                <?php
                                                                                if($info[number]>0)
                                                                                {
                                                                                    echo $info[number];
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo "暂无";
                                                                                }
                                                                                ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <a href="addShopCar.php?name=<?php echo "$info[name]";?>">加入购物车</a>
                                                                    </tr>
                                                                </table>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                        <tr>
                                            <td height="10"></td>
                                            <?php
                                                echo "其他";
                                            ?>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            include("bottom.php");
            ?></td>
    </tr>
</table>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<map name="Map2">
    <area shape="rect" coords="504,27,543,43" href="showtuijian.php">
</map>
<map name="Map3">
    <area shape="rect" coords="503,24,545,42" href="shownew.php">
</map>
<map name="Map4">
    <area shape="rect" coords="506,24,543,39" href="showhot.php">
</map>
