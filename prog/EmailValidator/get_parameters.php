<script>
var url = new URL(window.location.href);
console.log(url);
url.searchParams.forEach(
function(val,key){
	console.log(key);
	console.log(val);
})
</script>