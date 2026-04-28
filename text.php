<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="js-favicon.webp" type="image/x-icon">
  <title>CSS Docs | Document</title>
  <style>
    body {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
</head>
<body>

<p style="display: none;">In today’s rapidly evolving digital environment, typing has transformed from a basic necessity into a highly valuable professional skill that significantly enhances productivity, efficiency, and overall performance across various domains. Individuals who dedicate consistent time to structured typing practice gradually develop strong muscle memory, allowing them to type swiftly and accurately without constantly looking at the keyboard, a technique commonly referred to as touch typing. This advanced ability not only saves time but also reduces cognitive load, enabling the typist to focus more on content creation rather than key placement. Moreover, mastering typing requires attention to multiple elements, including correct finger positioning, proper posture, and optimal screen alignment, all of which contribute to minimizing fatigue during extended working hours. A well-designed practice routine should incorporate a diverse range of content, such as complex vocabulary, numerical data like this. and varied punctuation marks including commas, semicolons; colons: quotation marks "like this. As learners progress, they should challenge themselves with longer and more intricate paragraphs that demand both speed and precision, ensuring that accuracy is not sacrificed for pace. Additionally, maintaining a calm and focused mindset is crucial, as frustration and haste often lead to increased errors and decreased efficiency. Studies have shown that individuals who practice typing for at least 20–30 minutes daily can achieve speeds exceeding 70–90 words per minute over time, provided they remain disciplined and committed to improvement. Ultimately, typing is not merely about pressing keys; it is about developing a seamless connection between the mind and the fingers, where thoughts are translated into text effortlessly and almost instantaneously, reflecting both clarity of thinking and technical proficiency in a highly competitive digital world.</p>

<p style="display: none">Vishal Don</p>


<div class="work-result-wrapper" style="display: none;">
  <div class="work-result-container">
    <div class="work-result-row">
      <div class="work-result-col">
        <div class="result-column">
          <label for="Crop">Crop Name</label>
          <input type="text" id="crop" name="Crop" placeholder="Enter Crop Name">
        </div>
        <div class="result-column">
          <label for="Price">Crop Price</label>
          <input type="text" id="price" name="Price" placeholder="Enter Crop Price">
        </div>
        <div class="result-column">
          <label for="Bags">Crop Total Bags</label>
          <input type="text" id="bags" name="Bags" placeholder="Enter Crop Total Bags">
        </div>
        <div class="result-column">
          <label for="Quantity">Crop Quantity</label>
          <input type="text" id="quantity" name="Quantity" placeholder="Enter Crop Quantity">
        </div>
        <button type="button" id="payment">Check Total Payment</button>
        <p id="result"></p>
      </div>
    </div>
  </div>
</div>

.woocommerce-billing-fields__field-wrapper {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  justify-content: space-between;
}
.shipping_address .form-row,
.woocommerce-billing-fields__field-wrapper .form-row {
    width: 100%;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    gap: 0px;
}
.woocommerce-billing-fields__field-wrapper 
.form-row:is(
    #billing_first_name_field,
    #billing_last_name_field,
    #billing_company_field,
    #billing_address_2_field,
    #billing_address_1_field
),
.shipping_address .woocommerce-shipping-fields__field-wrapper 
.form-row:is(
    #shipping_first_name_field,
    #shipping_last_name_field,
    #shipping_company_field,
    #shipping_address_2_field,
    #shipping_address_1_field
) {
    width: 100%;
    max-width: calc(33% - 10px);
    padding: 0;
}
.woocommerce-billing-fields__field-wrapper 
.form-row:is( 
  #billing_address_2_field, 
  #billing_address_1_field, 
  #billing_city_field 
),
.shipping_address .woocommerce-shipping-fields__field-wrapper 
.form-row:is(
  #shipping_address_2_field, 
  #shipping_address_1_field, 
  #shipping_city_field 
) {
    max-width: calc(50% - 10px);
}

.woocommerce-billing-fields__field-wrapper 
.form-row:is(
    #billing_state_field,
    #billing_postcode_field
),
.shipping_address .woocommerce-shipping-fields__field-wrapper 
.form-row:is(
  #shipping_state_field,
  #shipping_postcode_field
){
    max-width: calc(25% - 10px);
    display: block;
    padding: 0;
}

.shipping_address .woocommerce-shipping-fields__field-wrapper {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.shipping_address .form-row#billing_country_field, .woocommerce-billing-fields__field-wrapper .form-row#billing_country_field {
    flex-direction: row;
    justify-content: flex-start;
    gap: 0.5rem;
    align-items: center;
}




<p id="demo"></p>

<div class="random"></div>
<div class="random"></div>

<script>
  let show = document.querySelectorAll('.random');
  let min = 1;
  let max = 5;

  let num = Math.floor(Math.random() * (max - min + 1)) + min;

  show.forEach(function(n){
    n.innerHTML = num;
  });
</script>

<!-- <script>
    let show = document.querySelectorAll('.random');
    let min = 1;
    let max = 5;

    let num = Math.floor(Math.random() * (max - min + 1)) + min;

    show.forEach(function(el) {
        el.innerHTML = num;
    });
</script> -->



<script>
    let payment = document.getElementById('payment');
    let result = document.getElementById('result');

    payment.addEventListener('click', () => {
      let crop = String(document.getElementById('crop').value);
      let price = document.getElementById('price').value;
      let bags = Number(document.getElementById('bags').value);
      let quantity = Number(document.getElementById('quantity').value);

      result.innerHTML = `${crop} = ${((bags * quantity) / 100) * price}`;

    });
</script>

</body>
</html>