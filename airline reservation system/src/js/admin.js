//alert("hello");
const h=document.getElementById('add_plane');
const z=document.getElementById('view_plane');
h.addEventListener('click',function(e){
    //alert("hello");
    document.getElementById('flight_details').style.display="block";
    document.getElementById('view_table').style.display="none";

});
z.addEventListener('click',function(e){
    //alert("hello");
    document.getElementById('view_table').style.display="block";
    document.getElementById('flight_details').style.display="none";
});

