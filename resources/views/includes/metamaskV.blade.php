<div>
	<!-- <script src="node_modules/web3/dist/web3.min.js"></script> -->
	 <script sr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<div id="meta-mask-required">
		testing metamask user authentication direct route ...	
	</div>

<script>


	web3.eth.getAccounts(function(error, accounts) {
   		console.log(accounts);   
		if (accounts.length > 0) {
		  confirm('metaUserLogged!!!');
		
		var valuePost = accounts[0];
		confirm(valuePost); 
	
	document.body.innerHTML += '<form id="ethm" action="http://127.0.0.1:8888/ethm" method="post"><input id="ethidinput" type="hidden" name="ethid" value="www"></form>';

	document.getElementById("ethidinput").value = valuePost;

	document.getElementById("ethm").submit();

	 }
	
	});


	
	
	
	
		
</script>

</div>
