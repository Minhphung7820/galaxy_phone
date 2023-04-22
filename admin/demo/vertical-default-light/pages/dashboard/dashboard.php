<?php
  $totalProductSold = totalProductSold();
  $userCreateToday = userCreateToday(date("Y/m/d"));
  $commentCreateToday = commentCreateToday(date("Y/m/d"));
  $invoiceCreateToday = invoiceCreateToday(date("Y/m/d"));
?>
<div class="row">
  <div class="col-md-12 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-4">Tổng số sản phẩm đã bán</p>
            <p class="fs-30 mb-2"><?=$totalProductSold?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Số tài khoản tạo mới hôm nay</p>
            <p class="fs-30 mb-2"><?=$userCreateToday?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Số bình luận mới hôm nay</p>
            <p class="fs-30 mb-2"><?=$commentCreateToday?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Số hóa đơn hôm nay</p>
            <p class="fs-30 mb-2"><?=$invoiceCreateToday?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <p class="card-title">Doanh thu</p>
        </div>
        <p class="font-weight-500"></p>
        <canvas id="sales-chart"></canvas>
      </div>
    </div>
  </div>
</div>