window.onload = () => {
    // gestion du lien supprimer
    let links = document.querySelectorAll("[data-delete]")

    for(link of links){
        //on écoute le click
        link.addEventListener("click", function(e){
            //on empêche la navigation
            e.preventDefault()

            //on envoie une requête ajax vers le href du lien avec la méthode DELETE
            fetch(this.getAttribute("href"), {
                method: "DELETE",
                headers: {
                    "x-Requested-With": "XMLHttpRequest",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({"_token": this.dataset.token})
            }).then(
                //on récupère la réponse en Json
                response => response.json()
            ).then(data => {
                if(data.success)
                    this.parentElement.remove()
                else
                    alert(data.error)
            }).catch(e => alert(e))

        })
    }
    
}