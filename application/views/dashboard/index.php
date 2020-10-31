<style>

    .card-image img{
        width:45px;
        height:45px;
    }
    .card-manage{
        position:relative;
    }
    .card-manage ul{
        margin-top:-15px;
    
    }
    .card-manage ul li{
        list-style:none;
        width:300px;
        margin-top:23px;
    }
    .card-manage img{
        width:45px;
        height:45px;
    }
    .card-body{
        text-align:center;
    }
    .card-body button{
        float:right;
    }
   .table-fixed{
       text-align:left;
   }
   .table-responsive{
       text-align:left;
   }
</style>
<!-- counters -->
<div class="content-wrapper">
    <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                        <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                        <div class="">
                        
                    </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class="">
                        
                    </div>
                    </div>
                    </div>
                      <p class="card-title">Website Audience Metrics</p>
                      <p class="text-muted">25% more traffic than previous week</p>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="d-flex justify-content-between traffic-status">
                            <div class="item">
                              <p class="mb-">Users</p>
                              <h5 class="font-weight-bold mb-0">93,956</h5>
                              <div class="color-border" style="background: #1cbccd;"></div>
                            </div>
                            <div class="item">
                              <p class="mb-">Bounce Rate</p>
                              <h5 class="font-weight-bold mb-0">58,605</h5>
                              <div class="color-border"></div>
                            </div>
                            <div class="item">
                              <p class="mb-">Page Views</p>
                              <h5 class="font-weight-bold mb-0">78,254</h5>
                              <div class="color-border"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                Day
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Week
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Month
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                     <img src="asset/images/chart.png" style="width:600px; height:250px;">
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 grid-margin stretch-card ">
                     <div class="card-manage">
                         <ul>
                             <li>
                                 <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <img src="asset/images/managment-user.png">
                                    <div class="ml-3">
                                        <p class="mb-0">Management User</p>
                                     
                                    </div>
                                </div>
                                <button class="btn btn-danger">Manage</button>
                            </div>
                        </div>
                             </li>
                               <li>
                                 <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                   <img src="asset/images/management-driver.png">
                                    <div class="ml-3">
                                        <p class="mb-0">Management Driver</p>
                                        
                                    </div>
                                   
                                </div>
                                  <button class="btn btn-primary">Manage</button>
                            </div>
                        </div>
                             </li>
                               <li>
                                 <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                   <img src="asset/images/transaction.png">
                                    <div class="ml-3">
                                        <p class="mb-0">Total Transaction</p>
                                            <span>20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                             </li>
                         </ul>
                        
                        </div>
        </div>
        
        
               

</div>
</div>
<div class="content-wrapper" style="margin-top:-370px; height:771px;">
<div class="row">
            
        
            <div class="col-md-2 col-lg-12 grid-margin stretch-card">
            <div class="card">
                            <div class="card-body">
                                <br>
                                <h4 class="card-title">Transaction Complete</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-fixed">
                                            <table id="order-list" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Service</th>
                                                        <th>Daily</th>
                                                        <th>Monthly</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                        <?php $i = 1;
                                                        foreach ($harian as $hr) { ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $hr['fitur'] ?></td>
                                                            <td > 
                                                            <label class="badge badge-success"><?= $hr['hari'] ?></label>
                                                            </td>
                                                            <td>
                                                            <label class="badge badge-info"><?= $hr['bulan'] ?></label>
                                                            </td>
                                                            <td>
                                                            <label class="badge badge-danger"><?= $hr['tahun'] ?></label>
                                                            </td>
                                                        </tr>
                                                        <?php $i++;
                                                            } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
          </div>

        <div class="row">
        <div class="col-md-4 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <div class="card-image">
                             <img src="asset/images/user.png">
                        </div>
                       
                        <div class="ml-3">
                            <p class="mb-0">Users</p>
                            <h6><?= count($user); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                         <div class="card-image">
                             <img src="asset/images/driver.png">
                        </div>
                        <div class="ml-3">
                            <p class="mb-0">Driver</p>
                            <h6><?= count($hitungdriver); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                         <div class="card-image">
                             <img src="asset/images/marchant.png">
                        </div>
                        <div class="ml-3">
                            <p class="mb-0">Merchant</p>
                            <h6><?= count($mitra); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of counter -->

    
    
