var xmlhttp = new XMLHttpRequest();
var url = "dynamicMenus.json";


xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.responseText);
    }
};
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    
             
function myFunction(response) {
    var arr = JSON.parse(response);
    var i;
    var out = '';

    for (i = 0; i < arr.length; i++) {
        out += '<li><a target="_self" class="three-d" target="self" href="' + arr[i].url + 
                '">'+ arr[i].title +'<span aria-hidden = "true" class="three-d-box">\n\
                <span class="front">'+ arr[i].title + '</span><span class="back">'+ arr[i].title + '</span></span></a></li>';
    }
    out += '';
    document.getElementById("id01").innerHTML = out;
}