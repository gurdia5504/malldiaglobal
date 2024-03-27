          <h2>Cüzdan Satış Maliyet Tablosu</h2>
          <div class="row">
            <br />
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div
                    class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                  >
                    <div class="tile-stats">
                      <div class="icon">
                        <i class="fa-solid fa-turkish-lira-sign"></i>
                      </div>
                      <div class="count">5.000 TL</div>
                      <br />
                      <h3 style="font-size: 19px !important">
                        TR Cüzdan Satış Cirosu
                      </h3>
                      <div class="progress" style="margin: 14px">
                        <div
                          class="progress-bar progress-bar-success"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 40%"
                        >
                          %40
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                  >
                    <div class="tile-stats">
                      <div class="icon">
                        <i class="fa-solid fa-euro-sign"></i>
                      </div>
                      <div class="count">2.000.000 €</div>
                      <br />
                      <h3 style="font-size: 19px !important">
                        EU Cüzdan Satış Cirosu
                      </h3>
                      <div class="progress" style="margin: 14px">
                        <div
                          class="progress-bar progress-bar-success"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 40%"
                        >
                          %40
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                  >
                    <div class="tile-stats">
                      <div class="icon">
                        <i class="fa-sharp fa-regular fa-dollar-sign"></i>
                      </div>
                      <div class="count">1.000.000 $</div>
                      <br />
                      <h3 style="font-size: 19px !important">
                        USA Cüzdan Satış Cirosu
                      </h3>
                      <div class="progress" style="margin: 14px">
                        <div
                          class="progress-bar progress-bar-success"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 40%"
                        >
                          %40
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                  >
                    <div class="tile-stats">
                      <div class="icon">
                        <i class="fa-sharp fa-regular fa-dollar-sign"></i>
                      </div>
                      <div class="count">500.000 $</div>
                      <br />
                      <h3 style="font-size: 19px !important">
                        Asya Cüzdan Satış Cirosu
                      </h3>
                      <div class="progress" style="margin: 14px">
                        <div
                          class="progress-bar progress-bar-success"
                          role="progressbar"
                          aria-valuenow="40"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 40%"
                        >
                          %40
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <input
                    style="border-radius: 5px"
                    type="text"
                    class="form-control"
                    placeholder="Cüzdan Satıcısı"
                  />
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <select style="border-radius: 5px" class="form-control">
                      <option hidden>Seçiniz</option>
                      <option>Bireysel</option>
                      <option>Kurumsal</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <input
                    style="border-radius: 5px"
                    type="text"
                    class="form-control"
                    placeholder="Ülke ID"
                  />
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                  <div class="form-group">
                    <select style="border-radius: 5px" class="form-control">
                      <option hidden>Durum</option>
                      <option>Aktif</option>
                      <option>Pasif</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <button
                    style="border-radius: 5px"
                    type="button"
                    class="form-control"
                  >
                    Ara
                  </button>
                </div>
              </div>
              <br />
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="myTabContent" class="tab-content">
                  <div
                    role="tabpanel"
                    class="tab-pane fade active in"
                    id="tab_content1"
                    aria-labelledby="home-tab"
                  >
                    <div class="x_content">
                      <table
                        id="example"
                        class="table table-striped table-bordered dt-responsive"
                        style="width: 100%"
                      >
                        <thead>
                          <tr>
                            <th>Cari Dönemi</th>
                            <th>Sipariş Tarihi</th>
                            <th>Ürün Bilgisi</th>
                            <th>Bölge ID</th>
                            <th>Ülke ID</th>
                            <th>Satıcı</th>
                            <th>Satıcı ID</th>
                            <th>Döviz Kur</th>
                            <th>Toplam Satış Fiyatı</th>
                            <th>Ürün Maaliyeti</th>
                            <th>Ürün Maaliyeti KDV Oranı</th>
                            <th>Ürün Maaliyet KDV</th>
                            <th>Ürün Maaliyet + KDV</th>
                            <th>Kargo Ücreti</th>
                            <th>Kargo KDV Oranı</th>
                            <th>Kargo KDV</th>
                            <th>Kargo Ücret + KDV</th>
                            <th>Ürün Karı +KDV</th>
                            <th>Ürün KDV</th>
                            <th>Net Kar Satış Karı</th>
                            <th>Transfer KDV</th>
                            <th>Transfer Ücretli</th>
                            <th>Şirket Payı</th>
                            <th>Şirket Ödenen</th>
                            <th>Havuz Payı</th>
                            <th>Havuz Ödeme</th>
                            <th>Cüzdan Satıcı Karı</th>
                            <th>Cüzdan Satıcı Ödenen</th>

                            <!-- Add other columns as needed -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                          </tr>
                          <!-- Add more data rows as needed -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>