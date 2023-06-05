<?php require "../../required_pages/header.php"; ?>
<?php require "../../required_pages/navbar.php"; ?>

<div class="bg-cart bg-filter"
    style="margin-top: -88px; background: url('/CookMaster/assets/images/cart/banner.jpg'); height: 300px; background-size: cover; background-position: 0% 20%">
    <div class="container d-flex align-items-center h-100 w-100">
        <div class="d-flex justify-content-between align-items-center h-100 w-100">
            <span style="color: white;" class="fs-2">Test </span>
            <span style="color: white;" class="fs-6"><a class="text-decoration-none text-light"
                    href="/CookMaster/">Home</a> | <span class="text-success"> Test</span></span>
        </div>
    </div>
</div>

<?php require_once "../nav.php"; ?>


<div class="container mt-5">
    <form action="" class="mt-5" method="post">
        <span class="fs-3 opacity-25">Edit Recipe</span>

        <!-- Name input -->
        <div class="form-outline mb-4 mt-3">
            <input type="text" id="name" name="name" class="form-control"
                value="Big and Juicy Wagyu Beef Cheeseburger" />
            <label class="form-label" for="name">Recipe Name</label>
        </div>

        <!-- Preparation time input -->
        <div class="form-outline mb-4">
            <input type="number" id="prepTime" name="prepTime" class="form-control" value="15" />
            <label class="form-label" for="prepTime">Preparation Time (minutes)</label>
        </div>

        <!-- Cook time input -->
        <div class="form-outline mb-4">
            <input type="number" id="cookTime" name="cookTime" class="form-control" value="50" />
            <label class="form-label" for="cookTime">Cook Time (minutes)</label>
        </div>

        <!-- Type input -->
        <div class="form-outline mb-4">
            <input type="text" id="type" name="type" class="form-control" value="Chicken" />
            <label class="form-label" for="type">Recipe Type (Exemple : Chicken)</label>
        </div>

        <label class="form-label" for="video">Recipe Video</label>
        <input type="file" class="form-control" id="video" name="video" />

        <label class="form-label mt-3" for="image">Recipe Image</label>
        <input type="file" class="form-control" id="image" name="image" />

        <!-- Description input -->
        <div class="form-outline mb-4 mt-4">
            <textarea class="form-control" id="description" name="description"
                rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, consequatur unde. Odio in natus et optio maiores nobis aliquid minus fugiat assumenda quisquam eos nam at voluptate alias reiciendis quis, aperiam, nesciunt ullam consequuntur eligendi? Ad, deleniti repellendus, adipisci amet a id quis fugit quia consequatur reiciendis quae, in omnis voluptas quasi delectus modi possimus doloremque dolorum doloribus assumenda cum aut praesentium necessitatibus itaque. Eveniet ratione dignissimos atque fugit facilis iusto quo tempora, sit iure odio! Esse animi necessitatibus molestias quo labore, quia autem unde quae asperiores aperiam id non deleniti alias tenetur hic, reiciendis tempora! Hic possimus vero odio!</textarea>
            <label class="form-label" for="description">Description</label>
        </div>

        <span class="fs-5 opacity-25">Nutrition Information</span>

        <table class="table align-middle mb-0 bg-white mt-3">
            <thead class="bg-light">
                <tr>
                    <th>Calories (kcal)</th>
                    <th>Glucides (g)</th>
                    <th>Protein (g)</th>
                    <th>Lipides (g)</th>
                    <th>Vitamines (mg)</th>
                    <th>Minéraux (mg)</th>
                    <th>Fibre (g)</th>
                    <th>Eau (g)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="calories" name="calories" class="form-control" value="35" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="glucides" name="glucides" class="form-control" value="14" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="protein" name="protein" class="form-control" value="145" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="lipides" name="lipides" class="form-control" value="18" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="vitamines" name="vitamines" class="form-control" value="35.54" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="mineraux" name="mineraux" class="form-control" value="0.08" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="fibre" name="fibre" class="form-control" value="15.35" />
                        </div>
                    </td>
                    <td>
                        <div class="form-outline mb-4">
                            <input type="number" id="eau" name="eau" class="form-control" value="54.2" />
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3 mb-2">
            <span class="fs-5 opacity-25 mt-3">Ingredients</span>
        </div>

        <div id="ingredients">
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="ingredients[]" placeholder="Ingredients"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="ingredients[]" placeholder="Ingredients"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="ingredients[]" placeholder="Ingredients"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="ingredients[]" placeholder="Ingredients"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="ingredients[]" placeholder="Ingredients"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
        </div>

        <button id="addIngredientsBtn" type="button" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Add
            Ingredients</button>

        <div class="mt-3 mb-2">
            <span class="fs-5 opacity-25 mt-3">Recipes details</span>
        </div>

        <div id="recipes">
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>
            <div class="input-group mb-3 mt-3">
                <input class="form-control" type="text" name="recipes[]" placeholder="Recipes"
                    value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, beatae!">
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </div>

        </div>

        <button id="addRecipesBtn" type="button" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Add
            Recipes</button>


        <!-- Submit button -->
        <div class="d-flex">
            <button type="submit" class="btn btn-primary mb-4 mt-5">Save</button>
        </div>
    </form>
