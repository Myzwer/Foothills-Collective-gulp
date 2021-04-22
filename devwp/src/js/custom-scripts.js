function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

window.onload = function(){
    jQuery('.button').click(function(){
        var buttonId = jQuery(this).attr('id');
        jQuery('#modal-container').removeAttr('class').addClass(buttonId);
        jQuery('body').addClass('modal-active');
    })

    jQuery('#modal-container').click(function(){
        jQuery(this).addClass('out');
        jQuery('body').removeClass('modal-active');
    });
};

console.log("Javascript Executed");