let side = document.getElementById("side");

let today = new Date();

let main_cont = document.getElementById("main-cont");

let events = [];

async function fetchEvent() {
  const response = await fetch(
    "http://51.75.143.35/CookMaster/src/events/getevent.php"
  );
  const data = await response.json();
  return await data;
}

async function init() {
  events = await fetchEvent();
  let todays_event = [];
  events.forEach((event) => {
    if(estAujourdhui(event.startDate)){
      console.log(event);
      todays_event.push(event);
    }
  });
};

function estAujourdhui(dateStr) {
  var parties = dateStr.toString().split("/");
  var dateEntree = new Date(parties[2], parties[1] - 1, parties[0]);
  var aujourdHui = new Date();
  dateEntree.setHours(0, 0, 0, 0);
  aujourdHui.setHours(0, 0, 0, 0);

  return dateEntree.getTime() === aujourdHui.getTime();
}


console.log("started");
init();


