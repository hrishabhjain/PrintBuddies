var reveal_html="";
var reveal_bidId="";
var printer_username="";
function getExistingBid()
{
    myXHR("printerbl.php?method=getSession",{callback:setSession,method:"GET"});
    myXHR("printerbl.php?method=getExistingBid",{callback:displayBids,method:"GET"});
}
setSession=function(data)
{
    data=JSON.parse(data);
    printer_username=data['printer_username'];
}
displayBids=function(data)
{
    var container_name="cart";
    data = JSON.parse(data);

    var source_info1 = document.getElementById("handlebar-info-1").innerHTML;
    var template_info1 = Handlebars.compile(source_info1);
    var source_info2 = document.getElementById("handlebar-info-2").innerHTML;
    var template_info2= Handlebars.compile(source_info2);
    var source_info3 = document.getElementById("handlebar-info-3").innerHTML;
    var template_info3= Handlebars.compile(source_info3);
    var html = "";
    var monthNames = [ "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December" ];
    for(var key1 in data)
    {
        html += template_info1(data[key1]);
        for(var key2 in data[key1] )
        {
            if(key2=='_id' || key2=='date')
                continue;
            for(var key3 in data[key1][key2])
                for(var key4 in data[key1][key2][key3])
                {
                    var Product_ready_by=new Date(data[key1][key2][key3][key4]['Date']);
                    var date=Product_ready_by.getDate();
                    var month=Product_ready_by.getMonth();
                    var year=Product_ready_by.getFullYear();

                    data[key1][key2][key3][key4]['Date']=monthNames[month]+' '+date+', '+year;
                    html+=template_info3(data[key1][key2][key3][key4]);
                }
        }
        var Bid_closing_date=new Date(parseInt(data[key1]['date']));
        var date=Bid_closing_date.getDate();
        var month=Bid_closing_date.getMonth();
        var year=Bid_closing_date.getFullYear();
        data[key1]['date']=monthNames[month]+' '+date+', '+year;

        html+=template_info2(data[key1]);
    }
    document.getElementById(container_name).innerHTML=html;


}
function getCompleteBid(bid_id)
{
    reveal_bidId=bid_id;
    myXHR("printerbl.php?method=getBidById&BidId="+bid_id,{callback:displayBidInReveal,method:"GET"});

}
displayBidInReveal=function(data)
{
    data = JSON.parse(data);

    var source_info1 = document.getElementById("handlebar-info-4").innerHTML;
    var template_info1 = Handlebars.compile(source_info1);
    var source_info2 = document.getElementById("handlebar-info-5").innerHTML;
    var template_info2= Handlebars.compile(source_info2);
    var html = "";
    var bid_id;
    for(var key1 in data)
    {
        for(var key2 in data[key1] )
        {
            if(key2=='_id')
            {
                html+='<h2>BidId : PB_'+data[key1][key2]+'</h2>';
                bid_id=data[key1][key2];
            }
            for(var key3 in data[key1][key2])
            {
                if(key2=='products')
                {

                    for(var key4 in data[key1][key2][key3])
                    {
                        data[key1][key2][key3][key4]['Item']=key4;
                        html += template_info1(data[key1][key2][key3][key4]);
                        html+='<div class="col-md-26 hidden-sm hidden-xs p-wr"><div class="product-attrb-wr"><div class="product-attrb">';
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
                        data[key1][key2][key3][key4]['Date']=date+'/'+monthNames[month]+'/'+year;

                        html+=template_info2(data[key1][key2][key3][key4]);
                    }
                }
                //html+='<div class="row clearfix f-space20"></div>';
            }
        }
    }
    reveal_html=html;
    myXHR("printerbl.php?method=getBidPrice&BidId="+bid_id,{callback:displayBidPriceReveal,method:"GET"});


}
displayBidPriceReveal=function(data)
{
    data = JSON.parse(data);
    var container_name="myModal";
    var source_info3 = document.getElementById("handlebar-info-6").innerHTML;
    var template_info3= Handlebars.compile(source_info3);

    var source_info4 = document.getElementById("handlebar-info-7").innerHTML;
    var template_info4= Handlebars.compile(source_info4);

    var source_info5 = document.getElementById("handlebar-info-8").innerHTML;
    var template_info5= Handlebars.compile(source_info5);
    reveal_html+='<div class="col-md-35 col-sm-12 col-xs-12 box-block page-sidebar"><div class="box-heading"><span>Bids</span></div><div class="box-content cart-box-wr" id="box-content cart-box-wr"><div class="cart-box-tm"><div class="tm1" style="background-color:#fff">Price (In Rs.)</div><div class="tm2" style="background-color:#fff">On-Time</div></div>';
    for(var key in data)
    {
        if(data[key]['OnTime']==1)
            data[key]['OnTime']='Yes';
        else
            data[key]['OnTime']='No';
        if(data[key]['Username']==printer_username)
        {
            reveal_html+=template_info5(data[key]);
            continue;
        }
        reveal_html+=template_info3(data[key]);
    }
    reveal_html+=template_info4();
    reveal_html+='</div></div></div><a class="close-reveal-modal">&#215;</a>';

    document.getElementById(container_name).innerHTML=reveal_html;
    $('#myModal').reveal({
        animation: 'fadeAndPop',                   //fade, fadeAndPop, none
        animationspeed: 300,                       //how fast animtions are
        closeonbackgroundclick: true,              //if you click background will modal close?
        dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
    });
}

function postBid()
{
    var price=document.getElementById('price').value;
    console.log(document.getElementById('Ontime').checked);
    var ontime="";
    if(document.getElementById('Ontime').checked)
         ontime=1;
    else
         ontime=0;
    if(price==''){
        alert('Enter a Valid Price.');
        return;
    }else if(isNaN(price)){
        alert('Enter a Valid Price.');
        return;
    }else if(parseInt(price)==0)
    {
        alert('Enter a Valid Price. You cannot enter Zero.');
        return;
    }

    myXHR("printerbl.php?method=postBid&BidId="+reveal_bidId+"&price="+price+"&ontime="+ontime,{callback:destroyReveal,method:"GET"})
}


destroyReveal=function(data)
{

    data=JSON.parse(data);
    if(data==true){
        alert('Bided Successfully');
        document.location.reload(true);
    }
}