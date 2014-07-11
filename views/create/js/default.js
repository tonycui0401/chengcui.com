


var isupload = 0;    
 $(document).ready(function(){
 
 });
 

function ajaxFileUpload(upload_field)
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

document.getElementById('image_upload').innerHTML = "<div><img src=\""+Globals.url+"public/images/ajax-loader.gif\" border=\"0\" /></div>";
//alert("ddd");
/*document.getElementById('d_thumb_preview').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('smalldiv').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'
document.getElementById('error').innerHTML = '<div style=\"padding-left:20px;padding-top:20px\"><img src="ajax-loader1.gif" border="0" /></div>'*/
 
upload_field.form.action =Globals.url+"create/ajax_upload";
upload_field.form.target = "upload_iframe";
upload_field.form.submit();

return true;
}



	



var geo = new GClientGeocoder(); 







function ukPostcodeTest() {
       var search = document.getElementById("search").value;
       
        //if (!match) {
          // Its not a UK Postcode, so perform a standard GClientGeocoder call on the original search string
          showAddress(search);
       // } else {
          // It is a UK Postcode, so call GDirections on the reformatted search string 
         // showPostcode(s);
        //}
      }
 function showAddress(search) {
 geo.getLocations(search, function (result)
          { 
            // If that was successful
              if (result.Status.code == G_GEO_SUCCESS) {
              // How many resuts were found
              document.getElementById("message").innerHTML = "<div style=\"margin-left:5px;color:#000000;margin-top:5px;\">Do you mean:</div>";
              // Loop through the results, placing markers
              for (var i=0; i<result.Placemark.length; i++) {
                var p = result.Placemark[i].Point.coordinates;
                var marker = new GMarker(new GLatLng(p[1],p[0]));
                var postalcode = $("#search").val().replace(/^\s+|\s+$/g, ' ')
                document.getElementById("message").innerHTML += "<a href=\""+Globals.url+"create/step2/"+p[1]+"/"+p[0]+"/"+postalcode+"\"><li>"+(i+1)+": "+ result.Placemark[i].address + "</li></a> ";
                
              }
       
            }else {
              var reason="Code "+result.Status.code;
             
              alert('Could not find "'+search+ '" ' + reason);
            }
          
  	
          
       });
		  }
