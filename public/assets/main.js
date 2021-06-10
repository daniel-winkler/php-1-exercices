console.log("page loaded");

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    // console.log(element);
    element.addEventListener("click", () => {
        console.log(element);
        let person = JSON.parse(element.dataset.person);
        console.log(person);
        
        if (window.confirm(`¿Estás seguro que quieres eliminar a ${person.name}?`)) {
            fetch('/employees_delete.php', {
                method: "DELETE",
                body: JSON.stringify(person)
            })
            .then(r => r.json())
            .then(data => {
                console.log(data);
            })
        }
    })
})