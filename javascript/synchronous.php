<?php
echo "synchronous program!<br>";
echo "start<br>";
sleep(5);
echo "end<br>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
console.log('Start');
function synchronousOperation()
{
	console.log('Synchronous operation!');
}

synchronousOperation();
console.log('End');
</script>