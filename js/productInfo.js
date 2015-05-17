var json_data;
function showdatepicker() {
$(function() {
    $( "#date" ).datepicker({  minDate: +0,
        dateFormat:"mm/dd/yy"});

});
}
function getProductInfo(id)
{
    myXHR("productbl.php?id="+id,{callback: setProductInfo,method:"GET"});
}
setProductInfo=function(data)
{
    var container_name="productInfo";
    json_data=data;
    data = JSON.parse(data);

    var source_info = document.getElementById("handlebar-info").innerHTML;
    var template_info = Handlebars.compile(source_info);
    var html = "";
    for(var key1 in data)
    {
        var flag=0;
        for(var key2 in data[key1] )
        {
            if(flag==0)
            {
                flag=1;
                continue;
            }
            data[key1][key2]['Category']=key2;
            html += template_info(data[key1][key2]);
            html+='<select id="'+key2+'" class="select-main">';
            for(var i=1;i<Object.keys(data[key1][key2]).length;i++)
                html+='<option value=\"'+data[key1][key2][i]+'">'+data[key1][key2][i]+'</option>';
            html+="</select>"
        }
        html+="<br><label>Quantity</label><br><input type='number' name='Quantity' id='quantity' class='select-main'><br><label>Product Ready by : </label><br><input type='text' name='date' id='date' class='select-main'>"+'<br><button class="addtocart"  value="Submit" onclick="checkFields()"> <i class="fa fa-shopping-cart fa-fw"></i> Add to Cart </button>';
    }
    document.getElementById(container_name).innerHTML=html;
    showdatepicker();
};
function checkFields()
{
    var quantity=document.getElementById('quantity').value;
    var date=new Date(document.getElementById('date').value);

    if(quantity==''){
        alert(' Please Enter a Valid Quantity.');
        return;
    }else if(isNaN(quantity)){
        alert('Please Enter a Valid Quantity.');
        return;
    }

    var timestamp=date.getTime();
    if(timestamp==''){
        alert('Please Enter a valid Date.');
        return;
    }else if(isNaN(timestamp)){
        alert('Please Enter a valid Date');
        return;
    }
    addProductForBidding(quantity,timestamp);
}
function addProductForBidding(quantity,timestamp)
{
    var data=JSON.parse(json_data);
    for(var key1 in data)
    {
        var flag=0;
        for(var key2 in data[key1] )
        {
            if(flag==0)
            {
                flag=1;
                continue;
            }
            var attribute_value=document.getElementById(key2).value;
            data[key1][key2]=attribute_value;
        }
        data[key1]['Quantity']=quantity;
        data[key1]['Date']=timestamp;
    }
    data=encodeURIComponent(JSON.stringify(data));
    myXHR("bidbl.php?data="+data,{callback: redirect,method:"GET"});

}
redirect=function(data)
{
    window.location.href='cart.php';
    //data=JSON.parse(data);
    //if(data[err]!=null)
       // alert('Could not add item. Please try again');

}