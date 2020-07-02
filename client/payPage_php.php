<form id='payform' onsubmit='return false;' method='POST' action='https://voguepay.com/pay/'>
    <input type='hidden' name='v_merchant_id' value='6509-0102171' />
    <input type='hidden' name='merchant_ref' value='234-567-890' />
    <input type='hidden' name='memo' value='Bulk order from McAckney Web Shop' />

    <input type='hidden' name='item_1' value='Face Cap' />
    <input type='hidden' name='description_1' value='Blue Zizi facecap' />
    <input type='hidden' name='price_1' value='2000' />

    <input type='hidden' name='item_2' value='Laban T-shirt' />
    <input type='hidden' name='description_2' value='Green XXL' />
    <input type='hidden' name='price_2' value='3000' />

    <input type='hidden' name='item_3' value='Black Noni Shoe' />
    <input type='hidden' name='description_3' value='Size 42' />
    <input type='hidden' name='price_3' value='8000' />

    <input type='hidden' name='developer_code' value='pq7778ehh9YbZ' />
    <input type='hidden' name='store_id' value='25' />

    <input type='hidden' name='total' value='13000' />

    <input type='hidden' name='name' value='Customer name'/>
    <input type='hidden' name='address' value='Customer Address'/>
    <input type='hidden' name='city' value='Customer City'/>
    <input type='hidden' name='state' value='Customer State'/>
    <input type='hidden' name='zipcode' value='Customer Zip/Post Code'/>
    <input type='hidden' name='email' value='Customer email'/>
    <input type='hidden' name='phone' value= 'Customer phone '/>
    <input type='image' src='http://voguepay.com/images/buttons/buynow_blue.png' alt='Submit' />
</form> 
<script src="//voguepay.com/js/voguepay.js">
</script>
<script>
    Voguepay.init({form:'payform'});
</script>