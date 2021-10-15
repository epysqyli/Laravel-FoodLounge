const deleteBtns = [...document.getElementsByClassName("post-delete")];
deleteBtns.forEach(btn => {
    btn.addEventListener("click", e => {
        const userResponse = window.confirm("Are you sure?");

        if (!userResponse) {
            e.preventDefault();
        }
    });
});