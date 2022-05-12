const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'rawg-video-games-database.p.rapidapi.com',
		'X-RapidAPI-Key': '92ccc03134mshbf121776fbc206ep11bd97jsn5f1e241e9c75'
	}
};

fetch('https://rawg-video-games-database.p.rapidapi.com/games', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));

console.log("asda");