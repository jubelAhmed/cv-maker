const url = "http://localhost:80/cv-maker/php/add.php";

$(document).ready(function() {
  $("#btnCvSubmit").on("click", function() {
    var firstName = $("#idFirstName").val();
    var lastName = $("#idLastName").val();
    var userName = $("#idUserName").val();
    var email = $("#idEmail").val();
    var address = $("#idAddress").val();
    var dateOfBirth = $("#idDateOfBirth").val();
    var gender = $("input[name=gender]:checked").val();
    var password = $("#idPassword").val();
    var carrerObjective = $("#idObjective").val();
    var personalSkill = $("#idPersonalSkill").val();
    var experience = $("#idExperience").val();
    var summery = $("#idSummery").val();

    var skills = $(".allSkill");
    var hobbies = $(".allHobbies");

    var skillsArr = [];
    for (var i = 0; i < skills.length; i++) {
      skillsArr.push(skills[i].firstChild.nodeValue);
    }
    var hobbiesArr = [];
    for (var i = 0; i < hobbies.length; i++) {
      hobbiesArr.push(hobbies[i].firstChild.nodeValue);
    }

    // education
    var degrees = $(".clsDegree");
    var institutes = $(".clsInstituteName");
    var subjects = $(".clsSubjectName");
    var boards = $(".clsBoardName");
    var passingYears = $(".clsPassingYearList");
    var results = $(".clsResulList");

    var degreeArr = [];
    for (var i = 0; i < degrees.length; i++) {
      degreeArr.push(degrees[i].firstChild.nodeValue);
    }
    var institutesArr = [];
    for (var i = 0; i < institutes.length; i++) {
      institutesArr.push(institutes[i].firstChild.nodeValue);
    }
    var subjectsArr = [];
    for (var i = 0; i < subjects.length; i++) {
      subjectsArr.push(subjects[i].firstChild.nodeValue);
    }
    var boardsArr = [];
    for (var i = 0; i < boards.length; i++) {
      boardsArr.push(boards[i].firstChild.nodeValue);
    }
    var passingYearsArr = [];
    for (var i = 0; i < passingYears.length; i++) {
      passingYearsArr.push(passingYears[i].firstChild.nodeValue);
    }
    var resultsArr = [];
    for (var i = 0; i < results.length; i++) {
      resultsArr.push(results[i].firstChild.nodeValue);
    }
    console.log(resultsArr);

    if (!email) {
      alert("please fill up all field");
    } else
      $.ajax({
        url: url,
        method: "POST",
        data: {
          cvSubmit: "1",
          firstName: firstName,
          lastName: lastName,
          userName: userName,
          email: email,
          address: address,
          dateOfBirth: dateOfBirth,
          gender: gender,
          password: password,
          carrerObjective: carrerObjective,
          personalSkill: personalSkill,
          experience: experience,
          summery: summery,
          skills: skillsArr,
          hobbies: hobbiesArr,

          degrees: degreeArr,
          institutes: institutesArr,
          subjects: subjectsArr,
          boards: boardsArr,
          passingYears: passingYearsArr,
          results: resultsArr
        },
        success: function(response) {
          if (response.indexOf("success") >= 0) {
            alert("submit successfull");
          } else {
            alert("submit error");
          }
        },
        error: function() {
          $("#records_content")
            .fadeIn(1000)
            .html('<div class="text-center">error here</div>');
        },
        dataType: "text"
      });
  });
});
