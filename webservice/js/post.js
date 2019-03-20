var data = {};
data["fname"] = username;
data["lname"] = password;
var jsonData = JSON.stringify(data);

function ajaxRequest(url, method, data, asynch, responseHandler){
  var request = new XMLHttpRequest();
  request.open(method, url, asynch);
  if (method == "POST")
    request.setRequestHeader("Content-Type","application/json"); 
  request.onreadystatechange = function(){
    if (request.readyState == 4) {
      if (request.status == 200) {
        responseHandler(request.responseText);
      }
    }
    request.send(data);
}

}