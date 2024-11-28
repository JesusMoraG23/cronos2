// Selección de elementos del DOM
const btnsFavorite = document.querySelectorAll('.favorite');
const products = document.querySelectorAll('.card-product');
const counterFavorites = document.querySelector('.counter-favorite');

const containerListFavorites = document.querySelector(
	'.container-list-favorites'
);
const listFavorites = document.querySelector('.list-favorites');

const popularWatchesContainer = document.getElementById('popular-watches');
const btnClose = document.querySelector('#btn-close');
const buttonHeaderFavorite = document.querySelector('#button-header-favorite');

// Variables globales
let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

// Funciones
const updateFavoritesInLocalStorage = () => {
	localStorage.setItem('favorites', JSON.stringify(favorites));
};

const loadFavoritesFromLocalStorage = () => {
	const storedFavorites = localStorage.getItem('favorites');

	if (storedFavorites) {
		favorites = JSON.parse(storedFavorites);
		showHTML();
	}
};

const toggleFavorite = product => {
	const index = favorites.findIndex(
		element => element.id === product.id
	);

	if (index > -1) {
		favorites.splice(index, 1);
	} else {
		favorites.push(product);
	}

	updateFavoritesInLocalStorage();
	showHTML();
};

const updateFavoriteMenu = () => {
	listFavorites.innerHTML = '';

	favorites.forEach(fav => {
		const favoriteCard = document.createElement('div');
		favoriteCard.classList.add('card-favorite');

		const titleElement = document.createElement('p');
		titleElement.classList.add('title');
		titleElement.textContent = fav.title;
		favoriteCard.appendChild(titleElement);

		const priceElement = document.createElement('p');
		priceElement.textContent = fav.price;
		favoriteCard.appendChild(priceElement);

		listFavorites.appendChild(favoriteCard);
	});
};

const showHTML = () => {
	products.forEach(product => {
		const contentProduct = product.querySelector(
			'.content-card-product'
		);
		const productId = contentProduct.dataset.productId;
		const isFavorite = favorites.some(
			favorite => favorite.id === productId
		);

		const favoriteButton = product.querySelector('.favorite');
		const favoriteActiveButton =
			product.querySelector('#added-favorite');
		const favoriteRegularIcon = product.querySelector(
			'#favorite-regular'
		);
		favoriteButton.classList.toggle('favorite-active', isFavorite);
		favoriteRegularIcon.classList.toggle('active', isFavorite);
		favoriteActiveButton.classList.toggle('active', isFavorite);
	});

	counterFavorites.textContent = favorites.length;
	updateFavoriteMenu();
};

const loadPopularProducts = () => {
	if (favorites.length === 0) {
		popularWatchesContainer.innerHTML = "<p>No hay productos populares.</p>";
		return;
	}

	const popularWatches = favorites
		.slice(0, 10) // Limitar a los 10 primeros
		.sort((a, b) => b.count - a.count || b.title.localeCompare(a.title)); // Ordenar por conteo o título

	popularWatchesContainer.innerHTML = ''; // Limpiar contenedor
	popularWatches.forEach(watch => {
		const watchElement = document.createElement('div');
		watchElement.classList.add('card-product');

		// Crear y verificar la imagen del producto
		const imgUrl = `/imagenes/reloj_${watch.id}.jpg`;
		const imgElement = new Image();
		imgElement.onerror = () => (imgElement.src = '/imagenes/default.jpg');
		imgElement.src = imgUrl;

		watchElement.innerHTML = `
            <div class="container-img">
                <div class="flip-container">
                    <img src="${watch.img || '/imagenes/default.jpg'}" alt="${watch.title}" class="img-item" />
                    <div class="face-back">
                        <ul>
                            <li><strong>Tamaño de la caja:</strong> ${watch.size || 'N/A'}</li>
                            <li><strong>Movimiento:</strong> ${watch.movement || 'N/A'}</li>
                            <li><strong>Material de la correa:</strong> ${watch.strapMaterial || 'N/A'}</li>
                            <li><strong>Color de la correa:</strong> ${watch.strapColor || 'N/A'}</li>
                            <li><strong>Resistencia al agua:</strong> ${watch.waterResistance || 'N/A'}</li>
                            <li><strong>Material de la caja:</strong> ${watch.caseMaterial || 'N/A'}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-card-product" data-product-id="${watch.id}">
                <h3 class="titulo-item">${watch.title || 'Producto sin título'}</h3>
                <p>${watch.description || 'Descripción no disponible'}</p>
                <div class="footer-card-product">
                    <span class="price">${watch.price || 'Precio no disponible'}</span>
                    <div class="container-buttons-card">
                        <button class="favorite">
                            <i class="fa-regular fa-heart" id="favorite-regular"></i>
                            <i class="fa-solid fa-heart" id="added-favorite"></i>
                        </button>
                        <button class="cart">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
        `;

		popularWatchesContainer.appendChild(watchElement);
	});
};

// Listeners
btnsFavorite.forEach(button => {
	button.addEventListener('click', e => {
		const card = e.target.closest('.content-card-product');

		const product = {
			id: card.dataset.productId,
			title: card.querySelector('h3').textContent,
			price: card.querySelector('.price').textContent,
			count: 1, // Inicializar con un conteo
		};

		toggleFavorite(product);
	});
});

buttonHeaderFavorite.addEventListener('click', () => {
	containerListFavorites.classList.toggle('show');
});

btnClose.addEventListener('click', () => {
	containerListFavorites.classList.remove('show');
});

// Inicialización
loadFavoritesFromLocalStorage();
updateFavoriteMenu();
loadPopularProducts();
