        <?php echo form_open_multipart('Admin_Controller/do_post_ad'); ?>

        <table  style="border: 0px; vertical-align: central ; margin-left: 2%; margin-bottom: 5px; width: 60%">

            <tr> <td> <h3><b> <u> Post Your Advertise </b> </u> </h3> <td> <tr/>
            <br/>
            <tr> <td> <h3><b> &nbsp; </b>  </h3> <td> <tr/>
            <tr> <td colspan="2"><?php echo form_error('name'); ?> </tr>
            <tr> <td>  <b>Name</b> <td> <input type="text" name="name"  value="<?php echo set_value('name'); ?>"> <tr/>

            <tr> <td colspan="2"><?php echo form_error('for_sale_rent'); ?> </tr>
            <tr> <td>  <b>For Sale/Rent</b><td> <input type="radio" name="for_sale_rent" id="sale"  value="0" checked="" > Sale &nbsp;&nbsp;
                    <input type="radio" name="for_sale_rent" value="1" id="rent"> Rent &nbsp;&nbsp;
            <input type="radio" name="for_sale_rent" value="2" id="both"> Both<tr/>

            <tr> <td colspan="2"><?php echo form_error('category_id'); ?> </tr>
            <tr> <td> <b>Category </b> <td>  <select name="category_id" >
                        <option value="" selected=""> Select Category </option>
                        <?php foreach ($category as $category): ?>
                            <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
                        <?php endforeach; ?>
                    </select> <tr/>

            <tr> <td colspan="2"><?php echo form_error('stateid'); ?> </tr>                                  
            <tr> <td> <b>State </b> <td>    <select name="stateid" id="state_id">
                        <option value="" selected=""> Select State </option>
                        <?php foreach ($state as $state): ?>
                            <option value="<?php echo $state['id'] ?>"> <?php echo $state['name'] ?> </option>
                        <?php endforeach; ?>
                    </select><tr/>  

            <tr> <td colspan="2"><?php echo form_error('cityid'); ?> </tr> 
            <tr> <td> <b>City </b> <td>     <select name="cityid" id="city_id">
                        <option value="" selected=""> Select City </option>
                        <?php foreach ($city as $category): ?>
                            <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
                        <?php endforeach; ?>
                    </select><tr/>  

            <tr> <td colspan="2"><?php echo form_error('areaid'); ?> </tr> 
            <tr> <td> <b>Area </b> <td>     <select name="areaid" id="area_id">
                        <option value="" selected=""> Select Area </option>
                        <?php foreach ($area as $category): ?>
                            <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
                        <?php endforeach; ?>
                    </select><tr/> 

            <tr> <td colspan="2"><?php echo form_error('pincode'); ?> </tr>
            <tr> <td> <b> Pin Code </b> <td> <input type="text" name="pincode"  value="<?php echo set_value('pincode'); ?>" style="width: 100px"><tr/>

            <tr> <td colspan="2"><?php echo form_error('address'); ?> </tr>
            <tr> <td> <b> Address </b> <td> <textarea name="address" ></textarea><tr/>

            <tr> <td colspan="2"><?php echo form_error('rooms'); ?> </tr>
            <tr> <td> <b> Rooms </b> <td> <input type="number" name="rooms" min="1" max="7" style="width: 100px" >  BHK<tr/>

            <tr> <td colspan="2"><?php echo form_error('carpet_area'); ?> </tr>
            <tr> <td> <b> Carpet Area </b> <td> <input type="text" name="carpet_area"  value="<?php echo set_value('carpet_area'); ?>" style="width: 100px"> Sq.Ft. <tr/>

            <tr> <td colspan="2"><?php echo form_error('built_up_area'); ?> </tr>
            <tr> <td> <b> Built Up Area </b> <td> <input type="text" name="built_up_area" value="<?php echo set_value('built_up_area'); ?>" style="width: 100px"> Sq.Ft. <tr/>

            <tr> <td colspan="2"><?php echo form_error('super_built_up_area'); ?> </tr> 
            <tr> <td> <b> Super Built Up Area </b> <td> <input type="text" name="super_built_up_area" value="<?php echo set_value('super_built_up_area'); ?>" style="width: 100px"> Sq.Ft. <tr/>


            <tr> <td colspan="2"><?php echo form_error('price_sale'); ?> </tr> 
            <tr id="saleprice"> <td> <b> Selling Price </b> <td> <input type="text" name="price_sale" value="<?php echo set_value('price_sale'); ?>"  style="width: 100px"> Rs. <tr/>

            <tr> <td colspan="2"><?php echo form_error('price_rent'); ?> </tr> 
            <tr id="rentprice" hidden=""> <td> <b> Rent </b> <td> <input type="text" name="price_rent" value="<?php echo set_value('price_rent'); ?>"  style="width: 100px"> Rs./Month <tr/>   

            <tr style=" width: 100%"> <td> <b> Image </b> <td> <input type="file" name="image" >  <tr/>
            <tr id="btnimage1"> <td> &nbsp; <td> <label> Upload More Images  </label>
            <tr style=" width: 100%" id="image1" hidden=""> <td> <b>  </b> <td> <input type="file" name="image1" >  <tr/>
            <tr id="btnimage2" hidden=""> <td> &nbsp; <td> <label> Upload More Images  </label>
            <tr style=" width: 100%" id="image2" hidden=""> <td> <b> </b> <td> <input type="file" name="image2" >  <tr/>
            <tr id="btnimage3" hidden=""> <td> &nbsp; <td> <label> Upload More Images  </label>
            <tr style=" width: 100%" id="image3" hidden=""> <td> <b> </b> <td> <input type="file" name="image3" >  <tr/>
            <tr id="btnimage4" hidden=""> <td> &nbsp; <td> <label> Upload More Images  </label>
            <tr style=" width: 100%" id="image4" hidden=""> <td> <b> </b> <td> <input type="file" name="image4" >  <tr/>
            <tr id="limit" style="color: red; font-family: monospace" hidden=""> <td> &nbsp; <td> You Can Upload Maximum 5 Images </tr>
          <!--<tr> <td> <b> Extra Details </b> <td> <input type="text" name="detail" ><tr/>-->
            <tr> <td> <b> Extra Details </b> <td> <textarea name="detail" ></textarea><tr/>
            
            <tr> <td colspan="2" style="text-align: center "> <input  type="submit" style="height: 100%; width: 100%; text-align: center" value=" Post Advertise">  <tr/>

        </table>
</div>
   