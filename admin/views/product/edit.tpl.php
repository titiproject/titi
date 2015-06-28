<?php
require('views/page/top-menu.php');
require('views/page/jquery.ui.php');
?>
<div id="content">
    <?php require('views/page/main-menu.php');?>
    <div id="main-content">
        <div class="panel panel-default" style="width: 60%;margin:0.1%;">
            <div class="panel-heading" style="color:white;">
                <h3 class="panel-title"><?php echo $title; ?> &nbsp;&nbsp;<i class="fa fa-plus fa-lg"></i></h3>
            </div>
            <div class="panel-body">
                <?php if ($error != '') showError($error); else if($success != '')showSuccess($success);?>
                <form style="overflow: hidden;" method="post" enctype="multipart/form-data" action="<?php echo $urlAction; ?>">
                    <table border="1px" class="form" cellspacing="5" style="float: left; width: 50%">
                        <tr>
                            <td><span class="field">Product Name:</span></td>
                            <td><input type="text" name="proname" value="<?php if(isset($pro)) echo $pro->getProname(); else $_POST['proname']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Price:</span></td>
                            <td><input type="text" name="price" value="<?php if(isset($pro)) echo $pro->getPrice(); else echo $_POST['price']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Description:</span></td>
                            <td><textarea name="description" value=""><?php if(isset($pro)) echo $pro->getDescription(); else echo $_POST['description']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><span class="field">Status:</span></td>
                            <td><select id="status" name="status">
                                    <option value="1" <?php isSelected($_POST['status'], '1')?>>active</option>
                                    <option value="0" <?php isSelected($_POST['status'], '0')?>>lock</option>
                                    <option value="-1" <?php isSelected($_POST['status'], '-1')?>>archive</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="field">Category :</span></td>
                            <td><?php showCatnameSelect($catList); ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: central;" align="right">
                                <input class="btn primary" type="submit" name="save" value="save" style="" /></form>
                            </td>
                            <td style="vertical-align: central;" align="center">        
                                <form method="post" action="<?php echo $urlDefault; ?>"><input type="submit" class="btn" name="cancel" value="cancel" style=""/></form>
                            </td>
                        </tr>
                        
                    </table>
                    <div class="" style="float: right; width: 40%">
                        <a href="#"><?php echo showImageProductEdit($pro->getImage());?></a>
                            <input type="file" name='image'/>
                        </a>
                        <p style="text-align: center;margin-right: 20%;font-weight: bold;">hinh anh</p>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
  <script>
  $(function() {
    //$( "#state" ).selectmenu();
 
    //$( "#files" ).selectmenu();
    //$('#created').datepicker();
    $("#parentid").selectmenu()
      .selectmenu("menuWidget")
        .addClass("overflow");
    $( "#status" )
      .selectmenu()
      .selectmenu("menuWidget")
        .addClass("overflow");
  });
  </script>
<?phprequire('views/page/footer.php')?>
    