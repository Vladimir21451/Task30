
<?php 

$array= scandir("public_html/img/");
for ($i=0; $i< count($array); $i++){
echo $array[$i];
}
?>
<script type="text/javascript">
    alert ('here');
    let ar = <?php echo json_encode($array); ?>
    alert (ar.length);
    var body = document.getElementsByTagName('body')[0];
    for (let i=0; i< count(ar); i++){
//var body = document.getElementsByTagName('body')[0];
    newdiv = document.createElement('div');   //create a div
    newdiv.id = 'i';                      //add an id
    alert("./public_html/img/". ar[i]);
    <img src="./public_html/img/". ar[i] alt="img">
    body.appendChild(newdiv);                 //append to the doc.body
    body.insertBefore(newdiv,body.firstChild) //OR insert it
    } 
   </script>

