 <?php $gun = '08';$ay = '04';$yil = '1999';$ing = 'Apr'; date_default_timezone_set('Europe/Istanbul'); // "Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"?> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<title>Bahadır Düzcan</title>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='bahax41.css'>

<div class='container'>
  <h1>
   Doğum Günüm <br>Ne Zaman?
   
  </h1>
<center><div id="demo" class="alert alert-success "></div><br>
<script>
	var tarih=new Date();
	var yil=tarih.getFullYear();
	var ay=tarih.getMonth();
	if (ay > 4) {
		yil++;
	}

	var countDownDate = new Date("Apr 08, "+yil+" 00:00:00").getTime();

	var x = setInterval(function() {

	var now = new Date().getTime();

	var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + " Gün " + hours + "Saat "
  + minutes + " Dakika " + seconds + " Saniye ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


  <h1>
  Ne Zamandır Yaşıyorum?
   
  </h1>



  
<script>

function setcountup(theyear,themonth,theday){
yr=theyear;mo=themonth;da=theday
}
setcountup(1999,04,08)
var displaymessage=" Sizlerleyim :)"
var countupwidth='95%'
var countupheight='10px' 
var countupbgcolor='alt1'
var opentags='<div class="alert alert-info">'
var closetags='</div>'
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
var crosscount=''
function start_countup(){
if (document.layers)
document.countupnsmain.visibility="show"
else if (document.all||document.getElementById)
crosscount=document.getElementById&&!document.all?document.getElementById("countupie") : countupie
countup()
}
if (document.all||document.getElementById)
document.write('<span id="countupie" style="width:'+countupwidth+'; background-color:'+countupbgcolor+'"></span>')
window.onload=start_countup

function countup(){
var today=new Date()
var todayy=today.getYear()
if (todayy < 1000)
todayy+=1900
var todaym=today.getMonth()
var todayd=today.getDate()
var todayh=today.getHours()
var todaymin=today.getMinutes()
var todaysec=today.getSeconds()
var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
paststring=montharray[mo-1]+" "+da+", "+yr
dd=Date.parse(todaystring)-Date.parse(paststring)
dday=Math.floor(dd/(60*60*1000*24)*1)
dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
if (document.layers){
document.countupnsmain.document.countupnssub.document.write(opentags+dday+ "gün, "+dhour+" saat, "+dmin+" dakika ve "+dsec+" saniyedir sizlerleyiz... "+displaymessage+closetags)
document.countupnsmain.document.countupnssub.document.close()
}
else if (document.all||document.getElementById)
crosscount.innerHTML=opentags+dday+ " Gün, "+dhour+" Saat, "+dmin+" Dakika ve "+dsec+" Saniyedir "+displaymessage+closetags
setTimeout("countup()",1000)
}
</script>
  
  
  
  
   <h1>
  Kaç Yaşındayım?
   
  </h1>

  
  
 <strong><div class="alert alert-warning"><?php 

yash_bul("08-04-1999"); 

function yash_bul($doghum_tarihi) { 
list ($gun, $ay, $yil) = explode('-', $doghum_tarihi); 
$yash = date('Y') - $yil; 
if (date('m') < $ay) $yash--; 
elseif (date('d') < $day) $yash--; 
echo $yash; 
} 

?>  </div></strong>
<h1>Burcum Ne?</h1>
<strong><div class="alert alert-danger"><?php
function burc($tarih){ 
    $burclar = array(); 
    $burclar["Balık"] = mktime(0,0,0,1,21,1997); 
    $burclar["Kova"] = mktime(0,0,0,2,20,1997); 
    $burclar["Koç"] = mktime(0,0,0,3,21,1997); 
    $burclar["Boğa"] = mktime(0,0,0,4,21,1997); 
    $burclar["İkizler"] = mktime(0,0,0,5,22,1997); 
    $burclar["Yengeç"] = mktime(0,0,0,6,22,1997); 
    $burclar["Aslan"] = mktime(0,0,0,7,24,1997); 
    $burclar["Başak"] = mktime(0,0,0,8,24,1997); 
    $burclar["Terazi"] = mktime(0,0,0,9,24,1997); 
    $burclar["Akrep"] = mktime(0,0,0,10,24,1997); 
    $burclar["Yay"] = mktime(0,0,0,11,22,1997); 
    $burclar["Oğlak"] = mktime(0,0,0,12,23,1997); 
    
    $gtarih = explode("-",$tarih); 
    $tarih = mktime(0,0,0,$gtarih[1],$gtarih[0],1997); 
    $isaretli_burc = $burclar["Oğlak"]; 
    $c = 0; 
    
    foreach($burclar as $burcisim=>$burc_tarih) { 
        if($tarih < $burc_tarih || $tarih==$burc_tarih) { 
            $isaretli_burc = $prevburc; 
            break; 
        } 
        
        $prevburc = $burcisim; $c++; 
    } 
    return $isaretli_burc; 
}

echo burc("08-04");
?></div>
<div class="button-container">
   <a href="https://twitter.com/Bahax41" target="_blank" class="twitter"> <div class='button -blue center'>@Bahax41</div></a>
  </div>
                     
</div>


<script >const	body = document.querySelector('body')
const twitter = document.querySelector('.twitter')

twitter.addEventListener("mouseover", function () {
    body.classList.add('linked')
},false)

twitter.addEventListener("mouseout", function () {
    body.classList.remove('linked')
}, false)
</script>
</body></html>
