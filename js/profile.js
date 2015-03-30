var reveal_html="";
var reveal_bidId="";
var name="";
var displayBids_container_name="";
function getActiveBid()
{
    displayBids_container_name="details-info";
    myXHR("profilebl.php?method=getSession",{callback:setSession,method:"GET"});
    myXHR("profilebl.php?method=getActiveBid",{callback:displayBids,method:"GET"});
    getIncompleteBid();
}
function getIncompleteBid()
{
    displayBids_container_name="reviews";
    myXHR("profilebl.php?method=getIncompleteBid",{callback:displayBids,method:"GET",async:true});
}
setSession=function(data)
{
    data=JSON.parse(data);
    name=data['first_name'];
    document.getElementById('first_name').innerHTML='<h2> Hi ! '+name+'</h2>';
};
displayBids=function(data)
{
    data = JSON.parse(data);

    var source_info1 = document.getElementById("handlebar-info-1").innerHTML;
    var template_info1 = Handlebars.compile(source_info1);
    var source_info2 = document.getElementById("handlebar-info-2").innerHTML;
    var template_info2= Handlebars.compile(source_info2);
    var source_info3 = document.getElementById("handlebar-info-3").innerHTML;
    var template_info3= Handlebars.compile(source_info3);
    var html = "";
    for(var key1 in data)
    {
        html += template_info1(data[key1]);
        for(var key2 in data[key1] )
        {
            if(key2=='_id' || key2=='date')
            {   console.log(data[key1][key2]); continue; }

            for(var key3 in data[key1][key2])
                for(var key4 in data[key1][key2][key3])
                {
                    var Product_ready_by=new Date(data[key1][key2][key3][key4]['Date']);
                    var date=Product_ready_by.getDate();
                    var month=Product_ready_by.getMonth()+1;
                    var year=Product_ready_by.getFullYear();
                    data[key1][key2][key3][key4]['Date']=date+'/'+month+'/'+year;

                    html+=template_info3(data[key1][key2][key3][key4]);
                }
        }
        if(data[key1]['date']!=null){
            var Bid_closing_date=new Date(parseInt(data[key1]['date']));
            var date=Bid_closing_date.getDate();
            var month=Bid_closing_date.getMonth()+1;
            var year=Bid_closing_date.getFullYear();
            data[key1]['date']=date+'/ '+month+'/ '+year;
        }

        html+=template_info2(data[key1]);
    }
    document.getElementById(displayBids_container_name).innerHTML=html;


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

    reveal_html+='<div class="col-md-35 col-sm-12 col-xs-12 box-block page-sidebar"><div class="box-heading"><span>Bids</span></div><div class="box-content cart-box-wr" id="box-content cart-box-wr"><div class="cart-box-tm"><div class="tm1" style="background-color:#fff">Price (In Rs.)</div><div class="tm2" style="background-color:#fff">On-Time</div></div>';
    for(var key in data)
    {
        if(data[key]['OnTime'])
            data[key]['OnTime']='Yes';
        else
            data[key]['OnTime']='No';
        reveal_html+=template_info3(data[key]);
    }

    reveal_html+='</div></div></div><a class="close-reveal-modal">&#215;</a>';

    document.getElementById(container_name).innerHTML=reveal_html;
    $('#myModal').reveal({
        animation: 'fadeAndPop',                   //fade, fadeAndPop, none
        animationspeed: 300,                       //how fast animtions are
        closeonbackgroundclick: true,              //if you click background will modal close?
        dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
    });
}




destroyReveal=function(data)
{

    data=JSON.parse(data);
    console.log(data);
    if(data==true){
        alert('Bided Successfully');
        document.location.reload(true);
    }
};
function redirectToCart(id)
{
    myXHR("profilebl.php?method=setSessionBidId&id="+id,{callback:redirectIt(),method:"GET"});

}
redirectIt=function(data)
{
    window.location.href="cart.php";
}