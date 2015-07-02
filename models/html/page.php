<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Page {
    // Khai báp các thuộc tính của class
    var $content;
    var $title;
    var $buttons = array("Trang chủ" => "home.php",
                        "Liên hệ" => "lien_he.php",
                        "Các nghành đào tạo" => "nghanh_dao_tao.php",
                        "Dịch vụ" => "dich_vu.php"
                    );
    // gán giá trị cho các thuộc tính
   
    // Xây dựng các hàm cần thiết
    // content
    public function setContent($newcontent) {
        $this->content = $newcontent;
    }
    // title
    public function setTile($title) {
        $this->title = $title;
    }
    // button
    public function setButton($newbuttons) {
        $this->buttons = $newbuttons;
    }
    // Xay dung cac ham cần thiết
    public function display() {
        echo "<html>\n<head>\n<meta http-equiv='Content-type' content='text/html; charset=utf-8'/>\n";
        $this->displayTitle();
        $this->displayStyles();
        echo "</head>\n<body>";
        $this->displayHeader();
        $this->displayMenu($this->buttons);
        echo $this->content;
        $this->displayFooter();
        echo "</body>\n</html>\n";
    }
    public function displayTitle() {
        echo "<title>$this->title</title>";
    }
    public function displayStyles() {
    ?>
<style>
    h1 {
        color:white;
        font-size: 24pt; text-align: center;
        font-family: arial, sans-serif;
    }
    .menu {color: white; font-size: 12pt; text-align: center;
           font-family: arial, sans-serif;font-weight: bold;
    }
    td {background: #2a7faa;}
    p { color:black; font-size: 9pt; text-align: center;
        font-family: arial,sans-serif; font-weight: bold;
    }
    p.foot {
        color:white; font-size: 9pt; text-align: center;
        font-family: arial, sans-serif; font-weight: bold;
    }
    a:link, a:visited, a:active {color:white;}
    .style1 { color: #fff; }
    .style2 {
        font-family: verdana, arial, Helvetica, sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #fff;
    }
</style>
    <?php
    }
    public function displayHeader() {
?>
<table>
    <tr bgcolor="black">
        <td align="left">
            
        </td>
        <td>
            <h1>Trung tam tin hoc khoa hoc tu nhien</h1>
        </td>
        <td align="right"></td>
    </tr>
</table>
<?php
    }
}


