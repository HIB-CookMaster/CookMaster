let recipes_list = [];
let listContainer = document.getElementById('recipe-preview');

let current_page = 0;
let recipes_per_pages = 5;

const makeRecipeCard = (recipe) => {
    // Création de l'élément div principal
    var div = document.createElement('div');
    div.classList.add('col-lg-3', 'col-sm-12', 'col-md-4', 'card-shadow', 'py-3', 'px-3', 'mb-3', 'mx-4', 'mb-4');

    // Création de l'élément div de la carte
    var cardDiv = document.createElement('div');
    cardDiv.classList.add('card', 'h-100', 'border-0', 'shadow-none');

    // Création de l'élément img
    var img = document.createElement('img');
    img.src = `http://51.75.143.35/CookMaster/` + recipe.image;

    img.onerror = () => {
        img.src = 'https://via.placeholder.com/300x200';
    }
    
    img.classList.add('card-img-top');
    img.alt = '...';


    // Création de l'élément i
    var i = document.createElement('i');
    i.classList.add('fa-solid', 'fa-heart', 'px-1', 'py-1', 'text-danger');

    // Création de l'élément span intérieur à l'élément span position-absolute
    var spanInside = document.createElement('span');
    spanInside.classList.add('visually-hidden');
    spanInside.textContent = 'New alerts';



    // Création de l'élément div de contenu de la carte
    var cardBodyDiv = document.createElement('div');
    cardBodyDiv.classList.add('card-body', 'w-100', 'h-100', 'mt-1');

    // Création de l'élément h5
    var h5 = document.createElement('h5');
    h5.classList.add('card-title', 'fw-bold');
    h5.textContent = recipe.name;

    // Création de l'élément div de la ligne d'informations supplémentaires
    var infoDiv = document.createElement('div');
    infoDiv.classList.add('mt-4', 'd-flex', 'justify-content-between');

    // Création de l'élément span pour la durée de préparation
    var spanTime = document.createElement('span');
    var iTime = document.createElement('i');
    iTime.classList.add('fa-solid', 'fa-clock', 'me-2');
    spanTime.appendChild(iTime);
    spanTime.innerHTML += '<span class="opacity-75">' + recipe.prepTime +' minutes</span>';

    // Création de l'élément span pour la catégorie
    var spanCategory = document.createElement('span');
    var iUtensils = document.createElement('i');
    iUtensils.classList.add('fa-solid', 'fa-utensils', 'me-2');
    spanCategory.appendChild(iUtensils);
    spanCategory.innerHTML += '<span class="opacity-75">' + recipe.type +'</span>';

    // Création de l'élément span pour la note
    var spanRating = document.createElement('span');
    var iStar = document.createElement('i');
    iStar.classList.add('fa-regular', 'fa-star-half-stroke', 'text-warning');
    spanRating.appendChild(iStar);
    spanRating.innerHTML += '<span class="grey opacity-75 fs-little fw-bold">4.7</span>';

    // Ajout des éléments spanTime, spanCategory et spanRating à l'élément infoDiv
    infoDiv.appendChild(spanTime);
    infoDiv.appendChild(spanCategory);
    infoDiv.appendChild(spanRating);

    // Ajout des éléments img, span, h5 et infoDiv à l'élément cardBodyDiv
    cardBodyDiv.appendChild(img);
    cardBodyDiv.appendChild(h5);
    cardBodyDiv.appendChild(infoDiv);

    // Ajout des éléments cardBodyDiv à l'élément cardDiv
    cardDiv.appendChild(cardBodyDiv);

    // Ajout de l'élément cardDiv à l'élément div principal
    div.appendChild(cardDiv);

    // Ajout du div principal au document body ou à un autre élément de votre choix
    return div;

}

// Fetches all recipes
const loadRecipes = async () => {
    let response = await fetch('http://51.75.143.35:8081/recipes/all');
    let data = await response.json();
    return await data;
};

// Loads everything needed
const init = async () => {
    recipes_list = await loadRecipes();
    recipes_list.forEach(recipe => {

        listContainer.appendChild(makeRecipeCard(recipe));
    });
};

init();
