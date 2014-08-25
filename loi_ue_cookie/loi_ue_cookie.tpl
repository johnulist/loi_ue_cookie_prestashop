<script>
{literal}
function refuser_cookie(){
	localStorage.setItem('LocalStorage_loi_ue_cookie', 0);
	location.reload();
}

function accepter_cookie(){
	localStorage.setItem('LocalStorage_loi_ue_cookie', 1);
	location.reload();	
}
{/literal}
</script>
<div id="loi_ue_cookiee" style="position: absolute;z-index: 101;top: 0;left: 0;right: 0;background: #fde073;text-align: center;line-height: 2.5;overflow: hidden; -webkit-box-shadow: 0 0 5px black;-moz-box-shadow:0 0 5px black;box-shadow: 0 0 5px black;">
{l s='Ce site utilise des cookies pour vous offrir des offres et services adaptés à vos centres d’intérêts. En poursuivant votre navigation, vous acceptez l’utilisation des cookies sur ce site' mod='loi_ue_cookie'}
<a onclick="accepter_cookie();"> Accepter</a> <!--<a onclick="refuser_cookie();"> Refuser</a>-->
</div>
<script>
{literal}
var d = document.getElementById("loi_ue_cookiee");

console.log( localStorage.getItem('LocalStorage_loi_ue_cookie') );

if( localStorage.getItem('LocalStorage_loi_ue_cookie') == 1){
	
	d.style.display = "none";
	$('#loi_ue_cookiee').hide('fast');	

}

{/literal}
</script>