
 <?php
        
        include_once('config.php');

       /*  $result = mysqli_query($con , "SELECT * from `user-information` where user_name='jubel8180' AND password='1234' " );

        $educationResult = mysqli_query($con , "SELECT * from `education_info` where user_name='jubel8180' " ); */

        if(isset($_POST["submit"])){

            
            $userName = $_POST["user-name"];
            $pass = $_POST["user-password"];

            $result = mysqli_query($con , "SELECT * from `user-information` where user_name='$userName' AND password='$pass' " );

            $educationResult = mysqli_query($con , "SELECT * from `education_info` where user_name='$userName' " );
            

            if($result->num_rows > 0){
               
            }else{
                echo "<script type='text/javascript'>alert('Wrong Username or Password');
                window.location='../home.html';
                </script>";
                
            }
          

        }
 
 ?>

<html>

    

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>resume</title>
    <link href="../css/view.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-matarial/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="../bootstrap-matarial/css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="../bootstrap-matarial/css/style.css" rel="stylesheet" />
    
  </head>

<body>

    <!-- `first_name`, `last_name`, `user_name`, `email`, `address`, `birthdate`, `gender`, `password`, `career_objective`, `perosnal_skill`, `experience`, `summery`,`skill_list`,`hobbie_list` -->

    <!-- "INSERT INTO `education_info` (`degree_list`, `institute_list`, `subject_list`, `board_list`, `passing_year_list`, `result_list`, `user_name` -->

        <?php
                        
        while($res = mysqli_fetch_array($result)){

        $firstName = $res['first_name'];
        $lastName = $res['last_name'];
        $userName = $res['user_name'];
        $email = $res['email'];
        $address = $res['address'];
        $birthDay = $res['birthdate'];
        $gender = $res['gender'];
        $pass = $res['password'];
        $carrerObjective = $res['career_objective'];
        $personalSkill = $res['perosnal_skill'];
        $experience = $res['experience'];
        $summery = $res['summery'];
        $skills = $res['skill_list'];
        $hobbies = $res['hobbie_list'];

       /*  $degrees = $res['degree_list'];
        $institutes = $res['institute_list'];
        $subjects = $res['subject_list'];
        $boards = $res['board_list'];
        $passingYears = $res['passing_year_list'];
        $results = $res['result_list']; */

        $skillsList =  json_decode($skills);
        $hobbiesList =  json_decode($hobbies);

        /* $degreesList =  json_decode($degrees);
        $institutesList =  json_decode($institutes);
        $subjectsList =  json_decode($subjects);
        $boardsList =  json_decode($boards);
        $passingYearsList =  json_decode($passingYears);
        $resultsList =  json_decode($results); */

        $id = $res['id'];
        }

        while($resEducation = mysqli_fetch_array($educationResult)){
             $degrees = $resEducation['degree_list'];
            $institutes = $resEducation['institute_list'];
            $subjects = $resEducation['subject_list'];
            $boards = $resEducation['board_list'];
            $passingYears = $resEducation['passing_year_list'];
            $results = $resEducation['result_list'];

            $degreesList =  json_decode($degrees);
            $institutesList =  json_decode($institutes);
            $subjectsList =  json_decode($subjects);
            $boardsList =  json_decode($boards);
            $passingYearsList =  json_decode($passingYears);
            $resultsList =  json_decode($results);

        }    
        
        //"<td><a href=\"edit.php?id=$res[user_id]\">Edit</a> </td>"
        //echo '<td> <a href=edit.php?id='.$res['user_id'].'>Edit</a> </td>';
        
        //echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        /* echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
            echo "<td><a href=\"delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure you want to delete') \" >Delete</a></td>"; */
            
        /*  
            just testing
        echo "<br>";
            echo $id ;
            echo "<br>";
            print_r($skillsList);
            foreach ($hobbiesList as $value) {
                echo "$value <br>";
            } */    

    ?>
        

      


    <!-- html design start -->

    <nav class="navbar navbar-expand-lg unique-color
