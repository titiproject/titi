<?php
require('views/page/top-menu.php');
require('views/page/jquery.ui.php');
?>
<div id="content">
    <?php require('views/page/main-menu.php');?>
    <div id="main-content">
        <div id="title"><span><?php echo $title; ?></span><a class="button" href="index.php?controller=category&action=add"><i class="fa fa-plus fa-lg"></i>&nbsp;Add New</a></div>
        <div id="table">
            <table border='0' cellspacing='0' cellpadding='0'>
                <tr>
                    <th><input type="checkbox" /></th>
                    <th>id</th>
                    <th>name</th>
                    <th>status</th>
                    <th>author</th>
                    <th>created</th>
                    <th>modified</th>
                    <th>description</th>
                    <th>parent</th>
                    <th>Action</th>
                </tr>
            <?php showTBody($catList, $cusList);?>
                <tr>
                    <th><input type="checkbox" /></th>
                    <th>id</th>
                    <th>name</th>
                    <th>status</th>
                    <th>author</th>
                    <th>created</th>
                    <th>modified</th>
                    <th>description</th>
                    <th>parent</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
    </div>
</div>
<style>
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
    color:#000;
    font-weight: normal;
}
.ui-widget {font-size: 9pt;margin-bottom:-10px;}
#table td form { float: left; margin-bottom: -10px;}
</style>
<script> $(document).ready(function() {$('.parentid').selectmenu();});</script>
<?phprequire('views/page/footer.php')?>

    
