
<?php
  include('../Controllers/connection.php');
  
  
  session_start();
  

  if(!isset($_SESSION['email']))
  {
    header("location:teacherlogin.html");
  }

  $MySession = $_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher-dashboard</title>
    <script src="../helper/Tailwind/tailwind.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</head>
<body class="bg-orange-400 w-full h-screen">

    <div class=" lg:hidden text-[30px] text-white md:w-[50px] w-[40px] h-[30px] md:h-[40px] mt-[20px] ml-[40px] md:mt-2" id="menu" ><ion-icon name="menu-outline"></ion-icon></div>

    <!-- div for search -->
    <div class="bg-white w-[85%] lg:w-[75%] h-[60px] mt-[20px] ml-[20px] lg:ml-[300px] rounded-[15px] flex pt-3" id="search">
        <div >
            <ion-icon name="desktop-outline" class=" ml-[20px] mt-1 text-orange-400 font-[500] w-[30px] lg:w-[40px] h-[40px]"></ion-icon>
        </div>
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
        <div class="hidden lg:block  w-[80%] lg:w-[20%]  h-screen lg:h-[600px]  bg-orange-600 mt-[-77px] ml-[20px]   pl-[70px] text-white pt-[40px]  " id="dashboard">
            <div class="bg-white w-[70px]  text-orange-500 h-[70px] rounded-[50%] ml-[10px] lg:mt-[-40px] text-center pt-4  font-[700] text-2xl" >
                <p > RWS</p>
               </div>
            <p class="text-2xl ml-[-20px] font-[500]">Right Wisdom</p>
            <p class="text-2xl ml-4 font-[500]">School</p>        
            <a href="dashboard.php"><div class="flex  hover:font-[700] hover:text-[20px] mt-[20px]"><ion-icon name="person-outline" class="mt-1"></ion-icon><p class="ml-1"> Teacher</p></div></a>
            

            <div class="flex  hover:font-[700] hover:text-[20px] mt-[20px] cursor-pointer " id="exam" ><p class="ml-1"><ion-icon name="people-outline" class="mt-1"></ion-icon> Student</p>
            </div>
          
            <div class="hidden" id="timetable" >
                <a href="subject.html"><p class="mt-1">Subject</p></a> 
                 
                 <a href="student.html"><p class="mt-1">Add Student</p></a> 
                 <a href="viewallstudentteacher.php"><p class="mt-1">viewallstudent</p></a> 
                 </div>
                 <div class="flex  hover:font-[700] hover:text-[20px] mt-[20px] cursor-pointer " id="guide" ><p class="ml-1"><ion-icon name="person-outline" class="mt-1"></ion-icon>Guardian</p>
                 </div>
                 <div class="hidden" id="guard"   >
                 <a href="guardian.html"><p class= "mt-1 ml-4">Add Guardian</p></a>
               <a href="viewguardian.php"><p class= "mt-1 ml-4">view all Guardian</p></a>
               </div>
            <a href="teacherlogout.php"><div class="flex  hover:font-[700] hover:text-[20px] mt-[20px]"><ion-icon name="exit-outline" class="mt-1"></ion-icon><p class="ml-1"> Logout</p></div></a>
        </div>
        
        
        
    <div class="pt-[20px] lg:pt-[0px]  ml-[20px] lg:ml-[10px]   mt-[20px] w-[85%] lg:w-[75%]   rounded-[20px] py-5 bg-white " id="profile"  > 
        <div class=" w-[80vw] lg:w-full ml-[10px] lg:ml-[20px] md:ml-[40px] flex justify-between mt-6 text-orange-400">
        <p class="lg:text-2xl font-[500]" >Welcome <?php echo "$MySession" ?> !!!</p>
        <div class="lg:mr-8 md:mr-4 ml-12 lg:ml-0 md:ml-0" >
            
            <p>Mrs. Remi Makanjuola  </p>
            <p class="ml-10">Teacher</p>
          </div>
        
        </div>
        <div class="block md:flex lg:flex justify-between pt-[20px] lg:pt-[10px]  pl-1 lg:pl-[10px] min-w-full container  lg:ml-4 text-orange-400  ">
        <div class="bg-white border-8 border-orange-400  w-[130px] h-[130px] rounded-[50%]  md:mt-[10px] lg:mt-[10px] lg:mt-0 shadow"  >
        <p class="mt-6 ml-2" >Total Students</p>
        <p class="ml-8">30,000</p>

    </div>
    <div class="bg-white border-8 border-orange-400 w-[130px] h-[130px] mt-1 lg:ml-0 rounded-[50%] shadow" >
        <p class="mt-6 ml-2" >Total Students</p>
        <p class="ml-8">Present</p>
        <p class="ml-8">20,000</p>
     </div>
    <div class="bg-white border-8 border-orange-400 w-[130px] mt-1 lg:mt-0 h-[130px] rounded-[50%] shadow" >
        <p class="mt-6 ml-2" >Total Students</p>
        <p class="ml-8">Absent</p>
        <p class="ml-8">10,000</p>
    </div>
        <div class=" bg-white border-8 border-orange-400 w-[130px] h-[130px] mt-1 lg:mt-0 rounded-[50%] mr-10 shadow">
            <p class="mt-6 ml-4" > Second Term</p>
            <p class="ml-10">Result</p>
            
    
    </div>
    </div>
    <div class=" mt-[-500px] md:mt-6 lg:mt-6 ml-[120px]  md:ml-0 lg:ml-0 text-orange-400 block md:flex lg:flex lg:w-full md:w-full sm:w-[50vw]  " >
     <div class=" w-[45vw] lg:w-[50vw] md:[30vw] ml-6   " >
           <p class=" ml-12 lg:ml-20 lg:text-2xl font-[500]">News Letter</p> 
           <p class="mt-2 ml-4 sm:text-[15px]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore ullam aperiam, aliquid similique quia dignissimos atque quam sapiente enim adipisci quaerat, ipsum repudiandae veniam nobis? Vitae voluptatem inventore facere delectus deleniti, nisi perspiciatis itaque ea cum quos tempora placeat impedit quis enim amet illo aspernatur similique error magnam numquam eos.</p>
     </div>
            <!-- for calendar -->
            <div class="w-[50vw]  lg:w-[60vw] lg:pl-16 text-orange-400 ml-10 lg:ml-0 md:ml-[px] text-[10px] md:text-[22px] lg:text-2xl   mt-14 lg:mt-0 md:mt-0  " id="calendar">
                
            </div>
        </div>
       <!--  -->
    </div>


     
        <!-- End of dashboard -->
        
        
        <script>
            const calendar =document.getElementById("calendar");
            function generateCalendar(year, month){
                const firstDay =new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const daysInMonth = lastDay.getDate();
                let html = '<table>';
                    html += '<tr><th colspan="7">' +
                        firstDay.toLocaleString('default', {month:'long'}) + ' '
                        + year + '</th></tr>';
                 html += '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';
                 let day = 1;
                 for(let i = 0; i<6; i++){
                    html += '<tr>';
                        for(let j = 0; j < 7; j++){
                            if(i === 0 && j < firstDay.getDay()){
                                html += '<td> </td>';  
                            }
                            else if (day <= daysInMonth){
                                html+= '<td>' + day + '</td>';
                                day++;
                            }
                       }

                       
                       html+= '</tr>';
                       if(day > daysInMonth)
                       break;
                 }   
                 html+= '<table>';
                    calendar.innerHTML = html;    
            }
            const now = new Date();
            generateCalendar(now.getFullYear(), now.getMonth());
            const menu = document.getElementById("menu");
        const dashboard= document.getElementById("dashboard");
        const search = document.getElementById ("search");
        const profile = document.getElementById("profile");
        menu.addEventListener("click", function(){
            dashboard.classList.toggle("hidden");
            search.classList.toggle("hidden");
            profile.classList.toggle("hidden");
        });


        const exam = document.getElementById("exam");
        const timetable = document.getElementById("timetable");
        exam.addEventListener("click", function(){
            timetable.classList.toggle("hidden")
        })

        const guide = document.getElementById("guide");
        const guard = document.getElementById("guard");
        guide.addEventListener("click", function(){
            guard.classList.toggle("hidden")
        })
</script>

        
        
    
</body>
</html>