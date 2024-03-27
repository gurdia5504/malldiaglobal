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
                    TR Güncel Havuz Bakiyesi
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
                  <div class="count">200.000 €</div>
                  <br />
                  <h3 style="font-size: 19px !important">
                    EU Güncel Havuz Bakyesi
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
                    USA Güncel Havuz Bakyesi
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
                    Asya Güncel Havuz Bakyesi
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
                  <a data-toggle="tab" href="#tr">TR Havuz Dağıtım</a>
                </li>
                <li><a data-toggle="tab" href="#eu">EU Havuz Dağıtım</a></li>
                <li><a data-toggle="tab" href="#usa">USA Havuz Dağıtım</a></li>
                <li>
                  <a data-toggle="tab" href="#asia">Asya Havuz Dağıtım</a>
                </li>
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
                          <th>Profil</th>
                          <th>Adı-Soyadı</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>ID</th>
                          <th>TC/VKN</th>
                          <th>Kota</th>
                          <th>Cüzdan Satıcı Karı</th>
                          <th>Havuz Katkı Payı</th>
                          <th>Toplam Kazanç</th>
                          <th>Kur</th>
                          <th>Ödeme Gönder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-align: center">
                            <div class="container">
                              <img
                                src="img_avatar.png"
                                class="img-circle"
                                alt="Cinque Terre"
                                width="50"
                                height="50"
                              />
                            </div>
                          </td>
                          <td>Elf Karanfil</td>
                          <td>TR</td>
                          <td>Tr90</td>
                          <td>546436644</td>
                          <td>11111111111</td>
                          <td>500</td>
                          <td>5000</td>
                          <td>0</td>
                          <td>333</td>
                          <td>₺</td>
                          <td>
                            <form class="form-inline" action="/action_page.php">
                              <div class="form-group">
                                <input type="text" class="form-control" />
                              </div>
                              <button
                                type="submit"
                                class="btn btn-default"
                                style="margin-bottom: 0px"
                              >
                                Gönder
                              </button>
                            </form>
                          </td>
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
                          <th>Profil</th>
                          <th>Adı-Soyadı</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>ID</th>
                          <th>TC/VKN</th>
                          <th>Kota</th>
                          <th>Cüzdan Satıcı Karı</th>
                          <th>Havuz Katkı Payı</th>
                          <th>Toplam Kazanç</th>
                          <th>Kur</th>
                          <th>Ödeme Gönder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-align: center">
                            <div class="container">
                              <img
                                src="img_avatar.png"
                                class="img-circle"
                                alt="Cinque Terre"
                                width="50"
                                height="50"
                              />
                            </div>
                          </td>
                          <td>Elf Karanfil</td>
                          <td>TR</td>
                          <td>Tr90</td>
                          <td>546436644</td>
                          <td>11111111111</td>
                          <td>500</td>
                          <td>5000</td>
                          <td>0</td>
                          <td>333</td>
                          <td>₺</td>
                          <td>
                            <form class="form-inline" action="/action_page.php">
                              <div class="form-group">
                                <input type="text" class="form-control" />
                              </div>
                              <button
                                type="submit"
                                class="btn btn-default"
                                style="margin-bottom: 0px"
                              >
                                Gönder
                              </button>
                            </form>
                          </td>
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
                          <th>Profil</th>
                          <th>Adı-Soyadı</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>ID</th>
                          <th>TC/VKN</th>
                          <th>Kota</th>
                          <th>Cüzdan Satıcı Karı</th>
                          <th>Havuz Katkı Payı</th>
                          <th>Toplam Kazanç</th>
                          <th>Kur</th>
                          <th>Ödeme Gönder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-align: center">
                            <div class="container">
                              <img
                                src="img_avatar.png"
                                class="img-circle"
                                alt="Cinque Terre"
                                width="50"
                                height="50"
                              />
                            </div>
                          </td>
                          <td>Elf Karanfil</td>
                          <td>TR</td>
                          <td>Tr90</td>
                          <td>546436644</td>
                          <td>11111111111</td>
                          <td>500</td>
                          <td>5000</td>
                          <td>0</td>
                          <td>333</td>
                          <td>₺</td>
                          <td>
                            <form class="form-inline" action="/action_page.php">
                              <div class="form-group">
                                <input type="text" class="form-control" />
                              </div>
                              <button
                                type="submit"
                                class="btn btn-default"
                                style="margin-bottom: 0px"
                              >
                                Gönder
                              </button>
                            </form>
                          </td>
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
                          <th>Profil</th>
                          <th>Adı-Soyadı</th>
                          <th>Bölge ID</th>
                          <th>Ülke ID</th>
                          <th>ID</th>
                          <th>TC/VKN</th>
                          <th>Kota</th>
                          <th>Cüzdan Satıcı Karı</th>
                          <th>Havuz Katkı Payı</th>
                          <th>Toplam Kazanç</th>
                          <th>Kur</th>
                          <th>Ödeme Gönder</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="text-align: center">
                            <div class="container">
                              <img
                                src="img_avatar.png"
                                class="img-circle"
                                alt="Cinque Terre"
                                width="50"
                                height="50"
                              />
                            </div>
                          </td>
                          <td>Elf Karanfil</td>
                          <td>TR</td>
                          <td>Tr90</td>
                          <td>546436644</td>
                          <td>11111111111</td>
                          <td>500</td>
                          <td>5000</td>
                          <td>0</td>
                          <td>333</td>
                          <td>₺</td>
                          <td>
                            <form class="form-inline" action="/action_page.php">
                              <div class="form-group">
                                <input type="text" class="form-control" />
                              </div>
                              <button
                                type="submit"
                                class="btn btn-default"
                                style="margin-bottom: 0px"
                              >
                                Gönder
                              </button>
                            </form>
                          </td>
                        </tr>
                        <!-- Add more data rows as needed -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>