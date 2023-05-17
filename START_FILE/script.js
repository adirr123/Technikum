var url = "https://api.adviceslip.com/advice"

function addjson(callback){
    var object = new XMLHttpRequest();
    object.overrideMimeType("application/JSON");
    object.open("GET", url, true);
    object.onreadystatechange = function() {
        if(object.readyState == 4 && object.status == "200") {
            callback(object.responseText);
        }
    }
    object.send(null);
}

function init() {
    addjson(function(responseText){
        var aktualny_JSON = JSON.parse(responseText);
        //console.log(aktualny_JSON);
        //console.log(aktualny_JSON.slip.advice);
        document.getElementById('id').innerHTML = aktualny_JSON.slip.id;
        document.getElementById('advice').innerHTML = aktualny_JSON.slip.advice;
    });
}
