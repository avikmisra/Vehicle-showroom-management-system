const payment=document.getElementById('today_date');
var today=new Date();
var str=today.toString();
//var str="hello";
//console.log(str.slice(0,15));
payment.value=str.slice(0,15);