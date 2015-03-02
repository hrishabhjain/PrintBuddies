
function getBidProduct()
{
    myXHR("cartbl.php?method=getBidById",{callback: displayProductDetails,method:"GET"})
}
displayProductDetails=function(data)
{
    var container_name="cart";
    data = JSON.parse(data);

    var source_info1 = document.getElementById("handlebar-info-1").innerHTML;
    var template_info1 = Handlebars.compile(source_info1);
    var source_info2 = document.getElementById("handlebar-info-2").innerHTML;
    var template_info2= Handlebars.compile(source_info2);

    var html = "";
    for(var key1 in data)
    {
        for(var key2 in data[key1] )
        {
            if(key2=='_id')
                continue;
            for(var key3 in data[key1][key2])
                for(var key4 in data[key1][key2][key3])
                {
                    data[key1][key2][key3][key4]['Item']=key4;
                    html += template_info1(data[key1][key2][key3][key4]);
                    html+='<div class="col-md-25 hidden-sm hidden-xs p-wr"><div class="product-attrb-wr"><div class="product-attrb">';
                    for(var key5 in data[key1][key2][key3][key4])
                    {
                        if(key5=='Quantity' || key5=='Date' || key5=='_id' || key5=='Item')
                            continue;
                        html+='<div class="att"> <span>'+key5+': </span> <span class="size">'+data[key1][key2][key3][key4][key5]+'</span> </div>';
                    }
                    html+='</div></div></div>';
                    var Bid_closing_date=new Date(data[key1][key2][key3][key4]['Date']);
                    var date=Bid_closing_date.getDate();
                    var month=Bid_closing_date.getMonth();
                    var year=Bid_closing_date.getFullYear();

                    var monthNames = [ "January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December" ];
                    data[key1][key2][key3][key4]['Date']=monthNames[month]+' '+date+', '+year;

                    html+=template_info2(data[key1][key2][key3][key4]);
                }
        }
    }
    document.getElementById(container_name).innerHTML=html;
}