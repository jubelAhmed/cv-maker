<?php

    include_once("config.php");

    if(isset($_POST['cvSubmit'])){

      
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $birthDay = $_POST['dateOfBirth'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];
        $carrerObjective = $_POST['carrerObjective'];
        $personalSkill = $_POST['personalSkill'];
        $experience = $_POST['experience'];
        $summery = $_POST['summery'];
        $skills = $_POST['skills'];
        $hobbies = $_POST['hobbies'];

        $degrees = $_POST['degrees'];
        $institutes = $_POST['institutes'];
        $subjects = $_POST['subjects'];
        $boards = $_POST['boards'];
        $passingYears = $_POST['passingYears'];
        $results = $_POST['results'];

        $skillsList =  json_encode($skills);
        $hobbiesList =  json_encode($hobbies);

        $degreesList =  json_encode($degrees);
        $institutesList =  json_encode($institutes);
        $subjectsList =  json_encode($subjects);
        $boardsList =  json_encode($boards);
        $passingYearsList =  json_encode($passingYears);
        $resultsList =  json_encode($results);
        
        
        

        $result = mysqli_query($con , "INSERT INTO `user-information` ( `first_name`, `last_name`, `user_name`, `email`, `address`, `birthdate`, `gender`, `password`, `career_objective`, `perosnal_skill`, `experience`, `summery`,`skill_list`,`hobbie_list`) VALUES ('$firstName', '$lastName', '$userName', '$email', '$address', '$birthDay', '$gender', '$pass', '$carrerObjective', '$personalSkill', '$experience', '$summery','$skillsList','$hobbiesList')");  
        
        $resultEducationQuery = mysqli_query($con , "INSERT INTO `education_info` (`degree_list`, `institute_list`, `subject_list`, `board_list`, `passing_year_list`, `result_list`, `user_name`) VALUES ('$degreesList', '$institutesList', '$subjectsList', '$boardsList', '$passingYearsList', '$resultsList', '$userName');");
        

        if($resultEducationQuery && $result){
            echo "<center> <h2 style='color:#099' >Data Added Successful</h2> </center>";
            echo " <center><br/><a href='../index.html'> <button style='color:white;background:blue;
            padding:10px ;  '>View Result</button> </a></center> ";
            exit("success");
            
        }else{
            echo "<center> <h2 style='color:red' >Data Updated Failed</h2> </center>";
            exit("error");
        }
        

    }
  


?>