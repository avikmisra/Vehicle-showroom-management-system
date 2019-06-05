var x=document.getElementById('search');
x.addEventListener('click',function(e){
  document.getElementById('search_container').style.display="block";
  e.preventDefault();
})
function checking(e){
  document.getElementById('msg').remove();
}
setTimeout(checking,4000);
