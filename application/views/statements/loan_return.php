<?php include(APPPATH .'/views/admin/incs/header.php'); ?>
<?php include(APPPATH . './views/admin/incs/nav.php'); ?>
<?php include(APPPATH . './views/admin/incs/side.php'); ?>

<div id="main-content" class="profilepage_2 blog-page">
<div class="container-fluid">
    <table class="table">
      <thead class="thead-primary">
        <tr>
          <th scope="col">S/no</th>
          <th scope="col">#</th>
          <th scope="col">Date</th>
          <th scope="col">Collection</th>
          <th scope="col">collected</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0 ?>
        <?php $j = 0 ;?>
        <?php $start_date = new DateTime($loan->loan_stat_date) ?>

        <?php if($loan->day == 30): ?>
          <?php for($i=29; $i <= $total_days; $i += (int) $loan->day): ?>
            <?php $loan_start_date = clone $start_date; ?>
            <?php $total += $loan->restration ?>
            <tr>
              <th scope="row"><?= ++$j ?> </th>
              <th scope="row"><?= $i ?> </th>
              <td><?= $loan_start_date->modify("+$i days")->format('d-m-Y') ?></td>
              <td><?= number_format($loan->restration ?? 0) ?></td>
              <td></td>
            </tr>
        <?php endfor ?>
        
        <?php elseif($loan->day == 7): ?>
          <?php for($i=6; $i <= $total_days; $i += (int) $loan->day): ?>
            <?php $loan_start_date = clone $start_date; ?>
            <?php $total += $loan->restration ?>
            <tr>
              <th scope="row"><?= ++$j ?> </th>
              <th scope="row"><?= $i ?> </th>
              <td><?= $loan_start_date->modify("+$i days")->format('d-m-Y') ?></td>
              <td><?= number_format($loan->restration ?? 0) ?></td>
              <td></td>
            </tr>
        <?php endfor ?>

        <?php else: ?>
        <?php for($i=1; $i <= $total_days; $i += (int) $loan->day): ?>
            <?php $loan_start_date = clone $start_date; ?>
            <?php $total += $loan->restration ?>
            <tr>
              <th scope="row"><?= ++$j ?> </th>
              <th scope="row"><?= $i ?> </th>
              <td><?= $loan_start_date->modify("+$i days")->format('d-m-Y') ?></td>
              <td><?= number_format($loan->restration ?? 0) ?></td>
              <td></td>
            </tr>
        <?php endfor ?>
        
        <?php endif ?>

        
      </tbody>
      <tfoot>
        <th>TOTAL</th>
        <td></td>
        <th><?= number_format($total) ?></td>
      </tfoot>
    </table>
</div>
</div>