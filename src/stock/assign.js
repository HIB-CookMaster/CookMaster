let local_cont = document.getElementById('local_cont');
let infos = document.getElementById('infos');
let tool_cont = document.getElementById('tool_cont');
let _local = 0;
let room = 0;
let c_room_contains = document.getElementById('roomcontains_cont');

let local_values = [
    {
        "adress" : "18 rue des Blancs Manteaux, 75004 Paris",
        "room_amount" : "5",
        "tools" : [[], [], [], [], []]
    },
    {
        "adress" : "4 Rue Montorgueil, 75002 Paris",
        "room_amount" : "5",
        "tools" : [[], [], [], [], []]
    },
    {
        "adress" : "9 Rue du Temple, 75003 Paris",
        "room_amount" : "5",
        "tools" : [[], [], [], [], []]
    },
    {
        "adress" : "6 Rue Saint-Jacques, 75005 Paris",
        "room_amount" : "5",
        "tools" : [[], [], [], [], []]
    },
    {
        "adress" : "9 Rue de Lyon, 75012 Paris",
        "room_amount" : "5",
        "tools" : [[], [], [], [], []]
    }
]

local_values = [];

let stock = {};

let assignement = {};

const update_text = () => {
    console.log(_local);
    infos.innerHTML = `Local : ${local_values[_local]['adress']} | Salle : ${room + 1}`;
};

const update_stock = async () => {
    let response = await fetch('http://51.75.143.35/CookMaster/src/stock/tool_list.json');
    let data = await response.json();
    stock = data;
}

const makeList = () => {
    local_cont.innerHTML = '';
    local_values.forEach((value, index) => {
        let local = document.createElement('div');
        local.classList.add('local');
        local.id = index;
        let local_adress = document.createElement('div');
        local_adress.classList.add('local_adress');
        local_adress.innerHTML = value.adress;

        let room_buttons = document.createElement('div');
        let _i = index;
        for(let i = 0; i < value.room_amount; i++) {
            let b = document.createElement('button');
            b.classList.add('room_button');
            b.innerHTML = i + 1;
            b.addEventListener('click', () => {
                _local = _i;
                room = i;
                update_text();
                updateAll();
            });
            room_buttons.appendChild(b);
        }

        let local_room_amount = document.createElement('div');
        local_room_amount.classList.add('local_room_amount');

        local.appendChild(local_adress);
        local.appendChild(room_buttons);
        local_cont.appendChild(local);
    })
}

const makeStock = async () => {
    tool_cont.innerHTML = '';
    let keys = Object.keys(stock).filter((value) => {
        return stock[value] > 0;    
    });
    keys.forEach((value) => {
        const cont = document.createElement('div');
        cont.classList.add('tool');
        const name = document.createElement('div');
        name.classList.add('tool_name');
        name.innerHTML = `${value} (${stock[value] - assignement[value]} / ${stock[value]})`;
        const button = document.createElement('button');
        button.onclick = () => {
            if(stock[value] - assignement[value] > 0) {
            console.log('added a ' + value + ' to ' + local_values[_local].adress + ' ' + room)
            local_values[_local].tools[room].push(value);
            getAssignments(value);
            console.log('there are ' + assignement[value] + ' ' + value + ' assigned')
            updateAll();
            }
        }
        cont.appendChild(name);
        cont.appendChild(button);
        tool_cont.appendChild(cont);
    });
}

const getAssignments = (tool) => {


    assignement[tool] = 0;
    local_values.forEach((_local) => {
        for(let i = 0; i < _local.room_amount; i++) {
            for(let j = 0; j < _local.tools[i].length; j++) {
                if(_local.tools[i][j] == tool) {
                    assignement[tool]++;
                }
            }
        }
    });

}

const updateRoomContains = () => {
    c_room_contains.innerHTML = '';
    local_values[_local].tools[room].forEach((tool) => {
        const container = document.createElement('div');
        container.classList.add('tool');

        const name = document.createElement('div');
        name.innerHTML = tool;

        const remove_button = document.createElement('button');
        remove_button.innerHTML = 'X';
        remove_button.addEventListener('click', () => {
            local_values[_local].tools[room].splice(local_values[_local].tools[room].indexOf(tool), 1);
            getAssignments(tool);
            makeStock();
            updateRoomContains();
        });

        container.appendChild(name);
        container.appendChild(remove_button);
        c_room_contains.appendChild(container);
    })
};

const init = async () => {
    await get_distrib();
    makeList();
    await update_stock();

    let keys = Object.keys(stock);
    keys.forEach((tool) => {
        getAssignments(tool);
    });
    

    await updateAll();
}

const updateAll = async () => {
    await makeStock();
    console.log(assignement);

    updateRoomContains();
}

const get_distrib = async () => {
    let response = await fetch('http://51.75.143.35/CookMaster/src/stock/distribution.json');
    let data = await response.json();
    local_values = await data;
}

const save = () => {
    let data = JSON.stringify(local_values);
    fetch('http://51.75.143.35/CookMaster/src/stock/saveassignement.php', {
        method: 'POST',
        body: data,
        header: {
            'Content-Type': 'application/json'
        }
    })
}

init();

let save_button = document.getElementById('save_button');
save_button.addEventListener('click', () => {
    save();
});