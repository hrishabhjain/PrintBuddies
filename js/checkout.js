
    $(function() {
        $( "#bidDate" ).datepicker({  minDate: +0,
            dateFormat:"mm/dd/yy"});

    });

function displayConfirmBidPanel()
{
    document.getElementById('create-bid').disabled='disabled';
}
function enableCreateBidButton()
{
    if(document.getElementById('change-create-bid').checked)
    {
        document.getElementById('create-bid-button').style.opacity=1;
        document.getElementById('create-bid-button').disabled=false;
    }
    else
        disableCreateBidButton();
}
function disableCreateBidButton()
{
    document.getElementById('create-bid-button').style.opacity=0.5;
    document.getElementById('create-bid-button').disabled=true;
}
function summary()
{
    disableCreateBidButton();
    myXHR("cartbl.php?method=getBidById",{callback: displaySummary,method:"GET"});
}
displaySummary=function(data)
{
    var container_name="box-content cart-box-wr";
    data = JSON.parse(data);

    var source_info = document.getElementById("handlebar-info").innerHTML;
    var template_info = Handlebars.compile(source_info);
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
                    html += template_info(data[key1][key2][key3][key4]);
                }
        }
    }
    document.getElementById(container_name).innerHTML=html;
}
function createBid()
{
    var timestamp=new Date(document.getElementById('bidDate').value);
    var city=document.getElementById('city').value;
    timestamp.setHours(timestamp.getHours()+2);
    timestamp=timestamp.getTime();

    myXHR("checkoutbl.php?method=createBid&timestamp="+timestamp+"&city="+city,{callback: redirectToUserProfile,method:"GET"});
}

redirectToUserProfile=function(data)
{
    data=JSON.parse(data);
    if(data)
        window.location.href='profile.php';
    else
        alert('Error occured please try again.');

}