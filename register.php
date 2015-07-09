<?php
/**
 * Created by PhpStorm.
 * User: 肖健
 * Date: 2015/7/6
 * Time: 13:54
 */
?>

<script language="javascript">
    function chknc(nc)
    {
        window.open("chkusernc.php?nc="+nc,"newframe","width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
    }
</script>

<script language="javascript">
    function chkinput(form) {
        if(form.usernc.value=="") {
            alert("Please Enter Name!");
            form.usernc.select();
            return(false);
        }
        if(form.p1.value=="") {
            alert("Please Enter Password!");
            form.p1.select();
            return(false);
        }
        if(form.p2.value=="") {
            alert("Please Enter Password Again!");
            form.p2.select();
            return(false);
        }
        if(form.p1.value.length<6) {
            alert("The Length of Password is at least 6!");
            form.p1.select();
            return(false);
        }
        if(form.p1.value!=form.p2.value) {
            alert("Passwords are Different!");
            form.p1.select();
            return(false);
        }
        if(form.email.value=="") {
            alert("Please Enter E-mail!");
            form.email.select();
            return(false);
        }
        if(form.email.value.indexOf('@')<0) {
            alert("Please Enter the Correct E-mail!");
            form.email.select();
            return(false);
        }
        return(true);
    }
</script>
<title>Shop - Register</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<h2>Welcome to Our Shop</h2>
<h3>Shop - Register</h3>
<fieldset>
    <legend>Register</legend>

    <table width="766" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="557"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="500"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td  bgcolor="#555555"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                                                <tr>
                                                    <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">用户名：</div></td>
                                                    <td width="397" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="usernc" size="25" class="inputcss" style="background-color:#ffffff " >
                                                            <span style="color: #FF0000">*</span>
                                                            <input name="button2" type="button" class="buttoncss" onclick="chknc(form1.usernc.value)" value="检查名称是否可用">
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center">输入密码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p1" size="25" class="inputcss" style="background-color:#ffffff ">
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center">确认密码：</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="password" name="p2" size="25" class="inputcss" style="background-color:#ffffff ">
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail:</div></td>
                                                    <td height="20" bgcolor="#FFFFFF"><div align="left">
                                                            <input type="text" name="email" size="25" class="inputcss" style="background-color:#ffffff ">
                                                            <span style="color: #FF0000">*</span></div></td>
                                                </tr>
                                                <tr>
                                                    <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                                                            <input name="submit2" type="submit" class="buttoncss" value="Submit">
                                                            &nbsp;&nbsp;
                                                            <input name="reset" type="reset" class="buttoncss" value="Reset">
                                                        </div></td>
                                                </tr>
                                            </form>
                                        </table></td>
                                </tr>
                            </table>
                            <table width="557" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="547"><div align="center" style="color: #FF0000">注意: 带*的必须填写</div></td>
                                </tr>
                            </table></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</fieldset>