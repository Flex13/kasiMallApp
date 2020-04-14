const cacheName = 'v1';




//Call Install Event
self.addEventListener('install', e => {
	console.log('ServiceWorker: Installed');
});



//Call Activate event
self.addEventListener('activate', e => {
	console.log('ServiceWorker: Activated');
	//remove unwanted caches
	e.waitUntil(
		caches.keys().then(cacheNames => {
			return Promise.all(
				cacheNames.map(cache => {
					if (cache !== cacheName) {
						console.log('Service Worker: Clearing Old Cache');
						return caches.delete(cache)
					}
				})
			);
		})
	);
});

//Call Fetch Event
self.addEventListener('fetch', e => {
	console.log('Service Worker: Fetching');
	e.respondWith(
		fetch(e.request)
		.then(res => {
			//make copy/clone of response
			const resClone = res.clone();
			//open cache
			caches
			.open(cacheName)
			.then(cache => {
				// Add response tpo cache
				cache.put(e.request, resClone);
			});
			return res;
		}).catch(err => caches.match(e.request).then(res => res))
	);
});



