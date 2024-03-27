<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kullanıcı Kayıt</title>
    <link rel="stylesheet" href="sign-up.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <section class="container">
      <header>Cüzdan Kayıt Platformu</header>
      <br />
      <form action="islem.php" class="form" method="POST">
      <div class="upload">
        <img src="avatar.png" width="100" height="100" alt="" />
        <div class="round">
          <input type="file" />
          <i class="fa fa-camera" style="color: #fff"></i>
        </div>
      </div>
        <label>Kayıt Türü</label>
        <div class="column">
          <div class="select-box">
            <select id="mySelect" name="reg_type">
              <option selected>Seçiniz</option>
              <option value="personel">Bireysel</option>
              <option value="business">Kurumsal</option>
            </select>
          </div>
        </div>
        <div id="divContainer"></div>
      </form>
    </section>
	<form action="islem.php" class="form" method="POST">
    <script>
      const selectElement = document.getElementById("mySelect");
      const divContainer = document.getElementById("divContainer");

      selectElement.addEventListener("change", function () {
        const selectedOption = selectElement.value;

        if (selectedOption == "personel") {
          divContainer.innerHTML = `
		  <div class="column">
          <div class="input-box">
          <label>Ad</label>
          <input name="name" type="text" placeholder="Adınız" required />
		  </div>
	      <div class="input-box">
          <label>Soyad</label>
          <input
			<input
            type="text"
            placeholder="Soyadınız"
            required
            name="surname" />
        </div>
		</div>
        <div class="input-box">
          <label>Mail Adresi</label>
          <input type="email" placeholder="Mail adresinizi giriniz" required name="mail" />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Şifre</label>
            <input name="password" type="password" placeholder="Şifre giriniz" required />
          </div>
          <div class="input-box">
            <label>Şifrenizi Tekrar Ediniz</label>
            <input type="password" placeholder="Şifre giriniz" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Telefon Numarası</label>
            <input
              type="tel"
              placeholder="Telefon numaranızı giriniz"
              name="phone"
              required
            />
          </div>
          <div class="input-box">
            <label>Doğum Tarihi</label>
            <input type="date" 
            placeholder="Enter birth date"
            name="brith_day"
            required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Cinsiyet</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Erkek</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Kadın</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">belirtmek istemiyorum</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Adres</label>
          <input type="text" placeholder="Adresinizi giriniz" required name="address" />
          <div class="column">
            <div class="input-box">
              <label>Ülke</label>
              <input type="text" placeholder="Ülke giriniz" required name="country" />
            </div>
            <div class="input-box">
              <label>Şehir</label>
              <input type="text" placeholder="Şehir giriniz" required name="city" />
            </div>
          </div>
        </div>
        <div class="input-box payment">
          <label>TC/VKN</label>
          <input type="number" placeholder="TC Kimlik Numaranız" name="identity_number" required />
          <div class="column">
            <div class="input-box">
              <label>Banka</label>
              <input type="text" placeholder="Banka" required name="bank" />
            </div>
            <div class="input-box">
              <label>Iban</label>
              <input type="text" placeholder="Iban" required name="iban" />
            </div>
          </div>
		  <div class="select-box">
            <select name ="currency">
              <option hidden>Sales Category</option>
              <option>Fashion</option>
              <option>Shoe</option>
              <option>Cosmetic</option>
			  <option>And Textile</option>
			  <option>Accessory</option>
			  <option>Home-Garden</option>
			  <option>Sport</option>
			  <option>Electronic</option>
			  <option>Hobby-Toy</option>
			  <option>Mother-Baby</option>
			  <option>Supermarket</option>
			  <option>Book</option>
			  <option>Office-Stationery</option>
			  <option>Petshop</option>
			  <option>Construction market</option>
			  <option>Automobile-Motorcycle</option>
			  <option>Movie-Music-Entertainment</option>
			  <option>Holiday</option>
			  Clothes
            </select>
			</div>
          <div class="select-box">
            <select name ="currency">
              <option hidden>Döviz Kuru</option>
              <option>TL</option>
              <option>USD</option>
              <option>EUR</option>
            </select>
          </div>
        </div>
        <button type="submit" name="insertislemi">Gönder</button>
          `;
        } else {
          divContainer.innerHTML = `<div class="column">
          <div class="input-box">
          <label>Ad</label>
          <input
            type="text"
            placeholder="Adınız"
            required
            name="name" />
			</div>
	      <div class="input-box">
          <label>Soyad</label>
          <input
			<input
            type="text"
            placeholder="Soyadınız"
            required
            name="surname" />
        </div>
		</div>

        <div class="input-box">
          <label>Mail Adresi</label>
          <input type="email" placeholder="Mail adresinizi giriniz" name="mail" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Şifre</label>
            <input type="password" placeholder="Şifre giriniz" name="password" required />
          </div>
          <div class="input-box">
            <label>Şifrenizi Tekrar Ediniz</label>
            <input type="password" placeholder="Şifre giriniz" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Telefon Numarası</label>
            <input
              type="number"
              placeholder="Telefon numaranızı giriniz"
              name="phone"
              required
            />
          </div>
          <div class="input-box">
            <label>Doğum Tarihi</label>
            <input type="date" placeholder="Enter birth date" name="brith_day" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Cinsiyet</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="erkek" checked />
              <label for="check-male">Erkek</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="kadın" />
              <label for="check-female">Kadın</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="belirtilmedi" />
              <label for="check-other">belirtmek istemiyorum</label>
            </div>
          </div>
        </div>
        <div class="input-box">
          <div class="column">
            <div class="input-box">
              <label>Ticari Ünvanı</label>
              <input type="text" placeholder="Ticari Ünvan" name="commercial_title" required />
            </div>
            <div class="input-box">
              <label>Şirket Türü</label>
              <input type="text" placeholder="Şirket Türü" name="company_type" required />
            </div>
          </div>
        </div>

        <div class="input-box">
          <div class="column">
            <div class="input-box">
              <label>Mersis No</label>
              <input type="text" placeholder="Mersis No" name="mersis_no" required />
            </div>
            <div class="input-box">
              <label>Sicil No</label>
              <input type="text" placeholder="Sicil No" name="registration_number" required />
            </div>
          </div>
        </div>

        <div class="input-box">
          <div class="column">
            <div class="input-box">
              <label>Vergi Dairesi</label>
              <input type="text" placeholder="Vergi Dairesi" name="tax_admin" required />
            </div>
            <div class="input-box">
              <label>Vergi No</label>
              <input type="text" placeholder="Vergi Numarası" name="tax_number" required />
            </div>
          </div>
        </div>
        
        <div class="input-box address">
          <label>Adres</label>
          <input type="text" placeholder="Adresinizi giriniz" name="address" required />
          <div class="column">
            <div class="input-box">
              <label>Ülke</label>
              <input type="text" placeholder="Ülke giriniz" name="country" required />
            </div>
            <div class="input-box">
              <label>Şehir</label>
              <input type="text" placeholder="Şehir giriniz" name="city" required />
            </div>
          </div>
        </div>
        <div class="input-box payment">
          <label>TC/VKN</label>
          <input type="text" placeholder="TC Kimlik Numaranız" name="identity_number" required />
          <div class="column">
            <div class="input-box">
              <label>Banka</label>
              <input type="text" placeholder="Banka" name="bank" required />
            </div>
            <div class="input-box">
              <label>Iban</label>
              <input type="text" placeholder="Iban" name="iban" required />
            </div>
          </div>
		  <div class="select-box">
            <select name="currency">
              <option hidden>Sales Category</option>
              <option>Fashion</option>
              <option>Shoe</option>
              <option>Cosmetic</option>
			  <option>And Textile</option>
			  <option>Accessory</option>
			  <option>Home-Garden</option>
			  <option>Sport</option>
			  <option>Electronic</option>
			  <option>Hobby-Toy</option>
			  <option>Mother-Baby</option>
			  <option>Supermarket</option>
			  <option>Book</option>
			  <option>Office-Stationery</option>
			  <option>Petshop</option>
			  <option>Construction market</option>
			  <option>Automobile-Motorcycle</option>
			  <option>Movie-Music-Entertainment</option>
			  <option>Holiday</option>
            </select>
          </div>
          <div class="select-box">
            <select name="currency">
              <option hidden>Döviz Kuru</option>
              <option>TL</option>
              <option>USD</option>
              <option>EUR</option>
            </select>
          </div>
        </div>
        <button type="submit" name="insertislemi">Gönder</button>
        `;
        }
      });
    </script>
	</form>
  </body>
</html>
