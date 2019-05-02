
var list = [];
var myCookies = [];
function PromptMessage() {
                   var saisie = prompt("Saisissez votre texte :")
                   if (saisie != null &&  saisie.trim().length != 0)
                   {
                    var todo = document.createElement('div');
                    todo.innerHTML = saisie;
                    todo.setAttribute('class', 'note');
                    saveCookies(saisie);
                    document.getElementById('ft_list').appendChild(todo);
                    var ltodo = document.getElementById("ft_list");
                    ltodo.insertBefore(todo, ltodo.firstChild);
                    todo.addEventListener("click", delete_div);
                   }
               }
               window.onload = function(){
                if (document.cookie.indexOf('to_do=') != -1)
                {
                    list = JSON.parse(document.cookie.split('=')[1]);
                var ltodo = document.getElementById("ft_list");
                var i = 0;
                while (list[i])
                {
                    var todo = document.createElement('div');
                    todo.innerHTML = list[i];
                    ltodo.insertBefore(todo, ltodo.firstChild);
                    todo.addEventListener("click", delete_div);
                    i++;
                }
                }
               }
function saveCookies(todocookie) {
    if (document.cookie.indexOf('to_do=') != -1)
        myCookies= JSON.parse(document.cookie.split('=')[1]);
    myCookies.push(todocookie);
    document.cookie = 'to_do=' + JSON.stringify(myCookies);
               }
function delete_div() {
                    if (confirm("do you really want to delete this ?!"))
                    {
                        myCookies = JSON.parse(document.cookie.split('=')[1]);
                        myCookies.splice(myCookies.indexOf(this.innerHTML), 1);
                        document.cookie = 'to_do=' + JSON.stringify(myCookies);
                        this.parentElement.removeChild(this);
                    }
}