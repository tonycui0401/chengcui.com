
var isupload = 0;    
 $(document).ready(function(){
 /*$('.delete').click(function(e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;
        
    });
	 $("#checkpicture").val(''+isupload +'');
     $("#checkpicture").css("display","none");*/
 });
 
  /*$(document).ready(function() {
           //$("#addressline1").val('<?php echo mysql_real_escape_string($row[4]); ?>');
           //  $("#description").val('<?php echo mysql_real_escape_string($row[3]); ?>')
           //   $("#clientid").css("display","none");
              $("#checkpicture").val(''+isupload+'');
              $("#checkpicture").css("display","none");
 
     });*/
  
 function ajaxFileUpload(upload_field)
{
  isupload = 1;
  //$("#checkpicture").val(''+isupload+'');
//checkupload = true;
var re_text = /\.jpg|\.gif|\.png|\.jpeg/i
var filename = upload_field.value
if (filename.search(re_text) == -1) {
alert("File should be either jpg or gif or png or jpeg")
//upload_field.form.reset()
return false
}

document.getElementById('image_upload').innerHTML = '<div><img src='+Globals.url+'"public/images/ajax-loader.gif" border="0" /></div>';
//alert("ddd");
/*document.getElementById('d_thumb_preview').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('smalldiv').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('error').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'*/
 
upload_field.form.action =Globals.url+"create/ajax_upload";
upload_field.form.target = "upload_iframe";
upload_field.form.submit();

return true;
}

function ajaxFileUploadEdit(upload_field)
{
  isupload = 1;
  $("#checkpicture").val(''+isupload+'');
//checkupload = true;
var re_text = /\.jpg|\.gif|\.png|\.jpeg/i
var filename = upload_field.value
if (filename.search(re_text) == -1) {
alert("File should be either jpg or gif or png or jpeg")
//upload_field.form.reset()
return false
}

document.getElementById('image_upload_edit').innerHTML = "<div><img src=\""+Globals.url+"public/images/ajax-loader.gif\" border=\"0\" /></div>";
//alert("ddd");
/*document.getElementById('d_thumb_preview').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('smalldiv').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('error').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'*/
 
upload_field.form.action =Globals.url+"profile/ajax_upload_edit";
upload_field.form.target = "upload_iframe_edit";
upload_field.form.submit();

return true;
}



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
