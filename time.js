var nowTime = new Date();//現在の時刻を取得
var nowHour = nowTime.getHour();//時を取得
var nowMin = nowTime.getMinutes();//分を取得
var nowSec = nowTime.geySeconds();//秒を抜き出す
var msg = "現在の時刻は" + nowHour + ":" + nowMin + ":" + nowSec + "です。";
document.getElementById("RealtimeClockArea").innerHTML = msg;
