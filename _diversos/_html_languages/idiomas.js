$(function(){
    $(newFunction()).click(function(){
        console.log("fui clicado");
        alert("Fui clicado");
        var lang = $(this).attr('id');

        $('.lang').each(function(index, element){
        $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    });
});

function newFunction() {
  return '.translate';
}
