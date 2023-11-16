<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form.htm</title>
</head>
<body>
    <form method="post" action="TH_Form_8_config.php" id="myForm" >
        <table align="center" style="border: ridge;">
            <tr>
                <th>Enter Your Information</th>
            </tr>
            <tr>
                <td>Fullname</td>
                <td>
                    <input type="text" name="fullName" required>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" required>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="number" name="phone" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male" required>Nam
                    <input type="radio" name="gender" value="female">Nữ                   
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country" style="width: 30%;">
                        <option value="vietNam">Việt Nam</option>
                        <option value="lao">Lào</option>
                        <option value="campuchia">Campuchia</option>
                        <option value="nhatBan">Nhật Bản</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Study</td>
                <td>
                    <input type="checkbox" name="phpMySQL" value="PHP & MySQL">PHP & MySQL
                    <input type="checkbox" name="asp" value="ASP.NET">ASP.NET
                    <input type="checkbox" name="ccna" value="CCNA">CCNA
                    <input type="checkbox" name="security" value="Security+">Security+
                </td>
            </tr>
            <tr>
                <td>Note</td>
                <td>
                    <textarea name="note" style="width: 90%; height: 60px;"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="send" value="Gửi">
                    <input type="reset" name="cancel" value="Hủy">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>