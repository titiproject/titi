<?php
require('views/page/top-menu.php');
require('views/page/jquery.ui.php');
?>
<div id="content">
    <?php require('views/page/main-menu.php');?>
    <div id="main-content">
        <div class="panel panel-default" style="width: 55%;margin:0.1%;">
            <div class="panel-heading" style="color:white;">
                <h3 class="panel-title">Edit profile &nbsp;&nbsp;<i class="fa fa-edit fa-lg"></i></h3>
            </div>
            <div class="panel-body">
                <?php if ($error != '') showError($error); else if($success != '')showSuccess($success);?>
                <form style="overflow: hidden;" method="post" action="<?php echo $urlAction; ?>">
                    <table border="1px" class="form" cellspacing="5" style="float: left;">
                        <tr>
                            <td><span class="field">Name:</span></td>
                            <td><input type="text" name="name" value="<?php echo $cus->getName(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Address:</span></td>
                            <td><input type="text" name="address" value="<?php echo $cus->getAddress(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">City:</span></td>
                            <td><input type="text" name="city" value="<?php echo $cus->getCity(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">State:</span></td>
                            <td><select id="state" name="state">
                                    <option value="1" <?php isSelected($cus->getState(), '1')?>>active</option>
                                    <option value="0" <?php isSelected($cus->getState(), '0')?>>lock</option>
                                    <option value="-1" <?php isSelected($cus->getState(), '-1')?>>archive</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="field">Zip:</span></td>
                            <td><input type="text" name="zip" value="<?php echo $cus->getZip(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Country :</span></td>
                            <td><input type="text" name="country" value="<?php echo $cus->getCountry(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Created :</span></td>
                            <td><input type="text" id="created" name="created" value="<?php echo $cus->getCreated(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Gender :</span></td>
                            <td>
                                <input type="radio" name="gender" value="1" <?php isChecked($cus->getGender(), 1)?>>Male
                                <input type="radio" name="gender" value="0" <?php isChecked($cus->getGender(), 0)?>>Female</td>
                        </tr>
                        <tr>
                            <td><span class="field">Phone :</span></td>
                            <td><input type="text" name="phone" value="<?php echo $cus->getPhone(); ?>" /></td>
                        </tr>
                        <tr>
                            <td><span class="field">Email :</span></td>
                            <td><input type="text" name="email" value="<?php echo $cus->getEmail(); ?>" /></td>
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
                    
                
                
            </div>
        </div>
    </div>
</div>
  <script>
  $(function() {
    //$( "#state" ).selectmenu();
 
    //$( "#files" ).selectmenu();
    $('#created').datepicker();
    $( "#state" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
  });
  </script>
<?phprequire('views/page/footer.php')?>
    