</div>

<!-- footer -->
<?php $this->load->view('includes/footer'); ?>

<!-- End custom js for this page-->


<script>

    (function($) {
        'use strict';
        $(function() {
            if ($("#merchantChart").length) {
                var ctx = document
                    .getElementById('merchantChart')
                    .getContext("2d");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'sep',
                            'okt',
                            'nov',
                            'des'
                        ],
                        datasets: [{
                            label: "Passenger Transportation",
                            borderColor: 'rgba(171, 140 ,228, 1)',
                            backgroundColor: 'rgba(171, 140 ,228, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan1[0]['jumlah'] ?>,
                                <?= $feb1[0]['jumlah'] ?>,
                                <?= $mar1[0]['jumlah'] ?>,
                                <?= $apr1[0]['jumlah'] ?>,
                                <?= $mei1[0]['jumlah'] ?>,
                                <?= $jun1[0]['jumlah'] ?>,
                                <?= $jul1[0]['jumlah'] ?>,
                                <?= $aug1[0]['jumlah'] ?>,
                                <?= $sep1[0]['jumlah'] ?>,
                                <?= $okt1[0]['jumlah'] ?>,
                                <?= $nov1[0]['jumlah'] ?>,
                                <?= $des1[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "Shipment",
                            borderColor: 'rgba(88, 216 ,163, 1)',
                            backgroundColor: 'rgba(88, 216 ,163, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan2[0]['jumlah'] ?>,
                                <?= $feb2[0]['jumlah'] ?>,
                                <?= $mar2[0]['jumlah'] ?>,
                                <?= $apr2[0]['jumlah'] ?>,
                                <?= $mei2[0]['jumlah'] ?>,
                                <?= $jun2[0]['jumlah'] ?>,
                                <?= $jul2[0]['jumlah'] ?>,
                                <?= $aug2[0]['jumlah'] ?>,
                                <?= $sep2[0]['jumlah'] ?>,
                                <?= $okt2[0]['jumlah'] ?>,
                                <?= $nov2[0]['jumlah'] ?>,
                                <?= $des2[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "Rental",
                            borderColor: 'rgba(255, 180 ,99, 1)',
                            backgroundColor: 'rgba(255, 180 ,99, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan3[0]['jumlah'] ?>,
                                <?= $feb3[0]['jumlah'] ?>,
                                <?= $mar3[0]['jumlah'] ?>,
                                <?= $apr3[0]['jumlah'] ?>,
                                <?= $mei3[0]['jumlah'] ?>,
                                <?= $jun3[0]['jumlah'] ?>,
                                <?= $jul3[0]['jumlah'] ?>,
                                <?= $aug3[0]['jumlah'] ?>,
                                <?= $sep3[0]['jumlah'] ?>,
                                <?= $okt3[0]['jumlah'] ?>,
                                <?= $nov3[0]['jumlah'] ?>,
                                <?= $des3[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "Purchasing Service",
                            borderColor: 'rgba(255, 0, 0, 1)',
                            backgroundColor: 'rgba(255, 0, 0, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan4[0]['jumlah'] ?>,
                                <?= $feb4[0]['jumlah'] ?>,
                                <?= $mar4[0]['jumlah'] ?>,
                                <?= $apr4[0]['jumlah'] ?>,
                                <?= $mei4[0]['jumlah'] ?>,
                                <?= $jun4[0]['jumlah'] ?>,
                                <?= $jul4[0]['jumlah'] ?>,
                                <?= $aug4[0]['jumlah'] ?>,
                                <?= $sep4[0]['jumlah'] ?>,
                                <?= $okt4[0]['jumlah'] ?>,
                                <?= $nov4[0]['jumlah'] ?>,
                                <?= $des4[0]['jumlah'] ?>
                            ]
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: "top"
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    drawBorder: true,
                                    display: true,
                                    color: '#eeeeee'
                                },
                                categoryPercentage: 0.5,
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 20,
                                    max: 100,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                }
                            }]
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                });
                document.getElementById('js-legend2').innerHTML = myChart.generateLegend();
            }
        });
    })(jQuery);
</script>