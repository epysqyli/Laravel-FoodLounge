const deleteBtns = [...document.getElementsByClassName("post-delete")];
deleteBtns.forEach(btn => {
    btn.addEventListener("click", e => {
        const userResponse = window.confirm("Sei sicuro di voler eliminare questo prodotto?");

        if (!userResponse) {
            e.preventDefault();
        }
    });
});