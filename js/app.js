let rootAllSkill = document.getElementById("idSkillsList");
let rootAllHobbies = document.getElementById("idAllHobbies");

let rootAllEduction = document.getElementById("allEducationList");

let n = 0;
let m = 0;

function addNewSkill() {
  var skill = document.getElementById("idSkillInput");

  if (skill.value == "") {
    alert("fill up skill field.");
    skill.focus();
    return;
  }
  let div = document.createElement("div");

  div.classList.add(
    "p-2",
    "text-center",
    "shadow-sm",
    "bg-white",
    "rounded",
    "m-1"
  );

  var p = document.createElement("p");
  p.id = "skill-" + n++;
  p.innerHTML = skill.value;
  p.setAttribute("name", skill.value);
  p.setAttribute("class", "allSkill");
  p.classList.add("pt-3");
  p.style.display = "inline-block;";
  skill.value = "";

  var i = document.createElement("i");
  i.classList.add("fa", "fa-minus-circle", "fa-1x", "pl-1");

  p.appendChild(i);
  div.appendChild(p);
  i.addEventListener("click", function() {
    rootAllSkill.removeChild(div);
  });

  console.log(div);
  rootAllSkill.appendChild(div);
}

function addHobbies() {
  var hobbie = document.getElementById("idHobbyinput");
  if (hobbie.value == "") {
    alert("fill up hobbie field.");
    hobbie.focus();
    return;
  }
  var div = document.createElement("div");

  div.classList.add(
    "p-2",
    "text-center",
    "shadow-sm",
    "bg-white",
    "rounded",
    "m-1"
  );

  var p = document.createElement("p");
  p.id = "hobbie-" + m++;
  p.setAttribute("name", hobbie.value + "-1");
  p.setAttribute("class", "allHobbies");
  p.classList.add("pt-3");
  p.innerHTML = hobbie.value;

  var i = document.createElement("i");
  i.classList.add("fa", "fa-minus-circle", "fa-1x", "pl-1");

  p.appendChild(i);
  div.appendChild(p);
  i.addEventListener("click", function() {
    rootAllHobbies.removeChild(div);
  });

  hobbie.value = null;

  rootAllHobbies.appendChild(div);
}

function AddEducationInfo() {
  var degree = $("#idDegree").val();
  var institute = $("#idInstitute").val();
  var subject = $("#idSubject").val();
  var board = $("#idBoard").val();
  var result = $("#idResult").val();
  var passingYear = $("#idYearOfPassing").val();

  if (!degree || !institute || !subject || !board || !result || !passingYear) {
    alert("please fill up all education field");
    return;
  }

  var rootDiv = document.createElement("div");
  rootDiv.classList.add("row", "border-top");

  // degree div
  var degreeDiv = document.createElement("div");
  degreeDiv.classList.add("col", "pt-3", "pb-2", "text-center");

  var h5 = document.createElement("h5");
  h5.classList.add("clsDegree");
  h5.innerHTML = degree;

  degreeDiv.appendChild(h5);

  var i = document.createElement("i");
  i.classList.add(
    "fa",
    "fa-minus-circle",
    "fa-1x",
    "pl-1",
    "float-right",
    "text-danger"
  );

  h5.appendChild(i);

  degreeDiv.appendChild(h5);

  i.addEventListener("click", function() {
    rootAllEduction.removeChild(rootDiv);
  });

  rootDiv.appendChild(degreeDiv);

  //break div

  rootDiv.appendChild(createBreakDiv());

  //institution

  var instituteLavelDiv = makeDiv(["col"], "Institution");
  console.log(instituteLavelDiv);
  var instituteDiv = makeDiv(["col", "clsInstituteName"], institute);
  rootDiv.appendChild(instituteLavelDiv);
  rootDiv.appendChild(instituteDiv);
  rootDiv.appendChild(createBreakDiv());

  //Subject

  var subjectLevelDiv = makeDiv(["col"], "Subject/Group");
  var subjectDiv = makeDiv(["col", "clsSubjectName"], subject);
  rootDiv.appendChild(subjectLevelDiv);
  rootDiv.appendChild(subjectDiv);
  rootDiv.appendChild(createBreakDiv());

  //Board

  var boardLevelDiv = makeDiv(["col"], "Board");
  var boardDiv = makeDiv(["col", "clsBoardName"], board);
  rootDiv.appendChild(boardLevelDiv);
  rootDiv.appendChild(boardDiv);
  rootDiv.appendChild(createBreakDiv());

  //passing year

  var passYearLevelDiv = makeDiv(["col"], "Passing Year");
  var passYearDiv = makeDiv(["col", "clsPassingYearList"], passingYear);
  rootDiv.appendChild(passYearLevelDiv);
  rootDiv.appendChild(passYearDiv);

  rootDiv.appendChild(createBreakDiv());

  //result

  console.log(makeDiv(["col"], "Result"));
  var resultLevelDiv = makeDiv(["col"], "Result");
  var resultDiv = makeDiv(["col", "clsResulList"], result);
  rootDiv.appendChild(resultLevelDiv);
  rootDiv.appendChild(resultDiv);

  emptyEducationField();

  rootAllEduction.appendChild(rootDiv);
}

function makeDiv(classNameArray, value) {
  var div = document.createElement("div");

  if (typeof classNameArray == "string") {
    return "pass className as array";
  }

  for (var i = 0; i < classNameArray.length; i++) {
    div.classList.add(classNameArray[i]);
  }

  div.innerHTML = value;

  return div;
}

function createBreakDiv() {
  let breakDiv = document.createElement("div");
  breakDiv.classList.add("w-100");
  return breakDiv;
}

function emptyEducationField() {
  $("#idDegree").val("");
  $("#idInstitute").val("");
  $("#idSubject").val("");
  $("#idBoard").val("");
  $("#idResult").val("");
  $("#idYearOfPassing").val("");
}
/* <div class="row border-top">
                  <div class="col pt-3 pb-3 text-center">
                    <h5>
                      Bachelor of science(B.sc)
                      <i
                        class="fa fa-minus-circle fa-1x pl-1 float-right text-danger"
                      ></i>
                    </h5>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">Institution</div>
                  <div class="col">Daffodil International University</div>
                  <div class="w-100"></div>
                  <div class="col">Subject</div>
                  <div class="col">Software Engineering</div>
                  <div class="w-100"></div>
                  <div class="col">Session</div>
                  <div class="col">2016-2020</div>
                  <div class="w-100"></div>
                  <div class="col">Year of Passing</div>
                  <div class="col">8th Semester running</div>
                  <div class="w-100"></div>
                  <div class="col">Result</div>
                  <div class="col">CGPA - 3.90 (out of 4)</div>
                </div> */
