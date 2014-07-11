<?php if($_POST['type']==1)
{
?>
<div style="text-align:center;color:#fff;\">please choose which search engine you want to use below</div>
<div style=\"text-align:center;margin-left:15px;margin-bottom:5px;\"><li style="width:50px;margin:0px;padding:0px;float:left;"><a href="http://www.google.com/search?q=<?php echo $_POST['search']; ?>"><img src="<?php echo IMG_URL; ?>google.png" /></a></li>
<li style="width:50px;margin:0px;padding:0px;float:left;"><a href="http://search.yahoo.com/search?p=<?php echo $_POST['search']; ?>"><img src="<?php echo IMG_URL; ?>yahoo.png" /></a></li>
<li style="width:50px;margin:0px;padding:0px;float:left;margin-top:3px;"><a href="http://www.bing.com/search?q=<?php echo $_POST['search']; ?>"><img src="<?php echo IMG_URL; ?>bing.png" /></a></li></div>
<li style="width:50px;margin:0px;padding:0px;float:left;margin-top:-2px;"><a href="http://www.ask.com/web?q=<?php echo $_POST['search']; ?>"><img src="<?php echo IMG_URL; ?>ask.png" /></a></li></div>
<div style="height:10px;clear:both;"></div>
<div style="color:#fff;font-size:10pt;clear:both;"><input type="checkbox" id="setSearchinfo" >using cookie to store your choice</div>
<?php
}
?>
<?php if($_POST['type']==0)
{
?>
<div style="text-align:center;color:#fff;\">please choose which search engine you want to use below</div>
<div style=\"text-align:center;margin-left:15px;margin-bottom:5px;\"><li style="width:50px;margin:0px;padding:0px;float:left;"><a href="http://www.google.com/search?q="><img src="<?php echo IMG_URL; ?>google.png" /></a></li>
<li style="width:50px;margin:0px;padding:0px;float:left;"><a href="http://search.yahoo.com/search?p="><img src="<?php echo IMG_URL; ?>yahoo.png" /></a></li>
<li style="width:50px;margin:0px;padding:0px;float:left;margin-top:3px;"><a href="http://www.bing.com/search?q="><img src="<?php echo IMG_URL; ?>bing.png" /></a></li></div>
<li style="width:50px;margin:0px;padding:0px;float:left;margin-top:-2px;"><a href="http://www.ask.com/web?q="><img src="<?php echo IMG_URL; ?>ask.png" /></a></li></div>
<div style="height:10px;clear:both;"></div>
<div style="color:#fff;font-size:10pt;clear:both;"><input type="checkbox" id="setSearchinfo" >using cookie to store your choice</div>
<?php
}
?>
<script>
var addressValue;
 $('a').click(function () {
         addressValue = $(this).attr("href");
		 var split = addressValue.split('//');
		 var url = split[1];
href=	localhost/rmindMover/result(url);
		 
	if ($("#setSearchinfo").is(":checked"))
	{
		$.cookie("search", url, { expires : 1 });
      
	}
    });

</script>
