
window.onload = function() { // wait for the window load
    //and then... look for the id
document.getElementById('myForm').addEventListener('submit', function(event){ // add listener
event.preventDefault();
doFunction();
    });

}

// function myFunction() {
//     var fname = document.getElementById("fname").value;
//     var lname = document.getElementById("lname").value;
//     // Returns successful data submission message when the entered information is stored in database.
//     var dataString = 'firstname1=' + fname + '&lastname1=' + lname;
    
//     if (fname == '' || lname == '' ) {

//         alert("Please Fill All Fields");
    
//     } else {
//     // AJAX code to submit form.

//     $.ajax({
//     type: "POST",
//     url: "php_server/webservice.php",
//     data: dataString,
//     cache: false,
//     success: function() {
//         alert("Data Inserted");
//         }
//     });

//     }
//     return false;
// }

function doFunction(action){

    fetch('php_server/webservice.php?page=' + action)
    .then(function(response){ 
        if (response.status !== 200){
        console.log(response.status);
        return false;
    }
        response.json().then(function(JSONdata) {
            document.getElementById('output').innerHTML = JSONdata.data; 
         });

    });
}