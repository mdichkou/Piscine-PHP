
var list = [];
var myCookies = [];
$(document).ready(function(){
    if (document.cookie.indexOf('to_do=') != -1)
    {
        list = jQuery.parseJSON(document.cookie.split('=')[1]);
    var i = 0;
    while (list[i])
    {
        var todo = document.createElement('div');
        $(todo).attr('class', 'note');
        todo.innerHTML = list[i];
        $("#ft_list").prepend(todo);
        $(".note").click(delete_div);
        i++;
    }
 }
    $("#btn").click(function() {
                   var saisie = prompt("Saisissez votre texte :")
                   if (saisie != null &&  saisie.trim().length != 0)
                   {
                    var todo = document.createElement('div');
                    todo.innerHTML = saisie;
                    $(todo).attr('class', 'note');
                    saveCookies(saisie);
                    $("#ft_list").prepend(todo);
                    $(".note").click(delete_div);
                   }
               });
               function saveCookies(todocookie) {
                if (document.cookie.indexOf('to_do=') != -1)
                    myCookies= jQuery.parseJSON(document.cookie.split('=')[1]);
                myCookies.push(todocookie);
                document.cookie = 'to_do=' + JSON.stringify(myCookies);
                           }
            function delete_div() {
                                if (confirm("do you really want to delete this ?!"))
                                {
                                    myCookies = jQuery.parseJSON(document.cookie.split('=')[1]);
                                    myCookies.splice(myCookies.indexOf(this.innerHTML), 1);
                                    document.cookie = 'to_do=' + JSON.stringify(myCookies);
                                    this.parentElement.removeChild(this);
                                }
            }
            });