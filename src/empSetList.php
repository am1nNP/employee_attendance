<?php
require_once './connection.php';
global $conn;

?>
  <div class="p-10 w-full">
  <table class="text-sm text-gray-500 w-full border">
          <thead class="">
              <tr class="text-gray-50  bg-blue-800 font-bold">
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">ردیف</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">تاریخ</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">ساعت</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">نام پرسنل</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">وضعیت</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">عکس</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">عملیات</td>
            </tr>
          </thead>
          <tbody class="">
            <?php
            $rows = $conn->query('SELECT a.id ,a.date, a.time, e.name,e.image, a.present FROM attendance a JOIN emp e ON a.emp_id = e.id;');
            if($rows->num_rows):
              $index = 1;
              while ($row = $rows->fetch_assoc()):
                ?>                
              <tr class="odd:bg-white even:bg-gray-100  border-b">
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $index++ ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['date'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['time'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['name'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?php echo($row['present']=="1") ? "حاضر" : "غایب"; ?></td>              
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><img class="rounded-full w-14 h-14" src="<?=$row['image']?>" alt=""></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><a class="bg-[#d80032ad] text-white py-3 px-4 ring-2 ring-black rounded-md font-bold hover:bg-[#d80032]" href="./empSetDeleteAction.php?id=<?=$row['id']?>" >حذف گزارش</a></td>
            </tr>
            <?php
        endwhile;
    else:
        ?>
        <tr>
            <td colspan="5">رکوردی یافت نشد</td>
        </tr>
    <?php endif; ?>
          </tbody>
        </table>
  </div>