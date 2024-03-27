<!DOCTYPE html>
<html>
  <head>
    <title>Cüzdan Satıcıları</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <style>
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    nav .flex-start input {
      height: 40px;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 10px;
    }
    nav .flex-end input {
      height: 40px;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 10px;
    }
    .sc {
      height: 30px;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 5px;
    }
    .ab {
      background-color: #bb2782;
      border: none;
      color: white;
      padding: 10px;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 6px;
    }

    .ab:hover {
      opacity: 0.7;
    }
  </style>
  <body>
    <nav>
      <div class="flex-start">
        <input type="text" placeholder="Cüzdan Satıcısı" />
        <input type="text" placeholder="ID" />
        <input type="text" placeholder="Ülke ID" />
      </div>
      <div class="flex-end">
        <input type="text" placeholder="Aktif" />
        <input type="text" placeholder="Ara" />
        <button class="ab">Ara</button>
      </div>
    </nav>
    <br />
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Profil</th>
          <th>Adı Soyadı</th>
          <th>Bölge ID</th>
          <th>Ülke ID</th>
          <th>TC/VKN</th>
          <th>Mail & Şifre</th>
          <th>Adres & İletişim</th>
          <th>Üyelik Tarihi</th>
          <th>Kota</th>
          <th>Kur</th>
          <th>Banka Bilgileri</th>
          <th>Aktivasyon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="ID">1</td>
          <td data-label="Profil">
            <div class="upload">
              <img src="avatar.png" width="70" height="70" alt="" />
              <div class="round">
                <input type="file" />
                <i class="fa fa-camera" style="color: #fff"></i>
              </div>
            </div>
          </td>
          <td data-label="Adı Soyadı">Dinesh</td>
          <td data-label="Bölge ID">34</td>
          <td data-label="Ülke ID">50%</td>
          <td data-label="TC/VKN">Passed</td>
          <td data-label="Mail & Şifre">Passed</td>
          <td data-label="Adres & İletişim">Passed</td>
          <td data-label="Üyelik Tarihi">Passed</td>
          <td data-label="Kota">Passed</td>
          <td data-label="Kur">Passed</td>
          <td data-label="Banka Bilgileri">Passed</td>
          <td data-label="Aktivasyon">
            <select class="sc">
              <option>Onay Bekliyor</option>
              <option>Aktif</option>
              <option>Pasif</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
