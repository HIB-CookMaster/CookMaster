const createRecipe = async () => {
    // id array
    let elements = [
        'name',
        'prepTime',
        'cookTime',
        'type',
        'video',
        'image',
        'description',
        'calories',
        'glucides',
        'protein',
        'lipides',
        'vitamines',
        'mineraux',
        'fibre',
        'eau'
    ]

    let data = {};

    // Gets element for each id
    elements.forEach(elem => {
        data[elem] = document.getElementById(elem).value; 
    });

    let ingredient_elements = document.getElementsByName('ingredients[]');
    let ingredient_list = [];

    ingredient_elements.forEach(elem => {
        ingredient_list.push(elem.value);
    });

    let steps_elements = document.getElementsByName('recipes[]');
    let step_list = [];

    steps_elements.forEach(elem => {
        step_list.push(elem.value);
    });

    data['ingredients'] = ingredient_list;
    data['steps'] = step_list;

    console.log('Posting')
    data = JSON.stringify(data, null, 4);
    // POST request using fetch()s
    await fetch(`http://51.75.143.35:8081/recipes`, {
        // Adding method type
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin': '*'
        },
        // Adding body or contents to send
        body: data
    });
    console.log("Posted");
    console.log(data);
}