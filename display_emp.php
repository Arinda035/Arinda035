
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<?php
require 'db.php';
//$sql = 'SELECT * FROM emp';
$sql = "SELECT  e.EMPNO,e.ENAME,e.JOB,m.ENAME as MGRNAME,e.HIREDATE,e.SAL,e.COMM,d.DNAME
FROM emp e
INNER JOIN dept d
ON d.DEPTNO = e.DEPTNO
LEFT OUTER JOIN emp m
ON e.MGR = m.EMPNO";
$statement = $connection->prepare($sql);
$statement->execute();
$emp = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

 <?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>รหัสพนักงาน</th>
          <th>ชื่อ</th>
          <th>อาชีพ</th>
          <th>หัวหน้า</th>
          <th>วันที่เข้าทำงาน</th>
          <th>เงินเดือน</th>
          <th>คอมมิชชั่น</th>
          <th>แผนก</th>
        </tr>
        <?php foreach($emp as $person):?>
          <tr>
            <td><?= $person->EMPNO; ?></td>
            <td><?= $person->ENAME; ?></td>
            <td><?= $person->JOB; ?></td>
            <td><?= $person->MGRNAME; ?></td>
            <td><?= $person->HIREDATE; ?></td>
            <td><?= $person->SAL; ?></td>
            <td><?= $person->COMM; ?></td>
            <td><?= $person->DNAME;?></td>
            <td>
              <a href="edit.php?EMPNO=<?= $person->EMPNO ?>" class="btn btn-info"> <i class='fas'>&#xf044;</i> Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?EMPNO=<?= $person->EMPNO ?>" class='btn btn-danger'>  <i class="material-icons">&#xe92b;</i>Detete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
<div class="form-group"><br>
      <center><input type="button" class="btn btn-warning" onclick="window.location='index.php'" value="ออกจากระบบ"></center> 
  </div>
