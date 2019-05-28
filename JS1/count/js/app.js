// var x = 0;
// function plus() {
//    document.getElementById('counter').innerHTML = ++ x
// }
// function moins() {
//    document.getElementById('counter').innerHTML = -- x
// }



var i = 0;
document.getElementsByTagName("button")[1].addEventListener("click",function() {
	document.getElementById("counter").innerHTML = ++ i;
})

document.getElementsByTagName("button")[0].addEventListener("click",function() {
	document.getElementById("counter").innerHTML = -- i;
})