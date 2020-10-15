<form>
	<input type="text" name="latitude" id="latitude" value="">
	<input type="text" name="longitude" id="longitude" value="">
</form>

<script type="text/javascript">
	
	document.addEventListener('DOMContentLoaded', function() {
		getLocation();
	},false);
	function getLocation() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(showPosition);
	  } else { 
	    console.log("Geolocation is not supported by this browser.");
	  }
	}

	function showPosition(position) {
	    document.getElementById("latitude").value = position.coords.latitude
	    document.getElementById("longitude").value = position.coords.longitude
	    // console.log(document.getElementById("latitude").value);
	    // console.log(document.getElementById("longitude").value);
	    console.log(position.coords.latitude)
	    console.log(position.coords.longitude)
	    
	}

</script>