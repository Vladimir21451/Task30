//alert ('here');
//$("#isubmit").load("./public_html/comment.php");
var ims = "a";
var sm =document.querySelector('#isubmit').onclick = function(e){
    ims = e.target.src;
    console.log('ims=' + ' ' + ims);
    localStorage.setItem('pic', e.target.src);
}  
