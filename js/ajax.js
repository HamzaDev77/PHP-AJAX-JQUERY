function getXhr(){
    var xhr = null;
    if(window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else if(window.ActiveXObject){
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    else {
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
        xhr = false;
    }
    return xhr;
}
function go(){
    var xhr = getXhr();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            sel = xhr.responseText;
            document.getElementById('target').innerHTML = sel;
        }
    }
            var url="../public/list.php";
            xhr.open("POST",url,true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            selected = document.getElementById('id_service');
            id_service = selected.options[selected.selectedIndex].value;
            xhr.send("id_service="+id_service);
         }
$(document).ready(function () {
         $( "input" ).on( "blur", function() {
             $( this ).val(function( i, val ) {
                 return val.toUpperCase();
             });
     });
         $("#id_s").change(function () {
             var str = document.getElementById('hint');
             $( "#id_s option:selected" ).each(function() {
                 str =$( this ).val()+" : "+$( this ).text() ;
             });
             $( "#hint" ).text( str );
     });
         });
