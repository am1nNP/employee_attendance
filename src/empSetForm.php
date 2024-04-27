<?php
session_start();
require_once './connection.php';
$id=$_GET['id'];
?>
<link rel="stylesheet" href="output.css">
<body class="flex justify-center items-center w-screen h-screen">
<div id="tableContent" class="Main_content w-2/4 h-2/4 bg-[#f5f5f5] rounded-md shadow-md shadow-slate-400 " dir="rtl">
<form class="w-full h-full flex justify-center gap-2 flex-col p-10" action="./empSetAction.php" method="POST" enctype="multipart/form-data">
<input class="p-2 ring-1 ring-slate-200" type="date" name="date" id="">
<input class="p-2 ring-1 ring-slate-200" type="time" name="time" id="">
<div class="mt-2">
<label for="">حضور:</label>
<input type="radio" name="option" value="1">
<label for="">غیاب:</label>
<input type="radio" name="option" value="0">
</div>
<input type="hidden" name="emp_id" value="<?=$id?>">
<button type="submit" name="submit" class="text-white h-10 mt-10 bg-blue-700 hover:bg-blue-800 mx-20 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ارسال</button>
</form>
</div>
</body>