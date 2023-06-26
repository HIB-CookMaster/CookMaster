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
let publishBtn = document.getElementById("publishBtn");
let certifName = document.getElementById("certifName");
const container = document.getElementById("container");

// chapter counter
let chapterCounter = 0;
let currentChapter = null;

function createElement(type, cssClass) {
  let elem = document.createElement(`${type}`);
  elem.setAttribute("class", `${cssClass}`);

  let deleteBtn = document.createElement("button");
  deleteBtn.setAttribute("class", "fas fa-trash-alt delete-btn");

  deleteBtn.addEventListener("click", function () {
    elem.remove();
    deleteBtn.remove();
  });

  if (currentChapter) {
    currentChapter.appendChild(elem);
    currentChapter.appendChild(deleteBtn);
  } else {
    main.appendChild(elem);
    main.appendChild(deleteBtn);
  }
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

// subTitle - create input files
subTitleBtn.addEventListener("click", function () {
  createElement("input", "subTitle");
});

// quizz - create input files
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

let chapters = [];

// get all the fields
const thumbnail = document.getElementById("thumbnail");
const difficulty = document.getElementById("difficulty");
const duration = document.getElementById("duration");
const description = document.getElementById("description");
const infosContainer = document.getElementById("infos");

// check if all the fields are completed
function checkInfos() {
  if (
    thumbnail.value === "" ||
    difficulty.value === "" ||
    duration.value === "" ||
    description.value === ""
  ) {
    return true;
  }
}

// publishBtn - send JSON to PHP
publishBtn.addEventListener("click", function () {
  let chapters = [];
  let currentChapter = [];
  let chapterName = 1;

  let elements = document.querySelectorAll("#main > *");
  let fileCount = 0;

  elements.forEach(function (element) {
    if (
      ((element.tagName.toLowerCase() === "input" && element.type === "file") ||
        element.tagName.toLowerCase() === "i" &&
        element.classList.contains("fas") &&
        element.classList.contains("fa-ellipsis-h") &&
        element.classList.contains("mt-3") &&
        element.classList.contains("mb-3")) ||
      (element.tagName.toLowerCase() === "button" &&
        element.classList.contains("fas") &&
        element.classList.contains("fa-trash-alt") &&
        element.classList.contains("delete-btn"))
    ) {
      return;
    } else {
      let obj = {};
      let type = element.tagName.toLowerCase();
      obj.type = type;
      obj.class = element.className;

      if (type === "img" || type === "video") {
        obj.content = element.src;
      } else {
        obj.content = element.value;
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

      if (element.classList.contains("chapDelim")) {
        if (currentChapter.length > 0) {
          chapters.push({
            name: "Chapitre " + chapterName,
            data: currentChapter,
          });
          currentChapter = [];
          chapterName++;
        }
      } else {
        currentChapter.push(obj);
      }
    }
  });

  if (currentChapter.length > 0) {
    chapters.push({ name: "Chapitre " + chapterName, data: currentChapter });
  }

  if (main.children.length === 0) {
    alert("Please add content to your chapter");
  } else if (certifName.value === "" || checkInfos()) {
    alert("Please Complete all the fields !");
  } else {
    let infos = {
      certifName: certifName.value,
      thumbnail: thumbnail.value,
      difficulty: difficulty.value,
      duration: duration.value,
      description: description.value,
      chapters: chapterCounter,
    };

    let formData = new FormData();
    formData.append("jsonData", JSON.stringify(chapters));
    formData.append("infos", JSON.stringify(infos));

    elements.forEach(function (element) {
      if (
        element.tagName.toLowerCase() === "input" &&
        element.type === "file"
      ) {
        formData.append("file_" + fileCount, element.files[0]);
        fileCount++;
      }
    });

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/CookMaster/src/test/certification/save.php", true);
    xhr.send(formData);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
  }
});

const chapDelim = document.getElementById("chapDelim");

chapDelim.addEventListener("click", function () {
  let div = document.createElement("div");
  div.setAttribute("class", "chapDelim");
  main.appendChild(div);
  chapterCounter++;

  // create the chapter number
  let i = document.createElement("i");
  i.innerHTML = ` Chapter ${chapterCounter}`;
  i.setAttribute("class", "fas fa-ellipsis-h mt-3 mb-3");
  main.appendChild(i);

  // span element that will contain the chapter number
  i.setAttribute("data-chapter", chapterCounter);
});
