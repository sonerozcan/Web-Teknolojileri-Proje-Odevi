const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'streamlinewatch-streaming-guide.p.rapidapi.com',
		'X-RapidAPI-Key': '92ccc03134mshbf121776fbc206ep11bd97jsn5f1e241e9c75'
	}
};

fetch('https://streamlinewatch-streaming-guide.p.rapidapi.com/movies?region=US&sort=popularity&sources=netflix%2Chulu&offset=0&limit=35', options)
	.then(response => response.json())
	.then(json => {
        json.forEach(element => {
			const name = element.original_title;
            const poster = "https://image.tmdb.org/t/p/w300/"+element.poster_path;
			const ov = element.overview;
            const movie = `<div class="card" style="width: 18rem;"> <img class="card-img-top" src="${poster}"> <div class="card-body"> <h5 class="card-title">${name}</h5> <p class="card-text">${ov}</p></div> </div>`
	        document.querySelector('.movies').innerHTML += movie;
		});
	})
	.then(response => console.log(response))
	.catch(err => console.error(err));
