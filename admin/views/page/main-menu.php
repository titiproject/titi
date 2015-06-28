<div id="cssmenu">
                <ul id="main-menu">
                    <li class="active"><a href="index.php?controller=home&action=index">Dashboard</a></li>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Products</a>
                       <ul class="has-sub">
                            <li><a href="index.php?controller=product&action=list">All Products</a>
                            <li><a href="index.php?controller=product&action=add">Add new product</a>
                            <li><a href="#">Rating</a>
                        </ul>
                    </li>
                    <li><a href="#">Categories</a>
                         <ul class="has-sub">
                            <li><a href="index.php?controller=category&action=list">All Categories</a>
                            <li><a href="index.php?controller=category&action=add">Add new Category</a>
                            <li><a href="#">Rating</a>
                        </ul>
                    </li>
                    <li><a href="#">Orders</a>
                        <ul class="has-sub">
                            <li><a href="#">All Orders</a>
                            <li><a href="#">Add new Order</a>
                            <li><a href="#">Rating</a>
                        </ul>
                    </li>
                </ul>
            </div>
            <script>
( function( $ ) {
$(document).ready(function() {
  $('#cssmenu ul ul li:odd').addClass('odd');
  $('#cssmenu ul ul li:even').addClass('even');
  $('#cssmenu > ul > li > a').click(function() {
      console.log($(this));
    $('#cssmenu li').removeClass('active');
    $(this).closest('li').addClass('active');	
    var checkElement = $(this).next();
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#cssmenu ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if($(this).closest('li').find('ul').children().length == 0) {
      return true;
    } else {
      return false;	
    }		
  });
});
} )(jQuery);

            </script>
