<?php
  include('../Controllers/connection.php');
  
  
  session_start();
  

  if(!isset($_SESSION['email']))
  {
    header("location:studentlogin.html");
  }

  $MySession = $_SESSION['email'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student/view Result</title>
    <script src="../helper/Tailwind/tailwind.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</head>
<body class="bg-orange-400 w-full h-screen">
    <div class=" lg:hidden text-[30px] text-white md:w-[50px] w-[40px] h-[30px] md:h-[40px] mt-[20px] ml-[40px] md:mt-2" id="menu" ><ion-icon name="menu-outline"></ion-icon></div>
    <!-- div for search -->
    <div class="bg-white w-[85%] lg:w-[75%] h-[60px] mt-[20px] ml-[20px] lg:ml-[300px] rounded-[15px] flex pt-3" id="search">
        <ion-icon name="school-outline" class="ml-[40px] mt-1 text-orange-400 font-[500] w-[40px] h-[40px]"></ion-icon>
         <div class="flex ">
            <input type="text" placeholder="search" class=" w-[50vw]  h-[40px] rounded-[50px] pl-[10px] ml-4   lg:ml-[40px]   placeholder:text-orange-400 placeholder:lg:text-2xl  font-[500] outline-none border-2 border-orange-400 ">
            <ion-icon name="search-outline" class=" w-[10px] lg:w-[20px] h-[20px] text-orange-400 ml-[-50px] mt-[10px] font-[700]" ></ion-icon>
            <ion-icon name="notifications-outline" class=" w-[15px] lg:w-[20px] h-[20px] text-orange-400 ml-[40px] lg:ml-[45px] mt-[10px]" ></ion-icon>
            <ion-icon name="mail-open-outline" class=" text-orange-400 w-[15px] lg:w-[20px] lg:h-[20px] lg:ml-[10px] ml-[4px] mt-[10px]  "></ion-icon>
             <ion-icon name="person-outline" class="mt-1 w-[15px] lg:w-[20px] h-[20px] text-orange-400 lg:ml-[10px] ml-[4px]  mt-[10px]"></ion-icon>
             
         </div>
    </div>
 <!-- End of search bar -->

 <!-- Dashboard begins -->

    <div class="block lg:flex  ">
        <!-- sidebar -->
        <div class="hidden lg:block  w-[80%] lg:w-[20%]  h-screen lg:h-[600px]  bg-orange-600 mt-[-77px] ml-[20px]  pl-[70px] text-white pt-[40px]  " id="dashboard">
            <div class="bg-white w-[70px] text-orange-500 h-[70px] rounded-[50%] ml-[10px] mt-[-10px] text-center pt-4 font-[700] text-2xl" >
                <p > RWS</p>
               
            </div>
            <p class="text-2xl ml-[-20px] font-[500]">Right Wisdom</p>
            <p class="text-2xl ml-4 font-[500]">School</p>        
            <a href="student.html"><div class="flex  hover:font-[700] hover:text-[20px] mt-[20px]"><p class="ml-1"><ion-icon name="people-outline" class="mt-1"></ion-icon> Student</p></div></a>
            <div class="flex  hover:font-[700] hover:text-[20px] mt-[20px] cursor-pointer " id="exam" ><p class="ml-1"><ion-icon name="people-outline" class="mt-1"></ion-icon> Exams</p>
         </div>
         <div class="hidden" id="timetable" >
            <a href="subject.html"><p class="mt-1">subject</p></a> 
             <a href="viewexamsResult.php"><p class="mt-1" >View Exam Result</p></a> 
             <a href="viewexamschedule.html"><p class="mt-1">Examination</p></a> 
             </div>

            
                        
            
            <a href="studentlogout.php"><div class="flex  hover:font-[700] hover:text-[20px] mt-[20px]"><ion-icon name="exit-outline" class="mt-1"></ion-icon><p class="ml-1"> Logout</p></div></a>
        </div>
        
        <div class="flex w-[100%] ">
    <div class="pt-[20px] lg:pt-[0px]  ml-[20px] lg:ml-[10px]   mt-[20px] w-[70%] lg:w-[45%]   rounded-[20px] py-5 bg-white " id="profile"  > 
        <p class="text-orange-400 text-2xl ml-16 mt-4">Exams Result</p>
        <div class="ml-[20px] mt-4  ">
            <form action="">
                
                <div>
                    <h1><?php echo "$MySession" ?></h1>
                <label for="" class="ml-4 font-bold "  >Term</label><br>
                <select name="" id="" class="w-[400px] h-[30px] border-2 border-orange-400 focus:outline-none pl-4 " >
                    <option value="">Select Term</option>
                    <option value="">1st Term</option>
                    <option value="">2nd Term</option>
                    <option value="">3rd Term</option>
                </select></div>
                <div class="mt-4">
                    <p class="ml-[10px] font-bold  ">Student Id</p>
                    <input type="text" placeholder="037" class="w-[400px] h-[30px] border-2 border-orange-400 focus:outline-none pl-4 ">
                </div>
            
                <div class="mt-4">
                    <p class="ml-[10px] font-bold  ">Exam Starts</p>
                    <input type="text" placeholder="10:00 Am" class="w-[400px] h-[30px] border-2 border-orange-400 focus:outline-none pl-4 ">
                </div>
                <div class="mt-4">
                    <p class="ml-[10px] font-bold  ">Exam Ends</p>
                    <input type="text" placeholder="02:00 Pm" class="w-[400px] h-[30px] border-2 border-orange-400 focus:outline-none pl-4 ">
                </div>
                              
                         <div class="mt-8  " >
                            <button class="w-[80px] h-[30px] rounded-md bg-orange-400 text-white border-2 border-orange-400 focus:outline-none pl-2 ">
                                Save</button>
                            <button type="reset" class="w-[80px] h-[30px] rounded-md bg-orange-400 text-white border-2 border-orange-400 focus:outline-none pl-2 ">
                                Reset</button>
                         </div>
            </form>
                  
    </div>
   </div>
   <div class="pt-[20px] lg:pt-[0px]  ml-[20px] lg:ml-[10px]   mt-[20px] w-[85%] lg:w-[45%]    rounded-[20px] py-5 bg-white " id="profile"  > 
    <p class="text-orange-400 text-2xl ml-16 mt-4">Check Exams Result</p>
    <div class="ml-[20px] mt-4  ">
      <p class="font-bold mt-4">Result Id:</p>  
      <p class="font-bold mt-4">Session:</p> 
      <p class="font-bold mt-4">Year:</p> 
              
</div>
</div>
</div>
        
    </div>
   
        <!-- End of dashboard -->
        <script>
            const menu = document.getElementById("menu");
        const dashboard= document.getElementById("dashboard");
        const search = document.getElementById ("search");
        const profile = document.getElementById("profile");
        menu.addEventListener("click", function(){
            dashboard.classList.toggle("hidden");
            search.classList.toggle("hidden");
            profile.classList.toggle("hidden");
        })

        const exam = document.getElementById("exam");
        const timetable = document.getElementById("timetable");
        exam.addEventListener("mouseover", function(){
            timetable.classList.toggle("hidden")
        })
        </script>
        
</body>
</html>

