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
                    TR Malldia Cüzdan Geliri
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
                  <div class="count">5.000 €</div>
                  <br />
                  <h3 style="font-size: 19px !important">
                    EU Malldia Cüzdan Geliri
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
                  <div class="count">5.000 $</div>
                  <br />
                  <h3 style="font-size: 19px !important">
                    USA Malldia Cüzdan Geliri
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
                  <div class="count">5.000 $</div>
                  <br />
                  <h3 style="font-size: 19px !important">
                    Asya Malldia Cüzdan Geliri
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
          <br />
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
              <div class="col-md-2">
                <input
                  style="border-radius: 5px"
                  type="text"
                  class="form-control"
                  placeholder="Döviz ID"
                />
              </div>
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
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#tr">TR Malldia</a>
                </li>
                <li><a data-toggle="tab" href="#eu">EU Malldia</a></li>
                <li><a data-toggle="tab" href="#usa">USA Malldia</a></li>
                <li><a data-toggle="tab" href="#asia">Asya Malldia</a></li>
              </ul>

              <div class="tab-content">
                <div id="tr" class="tab-pane fade in active">
                  <br />
                  <div class="x_content">
                    <table
                      id="malldia_tr"
                      class="table table-striped table-bordered dt-responsive"
                      style="width: 100%"
                    >
                      <thead>
                        <tr>
                          <th>Sipariş Tarihi</th>
                          <th>Ürün Bilgisi</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>Satıcı</th>
                          <th>Satıcı ID</th>
                          <th>Döviz Kur</th>
                          <th>Şirket Payı</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>20.05.2022</td>
                          <td>
                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                            HBV000012 Barkod:34532532532
                          </td>
                          <td>Eu</td>
                          <td>Pl48</td>
                          <td>Elf Karanfil</td>
                          <td>34324432</td>
                          <td>$</td>
                          <td>68,45</td>
                        </tr>
                        <!-- Add more data rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div id="eu" class="tab-pane fade">
                  <br />
                  <div class="x_content">
                    <table
                      id="malldia_eu"
                      class="table table-striped table-bordered dt-responsive"
                      style="width: 100%"
                    >
                      <thead>
                        <tr>
                          <th>Sipariş Tarihi</th>
                          <th>Ürün Bilgisi</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>Satıcı</th>
                          <th>Satıcı ID</th>
                          <th>Döviz Kur</th>
                          <th>Şirket Payı</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>20.05.2022</td>
                          <td>
                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                            HBV000012 Barkod:34532532532
                          </td>
                          <td>Eu</td>
                          <td>Pl48</td>
                          <td>Elf Karanfil</td>
                          <td>34324432</td>
                          <td>$</td>
                          <td>68,45</td>
                        </tr>
                        <!-- Add more data rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div id="usa" class="tab-pane fade">
                  <br />
                  <div class="x_content">
                    <table
                      id="malldia_usa"
                      class="table table-striped table-bordered dt-responsive"
                      style="width: 100%"
                    >
                      <thead>
                        <tr>
                          <th>Sipariş Tarihi</th>
                          <th>Ürün Bilgisi</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>Satıcı</th>
                          <th>Satıcı ID</th>
                          <th>Döviz Kur</th>
                          <th>Şirket Payı</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>20.05.2022</td>
                          <td>
                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                            HBV000012 Barkod:34532532532
                          </td>
                          <td>Eu</td>
                          <td>Pl48</td>
                          <td>Elf Karanfil</td>
                          <td>34324432</td>
                          <td>$</td>
                          <td>68,45</td>
                        </tr>
                        <!-- Add more data rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div id="asia" class="tab-pane fade">
                  <br />
                  <div class="x_content">
                    <table
                      id="malldia_asia"
                      class="table table-striped table-bordered dt-responsive"
                      style="width: 100%"
                    >
                      <thead>
                        <tr>
                          <th>Sipariş Tarihi</th>
                          <th>Ürün Bilgisi</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>Satıcı</th>
                          <th>Satıcı ID</th>
                          <th>Döviz Kur</th>
                          <th>Şirket Payı</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>20.05.2022</td>
                          <td>
                            Ürün:Welsoft Kalpl Yumuşak Kadın Bornoz Sku:
                            HBV000012 Barkod:34532532532
                          </td>
                          <td>Eu</td>
                          <td>Pl48</td>
                          <td>Elf Karanfil</td>
                          <td>34324432</td>
                          <td>$</td>
                          <td>68,45</td>
                        </tr>
                        <!-- Add more data rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>