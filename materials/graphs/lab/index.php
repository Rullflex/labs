<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
</head>
<body>
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/aside.tpt.php"); ?>
<main class="col-md markdown-body">
<!-- <div class="alert alert-warning">Дополнительный материал по Графам и Алгоритму Дейкстры <a href="materials/graphs/dop/index.php" class="alert-link">по этой ссылке</a></div> -->
<h2>Постановка задачи:</h2> 
<p><span style="font-weight: 400;">реализовать алгоритм Дейкстры для графа, соответствующего выбранному варианту.</span></p>
<ol>
<li style="font-weight: 400;"><span style="font-weight: 400;">Без использования Windows Forms.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Интерфейс на усмотрение разработчика.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Визуализация графа в OpenGL.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Реализуется только метод Дейкстры</span></li>
</ol>
<h2>Варианты заданий: </h2>
<table>
<tbody>
<tr>
<td width="81">
<p>1</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image1.jpg">
	    <img src="<?php echo $folder_name ?>img/image1.jpg" alt="Рисунок 1">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>2</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image2.jpg">
	    <img src="<?php echo $folder_name ?>img/image2.jpg" alt="Рисунок 2">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>3</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image3.jpg">
	    <img src="<?php echo $folder_name ?>img/image3.jpg" alt="Рисунок 3">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>4</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image4.jpg">
	    <img src="<?php echo $folder_name ?>img/image4.jpg" alt="Рисунок 4">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>5</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image5.jpg">
	    <img src="<?php echo $folder_name ?>img/image5.jpg" alt="Рисунок 5">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>6</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image6.jpg">
	    <img src="<?php echo $folder_name ?>img/image6.jpg" alt="Рисунок 6">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>7</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image7.jpg">
	    <img src="<?php echo $folder_name ?>img/image7.jpg" alt="Рисунок 7">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>8</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image8.jpg">
	    <img src="<?php echo $folder_name ?>img/image8.jpg" alt="Рисунок 8">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>9</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image9.jpg">
	    <img src="<?php echo $folder_name ?>img/image9.jpg" alt="Рисунок 9">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>10</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image10.jpg">
	    <img src="<?php echo $folder_name ?>img/image10.jpg" alt="Рисунок 10">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>11</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image11.jpg">
	    <img src="<?php echo $folder_name ?>img/image11.jpg" alt="Рисунок 11">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>12</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image12.jpg">
	    <img src="<?php echo $folder_name ?>img/image12.jpg" alt="Рисунок 12">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>13</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image13.jpg">
	    <img src="<?php echo $folder_name ?>img/image13.jpg" alt="Рисунок 13">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>14</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image14.jpg">
	    <img src="<?php echo $folder_name ?>img/image14.jpg" alt="Рисунок 14">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>15</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image15.jpg">
	    <img src="<?php echo $folder_name ?>img/image15.jpg" alt="Рисунок 15">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>16</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image16.jpg">
	    <img src="<?php echo $folder_name ?>img/image16.jpg" alt="Рисунок 16">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>17</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image17.jpg">
	    <img src="<?php echo $folder_name ?>img/image17.jpg" alt="Рисунок 17">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>18</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image18.jpg">
	    <img src="<?php echo $folder_name ?>img/image18.jpg" alt="Рисунок 18">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>19</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image19.jpg">
	    <img src="<?php echo $folder_name ?>img/image19.jpg" alt="Рисунок 19">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>20</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image20.jpg">
	    <img src="<?php echo $folder_name ?>img/image20.jpg" alt="Рисунок 20">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>21</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image21.jpg">
	    <img src="<?php echo $folder_name ?>img/image21.jpg" alt="Рисунок 21">
	</a></div><br></p>
</td>
</tr>
<tr>
<td width="81">
<p>22</p>
</td>
<td width="637">
<p><div class="gallery">
	<a href="<?php echo $folder_name ?>img/image22.jpg">
	    <img src="<?php echo $folder_name ?>img/image22.jpg" alt="Рисунок 22">
	</a></div><br></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<!-- У отправки поменять только id и номер -->
<?php
if ($sendwork_off == false) { ?>
    <h2 id="4">4. Отправить результат работы</h2>
    <?php include ($r_base."assets/php_modules/form_sendwork.tpt.php"); 
}
?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>