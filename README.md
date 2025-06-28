[Uploading index.html…]()
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>white_wf_store -

  </title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3f3f3;
    }

    header {
      background-color: #232f3e;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    .search-bar {
      flex: 1;
      margin: 10px;
      display: flex;
      max-width: 500px;
    }

    .search-bar input {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 4px 0 0 4px;
      font-size: 16px;
    }

    .search-bar button {
      background-color: #febd69;
      border: none;
      padding: 10px 20px;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
      font-weight: bold;
    }

    nav {
      background-color: #37475a;
      padding: 10px 20px;
      color: white;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    nav li {
      cursor: pointer;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      padding: 30px;
    }

    .product-box {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 15px;
    }

    .product-box:hover {
      transform: translateY(-5px);
    }

    .product-box img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
    }

    .product-name {
      margin: 10px 0 5px;
      font-size: 18px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }

    .product-price {
      color: #e67e22;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .product-box button {
      background-color: #ffa41c;
      color: black;
      border: none;
      padding: 10px 15px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .product-box button:hover {
      background-color: #ff8c00;
    }

    footer {
      text-align: center;
      background-color: #232f3e;
      color: white;
      padding: 15px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>white_wf_store</h1>
    <div class="search-bar">
      <input type="text" placeholder="ابحث عن منتج...">
      <button>بحث</button>
    </div>
  </header>

  <nav>
    <ul>
      <li>إلكترونيات</li>
      <li>ملابس</li>
      <li>هواتف</li>
      <li>مستلزمات</li>
      <li>ألعاب</li>
    </ul>
  </nav>

  <section class="products-grid">

    <!-- تيشيرت Trapstar 1 -->
    <div class="product-box">
      <img src="c:\Users\ARES\Downloads\Telegram Desktop\photo_2025-06-27_23-53-27.jpg" alt="تيشيرت Trapstar أسود">
      <div class="product-name">تيشيرت Trapstar أسود</div>
      <div class="product-price">2200 دج</div>
      <button>أضف إلى السلة</button>
    </div>

    <!-- تيشيرت CRTZ 1 -->
    <div class="product-box">
      <img src="c:\Users\ARES\Downloads\Telegram Desktop\photo_2025-06-27_23-53-24.jpg" alt="تيشيرت CRTZ أسود">
      <div class="product-name">تيشيرت CRTZ أسود</div>
      <div class="product-price">1800 دج</div>
      <button>أضف إلى السلة</button>
    </div>

    <!-- تيشيرت CRTZ 2 -->
    <div class="product-box">
      <img src="c:\Users\ARES\Pictures\Screenshots\تصميم بدون عنوان.png" alt="تيشيرت CRTZ رمادي">
      <div class="product-name">تيشيرت CRTZ رمادي</div>
      <div class="product-price">2000 دج</div>
      <button>أضف إلى السلة</button>
    </div>
    
    <!-- تيشيرت Trapstar أحمر -->
<div class="product-box">
  <img src="https://media.istockphoto.com/id/482948743/photo/blank-white-t-shirt-front-with-clipping-path.webp?a=1&b=1&s=612x612&w=0&k=20&c=jnM9oUPCet37IO-7UFO11tS8aEqPWXAoRpPKRLxkxdw=" alt="تيشيرت Trapstar أحمر">
  <div class="product-name">تيشيرت Trapstar أحمر</div>
  <div class="product-price">2300 دج</div>
  <button>أضف إلى السلة</button>
</div>

  </section>

  <footer>
    &copy; 2025 white_wf_store - اميرة + جميع الحقوق محفوظة. برمجة بلال
  </footer>

</body>
</html>

