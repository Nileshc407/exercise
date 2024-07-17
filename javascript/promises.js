function test()
{
	const ticket = new Promise(function (resolve,reject){
		const isBorded = false;
		if(isBorded)
		{
			resolve('you are in the flight');
		}
		else
		{
			reject('you flight has been cancelled');
		}
	});
	ticket.then((data)=> {
		console.log('wow',data);
	}).catch((data)=>{
		console.log('oh no',data);
	})
}
