<script>
			
			function viewJS(){
			var p = document.getElementById("p1");
			p.innerHTML="This is a online shopping platform where you can get all your desire products with exclusive brand shops and cupon vouchour. Stay with us. Thank you!!!";
			p.style.color="white";
			p.style.margin="50px";
			p.style.backgroundColor="black";
			p.style.borderRadius="3px";
			p.style.padding="5px";
			}
			
			
			
			
			
			var gForm= false;
			function get(id){
				return document.getElementById(id);
			}
			function showDetails(){
				get("info").style.display="block";
			}
			function hideDetails(){
				get("info").style.display="none";
			}
</script>