#3F729B" style="color:white">

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <div class="d-flex justify-content-center ">
                    <div class="align-self-center p-2">
                        <img src="../images/color.png" alt="pic-update" class="rounded-circle" style="width:200px;height:200px">
                    </div>
                    <div class="align-self-center pl-4 mt-2 ">
                         <div class="d-flex flex-row">
                            <div class="px-2"><h2> <?php echo $firstName." ".$lastName ; ?> </h2>
                            </div>
                            
                           </div>

                           <div class="d-flex flex-row">
                            <div class="px-2"><p class="px-1"><?php echo $address ; ?></p>
                            </div>
                            
                           </div>
                        
                        
                       <div class="d-flex flex-row">
                            <div class="px-2">Email:</div>
                            <div class="px-2"> <a  class="white-text font-weight-bold" href="mailto:<?php echo $email ?>"> <?php echo $email ?>  </a></div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

     <div class="container all">
        <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Career Objective</h4>
            <p class="px-2" >
            <?php echo $carrerObjective ; ?>
            </p>
        </div>

        <!-- skills list -->
         <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Skills</h4>
            <div class="skill-list">

                <?php

                    foreach ($skillsList as $value) {
                        echo "<ul class='list-group list-group-flush'>";
                        echo "<li class='list-group-item'>".$value."</li>";
                        
                        echo "</ul>";
                    }

                ?>   

            </div>
        </div>  
        
        <!-- personal skill -->
        <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Personal Skill</h4>
             <p class="px-2 "> <?php echo $personalSkill ?> </p>
        </div>

        <!-- hobbies -->

         <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Hobbies and Interest</h4>
            <div class="hobby-list">
                <?php

                    foreach ($hobbiesList as $value) {
                        echo "<ul class='list-group list-group-flush'>";
                        echo "<li class='list-group-item'>".$value."</li>";
                        
                        echo "</ul>";
                    }
                ?>   
            </div>
        </div> 
        
        <!-- experience -->
        <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Experience</h4>
             <p class="px-2 " > <?php echo $experience ?> </p>
        </div>

        <!-- <?php echo count($skillsList) ?> -->

        <!-- education qualification -->
        
        <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Educational Qualification</h4>
                <?php  
                    $arrlength = count($degreesList);

                    for($i=0 ; $i<$arrlength ; $i++){
                        echo " <div class='row pl-2 w-75 border-bottom py-2'>" ; 
                        echo "<div class='col pt-1 pb-1'>" ; 
                        echo "<h5>". $degreesList[$i] ."</h5>" ; 
                        echo "</div>" ; 
                        echo "<div class='w-100'></div>" ; 

                        echo "<div class='col'>Institution</div>" ; 
                        echo "<div class='col'>".$institutesList[$i]."</div>" ; 
                        echo "<div class='w-100'></div>" ; 

                        echo "<div class='col'>Subject/Group</div>" ; 
                        echo "<div class='col'>".$subjectsList[$i]."</div>" ; 
                        echo "<div class='w-100'></div>" ; 

                        echo "<div class='col'>Board</div>" ; 
                        echo "<div class='col'>".$boardsList[$i]."</div>" ; 
                        echo "<div class='w-100'></div>" ; 

                        echo "<div class='col'>Year of Passing</div>" ; 
                        echo "<div class='col'>".$passingYearsList[$i]."</div>" ; 
                        echo "<div class='w-100'></div>" ; 

                        echo "<div class='col'>Result</div>" ; 
                        echo "<div class='col'>".$resultsList[$i]."</div>" ; 
                        
                        echo "</div>";
                    }
                    
                ?>  
        </div>
        
        <!-- personal information -->

       <!--  <div class="px-4 py-2 same-dv">
            <h4 class="pl-2 py-1">Personal Information</h4>
            <div class="row pl-2 w-75">
                <div class="col">Father name</div>
                <div class="col">  </div>
                <div class="w-100"></div>
                <div class="col">Mother Name</div>
                <div class="col">Israbun Nessa</div>
                <div class="w-100"></div>
                <div class="col">Date of Birth</div>
                <div class="col">28th december,1996</div>
                <div class="w-100"></div>
                <div class="col">Nationality</div>
                <div class="col">Bangladeshi</div>
                <div class="w-100"></div>
                <div class="col">Religion</div>
                <div class="col">Islam</div>
                <div class="w-100"></div>
                <div class="col">Marital Status</div>
                <div class="col">Single</div>
                <div class="w-100"></div>
                <div class="col">Permanent Address</div>
                <div class="col">Vill: Ghillachora, P.O: Norshingpur ,
                    P.S: Duara, Dist: Sunamganj.</div>
            </div>

 -->
            

            <!-- summery -->

             <div class=" px-4 py-4 same-dv">
                <p> <strong>Summery: </strong> 
                    <?php  echo $summery ?>
                </p>
            </div>

            <!-- date and signature -->
            <div class=" px-2 py-2 same-dv">
                <div class="row pl-2 w-100">
                    <div class="col">
                        <p><Strong>Date: </Strong> <?php echo date("d/m/Y") ?> </p>
                    </div>
                    <div class="col ">
                        <p class="text-right"><strong>Signature: </strong><?php  echo $firstName ?></p>
                    </div>

                </div>

            </div>


    </div> 



    <!-- html design end -->        



      <!-- SCRIPTS -->
    <!-- JQuery -->
    <script
      type="text/javascript"
      src="../bootstrap-matarial/js/jquery-3.3.1.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="../bootstrap-matarial/js/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="../bootstrap-matarial/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="../bootstrap-matarial/js/mdb.min.js"
    ></script>
</body>

</html>