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
  if(todays_event.length > 0){
    editMainEvent(todays_event[0]);
  }
  else {
    document.getElementById('wholecont').innerHTML = '';
    document.getElementById('wholecont').innerText = 'no event today'
  }
};

function estAujourdhui(dateStr) {
  var parties = dateStr.toString().split("/");
  var dateEntree = new Date(parties[2], parties[1] - 1, parties[0]);
  var aujourdHui = new Date();
  dateEntree.setHours(0, 0, 0, 0);
  aujourdHui.setHours(0, 0, 0, 0);

  return dateEntree.getTime() === aujourdHui.getTime();
}

// Gets the day of the week from today
function getDayOfWeek() {
  let day = today.getDay();
  let daylist = [
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi ",
    "Jeudi",
    "Vendredi",
    "Samedi",
  ];
  return daylist[day];
}

// Gets the number of the months today is
function getDayNb(){
    let day = today.getDate();
    return day;
}


function editMainEvent(event) {
    let name = document.getElementById("event-name");
    name.innerText = event.name?? "Aucun évènement aujourd'hui";
document.getElementById('thisday').innerText = getDayOfWeek();
    document.getElementById('adress').innerText = event.location.localName ?? "Aucune adresse";
    document.getElementById('bigtitle').innerHTML = event.name ?? "Aucun évènement aujourd'hui";
    document.getElementById('modaltitle').innerHTML = event.name ?? "Aucun évènement aujourd'hui";
    document.getElementById('fromto').innerText = event.startTime ?? "aaaAucune date" + '-' + event.endTime ?? "Aucune date";
    document.getElementById('if').src = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyCjWQlNkcPOZDjbriDy9fNvnIukKt63uwM&q=(' + event.location.localName
    
    document.getElementById('modalif').src = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyCjWQlNkcPOZDjbriDy9fNvnIukKt63uwM&q=(' + event.location.localName
    document.getElementById('imgeve').src = 'http://51.75.143.35/CookMaster/assets/images/events/' + event.thumbnail
    document.getElementById('thisdaynb').innerText = getDayNb();
    document.getElementById('initial').innerText = getDayOfWeek()[0] ?? "A";
    document.getElementById('leftnb').innerText = getDayNb();
    document.getElementById('modaladdr').innerText = event.location.localName ?? "Aucune adresse";

    document.getElementById('moddate').innerText = event.startDate.toString() ?? "Aucune date" + '-' + event.endDate.toString() ?? "Aucune date";
    document.getElementById('modhr').innerText = event.startTime.toString() ?? "Aucune date" + '-' + event.endTime.toString() ?? "Aucune date";
    
}

init();