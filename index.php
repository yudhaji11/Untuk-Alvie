<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Selamat Ulang Tahun, Sayang!</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background: linear-gradient(to bottom right, #ffc0cb, #ff69b4);
      color: white;
      text-align: center;
      overflow-x: hidden;
    }
    .container {
      padding: 20px;
    }
    h1 {
      font-size: 2.5rem;
      margin-top: 20px;
      animation: fadeInDown 2s ease;
    }
    p {
      font-size: 1.2rem;
      margin-top: 10px;
      animation: fadeInUp 2s ease;
    }
    img {
      max-width: 90%;
      border-radius: 20px;
      margin: 20px 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      animation: fadeIn 3s ease;
    }
    button {
      background: white;
      color: #ff69b4;
      border: none;
      padding: 12px 24px;
      font-size: 1rem;
      border-radius: 30px;
      cursor: pointer;
      margin-top: 20px;
      transition: transform 0.3s ease;
    }
    button:hover {
      transform: scale(1.1);
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Selamat Ulang Tahun, Cintaku 💖</h1>
    <p>Semoga harimu seindah senyummu, dan bahagiamu sepanjang waktu. Aku selalu di sini untukmu.</p>
    <img src="https://i.ibb.co/3T1CRmJ/love.jpg" alt="Love Image" />
    <button onclick="showMessage()">Klik untuk Pesan Rahasia 😘</button>
    <p id="secret" style="display:none; margin-top:20px;">Aku sayang kamu lebih dari apapun. Yuk terus bareng-bareng sampai tua 🥺💕</p>
  </div>

  <script>
    function showMessage() {
      document.getElementById('secret').style.display = 'block';
    }
  </script>
</body>
</html>
