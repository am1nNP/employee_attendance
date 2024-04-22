<?php
require_once './connection.php';
global $conn;

?>
  <div class="p-10 w-full">
  <table class="text-sm text-gray-500 w-full border">
          <thead class="">
              <tr class="text-gray-50  bg-blue-800 font-bold">
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">ردیف</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">اسم</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">سن</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">جنسیت</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">موبایل</td>
              <td class="w-auto py-2 px-4 whitespace-nowrap text-right">عکس</td>
            </tr>
          </thead>
          <tbody class="">
            <?php
            $rows = $conn->query('SELECT * FROM emp');
            if($rows->num_rows):
              $index = 1;
              while ($row = $rows->fetch_assoc()):
                ?>                
              <tr class="odd:bg-white even:bg-gray-100  border-b">
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $index++ ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['name'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['age'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['gender'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><?= $row['phone'] ?></td>
              <td class="w-auto py-6 px-4 whitespace-nowrap text-right"><img class="rounded-full w-14 h-14" src="<?=$row['image']?>" alt=""></td>
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