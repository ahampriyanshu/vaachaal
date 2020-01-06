<!DOCTYPE html>
<html>
<head>
	<title>checking my alert box</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(function() {
setTimeout(function() { $("#cookieConsent").fadeOut(1500); }, 4000)
$('#cookieConsentOK').click(function() {
$('#cookieConsent').show();
setTimeout(function() { $("#cookieConsent").fadeOut(1500); }, 4000)
})
})
</script>
	<style type="text/css">
		
#cookieConsent {
    background-color: rgba(20,20,20,0.8);
    min-height: 40px;
    font-size:26px;
    color: #ccc;
    padding: 16px 8px 8px 30px;
    font-family: "Trebuchet MS",Helvetica,sans-serif;
    position: fixed;
    bottom: 10px;
    left: 10px;
    right: 10px;
    z-index: 9999;
    border-radius:5px;
}
#cookieConsent a {
    color: #4B8EE7;
    text-decoration: none;
}
#cookieConsent a.cookieConsentOK {
    background-color: #F1D600;
    color: #000;
    display: inline-block;
    border-radius: 5px;
    padding: 0 20px;
    cursor: pointer;
    float: right;
    margin: 0 60px 0 10px;
}
#cookieConsent a.cookieConsentOK:hover {
    background-color: #4CAF50;
}

	</style>
</head>
<body>
<div id="cookieConsent">
    This website is uses coockies and sessions. <a href="#" target="_blank">More info</a>. <a class="cookieConsentOK">That's Fine</a>
    <script type="text/javascript">
    document.getElementById("cookieConsent").onclick = function() { 
    document.getElementById("cookieConsent").style.display = "none"; 
  
        } 
    </script>
</div>
</body>
</html>
