console.log("page loaded");

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    // console.log(element);
    element.addEventListener("click", () => {
        // console.log(element);
        let person = JSON.parse(element.dataset.person); // dataset.person viene del atributo data-person que le hemos añadido a los botones con la info del usuario
        // console.log(person);
        
        if (window.confirm(`¿Estás seguro que quieres eliminar a ${person.name}?`)) {
            fetch('/employees_delete.php', {
                method: "DELETE",
                body: JSON.stringify(person)
            })
            .then(r => r.json())
            .then(data => {
                if(data.status === "success") {
                    window.location.replace(`/employees.php?message=${encodeURIComponent(data.message)}`)
                } else {
                    alert(data.message);
                }
            })
        }
    })
})