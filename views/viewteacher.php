<?php

session_start();
if(!isset($_SESSION['email']))
    header("Location:adminlogin.html");
$_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Teacher</title>
    <script src="../helper/Tailwind/tailwind.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Rancho&display=swap" rel="stylesheet">
</head>
<body class="md:bg-[#F9C18E] bg-white">
    <div class="w-[100vw] h-[100vh] md:flex gap-4">
        <div class="hidden md:block md:w-[20vw] w-[80vw] h-[100vh] bg-[#F97903] text-center pt-4" id="sidebar">
            <div class="">
                <img class="md:hidden w-6 h-6 ml-4" src="/asset/left-arrow.png" alt="back-arrow" onclick="closeSide()">
                <div class="w-[75px] h-[75px] border-2 border-orange-300 rounded-[300px] bg-white text-2xl text-[#F97903] font-[700] pt-[20px] mx-[auto]" style="text-shadow: 2px 2px  #D9700E;">RWS</div>
            </div>
 
             <h1 class="text-4xl font-[600] my-4 text-white" style="text-shadow: 2px 2px 2px black;">Right Wisdom <br> School</h1><br><br>
 
             <div class="">
                 <div class="flex gap-2 items-center justify-center">
                     <img class="w-6 h-6" src="/asset/dashboard.png" alt="dashboard-image">
                     <a href="admindashboard.html" class="text-3xl font-[500] text-white">Dashboard</a>
                     
                 </div><br>
 
                 <div class="">
                     <div class="flex gap-2 justify-center items-center cursor-pointer">
                         <img class="w-6 h-6" src="/asset/lecture.png" alt="dashboard-image">
                         <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" onclick="teach()">Teacher</p>
                         <img class="w-[18px] mt-[5px] ml-6 h-[18px] rounded-[50px] font-[700] bg-white" src="/asset/greater-than.png" alt="greater-than">
                     </div>
 
                     <div class="text-xl font-[500] mt-[10px]">
                         <div class="flex gap-2 justify-center items-center hover:font-[700] hover:text-lg" style="display: none;" id="add">
                             <b class="text-4xl text-white font-[700]">∙</b>
                             <a class=" text-white -mt-8" href="addteacher.html">Add Teacher</a>
                        </div>
                        <div class="flex justify-center gap-2 items-center hover:font-[700] hover:text-lg ml-10" style="display: none;" id="view">
                         <b class="text-4xl mt-10 text-white font-[700]">∙</b>
                         <a class=" text-white -mt-8" href="viewteacher.php">View all Teachers</a>
                            
                        </div>
                     </div>
                 </div><br>
 
                 <div class="">
                     <div class="flex gap-2 justify-center items-center cursor-pointer">
                         <img class="w-6 h-6" src="/asset/family.png" alt="Guardian image">
                         <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" onclick="parent()">Guardian</p>
                         <img class="w-[18px] mt-[5px] ml-4 h-[18px] rounded-[50px] font-[700] bg-white" src="/asset/greater-than.png" alt="greater-than">
                     </div>
 
                     <div class="text-xl font-[500] mt-[10px]">
                         <div class="flex gap-2 justify-center items-center hover:font-[700] hover:text-lg" style="display: none;" id="guard">
                             <b class="text-4xl text-white font-[700]">∙</b>
                             <a class=" text-white -mt-8" href="viewguardian.php">view Guardian</a>
                        </div>
                     </div>
                 </div><br>
 
                 <div class="">
                     <div class="flex gap-2 justify-center items-center cursor-pointer">
                         <img class="w-6 h-6" src="/asset/scholar.png" alt="dashboard-image">
                         <p class="text-xl hover:font-[700] hover:text-2xl font-[500] text-white" onclick="student()">Student</p>
                         <img class="w-[18px] mt-[5px] ml-6 h-[18px] rounded-[50px] font-[700] bg-white" src="/asset/greater-than.png" alt="greater-than">
                     </div>
 
                     <div class="text-xl font-[500] mt-[10px]">
                         
                        <div class="flex justify-center gap-2 items-center hover:font-[700] hover:text-lg ml-8" style="display: none;" id="viewStudent">
                           <b class="text-4xl mt-10 text-white font-[700]">∙</b>
                           <a class=" text-white -mt-8" href="viewallstudentteacher.php">View all Students</a>   
                        </div>
                     </div>
                 </div><br>
                 
 
                 <div class="flex -ml-1 justify-center gap-2 items-center">
                     <img class="w-6 h-6" src="/asset/exam (2).png" alt="exit">
                     <a href="view-all-result-for-admin.html" class="text-white text-xl  hover:font-[700] hover:text-2xl font-[700]">Result</a>
                     <img class="w-[18px] mt-[5px] ml-10 h-[18px] rounded-[50px] font-[700] bg-white" src="/asset/greater-than.png" alt="greater-than">
                 </div><br>
                 
                 <div class="flex justify-center ml-[-70px] gap-2 items-center">
                     <img class="w-6 h-6" src="/asset/exit (1).png" alt="exit">
                     <a href="logout.php" class="text-white  hover:font-[700] hover:text-xl font-[700]">Logout</a>
                 </div>
             </div>
         </div>

        <!-- -------Main Page-------- -->

        <div class="lg:w-[78vw] w-[100vw] h-[800px] md:h-[100vh] md:pt-4">
            <div class="md:w-[78vw] w-[100vw] md:h-[70px] h-[80px] md:pl-8 md:px-0 px-4 md:gap-12 gap-4 flex  items-center md:rounded-md bg-[white] md:shadow-md" id="navbar">
                <img class="md:hidden w-6 h-6" src="/asset/menu.png" alt="" onclick="menuImage()">
                <div class="flex mx-[20vw] md:mx-0 md:gap-1">
                    <img class="w-8 h-8" src="/asset/protection.png" alt="">
                    <h1 class="md:text-xl text-3xl font-[700]">Admin</h1>
                </div>
        
                <div class="hidden md:flex md:gap-4 items-center w-[60%] md:w-[45vw] h-[50px] border-2 border-[#F97903] rounded-[25px] shadow-md">
                    <form action="">
                        <input class="outline-none bg-transparent w-[96%] md:w-[40vw] h-[50px] lg:pl-8 pl-4" type="search" placeholder="Search..." name="" id="">
                    </form>
                    <img class="w-4 h-4 mr-4 md:mr-0 cursor-pointer" src="/asset/search.png" alt="search">
                </div>
        
                <div class="hidden md:flex items-center gap-6">
                   <div class="flex gap-4">
                       <img class="w-6 h-6 cursor-pointer" src="/asset/mail.png" alt="notification">
                       <img class="w-6 h-6 cursor-pointer" src="/asset/notification.png" alt="notification">
                   </div>
        
                  <div class="hidden md:flex gap-1 items-center">
                        <img class="w-8 h-8  cursor-pointer rounded-[50px]" src="/asset/fantasy-domik-.jpg" alt="">
        
                        <div class="text-center">
                            <b>Hon. Adegbenga</b>
                            <p>Admin</p>
                        </div>
                  </div>
                    
                </div>
            </div><br class="hidden md:block">
        
            <div class=" md:w-[78vw] md:h-[630px] h-[400px] rounded-br-lg rounded-bl-lg bg-white md:shadow-2xl pt-10 md:pl-8 md:px-0 px-4" id="mainpage">
                <div class="">
                    <div class="">
                        <h1 class="md:text-4xl text-2xl font-[700] md:text-center mb-6">All Teachers</h1><br>

                        <div class="md:hidden flex md:gap-4 items-center w-[100%] md:w-[45vw] h-[50px] mb-6 border-2 border-[#F97903] rounded-[25px] shadow-md">
                            <form action="">
                                <input class="outline-none bg-transparent w-[78vw] md:w-[40vw] h-[50px] lg:pl-8 pl-6" type="search" placeholder="Search..." name="" id="">
                            </form>
                            <img class="w-4 h-4 mx-4 md:mr-0 cursor-pointer" src="/asset/search.png" alt="search">
                        </div>
                        <!-- ---------------Table For Mobile View--------- -->
                        <div class="md:hidden max-h-[450px] overflow-auto">
                            <table class=" border-collapse  mx-[auto] text-[17px] ">
                                <tr  style="position: sticky; transition: ease; top: 0; z-index: 1;background-color: white;">
                                    <th class="border md:pr-20 pr-4 " style="border-left: none; border-right: none;" >Id</th>
                                    <th class="border md:pr-20 pr-4 " style="border-left: none; border-right: none;" >Firstname</th>
                                    <th  class="border md:pr-20 pr-4"style="border-left: none; border-right: none; ">Lastname</th>
                                    <th class="border md:pr-20  py-2"style="border-left: none; border-right: none;">PhoneNumber</th>
                                    <th class="hidden md:block border md:pr-20" style="border-left: none; border-right: none;">Class</th>
                                    <th class="hidden md:block border pr-20 py-2"style="border-left: none; border-right: none;">Home Address</th>
                                </tr>

                                
                         
                                <tr>
                                    <td class=" py-2 text-[15px]">001</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">002</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">003</td>
                                    <td class=" pl-2 py-2 text-[15px]">Ekueme</td>
                                    <td class="px-4 py-2 text-[15px]">Adams</td>
                                    <td class=" pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block  py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">24 Benjamin Street parafa ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">004</td>
                                    <td class=" pl-2 py-2 text-[15px]">Binabaku</td>
                                    <td class="pl-4 py-2 text-[15px]">Isreal</td>
                                    <td class=" pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block  py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">10 Peace Street Lucky Fiber ikorodu Lagos State </td>
                                 
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">005</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">006</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">007</td>
                                    <td class=" pl-2 py-2 text-[15px]">Ekueme</td>
                                    <td class="px-4 py-2 text-[15px]">Adams</td>
                                    <td class=" pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block  py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">24 Benjamin Street parafa ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">008</td>
                                    <td class=" pl-2 py-2 text-[15px]">Binabaku</td>
                                    <td class="pl-4 py-2 text-[15px]">Isreal</td>
                                    <td class=" pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block  py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">10 Peace Street Lucky Fiber ikorodu Lagos State </td>
                                 
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">009</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">010</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="hidden md:block py-2 text-[15px]">Primary 4</td>
                                    <td class="hidden md:block py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr>
                           </table>
                        </div>


                        <!-- ---------------Table for Web View--------- -->


                        <div class="hidden md:block max-h-[450px] overflow-auto">
                            <table class=" border-collapse  mx-[auto] text-[17px] ">
                                <tr  style="position: sticky; transition: ease; top: 0; z-index: 1;background-color: white;">
                                    <th class="border md:pr-20 pr-4 " style="border-left: none; border-right: none;" >Id</th>
                                    <th class="border md:pr-20 pr-4 " style="border-left: none; border-right: none;" >Firstname</th>
                                    <th  class="border md:pr-20 pr-4"style="border-left: none; border-right: none; ">Lastname</th>
                                    <th class="border md:pr-20  py-2"style="border-left: none; border-right: none;">PhoneNumber</th>
                                    <th class=" border md:pr-20" style="border-left: none; border-right: none;">email</th>
                                    <th class=" border pr-20 py-2"style="border-left: none; border-right: none;">Home Address</th>
                                    <th class=" border md:pr-20" style="border-left: none; border-right: none;">Class</th>
                                    <th class=" border md:pr-20" style="border-left: none; border-right: none;">image</th>
                                </tr>
                                   <?php
                                   include "../controllers/connection.php";
                                   $query= "SELECT * FROM admin_addteacher";
                                   $result= mysqli_query($conn, $query);
                                   $row= mysqli_num_rows($result);
                                   if($row > 0){
                                    while($data=mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>".$data['id']."</td>";
                                        echo "<td>".$data['firstname']."</td>";
                                        echo "<td>".$data['lastname']."</td>";
                                        echo "<td>".$data['phonenumber']."</td>";
                                        echo "<td>".$data['email']."</td>";
                                        echo "<td>".$data['homeaddress']."</td>";
                                        echo "<td>".$data['class']."</td>";
                                        
                                        echo "<td>".$data['image']."</td>";
                                        echo "</tr>";
                                    }

                                   }
                                   
                                   
                                   ?>
                                <!-- <tr>
                                    <td class=" py-2 text-[15px]">001</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">002</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">003</td>
                                    <td class=" pl-2 py-2 text-[15px]">Ekueme</td>
                                    <td class="px-4 py-2 text-[15px]">Adams</td>
                                    <td class=" pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class=" py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">24 Benjamin Street parafa ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">004</td>
                                    <td class=" pl-2 py-2 text-[15px]">Binabaku</td>
                                    <td class="pl-4 py-2 text-[15px]">Isreal</td>
                                    <td class=" pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class=" py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">10 Peace Street Lucky Fiber ikorodu Lagos State </td>
                                 
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">005</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">006</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">007</td>
                                    <td class=" pl-2 py-2 text-[15px]">Ekueme</td>
                                    <td class="px-4 py-2 text-[15px]">Adams</td>
                                    <td class=" pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class=" py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">24 Benjamin Street parafa ikorodu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-[15px]">008</td>
                                    <td class=" pl-2 py-2 text-[15px]">Binabaku</td>
                                    <td class="pl-4 py-2 text-[15px]">Isreal</td>
                                    <td class=" pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class=" py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">10 Peace Street Lucky Fiber ikorodu Lagos State </td>
                                 
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">009</td>
                                    <td class="pl-[10px] py-2 text-[15px]">Clienton</td>
                                    <td class="pl-4 py-2 text-[15px]">Joshua</td>
                                    <td class="pl-2 py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="pl-[-50px] py-2 text-[15px]">3 Alfred Olaiya road idimu Lagos State </td>
                                </tr>
                                <tr>
                                    <td class=" py-2 text-[15px]">010</td>
                                    <td class=" pl-2 py-2 text-[15px]">Jinadu</td>
                                    <td class="pl-1 py-2 text-[15px]">Erifolakemi</td>
                                    <td class="pl-[10px] py-4 text-[15px]">07088245673</td>
                                    <td class="py-2 text-[15px]">Primary 4</td>
                                    <td class="py-2 text-[15px]">8 Gbaga Street Adamo ikorodu Lagos State </td>
                                </tr> -->
                           </table>
                        </div>
                    
                       
                    </div>
                </div>
              </div>
                
            </div>
        </div>
        </div>
        
    </div>




    <script>

        function teach(){
          let add=  document.getElementById("add");
          let view= document.getElementById("view");
          
          if(add.style.display === "none"){
               add.style.display = "block";
            }
          else{
               add.style.display = "none";
            }
       
          if(view.style.display === "none"){
               view.style.display = "block";
            }
          else{
               view.style.display = "none";
            }
        }

       
        function parent(){
         let guard=  document.getElementById("guard");
          
          if(guard.style.display === "none"){
               guard.style.display = "block";
            }
          else{
               guard.style.display = "none";
            }
       
        }

        function student(){
        //   let addstudent=  document.getElementById("addStudent");
          let viewstudent= document.getElementById("viewStudent");
       
          if(viewstudent.style.display === "none"){
               viewstudent.style.display = "block";
            }
          else{
               viewstudent.style.display = "none";
            }
        }



        function generateCalendar(year, month) {
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];
        
        const daysInMonth = new Date(year, month, 0).getDate();
        const firstDayOfMonth = new Date(year, month - 1, 1).getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday

        let html = `
            <h3 class="text-xl font-semibold mb-2">${monthNames[month - 1]} ${year}</h3>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Sun</th>
                        <th class="px-4 py-2">Mon</th>
                        <th class="px-4 py-2">Tue</th>
                        <th class="px-4 py-2">Wed</th>
                        <th class="px-4 py-2">Thu</th>
                        <th class="px-4 py-2">Fri</th>
                        <th class="px-4 py-2">Sat</th>
                    </tr>
                </thead>
                <tbody>
        `;
        
        let dayCount = 1;
        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth() + 1;
        const currentDate = today.getDate();

        for (let i = 0; i < 6; i++) {
            html += "<tr>";
            for (let j = 0; j < 7; j++) {
                if (i === 0 && j < firstDayOfMonth) {
                    html += "<td class='border px-4 py-2'></td>";
                } else if (dayCount > daysInMonth) {
                    html += "<td class='border px-4 py-2'></td>";
                } else {
                    if (year === currentYear && month === currentMonth && dayCount === currentDate) {
                        html += `<td class="border px-4 py-2 bg-blue-800">${dayCount}</td>`;
                    } else {
                        html += `<td class="border px-4 py-2">${dayCount}</td>`;
                    }
                    dayCount++;
                }
            }
            html += "</tr>";
        }
        html += `
                </tbody>
            </table>
        `;
        document.getElementById("calendar").innerHTML = html;
    }

    // Display current month by default
    const today = new Date();
    generateCalendar(today.getFullYear(), today.getMonth() + 1); // Note: getMonth() returns 0-based index
    

    function menuImage(){
        let sidebar = document.getElementById("sidebar");
        let mainpage = document.getElementById("mainpage");
        let navbar = document.getElementById("navbar");
        
        document.getElementById("sidebar").classList.remove("hidden");
        document.getElementById("navbar").classList.add("hidden");
        document.getElementById("mainpage").classList.add("hidden");
    }

    function closeSide(){
        let sidebar = document.getElementById("sidebar");
        let mainpage = document.getElementById("mainpage");
        let navbar = document.getElementById("navbar");
        
        
        document.getElementById("sidebar").classList.add("hidden");
        document.getElementById("navbar").classList.remove("hidden");
        document.getElementById("mainpage").classList.remove("hidden");
    }
       
       
    </script>


</body>
</html>