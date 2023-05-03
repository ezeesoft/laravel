@include('Admin.header')
               

                <!-- This is our working panel -->

                <section class="working-panel mt-2">
                     <div class="container-fluid">
                      <h1 class="display-4 text-center">Welcome to Dashboard</h1>
                      <hr>

                      <!-- card -->
                         <div class="row">
                         <!-- Category wigdth -->
                            <div class="col-sm-3">
                              <div class="card bg-orange-g text-white">
                                <div class="card-body">
                                  <h4 class="font-weight-light"><i class="fa fa-music" aria-hidden="true"></i> All Genre</h4>
                                  <hr>
                                  <h5 class="text-center"><b></b></h5>
                                </div>
                              </div>
                            </div>
                            <!-- All Brand -->
                            <div class="col-sm-3">
                              <div class="card bg-green-g text-white">
                                <div class="card-body">
                                  <h4 class="font-weight-light"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> All Artist</h4>
                                  <hr>
                                  <h5 class="text-center"><b></b></h5>
                                </div>
                              </div>
                            </div>
                            <!-- all users -->
                            <div class="col-sm-3">
                              <div class="card bg-primary-g text-white">
                                <div class="card-body">
                                  <h4 class="font-weight-light"><i class="fa fa-venus-mars" aria-hidden="true"></i> All Venue</h4>
                                  <hr>
                                  <h5 class="text-center"><b></b></h5>
                                </div>
                              </div>
                            </div>
                            <!-- all Oders -->
                            <div class="col-sm-3">
                              <div class="card bg-info-g text-white">
                                <div class="card-body">
                                  <h4 class="font-weight-light"><i class="fa fa-calendar" aria-hidden="true"></i> All Events</h4>
                                  <hr>
                                  <h5 class="text-center"><b></b></h5>
                                </div>
                              </div>
                            </div>
                         </div>
                         <!-- End Card -->
                         <!-- All Ordered Table -->
                         <!-- <div class="all-order mt-5">
                          <h2>New Orders</h2><hr>
                         <table class="table table-bordered table-hover">
                               <thead>
                                  <tr class="bg-primary text-white">
                                       <th scope="col">Order No.</th>
                                       <th scope="col">Product Name</th>
                                       <th scope="col">Quantity</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Paid Status</th>
                                       <th scope="col">Order Status</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>3</td>
                                       <td>23-08-2020</td>
                                       <td><span class="badge badge-danger">Unpaid</span></td>
                                       <td><span class="badge badge-success">Complete</span></td>
                                 </tr>
                                 <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>1</td>
                                       <td>23-08-2020</td>
                                      <td><span class="badge badge-success">Paid</span></td>
                                      <td><span class="badge badge-info">Proccess</span></td>
                                </tr>
                                <tr>
                                       <th scope="row">3</th>
                                       <td>Larry the Bird</td>
                                       <td>15</td>
                                       <td>23-08-2020</td>
                                       <td><span class="badge badge-success">Paid</span></td>
                                       <td><span class="badge badge-danger">Rejected</span></td>
                                </tr>
                               </tbody>
                         </table>
                             End table -->

                              <!-- Pagination 

                                 <div class="order-pagination">
                                 <nav aria-label="Page navigation example">
                                     <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                     </ul>
                                </nav>
                                 </div>
                         </div> -->
                     </div>
                </section>
              </div>
              @include('Admin.footer')