</div>

<script>

    document.addEventListener('DOMContentLoaded', (event) => {
        // Get all existing delete buttons
        const existingDeleteBtns = document.querySelectorAll('.btn-danger');

        existingDeleteBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.parentElement.parentElement.removeChild(btn.parentElement);
            });
        });

        // Add ingredients
    const addIngredientsBtn = document.getElementById("addIngredientsBtn");
    const ingredients = document.getElementById("ingredients");

    //create Input on click with a delete btn
    addIngredientsBtn.addEventListener("click", () => {
        const inputDiv = document.createElement("div");
        inputDiv.classList.add("input-group");
        inputDiv.classList.add("mb-3");
        inputDiv.classList.add("mt-3");

        const input = document.createElement("input");
        input.classList.add("form-control");
        input.setAttribute("type", "text");
        input.setAttribute("name", "ingredients[]");
        input.setAttribute("placeholder", "Ingredients");
        inputDiv.appendChild(input);

        const deleteBtn = document.createElement("button");
        deleteBtn.classList.add("btn");
        deleteBtn.classList.add("btn-danger");
        deleteBtn.innerHTML = "<i class='fa-solid fa-trash'></i>";
        inputDiv.appendChild(deleteBtn);

        ingredients.appendChild(inputDiv);

        deleteBtn.addEventListener("click", () => {
            ingredients.removeChild(inputDiv);
        });
    });

    // Add recipes
    const addRecipesBtn = document.getElementById("addRecipesBtn");
    const recipes = document.getElementById("recipes");

    //Create Input on click with a delete btn
    addRecipesBtn.addEventListener("click", () => {
        const inputDiv = document.createElement("div");
        inputDiv.classList.add("input-group");
        inputDiv.classList.add("mb-3");
        inputDiv.classList.add("mt-3");

        const input = document.createElement("input");
        input.classList.add("form-control");
        input.setAttribute("type", "text");
        input.setAttribute("name", "recipes[]");
        input.setAttribute("placeholder", "Recipes");
        inputDiv.appendChild(input);

        const deleteBtn = document.createElement("button");
        deleteBtn.classList.add("btn");
        deleteBtn.classList.add("btn-danger");
        deleteBtn.innerHTML = "<i class='fa-solid fa-trash'></i>";
        inputDiv.appendChild(deleteBtn);

        recipes.appendChild(inputDiv);

        deleteBtn.addEventListener("click", () => {
            recipes.removeChild(inputDiv);
        });
    });
    });
    
</script>


<?php require "../../required_pages/footer.php"; ?>