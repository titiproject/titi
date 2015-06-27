<title>titi | <?php echo $title; ?> </title>
</head>
<body>
<?php 

?>
<div id="header" class="group">
            <ul id="top-bar" class="group" >
                <li><a href="#" style="font-weight: bold;"><i class="fa fa-home fa-lg"></i>&nbsp;titi</a></li>
                <li><a href="#"><i class="fa fa-refresh fa-lg"></i>&nbsp;1</a></li>
                <li><a href="#"><i class="fa fa-wechat fa-lg"></i> &nbsp;2</a></li>
                <li><a href="#"><i class="fa fa-plus fa-lg"></i> &nbsp;New </a>
                    <ul>
                        <li><a href="index.php?controller=product&action=add">Product</a></li>
                        <li><a href="index.php?controller=user&action=add">User</a></li>
                        <li><a href="index.php?controller=category&action=add">Category</a></li>
                    </ul>
                </li>   
            </ul>
            <div id="admin-menu">
                <div class="bt"><a href="#"><i class="fa fa-user fa-lg"></i>&nbsp;<?php echo $user->getName()!=''? $user->getName():'not connect'; ?>&nbsp;&nbsp;
                        <!--<img src="assets/images/Icon-user.png" height="20" width="20"/>-->
                    </a>
                </div>
                <div id="admin-menu-detail">
                    <img src="assets/images/Icon-user.png" height="100" width="100" alt=""/>
                    <div style="float:left;">
                    <p><a href="index.php?controller=user&action=edit-profile">Edit profile</a></p>
                    <p><a href="#">Messages</a></p>
                    <p><a href="index.php?controller=user&action=logout">Exit</a></p> 
                    </div>
                </div>
            </div>
            
        </div><!-- end header -->
