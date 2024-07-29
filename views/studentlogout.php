


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student logout</title>
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
        
      
   <div class="pt-[20px] lg:pt-[0px]  ml-[20px] lg:ml-[10px]   mt-[20px] w-[85%] lg:w-[72%]    rounded-[20px] py-5 bg-white " id="profile"  > 
   <div class=" text-center block lg:flex justify-between lg:mt-[60px] w-[40vw] lg:w-full  mt-[-440px] ml-[140px] lg:ml-0  ">
            <div class="ml-[40px] text-orange-400 text-center" >
              <h1 class=" text-[15px]lg:text-[20px]  font-[700] ">Information For</h1>
              <a href=""><p class="mt-[5px]" >Current Students </p></a>
                  <a href=""><p >Alumni</a> 
                    <a href=""><p >Families</a> 
                        <a href=""><p >Media</a> 
                            
                  </div> 
        <div class="ml-[40px] text-orange-400 sm:mt-[10px] text-center">
          <h1 class="text-[15px] lg:text-[20px]  font-[700] ">Quick Links</h1>
          <a href=""><p class="mt-[5px]">Academic Calendar</p></a>
          <a href=""><p>Bookshop</p></a>
          <a href=""><p>Library</p></a>
          
        </div> 
        <div class=" mr-0 lg:mr-[30px] text-orange-400 sm:mt-[10px]text-center ">
          <h1 class=" text-[15px] lg:text-[20px]  font-[700] ">Contact</h1>
          <a href=""><p class="mt-[5px]">Financial Aid</p></a>
          <a href=""><p>Human Resources</p></a>
          <a href=""><p>IT</p></a> 
          <a href=""><p >Directory</a> 
        </div> 
          </div>
          <form action="../controllers/studentlogout.php" method="post" >
          <button class="bg-orange-400 text-white w-[150px] h-[40px] ml-[130px] lg:ml-[400px] mt-12 lg:mt-3 rounded-[20px]
          text-2xl" name="submit" value="Logout" >Logout</button>
        </form>
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

