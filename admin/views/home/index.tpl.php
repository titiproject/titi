<?php
require('views/page/top-menu.php');

?>
<div id="content">
    <?php require('views/page/main-menu.php');?>
    <div id="main-content">
        <div id="title"><span>Index</span><a class="button" href="index.php?controller=category&action=add"><i class="fa fa-plus fa-lg"></i>&nbsp;Add New</a></div>
        <div id="table">
            <table border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <th><input type="checkbox"/></th>
                    <th>id</th>
                    <th>name</th>
                    <th>created</th>
                    <th>status</th>
                </tr>
                <tr>
                    <td><input type="checkbox"/></td>
                    <td>1</td>
                    <td>Điện thoại</td>
                    <td>2 ngày trước</td>
                    <td><a href="#"><i class="fa fa-check-square-o fa-lg"></i></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox"/></td>
                    <td>2</td>
                    <td>Máy tính</td>
                    <td>1 giờ trước</td>
                    <td><a href="#"><i class="fa fa-minus-square-o fa-lg"></i></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox"/></td>
                    <td>3</td>
                    <td>Máy tính bảng</td>
                    <td>4 ngày trước</td>
                    <td><a href="#"><i class="fa fa-archive fa-lg"></i></a></td>
                </tr>
                <tr>
                    <td><input type="checkbox"/></td>
                    <td>4</td>
                    <td>Máy tính bảng</td>
                    <td>4 ngày trước</td>
                    <td><a href="#"><i class="fa fa-archive fa-lg"></i></a></td>
                </tr>
                <tr>
                    <th><input type="checkbox"/></th>
                    <th>id</th>
                    <th>name</th>
                    <th>created</th>
                    <th>status</th>
                </tr>
            </table>
        </div>
    </div>
</div>
<?phprequire('views/page/footer.php')?>
    
