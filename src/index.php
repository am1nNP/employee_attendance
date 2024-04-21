<?php
session_start();
require_once 'functions.php';
check_login();
?>

<!doctype html>
<html dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
</head>
<body class="h-svh">
    <div class="root h-full  flex flex-row">
        <div id="nav_side" class="right_section sm:w-0 md:w-0 lg:w-72 sm:invisible fixed flex md:invisible lg:visible z-20 bg-indigo-700 flex-col lg:right-0 sm:-right-72 h-screen md:-right-72">
            <button id="btn_close" onclick="btn_close()" class="text-white absolute md:right-80 sm:right-[22rem] top-5 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>                  
            </button>
            <div class=" w-full h-full flex flex-col justify-start gap-4">
                <div class="pl-5 pr-5 flex items-center pt-5">
                    <img class="h-8 w-9 mr-2" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="">
                </div>
                <ul class="pr-5 pt-5 pl-5 flex flex-col text-white mt-10">
                    <li>
                        <ul class="space-y-4">
                            <li class="w-full flex gap-2 items-center h-12 text-white bg-blue-800 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                  </svg>  
                                  <a href="./index.php"  class="font-bold text-[0.9rem]">صفحه اصلی</a>                       
                            </li>
                            <li id="empList" class="w-full flex gap-2 items-center h-12 opacity-60 hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                  </svg>                           
                                <a href="#"  class="font-bold text-[0.9rem]">لیست پرسنل</a>                       
                            </li>
                            <li id="empDelete" class="w-full flex gap-2 items-center h-12 opacity-60 hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                  </svg>
                                    
                                  <a href="#"  class="font-bold text-[0.9rem]">حذف پرسنل</a>                       
                            </li>
                            <li id="empEdit" class="w-full flex gap-2 items-center h-12 opacity-60 hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                  </svg>
                                  
                                  <a href="#"  class="font-bold text-[0.9rem]">ویرایش پرسنل</a>                        
                            </li>
                            <li id="empInsert" class="w-full flex gap-2 items-center h-12 opacity-60  hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                  </svg>
                                   
                                  <a href="#"  class="font-bold text-[0.9rem]">درج پرسنل</a>                       
                            </li>
                            <li id="empSet" class="w-full flex gap-2 items-center h-12 opacity-60  hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                  </svg>
                                  <a href="#"  class="font-bold text-[0.9rem]">حضور و غیاب</a>                       
                            </li>
                            <li id="empSetList" class="w-full flex gap-2 items-center h-12 opacity-60  hover:bg-blue-800 hover:opacity-100 rounded-md cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                  </svg>
                                  <a href="#"  class="font-bold text-[0.9rem]">لیست حضور و غیاب</a>                       
                            </li>
                        </ul>
                    </li>
                </ul>
               
            </div>
        </div>
        <div id="dark_banner" class="bg-slate-600 sm:1/4 w-full h-screen lg:hidden absolute z-10 transition-all ease-linear duration-200 lg:invisible md:invisible sm:invisible md:opacity-0 sm:opacity-0"></div>
        <div class="left_section sm:w-full lg:w-11/12 lg:mr-72 h-screen">
            <div class="nav sm:w-full md:w-full h-[12%] flex border-b-2 pl-5 sm:pl-1">
                <div class="search_bar flex lg:w-3/4 sm:w-full md:w-4/5 h-full items-center lg:pr-10 md:gap-4 md:pr-5 sm:pr-1 sm:gap-3">
                    <button onclick="btn_side()" class=" lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>                          
                    </button>
                    <div class="h-1/2 lg:hidden bg-slate-200 w-[1px]"></div>
                    <form class="w-full flex h-full" action="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                          </svg>                      
                        <input type="search" class="outline-none w-11/12 h-full mr-5" placeholder="سرچ....">
                    </form>
                </div>
                <div class="user_nav lg:w-2/4 h-full md:w-2/5 sm:w-[52%] flex items-center">
                    <div class="w-full h-full flex lg:justify-end sm:justify-start gap-5 sm:gap-3 items-center lg:mr-32 md:mr-32 sm:ml-10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="rgb(156,163,175)" class="w-7 sm:w-6 h-full cursor-pointer hover:stroke-[rgb(120,125,134)]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                          </svg> 
                          <div class="h-1/2 bg-slate-200 w-[1px]"></div>
                          <div class="flex items-center h-full relative">
                                <button onclick="myfunction()" class="flex gap-5 h-7 items-center w-full">
                                <img src="./img/user.jpg" alt="نمایه" class="rounded-full w-8 h-7">
                                <div class="flex items-center h-7 gap-2 lg:w-32 sm:w-28 sm:text-sm">
                                <span class="h-full font-bold sm:font-semibold sm:mt-2"><?php echo $_SESSION['userlogin']?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-full">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                          </svg>  
                                    </div>
                                </button>
                                <div id="btn" class="invisible w-32 h-20 absolute top-24 ring-[1px] ring-slate-200 bg-white z-20 right-0 flex flex-col items-center justify-center rounded-md shadow-lg opacity-0  ease-linear duration-[40ms] ">
                                    <a class="w-full pt-1 pb-2 hover:bg-slate-50 text-center cursor-pointer">پروفایل شما</a>
                                    <a href="./login.php" class="w-full pt-1 pb-2 hover:bg-slate-50 text-center cursor-pointer">خروج</a>
                                </div>
                            </div>
                    </div>                     
                </div>
            </div>
            <div id="tableContent" class="Main_content  m-2 bg-[#f5f5f5] rounded-md shadow-md shadow-slate-400">
                <?php
                if(isset($_SESSION["empInsert"])){
                    include_once './empList.php';
                    unset($_SESSION["empInsert"]);
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        function myfunction(){
            document.getElementById("btn").classList.toggle("opacity-100");
            document.getElementById("btn").classList.toggle("invisible");
        }
        function btn_side(){
            document.getElementById("dark_banner").classList.remove("hidden");
            document.getElementById("btn_close").classList.remove("hidden");
            document.getElementById("nav_side").classList.remove("md:invisible","sm:invisible");
            document.getElementById("dark_banner").classList.remove("md:invisible","sm:invisible");
            document.getElementById("dark_banner").classList.replace("md:opacity-0","md:opacity-90");
            document.getElementById("dark_banner").classList.replace("sm:opacity-0","sm:opacity-90");
            document.getElementById("nav_side").classList.add("ease-linear","duration-200");
            document.getElementById("nav_side").classList.replace("md:-right-72","md:right-0");
            document.getElementById("nav_side").classList.replace("sm:-right-72","sm:right-0");
            document.getElementById("nav_side").classList.replace("md:w-0","md:w-72");
            document.getElementById("nav_side").classList.replace("sm:w-0","sm:w-80");
            document.getElementById("btn").classList.replace("opacity-100","opacity-0");
        }
        function btn_close(){
            document.getElementById("nav_side").classList.remove("md:visible","sm:visible");
            document.getElementById("dark_banner").classList.remove("md:visible","sm:visible");
            document.getElementById("dark_banner").classList.replace("md:opacity-90","md:opacity-0");
            document.getElementById("dark_banner").classList.replace("sm:opacity-90","sm:opacity-0");
            document.getElementById("nav_side").classList.replace("md:right-0","md:-right-72");
            document.getElementById("nav_side").classList.replace("sm:right-0","sm:-right-72");
            document.getElementById("nav_side").classList.replace("md:w-72","md:w-0");
            document.getElementById("nav_side").classList.replace("sm:w-80","sm:w-0");
            document.getElementById("dark_banner").classList.add("hidden");
            document.getElementById("btn_close").classList.add("hidden");
        }

        document.getElementById("empList").addEventListener("click", function(e) {
            e.preventDefault();
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("tableContent").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "empList.php", true);
            xhr.send();
        });
        document.getElementById("empInsert").addEventListener("click", function(e) {
            e.preventDefault();
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("tableContent").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "empInsert.php", true);
            xhr.send();
        });

    </script>
</body>
</html>