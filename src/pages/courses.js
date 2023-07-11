let recipes_list = [];
let listContainer = document.getElementById('list-container');

let current_page = 0;
let recipes_per_pages = 5;

const renderRecipe = (recipes) => {
    let wrapper = document.createElement('div');
    wrapper.className = 'card mb-3 border-0 mt-3 pointer shadow-none';

    let container = document.createElement('div');
    container.className = 'row g-0';

    let img_container = document.createElement('div');
    img_container.className = 'col-md-4';

    let img = document.createElement('img');
    img.className = 'img-fluid rounded-start object-fit-cover rounded-2 h-100';
    img.src = recipes.image  > 0 ? recipes.image : 'https://via.placeholder.com/300x200';

    let body = document.createElement('div');
    body.className = 'col-md-8 px-2';

    let card = document.createElement('div');
    card.className = 'card-body h-100 d-flex flex-column justify-content-space-between';

    let textWrapper = document.createElement('div');
    textWrapper.className = '';

    let title = document.createElement('h5');
    title.className = 'card-title fw-bold';
    title.innerText = recipes.name;

    let description = document.createElement('p');
    description.className = 'card-text grey mt-4';
    description.innerText = recipes.description;

    let footerWrapper = document.createElement('div');
    footerWrapper.className = 'mt-3';

    let authorImg = document.createElement('img');

    // height: 40px; width: 40px
    authorImg.style.height = '40px';
    authorImg.style.width = '40px';
    authorImg.className = 'rounded-circle';
    authorImg.src = recipes.authorImg ?? 'https://via.placeholder.com/40x40';

    let authorName = document.createElement('span');
    authorName.className = 'fw-bold mx-2';
    authorName.innerText = recipes.author ?? 'FoodieLand';

    let sep = document.createElement('span');
    sep.className = 'me-3';
    sep.innerText = '|';

    let date = document.createElement('span');
    date.className = 'me-3 grey';
    date.innerText = recipes.date ?? 'Unknown';

    wrapper.appendChild(container);
    container.appendChild(img_container);
    img_container.appendChild(img);
    container.appendChild(body);
    body.appendChild(card);

    card.appendChild(textWrapper);
    textWrapper.appendChild(title);
    textWrapper.appendChild(description);

    card.appendChild(footerWrapper);
    footerWrapper.appendChild(authorImg);
    footerWrapper.appendChild(authorName);
    footerWrapper.appendChild(sep);
    footerWrapper.appendChild(date);

    return wrapper;
};

const makeSelector = () => {
    const container = document.createElement('div');
    container.className = 'mt-5';
    /*
    <nav aria-label="Page navigation example">
        <ul class="pagination d-flex justify-content-center">
            <li class="page-item me-2">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item me-2"><a class="page-link" href="#">1</a></li>
            <li class="page-item me-2"><a class="page-link" href="#">2</a></li>
            <li class="page-item me-2"><a class="page-link" href="#">3</a></li>
            <li class="page-item me-2"><a class="page-link" href="#">4</a></li>
            <li class="page-item me-2"><a class="page-link" href="#">5</a></li>
            <li class="page-item me-2"><a class="page-link" href="#">...</a></li>
            <li class="page-item me-2">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    */
    // Build this thing from line 81 to 100
    let _nav = document.createElement('nav');
    _nav.setAttribute('aria-label', 'Page navigation example');

    const ul = document.createElement('ul');
    ul.className = 'pagination d-flex justify-content-center';

    const makeLi = (id) => {
        const li = document.createElement('li');
        li.className = 'page-item me-2';

        let p = document.createElement('p');
        p.className = 'page-link';
        p.setAttribute('number', id);
        p.innerText = parseInt(p.getAttribute('number')) + 1;
        p.addEventListener('click', (e) => {
            current_page = e.target.getAttribute('number');
            console.log('clic');
            listAllRecipes();
        });
        li.appendChild(p);
        li.setAttribute('number', id);
        return li;
    }

    for(let i = current_page - 5 > 0 ? current_page : 0
        ; i < current_page + 5 && i * recipes_per_pages < recipes_list.length;
        i++) {
        let li = makeLi(i);
        // Edit onclick for li

        ul.appendChild(li);
    }

    _nav.appendChild(ul);
    container.appendChild(_nav);

    return container;
};

const listAllRecipes = async () => {
    // rendering starts from offset currentpage * recipes_per_pages
    // and ends at currentpage * recipes_per_pages + recipes_per_pages
    // if currentpage * recipes_per_pages + recipes_per_pages > recipes_list.length
    // then we render until recipes_list.length
    // else we render until currentpage * recipes_per_pages + recipes_per_pages
    listContainer.innerHTML = '';
    let start = current_page * recipes_per_pages;
    let end = current_page * recipes_per_pages + recipes_per_pages;
    if(end > recipes_list.length) {
        end = recipes_list.length;
    }
    for(let i = start; i < end; i++) {
        let recipe = recipes_list[i];
        let recipeCard = await renderRecipe(recipe);
        listContainer.appendChild(recipeCard);
    }
    listContainer.appendChild(makeSelector());
};

const sortRecipeByDate = () => {
    recipes_list.sort((a, b) => {
        let dateA = new Date(a.date);
        let dateB = new Date(b.date);
        return dateB - dateA;
    });
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
    sortRecipeByDate(recipes_list);
    console.log(recipes_list);
    listAllRecipes();
};

init();
