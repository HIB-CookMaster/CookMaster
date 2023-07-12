const make = async () => {
    let values = {}
    let keys = []
    let tools = await fetch('http://51.75.143.35/CookMaster/src/stock/tool_list.json')
            .then(res => res.json())
            .then(data => { return data });

    values = tools;

    let container = document.getElementById('container');
    let listel = document.getElementById('list');

    let input = document.getElementById('name');
    let button = document.getElementById('add');

    let save_button = document.getElementById('save');
    save_button.onclick = async () => {
        await fetch('http://51.75.143.35/CookMaster/src/stock/stocksave.php', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*'
            },
            body: JSON.stringify(values)})
        console.log('saved')
    };

    button.onclick = () => {
        tools[input.value] = tools.length + 1;
        makeButtons();
        renderList();
    }

    const makeButton = (tool, id) => {
        let removeToolButton = document.createElement('button');
        removeToolButton.innerText = 'X';
        removeToolButton.onclick = () => {
            delete tools[tool];
            delete values[tool];
            makeButtons();
            renderList();
        };
        let cont = document.createElement('div');
        cont.setAttribute('toolid', id);
        cont.style.display = 'flex';
        cont.style.alignItems = 'center';
        let p = document.createElement('p');
        p.style.margin = '5 10px';
        let buttonPlus = document.createElement('button');
        buttonPlus.innerText = '+';

        buttonPlus.onclick = () => {
            values[keys[id]] += 1;
            console.log('added one' + keys[cont.getAttribute('toolid')]);
            console.log(keys);
            
            renderList();
        }

        let buttonMoins = document.createElement('button');
        buttonMoins.onclick = () => {
            values[keys[cont.getAttribute('toolid')]] -= values[keys[cont.getAttribute('toolid')]] > 0 ? 1 : 0;
            console.log('removed one' + keys[cont.getAttribute('toolid')]);
            
            renderList();
        }
        buttonMoins.innerHTML = '-';
        p.innerText = tool;
        cont.appendChild(removeToolButton);
        cont.appendChild(p);
        cont.appendChild(buttonPlus);
        cont.appendChild(buttonMoins);
        container.appendChild(cont);
    }
    const makeButtons = () => {
        container.innerText = '';
        keys = Object.keys(tools);

        keys.forEach(key => {
            values[key] = values[key] ?? 0;
            makeButton(key, keys.indexOf(key));
        });
    }

    const renderList = () => {
        listel.innerText = '';
        let list = {};
        keys.forEach(key => {
            if(values[key] > 0) {
                list[key] = values[key];
            }
        });
        let string = JSON.stringify(list, null, 4);
        listel.innerText = string;
    }

    makeButtons();
    renderList();
}

make();