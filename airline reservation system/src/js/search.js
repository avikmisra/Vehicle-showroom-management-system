var xd=document.querySelector('#price3');
//const y=document.getElementById('opt_eco');
//alert(y);
///const w=document.getElementById('opt_bus');
const z=document.querySelector('#select1');
//alert(z);
ini=xd.value;
z.addEventListener('change',function(e)
{
//alert("hello");
//alert(z.value);
if(z.value=="business")
xd.value=parseInt(xd.value)+parseInt(xd.value)*.5;
else
xd.value=ini;
//alert(xd.value);
//xd=4;
//alert(xd);
//console.log(w);
});