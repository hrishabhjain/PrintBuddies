
function summary()
{
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
};
