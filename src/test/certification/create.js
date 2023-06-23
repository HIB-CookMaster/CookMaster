let main = document.getElementById("main");

let titleBtn = document.getElementById("titleBtn");
let textAreaBtn = document.getElementById("textAreaBtn");
let imgBtn = document.getElementById("imgBtn");
let videoBtn = document.getElementById("videoBtn");
let tipsBtn = document.getElementById("tipsBtn");
let importantBtn = document.getElementById("importantBtn");
let warningBtn = document.getElementById("warningBtn");
let subTitleBtn = document.getElementById("subTitleBtn");
let quizzBtn = document.getElementById("quizzBtn");
let saveBtn = document.getElementById("saveBtn");
let publishBtn = document.getElementById("publishBtn");
let certifName = document.getElementById("certifName");



function createElement(type, cssClass) {
  let elem = document.createElement(`${type}`);
  elem.setAttribute("class", `${cssClass}`);
  let deleteBtn = document.createElement("btn");
  deleteBtn.setAttribute("class", "fas fa-trash-alt");
  deleteBtn.addEventListener("click", function () {
    elem.remove();
    deleteBtn.remove();
  });
  main.appendChild(elem);
  main.appendChild(deleteBtn);
}

titleBtn.addEventListener("click", function () {
  createElement("input", "title");
});

textAreaBtn.addEventListener("click", function () {
  createElement("textarea", "textArea");
});

// imgBtn - create input files and img
imgBtn.addEventListener("click", function () {
  let input = document.createElement("input");
  input.setAttribute("type", "file");
  input.setAttribute("accept", "image/*");
  input.setAttribute("class", "img");
  input.addEventListener("change", function () {
    let img = document.createElement("img");
    img.setAttribute("src", URL.createObjectURL(input.files[0]));
    img.setAttribute("class", "img");
    main.appendChild(img);
  });
  main.appendChild(input);
});

// videoBtn - create input files and video
videoBtn.addEventListener("click", function () {
  let input = document.createElement("input");
  input.setAttribute("type", "file");
  input.setAttribute("accept", "video/*");
  input.setAttribute("class", "video");
  input.addEventListener("change", function () {
    let video = document.createElement("video");
    video.setAttribute("src", URL.createObjectURL(input.files[0]));
    video.setAttribute("class", "video");
    video.autoplay = false;
    video.controls = true;
    main.appendChild(video);
  });
  main.appendChild(input);
});

// tips - create input files
tipsBtn.addEventListener("click", function () {
  createElement("input", "tips");
});

// important - create input files
importantBtn.addEventListener("click", function () {
  createElement("input", "important");
});

// warning - create input files
warningBtn.addEventListener("click", function () {
  createElement("input", "warning");
});

subTitleBtn.addEventListener("click", function () {
  createElement("input", "subTitle");
});

quizzBtn.addEventListener("click", function () {
  let span = document.createElement("span");
  span.setAttribute("class", "quizz");
  let inputQuestion = document.createElement("input");
  inputQuestion.setAttribute("type", "text");
  inputQuestion.setAttribute("class", "quizz");
  inputQuestion.setAttribute("placeholder", "Question");
  span.appendChild(inputQuestion);
  main.appendChild(span);

  let ul = document.createElement("ul");
  ul.setAttribute("class", "quizz");
  ul.style.listStyleType = "none";
  for (let i = 0; i < 4; i++) {
    let li = document.createElement("li");
    li.setAttribute("class", "quizz");
    let checkbox = document.createElement("input");
    checkbox.setAttribute("type", "checkbox");
    checkbox.setAttribute("class", "quizz");
    checkbox.setAttribute("name", "correctAnswer");
    li.appendChild(checkbox);
    let label = document.createElement("label");
    label.setAttribute("class", "quizz");
    label.innerHTML = "Correct answer";
    li.appendChild(label);
    let inputAnswer = document.createElement("input");
    inputAnswer.setAttribute("type", "text");
    inputAnswer.setAttribute("class", "quizz");
    inputAnswer.setAttribute("placeholder", "Answer");
    li.appendChild(inputAnswer);
    ul.appendChild(li);

    checkbox.addEventListener("change", function () {
      if (this.checked) {
        li.setAttribute("data-answer", "true");
      } else {
        li.removeAttribute("data-answer");
      }
    });
  }
  main.appendChild(ul);
});


let myJsonData = "";

saveBtn.addEventListener("click", function () {
    let json = [];
    let elements = document.querySelectorAll("#main > *");
    elements.forEach(function (element) {
        let obj = {};
        let type = element.tagName.toLowerCase();
        obj.type = type;
        obj.class = element.className;
        obj.content = element.value;
        if (type === "img" || type === "video") {
            obj.content = element.src;
        }
        if (type === "ul") {
            let answers = [];
            let li = element.querySelectorAll("li");
            li.forEach(function (li) {
                let answer = {};
                answer.answer = li.querySelector("input[type=text]").value;
                answer.correct = li.hasAttribute("data-answer");
                answers.push(answer);
            });
            obj.answers = answers;
        }
        json.push(obj);
    });
    let jsonStr = JSON.stringify(json, null, 4);

    // stocker la chaîne JSON dans une variable
    myJsonData += jsonStr + ",";
    console.log(myJsonData);
});



publishBtn.addEventListener("click", function () {
    if(certifName.value === "") {
        alert("Please enter a name for your certification");
    }
    else {}
});
