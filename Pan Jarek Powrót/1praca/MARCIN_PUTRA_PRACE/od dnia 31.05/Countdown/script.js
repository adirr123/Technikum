let now =  new Date();
const ev = new Date(2023, 7, 31, 8, 0, 0);
//console.log
(now.getFullYear());
//console.log
(ev.getFullYear());
//console.log
(ev - now);
const d = 24*60*60*1000;
const g = 60*60*1000;
const m = 60*1000;

setInterval(()=> {
    let now =  new Date();
    var day = Math.floor((ev - now) / d);
    var h = Math.floor((ev - now) / g) % 24;
    var min = Math.floor((ev - now) / m) % 60;
    var sec = Math.floor((ev - now) / 1000) % 60;

    console.log(day,h, min, sec);

    

},1000) 