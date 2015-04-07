function onClickSend()
{
    var feedback_subject;
    if(document.getElementById('feedback_name').value)
        var feedback_name=document.getElementById('feedback_name').value;
    else{
        alert('Name cannot be left blank');
        return;
    }
    if(document.getElementById('feedback_email').value)
        var feedback_email=document.getElementById('feedback_email').value;
    else{
        alert('Email cannot be left blank');
        return;
    }
    if(document.getElementById('feedback_mobile').value)
        var feedback_mobile=document.getElementById('feedback_mobile').value;
    else{
        alert('Mobile cannot be left blank');
        return;
    }
    if(document.getElementById('feedback_text').value)
        var feedback_text=document.getElementById('feedback_text').value;
    else{
        alert('Please enter your message');
        return;
    }
    if(document.getElementById('feedback_subject').value)
        feedback_subject=document.getElementById('feedback_subject').value;
    else
        feedback_subject="Blank";
    document.getElementById('reset').innerHTML="";
    document.getElementById('ThankYou').innerHTML='<p style="color: #fff">Sending....</p>';

    var string=encodeURI("feedback_name="+feedback_name+'&feedback_email='+feedback_email+"&feedback_subject="+feedback_subject+"&feedback_mobile="+feedback_mobile+"&feedback_text="+feedback_text);
    //myXHR("sendFeedbackMail.php?"+string,{callback: displayThankUDiv,method:"GET"});
    myXHR("http://webblitz.in/sendFeedbackMail.php?"+string,{callback: displayThankUDiv,method:"GET"})

}
displayThankUDiv=function(data)
{
    data=JSON.parse(data);
    if(data)
    {    document.getElementById('reset').innerHTML="";
        document.getElementById('ThankYou').innerHTML='<p style="color: #fff">Thank You for your response.<br> <br> Our Team will get back to You shortly</p>';
    }

};
jQuery(document).ready(function($){
$("#fullwidth").click(function(){$(".container").css("width:100%;");
return false;
});


$("#style-switch h2 a").click(function(e){e.preventDefault();
var div=$("#style-switch");

if(div.css("left")==="-195px"){$("#style-switch").animate({left:"0px"});
}else{$("#style-switch").animate({left:"-195px"});
}})
$(".colors li a").click(function(e){e.preventDefault();
$(this).parent().parent().find("a").removeClass("active");
$(this).addClass("active");
})});
